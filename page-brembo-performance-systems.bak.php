<?php
/**
 * Template Name: Brembo Performance System Page Template
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
                                        var performance_table;
                                        $(document).ready(function () {

                                            //var table1 = table.DataTable({
                                            //    "ajax": "<?php //echo home_url(); ?>///wp-content/themes/inkelephant-4.0.3/data/brembo-performance-systems-1.txt",
                                            //    "lengthChange": false,
                                            //    "info": false,
                                            //    pagingType: 'full_numbers',
                                            //    "columnDefs": [
                                            //        {className: "views-field-make", "targets": [0]},
                                            //        {className: "views-field-model", "targets": [1]},
                                            //        {className: "views-field-year", "targets": [2]},
                                            //        {className: "views-field-axle", "targets": [3]},
                                            //        {className: "views-field-category", "targets": [4]},
                                            //        {className: "views-field-pistons-1", "targets": [5]},
                                            //        {className: "views-field-body", "targets": [6]},
                                            //        {className: "views-field-diameter", "targets": [7]},
                                            //        {className: "views-field-thickness", "targets": [8]},
                                            //        {className: "views-field-material", "targets": [9]},
                                            //        {className: "views-field-construction", "targets": [10]},
                                            //        {className: "views-field-partdrilled", "targets": [11]},
                                            //        {className: "views-field-partslotted", "targets": [12]},
                                            //        {className: "views-field-parttype3", "targets": [13]},
                                            //        {className: "views-field-notes", "targets": [14]},
                                            //        {"defaultContent": " ", "targets": "_all"}
                                            //    ],
                                            //    language: {
                                            //        paginate: {
                                            //            first: '« first',
                                            //            previous: '‹ previous',
                                            //            next: 'next ›',
                                            //            last: 'last »'
                                            //        },
                                            //        aria: {
                                            //            paginate: {
                                            //                first: 'First',
                                            //                previous: 'Previous',
                                            //                next: 'Next',
                                            //                last: 'Last'
                                            //            }
                                            //        },
                                            //        "zeroRecords": "No Results Found"
                                            //    },
                                            //    conditionalPaging: true,
                                            //    initComplete: function () {
                                            //        if ($('.brembo table .views-field-notes .icn-note')[0]) {
                                            //            $('.brembo table .views-field-notes').on('click', function () {
                                            //                $(this).children('div').addClass('active');
                                            //            });
                                            //        }
                                            //
                                            //        this.api().columns().every(function () {
                                            //            var column = this;
                                            //            // var select = $('<select><option value="" >' + $(this.header()).html() + '</option></select>').appendTo($(".table-filter"));
                                            //            var select_container = $('<div class="select-container ' + $(this.header()).text().split(" ").join("-").toLowerCase().replace('#', 'no') + '"></div>').prependTo($(".table-filter"));
                                            //            var select = $('<select><option value="" >' + $(this.header()).html() + '</option></select>').appendTo(select_container);
                                            //
                                            //            $('.brembo .search-submit').on('click', function () {
                                            //                var val = $.fn.dataTable.util.escapeRegex((select.val()));
                                            //
                                            //                column.search(val ? '^' + val + '$' : '', true, false).draw();
                                            //
                                            //                if ($('#applist_table-performance tbody tr td.dataTables_empty')[0]) {
                                            //                    $('#applist_table-performance thead').addClass('hide');
                                            //                } else {
                                            //                    $('#applist_table-performance thead').removeClass('hide');
                                            //                }
                                            //            });
                                            //
                                            //            column.data().unique().sort().each(function (d, j) {
                                            //                select.append('<option value="' + d + '">' + d + '</option>')
                                            //            });
                                            //        });
                                            //    }
                                            //});

                                            performance_table = $('#applist_table-performance').DataTable({
                                                "ajax": "<?php echo home_url(); ?>/wp-content/themes/inkelephant-4.0.3/data/brembo-performance-systems.txt",
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
                                                    "zeroRecords": "No Results Found"
                                                },
                                                conditionalPaging: true,
                                                initComplete: function () {
                                                    if ($('.brembo table .views-field-notes .icn-note')[0]) {
                                                        $('.brembo table .views-field-notes').on('click', function () {
                                                            $(this).children('div').addClass('active');
                                                        });
                                                    }

                                                    this.api().columns().every(function () {
                                                        var column = this;
                                                        // var select = $('<select><option value="" >' + $(this.header()).html() + '</option></select>').appendTo($(".table-filter"));
                                                        // var select_container = $('<div class="select-container ' + $(this.header()).text().split(" ").join("-").toLowerCase().replace('#', 'no') + '"></div>').prependTo($(".table-filter"));
                                                        // var select = $('<select><option value="" >' + $(this.header()).html() + '</option></select>').appendTo(select_container);

                                                        $('.brembo .search-submit').on('click', function () {
                                                            var val = $.fn.dataTable.util.escapeRegex((select.val()));

                                                            column.search(val ? '^' + val + '$' : '', true, false).draw();

                                                            if ($('#applist_table-performance tbody tr td.dataTables_empty')[0]) {
                                                                $('#applist_table-performance thead').addClass('hide');
                                                            } else {
                                                                $('#applist_table-performance thead').removeClass('hide');
                                                            }
                                                        });

                                                        // column.data().unique().sort().each(function (d, j) {
                                                        //     select.append('<option value="' + d + '">' + d + '</option>')
                                                        // });
                                                    });
                                                },
                                            });

                                            yadcf.init(performance_table,
                                                [
                                                    {
                                                        column_number: 4 ,
                                                        filter_container_id: 'external_filter_container_0',
                                                        filter_default_label: "Product Category",
                                                        filter_reset_button_text: false
                                                    },
                                                    {
                                                        column_number : 2,
                                                        filter_container_id: 'external_filter_container_1',
                                                        column_data_type: "html",
                                                        html_data_type: "text",
                                                        filter_default_label: "Year",
                                                        filter_reset_button_text: false
                                                    },
                                                    {
                                                        column_number : 0,
                                                        filter_container_id: 'external_filter_container_2',
                                                        filter_default_label: "Make",
                                                        filter_reset_button_text: false
                                                    },
                                                    {
                                                        column_number : 1,
                                                        filter_container_id: 'external_filter_container_3',
                                                        filter_default_label: "Model",
                                                        filter_reset_button_text: false
                                                    }
                                                ],
                                                {
                                                    cumulative_filtering: true,
                                                    // externally_triggered: true
                                                }
                                            );

                                            $('#applist_table-performance').on('page.dt', function () {
                                                $('html, body').animate({
                                                    scrollTop: $(".main-section").offset().top
                                                }, 1000);
                                            });
                                        });
                                    </script>
                                    <?php the_content(); ?>

                                    <div class="try">
                                    </div>
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