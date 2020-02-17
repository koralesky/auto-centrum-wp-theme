<?php
/* 
    Template Name: 40 % / 60 %
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
 



    <div class="container about-us-page">
      <div class="row justify-content-around my-5">
        <div class="col-md-5">
          <img src="<?php the_field('zdjecie')?>" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 page-content my-auto">
            <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    <?php the_content();?>
            <?php endwhile; endif;?>   
        </div>

      </div>
    </div>

<?php get_footer();?>