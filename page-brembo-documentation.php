<?php
/**
 * Template Name: Brembo Documentation Page Template
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
                <article class="post page default documentation">
                    <div class="title-container">
                        <h2 class="page-title"><?php the_title(); ?></h2>
                    </div>
                    <div class="content-container">
                        <div class="main-section">
                            <div class="row">
                                <?php $mypages = get_pages(array('child_of' => $post->ID, 'sort_column' => 'post_title', 'sort_order' => 'asc'));
                                foreach ($mypages as $page) {
                                    $content = $page->post_content; ?>
                                    <div class="inner-container">
                                        <h2><a href="<?php echo get_page_link($page->ID); ?>" title="<?php echo $page->post_title; ?>"><?php echo $page->post_title; ?></a></h2>
                                        <div class="content"><?php echo get_post_meta($page->ID, 'Description', TRUE); ?></div>
                                        <p class="has-button"><a href="<?php echo get_page_link($page->ID); ?>" class="product-button">Read More</a></p>
                                    </div>
                                <?php } ?>
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