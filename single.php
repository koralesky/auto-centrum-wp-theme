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
                <?php 
                        $fields = acf_get_fields('122');
                
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
        </div>
    </div>

</div>


<?php get_footer();?>