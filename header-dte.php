<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <!-- site header -->
        <header class="site-header dte">
            <a class="logo" href="<?php echo get_page_uri(7); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dte/dte-logo.png"></a>
            <nav class="site-nav">
                <?php
                $args = array(
                    'theme_location' => 'dte-header'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </nav>
        </header>