<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <title>@yield('title', 'Mycallup')</title>
    <meta name="author" content="Kaya Africa">
    <meta name="description"
        content="We provide a complete automation control for truck management and traffic flow in the busiest port zones in Nigeria.">
    <meta name="keywords"
        content="cargo, chain supply, company, corporate, expedition, freight, logistics, packaging, services, shipping, transport, transportation, trucking, warehousing">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/images/favicon/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/images/favicon/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/favicon/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon/favicon_io/site.webmanifest') }}">

    <link href="{{ asset('assets/css/theme-plugins.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/revolution/fonts/font-awesome/css/font-awesome.css') }}">
</head>

<body class="antialiased">

    @include('layouts.partials.header')
        <main id="body-content">
            @yield('content')
        </main>
    @include('layouts.partials.footer')

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme-plugins.min.js') }}"></script>
    <script src="{{ asset('assets/twitter/jquery.tweet.js') }}"></script>

    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.gmap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}">
    </script>

    <script src="{{ asset('assets/js/site-custom.js') }}"></script>
    <script type="text/javascript">
        var tpj = jQuery;

        var revapi1078;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1078_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1078_1");
            } else {
                revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "metis",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            //tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            style: 'hades',
                            tmp: '<span class="tp-bullet-image"></span>',
                            enable: false,
                            hide_onmobile: true,
                            hide_under: 600,
                            //style:"metis",
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [600, 600, 500, 400],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                        type: "mouse",
                    },
                    shadow: 0,
                    spinner: 'spinner2',
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993">
    </script>
</body>

</html>
