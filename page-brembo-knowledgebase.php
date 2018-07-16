<?php
/**
 * Template Name: Brembo Knowledgebase Page Template
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
get_header('brembo');

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="page-container brembo-company">
            <div class="overlay"></div>
            <div class="main-content">
                <article class="post page default knowledgebase">
                    <div class="title-container">
                        <h2 class="page-title"><?php the_title(); ?></h2>
                    </div>
                    <div class="content-container">
<!--                        --><?php //the_content(); ?>
                        <div class="main-section">
                            <div class="inner-container">
                                <div class="column">
                                    <img alt="Documentation" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brembo/icn-documentation.png">
                                    <h2><a href="<?php echo get_permalink(33545); ?>" title="Documentation">Documentation</a></h2>
                                    <span>4 Results</span>
                                    <?php
                                    $args = array(
                                        'theme_location' => 'brembo-documentation'
                                    );
                                    ?>
                                    <?php wp_nav_menu($args); ?>
                                    <a href="<?php echo get_permalink(33545); ?>" title="Documentation">Browse All 4 Documentation Entries</a>
                                </div>
                                <div class="column">
                                    <img alt="Glossary" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brembo/icn-glossary.png">
                                    <h2><a href="<?php echo get_permalink(33547); ?>" title="Glossary">Glossary</a></h2>
                                    <span>Top 10 Results</span>
                                    <?php
                                    $args = array(
                                        'theme_location' => 'brembo-glossary'
                                    );
                                    ?>
                                    <?php wp_nav_menu($args); ?>
                                    <a href="<?php echo get_permalink(33547); ?>" title="Glossary">Browse All 17 Glossary Entries</a>
                                </div>
                                <div class="column">
                                    <img alt="FAQ" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brembo/icn-faq.png">
                                    <h2><a href="<?php echo get_permalink(33549); ?>" title="FAQ">FAQ</a></h2>
                                    <span>Top 10 Results</span>
                                    <?php
                                    $args = array(
                                        'theme_location' => 'brembo-faq'
                                    );
                                    ?>
                                    <?php wp_nav_menu($args); ?>
                                    <a href="<?php echo get_permalink(33549); ?>" title="FAQ">Browse All 24 FAQ Entries</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    <?php endwhile;
else:
    echo '<p>No content found</p>';
endif;

get_footer('brembo');
get_footer();

?>