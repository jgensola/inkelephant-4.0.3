$(document).ready(function () {
    if ($('.site-header.dte')[0]) {
        // Get IE or Edge browser version
        var version = detectIE();

        $('html').addClass('dte-html');

        if (version === false) {
            // document.getElementById('result').innerHTML = '<s>IE/Edge</s>';
            $('html').addClass('ie-edge');
        } else if (version >= 12) {
            // document.getElementById('result').innerHTML = 'Edge ' + version;
            $('html').addClass('ie-edge-' + version);
        } else {
            // document.getElementById('result').innerHTML = 'IE ' + version;
            $('html').addClass('ie-' + version);
        }

        $('.dte .menu-toggle').on('click', function () {
            if (!$(this).hasClass('active')) {
                $('#menu-dte-header-menu').removeClass('inactive').addClass('active');
                $(this).removeClass('inactive').addClass('active');
            } else {
                $('#menu-dte-header-menu').removeClass('active').addClass('inactive');
                $(this).removeClass('active').addClass('inactive');
            }
        });

        $('.dte .menu-item-has-children').on('click', function () {
            if (!$(this).hasClass('active')) {
                $(this).children('.sub-menu').removeClass('inactive').addClass('active');
                $(this).removeClass('inactive').addClass('active');
            } else {
                $(this).children('.sub-menu').removeClass('active').addClass('inactive');
                $(this).removeClass('active').addClass('inactive');
            }
        });

        $('.dte-catalog .power-control-options a').on('click', function () {
            if ($(this).hasClass('power-control')) {
                $('.dte-catalog .power-control').removeClass('inactive').addClass('active');
                $('.dte-catalog .power-control-x').removeClass('active').addClass('inactive');
            } else {
                $('.dte-catalog .power-control-x').removeClass('inactive').addClass('active');
                $('.dte-catalog .power-control').removeClass('active').addClass('inactive');
            }
        });

        $('.dte-home .owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            nav: false,
            dots: true
        });

        $('.product-switcher.owl-carousel').owlCarousel({
            items: 1,
            nav: true,
            loop: false,
            URLhashListener: true,
            startPosition: 3,
            touchDrag: false,
            mouseDrag: false
        });

        $('.dte-catalog .product-switcher .owl-nav button').on('click', function () {
            if ($('.owl-item.active .power-control')[0]) {
                $('.dte-catalog .power-control').removeClass('inactive').addClass('active');
                $('.dte-catalog .power-control-x').removeClass('active').addClass('inactive');
            } else {
                $('.dte-catalog .power-control-x').removeClass('inactive').addClass('active');
                $('.dte-catalog .power-control').removeClass('active').addClass('inactive');
            }
        });

        $('.dte-catalog .tab').on('click', function () {
            if (!$(this).hasClass('active')) {
                if ($('.tab.active')[0]) {
                    $('.tab.active').removeClass('active');
                    $('.tab-container.active').removeClass('active');
                }

                if ($(this).hasClass('first')) {
                    $('.tab.first').addClass('active');
                    $('.tab-container.first').addClass('active');
                } else if ($(this).hasClass('second')) {
                    $('.tab.second').addClass('active');
                    $('.tab-container.second').addClass('active');
                } else if ($(this).hasClass('third')) {
                    $('.tab.third').addClass('active');
                    $('.tab-container.third').addClass('active');
                } else if ($(this).hasClass('fourth')) {
                    $('.tab.fourth').addClass('active');
                    $('.tab-container.fourth').addClass('active');
                }
            } else {
                if (!$(this).is('li')) {
                    $('.tab.active').removeClass('active');
                    $('.tab-container.active').removeClass('active');
                }
            }
        });

        $('.dte-catalog .popup-trigger').on('click', function () {
            $(this).addClass('pop-up-active');
            $('body').addClass('pop-up-active');
            $('.pop-up > div').css('max-height', '528px').css('max-width', $(window).width() - 40);

            if ($(this).hasClass('performance-hints')) {
                $('.pop-up .performance-hints').addClass('pop-up-active');
            } else if ($(this).hasClass('multi-map')) {
                $('.pop-up .multi-map').addClass('pop-up-active');
            } else if ($(this).hasClass('app-control')) {
                $('.pop-up .app-control').addClass('pop-up-active');
            } else if ($(this).hasClass('sport-instruments')) {
                $('.pop-up .sport-instruments').addClass('pop-up-active');
            } else if ($(this).hasClass('reprogramming')) {
                $('.pop-up .reprogramming').addClass('pop-up-active');
            } else if ($(this).hasClass('driving-programs')) {
                $('.pop-up .driving-programs').addClass('pop-up-active');
            } else if ($(this).hasClass('efficiency-mode')) {
                $('.pop-up .efficiency-mode').addClass('pop-up-active');
            } else if ($(this).hasClass('parts-approval')) {
                $('.pop-up .parts-approval').addClass('pop-up-active');
            } else if ($(this).hasClass('warranty')) {
                $('.pop-up .warranty').addClass('pop-up-active');
            } else if ($(this).hasClass('results')) {
                $('.pop-up .results').addClass('pop-up-active');
            } else if ($(this).hasClass('quality')) {
                $('.pop-up .quality').addClass('pop-up-active');
            } else if ($(this).hasClass('installation')) {
                $('.pop-up .installation').addClass('pop-up-active');
            } else if ($(this).hasClass('consumption')) {
                $('.pop-up .consumption').addClass('pop-up-active');
            }

            $('html').css('overflow','hidden');
        });

        $('.dte-catalog .overlay').on('click', function () {
            closePopup();
        });

        $('.dte-catalog .close-button').on('click', function () {
            closePopup();
        });

        $('.dte-catalog .tab-content .content-wrapper').hide();

        if ($('.dte-catalog .tab-content .faqs').length) {
            addAccordion('.tab-content .faqs');
        }

        if ($('.dte-catalog .technologies').length) {
            addAccordion('.technologies');
        }

        $('.dte-catalog .product-images.power-control').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            callbacks: {
                open: function() {
                    $('html').css('overflow','hidden');
                },
                close: function() {
                    $('html').css('overflow','auto');
                }
            }
        });

        $('.dte-catalog .product-images.power-control-x').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            callbacks: {
                open: function() {
                    $('html').css('overflow','hidden');
                },
                close: function() {
                    $('html').css('overflow','auto');
                }
            }
        });

        $('.dte-catalog .product-images.power-control-rx').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            callbacks: {
                open: function() {
                    $('html').css('overflow','hidden');
                },
                close: function() {
                    $('html').css('overflow','auto');
                }
            }
        });
    }
});

function addAccordion(baseSelector) {
    $(baseSelector + ' .block-wrapper:first-of-type .block').addClass('active');
    $(baseSelector + ' .block-wrapper:first-of-type .content-wrapper').show();
    $(baseSelector + ' .block-title').click(function () {
        if (!$(this).parent().is($(baseSelector + ' .block.active'))) {
            $(baseSelector + ' .block.active .content-wrapper').slideToggle();
            $(baseSelector + ' .block.active').removeClass('active');
        }
        $(this).parent().toggleClass('active');
        $(this).parent().children('.content-wrapper').slideToggle();
    });
}

function closePopup() {
    $('.pop-up-active').removeClass('pop-up-active');
    $('body > .container').css('max-height', 'none');

    $('html').css('overflow','auto');
}

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