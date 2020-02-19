<?php get_header();?>

<div class="container oferta-page my-5">
    <div class="row">
        <div class="col-md-9">

            <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    <?php the_content();?>
            <?php endwhile; endif;?> 

            
            <ul class="szczegolowe-informacje-list">
                <?php 
                        $fields = acf_get_fields('140');
                
                if( $fields )
                {
                foreach( $fields as $field )
                {
                $value = get_field( $field['name'] );
                
                if(!empty($value)) {
                echo '<li>';
                echo '<dl>';
                echo '<dt>' . $field['label'] . '</dt>';
                echo '<dd>' .$value . '</dd>';
                echo '</dl>';
                echo '</li>';
                
                }
                
                }
                };
                ?>
                </ul>
                <hr class="my-4">
                <div class="car-caption mb-5">
                <?php the_field('opis');?>
                </div>
                

    
        </div>
        <div class="col-md-3">
            <ul class="podstawowe-informacje-list">
                <li class="main-name mb-3"><?php the_field('marka_pojazdu')?> <?php the_field('model_pojazdu')?></li>
                <li class="bullet-info mb-3"><?php the_field('rocznik')?> &bull; <?php the_field('rodzaj_paliwa')?> &bull; <?php the_field('przebieg')?></li>
                <li class="main-price mb-3"><span><?php the_field('cena')?></span> PLN</li>
            </ul>
            <hr class="mb-4">
            <a href="<?php echo get_home_url();?>/kontakt"><div class="btn call-btn p-3 mb-3">Kontakt w sprawie auta</div></a>
            <div class="numer-btn text-center p-2"> <i class="fas fa-phone"></i> +48 666 666 666</div>
        </div>
    </div>

</div>


<?php get_footer();?>