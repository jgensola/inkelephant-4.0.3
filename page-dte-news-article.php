<?php
/**
 * Template Name: DTE News Article Page Template
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('dte');

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="page-container">
            <div class="breadcrumbs">
                <?php bcn_display(); ?>
            </div>
            <div class="main-content">
                <div class="dte-sidebar">
                    <?php
                    $args = array(
                        'theme_location' => 'dte-news-article'
                    );
                    ?>
                    <?php wp_nav_menu($args); ?>
                </div>
                <article class="post page news">
<!--                    <h1>--><?php //the_title(); ?><!--</h1>-->
                    <?php the_content(); ?>
                </article>
            </div>
        </div>
    <?php endwhile;
else:
    echo '<p>No content found</p>';
endif;

get_footer('dte');

?>