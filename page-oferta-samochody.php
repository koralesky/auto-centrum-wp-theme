<?php
/*
    Template Name: Oferta Samochody
*/
get_header();?>


<?php if(has_post_thumbnail( )):?>
            <div class="conainer-fluid">
                <div class="row feature">
                    <img src="<?php the_post_thumbnail_url();?>" class="front-img">
                    <div class="overlay"></div>
                    <div class="feature-text">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>
<?php endif;?>

<div class="container oferta-page my-5">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="row">
          <div class="col-md-3 sidebar-oferta">
              <div class="sidebar-oferta-container">
                <div class="col-md-12 stripe-red-skew">
                  <div class="text">Oferta</div>
                </div>
                <div class="col-md-12 marki-filter py-3 mb-4">
                  <ul class="marki-list">
                    <a href="<?php echo get_home_url(  )?>/oferta/microcary"><li>Microcary</li></a>
                    <a href="<?php echo get_home_url(  )?>/oferta/samochody"><li>Samochody</li></a>
                    
                    
                  </ul>
                </div>
              </div>

            </div> 
            <div class="col-md-9 main-section-oferta">


            <!-- <?php $catquery = new WP_Query( 'cat=4&posts_per_page=5' ); ?>
              <ul>
              
              <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
              
              <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
              <?php endwhile;
                  wp_reset_postdata();
            ?> -->


<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
  'post_type'			=> 'post',
  'cat' => 4
));

if( $posts ): ?>
	
	<ul>
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
		<li>

      <a class="car-link" href="<?php the_permalink(); ?>">
                <div class="row car-card mb-4">
                  <div class="col-xs-12 col-sm-3 car-img zeropadding">
                    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-xs-12 col-sm-9 content">
                    <div class="row justify-content-between pt-3">
                      <div class="col-4 car-name">
                        <h5><?php the_title(); ?></h5>
                      </div>
                      <div class="col-4 car-price text-right">
                        <p><?php the_field('cena')?> PLN</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 przebieg mb-2"><?php the_field('przebieg');?> - <?php the_field('rodzaj_paliwa')?></div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <p><?php echo mb_strimwidth(get_field('opis'), 0, 300, "...")?></p>
                      </div>

                    </div>
                  </div>
                </div>
              </a>
    </li>
    
    
	
	<?php endforeach; ?>
	
	</ul>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>

              
            </div>
          </div>
        </div>
      </div>
    </div>



<?php get_footer();?>