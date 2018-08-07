<?php
/**
 * Template Name: Brembo Race System Page Template
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
                <article class="post page default application-list">
                    <div class="title-container">
                        <h2 class="page-title"><?php the_title(); ?></h2>
                    </div>
                    <div class="content-container">
                        <div class="main-section">
                            <div class="inner-container">
                                <div class="row">
                                    <script>
                                        var race_table;
                                        $(document).ready(function () {
                                            race_table = $('#applist_table-race').DataTable({
                                                "ajax": "<?php echo home_url(); ?>/wp-content/themes/inkelephant-4.0.3/data/brembo-race-systems.txt",
                                                pagingType: 'full_numbers',
                                                "lengthChange": false,
                                                "info": false,
                                                "columnDefs": [
                                                    {className: "views-field-make", "targets": [0]},
                                                    {className: "views-field-model", "targets": [1]},
                                                    {className: "views-field-year", "targets": [2]},
                                                    {className: "views-field-axle", "targets": [3]},
                                                    {className: "views-field-category", "targets": [4]},
                                                    {className: "views-field-pistons-1", "targets": [5]},
                                                    {className: "views-field-body", "targets": [6]},
                                                    {className: "views-field-diameter", "targets": [7]},
                                                    {className: "views-field-thickness", "targets": [8]},
                                                    {className: "views-field-material", "targets": [9]},
                                                    {className: "views-field-construction", "targets": [10]},
                                                    {className: "views-field-partdrilled", "targets": [11]},
                                                    {className: "views-field-partslotted", "targets": [12]},
                                                    {className: "views-field-parttype3", "targets": [13]},
                                                    {className: "views-field-notes", "targets": [14]},
                                                    {"defaultContent": " ", "targets": "_all"}
                                                ],
                                                language: {
                                                    paginate: {
                                                        first: '« first',
                                                        previous: '‹ previous',
                                                        next: 'next ›',
                                                        last: 'last »'
                                                    },
                                                    aria: {
                                                        paginate: {
                                                            first: 'First',
                                                            previous: 'Previous',
                                                            next: 'Next',
                                                            last: 'Last'
                                                        }
                                                    },
                                                    "zeroRecords": "Loading Data..."
                                                },
                                                conditionalPaging: true,
                                                initComplete: function () {
                                                    if ($('.brembo table .views-field-notes .icn-note')[0]) {
                                                        $('.brembo table .views-field-notes').on('click', function () {
                                                            $(this).children('div').addClass('active');
                                                        });
                                                    }
                                                    refreshTable();
                                                },
                                                "fnDrawCallback": function( oSettings ) {
                                                    $('.brembo .paginate_button').on('click', function () {
                                                        refreshTable();
                                                    });
                                                }
                                            });

                                            yadcf.init(race_table,
                                                [
                                                    {
                                                        column_number : 2,
                                                        filter_container_id: 'external_filter_container_0',
                                                        column_data_type: "html",
                                                        html_data_type: "text",
                                                        filter_default_label: "Year",
                                                        filter_reset_button_text: false
                                                    },
                                                    {
                                                        column_number : 0,
                                                        filter_container_id: 'external_filter_container_1',
                                                        filter_default_label: "Make",
                                                        filter_reset_button_text: false
                                                    },
                                                    {
                                                        column_number : 1,
                                                        filter_container_id: 'external_filter_container_2',
                                                        filter_default_label: "Model",
                                                        filter_reset_button_text: false
                                                    }
                                                ],
                                                {
                                                    cumulative_filtering: true
                                                }
                                            );

                                            $('#applist_table-race').on('page.dt', function () {
                                                $('html, body').animate({
                                                    scrollTop: $(".main-section").offset().top
                                                }, 1000);
                                            });

                                            $('.brembo .search-submit').on('click', function () {
                                                refreshTable();
                                            });

                                            $('.dataTables_wrapper table th').on('click', function () {
                                                refreshTable();
                                            });
                                        });

                                        function refreshTable() {
                                            $('.dataTables_wrapper table tbody.clone').remove();

                                            $('.dataTables_wrapper table tbody').addClass('original').addClass('hidden');
                                            $('.dataTables_wrapper table tbody').clone().prependTo('.inner-container > .row .dataTables_wrapper table').addClass('clone').removeClass('original').removeClass('hidden');
                                        }
                                    </script>
                                    <?php the_content(); ?>
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