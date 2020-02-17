<?php get_header();?>


<div class="container-fluid zeropadding">
    <div class="row feature">
        <img src="<?php echo get_template_directory_uri(  ) . '/assets/cars.png'?>" alt="">
        <div class="feature-text">
            <h1><?php the_field('tekst_glowny');?>
            <br/>
            <a href="oferta.html">
                <div class="btn btn-light">Zobacz ofertę</div>
            </a></h1>
        </div>
        
    </div>
</div>





<?php get_footer();?>