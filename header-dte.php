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
            <div class="header-wrapper">
            <a class="logo" href="<?php echo get_permalink(33216); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dte/dte-logo.png"></a>
            <a class="menu-toggle" href="#">
                <span class="label">Menu</span>
            </a>
            <nav class="site-nav">
                <?php
                $args = array(
                    'theme_location' => 'dte-header'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </nav>
        </header>