<?php 
/*
    Template Name: Right Sidebar Uslugi
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
      <div class="row my-5 justify-content-around">
        <div class="col-md-9 page-content">
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    <?php the_content();?>
            <?php endwhile; endif;?> 
        </div>
        <div class="col-md-3 bg-dark p-4 right-sidebar">
        <?php if(is_active_sidebar( 'right-sidebar' )):?>
            <ul id="sidebar">
                <?php dynamic_sidebar( 'right-sidebar' );?>
            </ul>
        <?php endif;?> 
        <h3>Nasze usługi</h3>
            <ul class="uslugi-list">
                <?php
                    wp_list_pages(array(
                        'title_li' => '',
                        'child_of' => 9
                    ));
                ?>
            </ul>
        </div>
      </div>
    </div>



<?php get_footer();?>