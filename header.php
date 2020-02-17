<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title();?>
    </title>
    <?php wp_head();?>
</head>
<body class="d-flex flex-column" <?php body_class();?>>

    <nav class="navbar top-nav navbar-expand-lg navbar-light py-0"> <a class="navbar-brand" href="<?php echo get_home_url();?>"><img
            src="<?php echo get_template_directory_uri() . '/assets/auto-centrum.png';?>" class="logo-img" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> <span
            class="navbar-toggler-icon"></span> </button>

<?php 
                wp_nav_menu(array(
                    'menu' => 'top-menu',
                    'theme_location' => 'top-menu',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarNavAltMarkup',
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
            ?>

    </nav>

<main>