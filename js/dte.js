jQuery(document).ready(function () {
    if (jQuery('.site-header.dte')[0]) {
        // Get IE or Edge browser version
        var version = detectIE();

        jQuery('html').addClass('dte-html');

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

        jQuery('.dte .menu-toggle').on('click', function () {
            if (!jQuery(this).hasClass('active')) {
                jQuery('#menu-dte-header-menu').removeClass('inactive').addClass('active');
                jQuery(this).removeClass('inactive').addClass('active');
            } else {
                jQuery('#menu-dte-header-menu').removeClass('active').addClass('inactive');
                jQuery(this).removeClass('active').addClass('inactive');
            }
        });

        jQuery('.dte .menu-item-has-children').on('click', function () {
            if (!jQuery(this).hasClass('active')) {
                jQuery(this).children('.sub-menu').removeClass('inactive').addClass('active');
                jQuery(this).removeClass('inactive').addClass('active');
            } else {
                jQuery(this).children('.sub-menu').removeClass('active').addClass('inactive');
                jQuery(this).removeClass('active').addClass('inactive');
            }
        });

        jQuery('.dte-catalog .power-control-options a').on('click', function () {
            if (jQuery(this).hasClass('power-control')) {
                jQuery('.dte-catalog .power-control').removeClass('inactive').addClass('active');
                jQuery('.dte-catalog .power-control-x').removeClass('active').addClass('inactive');
            } else {
                jQuery('.dte-catalog .power-control-x').removeClass('inactive').addClass('active');
                jQuery('.dte-catalog .power-control').removeClass('active').addClass('inactive');
            }
        });

        jQuery('.dte-home .owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            nav: false,
            dots: true
        });

        jQuery('.product-switcher.owl-carousel').owlCarousel({
            items: 1,
            nav: true,
            loop: false,
            URLhashListener: true,
            startPosition: 3,
            touchDrag: false,
            mouseDrag: false
        });

        jQuery('.dte-catalog .product-switcher .owl-nav button').on('click', function () {
            if (jQuery('.owl-item.active .power-control')[0]) {
                jQuery('.dte-catalog .power-control').removeClass('inactive').addClass('active');
                jQuery('.dte-catalog .power-control-x').removeClass('active').addClass('inactive');
            } else {
                jQuery('.dte-catalog .power-control-x').removeClass('inactive').addClass('active');
                jQuery('.dte-catalog .power-control').removeClass('active').addClass('inactive');
            }
        });

        jQuery('.dte-catalog .tab').on('click', function () {
            if (!jQuery(this).hasClass('active')) {
                if (jQuery('.tab.active')[0]) {
                    jQuery('.tab.active').removeClass('active');
                    jQuery('.tab-container.active').removeClass('active');
                }

                if (jQuery(this).hasClass('first')) {
                    jQuery('.tab.first').addClass('active');
                    jQuery('.tab-container.first').addClass('active');
                } else if (jQuery(this).hasClass('second')) {
                    jQuery('.tab.second').addClass('active');
                    jQuery('.tab-container.second').addClass('active');
                } else if (jQuery(this).hasClass('third')) {
                    jQuery('.tab.third').addClass('active');
                    jQuery('.tab-container.third').addClass('active');
                } else if (jQuery(this).hasClass('fourth')) {
                    jQuery('.tab.fourth').addClass('active');
                    jQuery('.tab-container.fourth').addClass('active');
                }
            } else {
                if (!jQuery(this).is('li')) {
                    jQuery('.tab.active').removeClass('active');
                    jQuery('.tab-container.active').removeClass('active');
                }
            }
        });

        jQuery('.dte-catalog .popup-trigger').on('click', function () {
            jQuery(this).addClass('pop-up-active');
            jQuery('body').addClass('pop-up-active');
            jQuery('.pop-up > div').css('max-height', '528px').css('max-width', jQuery(window).width() - 40);

            if (jQuery(this).hasClass('performance-hints')) {
                jQuery('.pop-up .performance-hints').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('multi-map')) {
                jQuery('.pop-up .multi-map').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('app-control')) {
                jQuery('.pop-up .app-control').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('sport-instruments')) {
                jQuery('.pop-up .sport-instruments').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('reprogramming')) {
                jQuery('.pop-up .reprogramming').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('driving-programs')) {
                jQuery('.pop-up .driving-programs').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('efficiency-mode')) {
                jQuery('.pop-up .efficiency-mode').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('parts-approval')) {
                jQuery('.pop-up .parts-approval').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('warranty')) {
                jQuery('.pop-up .warranty').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('results')) {
                jQuery('.pop-up .results').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('quality')) {
                jQuery('.pop-up .quality').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('installation')) {
                jQuery('.pop-up .installation').addClass('pop-up-active');
            } else if (jQuery(this).hasClass('consumption')) {
                jQuery('.pop-up .consumption').addClass('pop-up-active');
            }

            jQuery('html').css('overflow','hidden');
        });

        jQuery('.dte-catalog .overlay').on('click', function () {
            closePopup();
        });

        jQuery('.dte-catalog .close-button').on('click', function () {
            closePopup();
        });

        jQuery('.dte-catalog .tab-content .content-wrapper').hide();

        if (jQuery('.dte-catalog .tab-content .faqs').length) {
            addAccordion('.tab-content .faqs');
        }

        if (jQuery('.dte-catalog .technologies').length) {
            addAccordion('.technologies');
        }

        jQuery('.dte-catalog .product-images.power-control').magnificPopup({
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
                    jQuery('html').css('overflow','hidden');
                },
                close: function() {
                    jQuery('html').css('overflow','auto');
                }
            }
        });

        jQuery('.dte-catalog .product-images.power-control-x').magnificPopup({
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
                    jQuery('html').css('overflow','hidden');
                },
                close: function() {
                    jQuery('html').css('overflow','auto');
                }
            }
        });

        jQuery('.dte-catalog .product-images.power-control-rx').magnificPopup({
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
                    jQuery('html').css('overflow','hidden');
                },
                close: function() {
                    jQuery('html').css('overflow','auto');
                }
            }
        });
    }
});

function addAccordion(baseSelector) {
    jQuery(baseSelector + ' .block-wrapper:first-of-type .block').addClass('active');
    jQuery(baseSelector + ' .block-wrapper:first-of-type .content-wrapper').show();
    jQuery(baseSelector + ' .block-title').click(function () {
        if (!jQuery(this).parent().is(jQuery(baseSelector + ' .block.active'))) {
            jQuery(baseSelector + ' .block.active .content-wrapper').slideToggle();
            jQuery(baseSelector + ' .block.active').removeClass('active');
        }
        jQuery(this).parent().toggleClass('active');
        jQuery(this).parent().children('.content-wrapper').slideToggle();
    });
}

function closePopup() {
    jQuery('.pop-up-active').removeClass('pop-up-active');
    jQuery('body > .container').css('max-height', 'none');

    jQuery('html').css('overflow','auto');
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