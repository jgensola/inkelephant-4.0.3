jQuery(document).ready(function () {
    if (jQuery('.site-header.brembo')[0]) {
        // Get IE or Edge browser version
        var version = detectIE();

        if (version === false) {
            // document.getElementById('result').innerHTML = '<s>IE/Edge</s>';
            jQuery('html').addClass('ie-edge');
        } else if (version >= 12) {
            // document.getElementById('result').innerHTML = 'Edge ' + version;
            jQuery('html').addClass('ie-edge-' + version);
        } else {
            // document.getElementById('result').innerHTML = 'IE ' + version;
            jQuery('html').addClass('ie-' + version);
        }

        //mobile sliding menu
        jQuery('.brembo .menu-toggle').on('click', function () {
            jQuery('.brembo.container').removeClass('inactive').addClass('active');
            jQuery('.site-nav').removeClass('inactive').addClass('active');
            jQuery('body').removeClass('inactive').addClass('active');
        });

        jQuery('.brembo .btn-close').on('click', function () {
            jQuery('.brembo.container').removeClass('active').addClass('inactive');
            jQuery('.site-nav').removeClass('active').addClass('inactive');
            jQuery('body').removeClass('active').addClass('inactive');
        });

        jQuery('.brembo .overlay').on('click', function () {
            jQuery('.brembo.container').removeClass('active').addClass('inactive');
            jQuery('.site-nav').removeClass('active').addClass('inactive');
            jQuery('body').removeClass('active').addClass('inactive');
        });

        if (jQuery('.brembo table .views-field-notes .icn-note')[0]) {
            jQuery('.brembo table .views-field-notes').on('click', function () {
                jQuery(this).children('div').addClass('active');
            });
        }

        jQuery('.brembo-company .owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            navElement: 'span type="span" class="button" role="presentation"'
        });

        jQuery("#applist_table").DataTable({
            "lengthChange": false,
            "info": false,
            pagingType: 'full_numbers',
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
                this.api().columns().every(function () {
                    var column = this;
                    var select_container = jQuery('<div class="select-container ' + jQuery(this.header()).html().split(" ").join("-").toLowerCase().replace('#', 'no') + '"></div>').prependTo(jQuery(".table-filter"));
                    var select = jQuery('<select><option value="" >' + jQuery(this.header()).html() + '</option></select>').appendTo(select_container);

                    jQuery('.brembo .search-submit').on('click', function () {
                        var val = jQuery.fn.dataTable.util.escapeRegex((select.val()));

                        column.search(val ? '^' + val + '$' : '', true, false).draw();

                        if (jQuery('#applist_table tbody tr td.dataTables_empty')[0]) {
                            jQuery('#applist_table thead').addClass('hide');
                        } else {
                            jQuery('#applist_table thead').removeClass('hide');
                        }
                    });

                    column.data().unique().sort().each(function (d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });

        jQuery('#applist_table').on('page.dt', function () {
            jQuery('html, body').animate({
                scrollTop: jQuery(".main-section").offset().top
            }, 1000);
        });
    }
});

jQuery(document).mouseup(function (e) {
    var container = jQuery(".brembo table .views-field-notes div");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.removeClass('active');
    }
});

/**
 * @summary     ConditionalPaging
 * @description Hide paging controls when the amount of pages is <= 1
 * @version     1.0.0
 * @file        dataTables.conditionalPaging.js
 * @author      Matthew Hasbach (https://github.com/mjhasbach)
 * @contact     hasbach.git@gmail.com
 * @copyright   Copyright 2015 Matthew Hasbach
 *
 * License      MIT - http://datatables.net/license/mit
 *
 * This feature plugin for DataTables hides paging controls when the amount
 * of pages is <= 1. The controls can either appear / disappear or fade in / out
 *
 * @example
 *    jQuery('#myTable').DataTable({
 *        conditionalPaging: true
 *    });
 *
 * @example
 *    jQuery('#myTable').DataTable({
 *        conditionalPaging: {
 *            style: 'fade',
 *            speed: 500 // optional
 *        }
 *    });
 */

(function (window, document, $) {
    jQuery(document).on('init.dt', function (e, dtSettings) {
        if (e.namespace !== 'dt') {
            return;
        }

        var options = dtSettings.oInit.conditionalPaging || $.fn.dataTable.defaults.conditionalPaging;

        if ($.isPlainObject(options) || options === true) {
            var config = $.isPlainObject(options) ? options : {},
                api = new $.fn.dataTable.Api(dtSettings),
                speed = 'slow',
                conditionalPaging = function (e) {
                    var $paging = jQuery(api.table().container()).find('div.dataTables_paginate'),
                        pages = api.page.info().pages;

                    if (e instanceof $.Event) {
                        if (pages <= 1) {
                            if (config.style === 'fade') {
                                $paging.stop().fadeTo(speed, 0);
                            }
                            else {
                                $paging.css('display', 'none');
                            }
                        }
                        else {
                            if (config.style === 'fade') {
                                $paging.stop().fadeTo(speed, 1);
                            }
                            else {
                                $paging.css('visibility', '');
                            }
                        }
                    }
                    else if (pages <= 1) {
                        if (config.style === 'fade') {
                            $paging.css('opacity', 0);
                        }
                        else {
                            $paging.css('display', 'none');
                        }
                    }
                };

            if (config.speed !== undefined) {
                speed = config.speed;
            }

            conditionalPaging();

            api.on('draw.dt', conditionalPaging);
        }
    });
})(window, document, jQuery);

/**
 * detect IE
 * returns version of IE or false, if browser is not Internet Explorer
 */
function detectIE() {
    var ua = window.navigator.userAgent;

    // Test values; Uncomment to check result …

    // IE 10
    // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';

    // IE 11
    // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';

    // Edge 12 (Spartan)
    // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';

    // Edge 13
    // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/');
    if (edge > 0) {
        // Edge (IE 12+) => return version number
        return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }

    // other browser
    return false;
}