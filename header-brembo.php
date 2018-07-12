<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="brembo-container" class="container brembo">
        <!-- site header -->
        <header class="site-header brembo">
            <a class="logo" href="<?php echo get_permalink(33489); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brembo/brembo-logo.png"></a>
            <span class="menu-toggle"><i class="material-icons">menu</i></span>
            <nav class="site-nav">
                <div class="inner-container">
                    <span class="btn-close"><i class="fa fa-close"></i></span>
                    <?php
                    $args = array(
                        'theme_location' => 'brembo-header'
                    );
                    ?>
                    <?php wp_nav_menu($args); ?>
                </div>
            </nav>
        </header>