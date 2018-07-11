<?php
/**
 * Template Name: DTE News Page Template
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
        <div class="page-container">
            <div class="breadcrumbs">
                <?php bcn_display(); ?>
            </div>
            <div class="main-content">
                <div class="dte-sidebar">
                    <?php
                    $args = array(
                        'theme_location' => 'dte-company'
                    );
                    ?>
                    <?php wp_nav_menu($args); ?>
                </div>
                <article class="post page">
                    <?php the_content(); ?>
                    <div class="news-articles">
                        <?php $mypages = get_pages(array('child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc'));
                        foreach ($mypages as $page) {
                            $content = $page->post_content; ?>
                            <a href="<?php echo get_page_link($page->ID); ?>" title="<?php echo $page->post_title; ?>">
                                <div class="image-container">
                                    <?php echo get_the_post_thumbnail($page->ID); ?>
                                </div>
                                <p><?php echo get_post_meta($page->ID, 'Description', TRUE); ?></p>
                            </a>
                        <?php } ?>
                    </div>
                </article>
            </div>
        </div>
    <?php endwhile;
else:
    echo '<p>No content found</p>';
endif;

get_footer('dte');
get_footer();

?>