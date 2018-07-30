<?php
/**
 * Template Name: DTE Home Page Template
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

get_header();
get_header('dte');

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="page-container dte-home">
            <div class="main-content">
                    <?php the_content(); ?>
<!--                </article>-->
            </div>
        </div>
    <?php endwhile;
else:
    echo '<p>No content found</p>';
endif;

get_footer('dte');
get_footer();

?>