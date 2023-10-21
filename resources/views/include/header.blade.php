<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') - FJKM AKV</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/camera.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.mobile.customized.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.easing.1.3.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/camera.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/inpage.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {

            var filterList = {

                init: function() {

                    // MixItUp plugin
                    // http://mixitup.io
                    $('#portfoliolist').mixitup({
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap',
                        // call the hover effect
                        onMixEnd: filterList.hoverEffect()
                    });

                },

                hoverEffect: function() {

                    // Simple parallax effect
                    $('#portfoliolist .portfolio').hover(
                        function() {
                            $(this).find('.label').stop().animate({
                                bottom: 0
                            }, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({
                                top: 0
                            }, 500, 'easeOutQuad');
                        },
                        function() {
                            $(this).find('.label').stop().animate({
                                bottom: -40
                            }, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({
                                top: 0
                            }, 300, 'easeOutQuad');
                        }
                    );

                }

            };

            // Run the show!
            filterList.init();


        });
    </script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/fliplightbox.min.js') }}"></script>
    <script type="text/javascript">
        $('body').flipLightBox()
    </script>
</head>
