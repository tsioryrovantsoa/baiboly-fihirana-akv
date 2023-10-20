<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') - FJKM AKV</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/camera.min.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery.min.js"></script>
    <script type='text/javascript' src="js/jquery.mobile.customized.min.js"></script>
    <script type='text/javascript' src="js/jquery.easing.1.3.min.js"></script>
    <script type='text/javascript' src="js/camera.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/inpage.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="ffpm.html">
                    <h1>FJKM<span>AKV</span></h1>
                </a>
            </div>
            @include('menu')
            <div class="clear"> </div>
        </div>
    </div>
    <div class="main-con">
        <div class="slider">
            <div class="color"> <span> </span></div>
            <div class="wrap">
                <div class="fluid_container">
                    @include('image')
                </div><!-- .fluid_container -->
                <div class="clear"></div>
            </div>
        </div>

        <div class="blog-content">
            <div class="wrap">
                <div class="blog-grids">
                    <div class="blog-left">
                        <h2 style="    color: #e8603c;
						font-size: 30px;">@yield('title')</h2>
                        <br>
                        <div class="from_blog">
                            @yield('content')
                            <div class="fix single_blogpost_container">
                                <div class="fix single_blog_post floatleft">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-right">
                        <div class="side-bar">
                            <div class="grid-right-headings">
                                <h2><a href="#">FIMPIZ </a></h2>
                                <p>Fikambanan'ny Mpitendry Zava-maneno Andavamamba Kristy Velona</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"> </div>

                </div>
            </div>
        </div>


        <!--End-gallery-->
        <!--start footer-->
        <div class="footer">
            <div class="footer-main wrap">
                <div class="footer-grids">
                    <div class="fgrid">
                        <h3>about jetro</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua,Ut enim ad minim veniam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                    <div class="fgrid">
                        <h3>twitter widget</h3>
                        <div>
                            <p><a href="#">@Lorem ipsum</a> What an awesome design with great functioality:)</p>
                            <a href="#">about 1 hour ago</a>
                        </div>
                        <div>
                            <p><a href="#">@Lorem ipsum</a> What an awesome design with great functioality:)</p>
                            <a href="#">about 2 hour ago</a>
                        </div>
                        <div>
                            <p>Follow <a href="#">@Lorem ipsum</a></p>
                        </div>
                    </div>
                    <div class="fgrid">
                        <h3>contact us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua,Ut enim ad minim veniam.</p>
                        <a href="#">
                            <p>information@jetro.com</p>
                        </a>
                        <h4>1,22,333,4444</h4>
                        <div class="social-media">
                            <ul>
                                <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a
                                            href="#" target="_blank"> </a></span></li>
                                <li><span class="simptip-position-bottom simptip-movable" data-tooltip="twitter"><a
                                            href="#" target="_blank"> </a> </span></li>
                                <li><span class="simptip-position-bottom simptip-movable" data-tooltip="email"><a
                                            href="#" target="_blank"> </a></span></li>
                                <li><span class="simptip-position-bottom simptip-movable" data-tooltip="rss"><a
                                            href="#" target="_blank"> </a></span></li>
                                <li><span class="simptip-position-bottom simptip-movable" data-tooltip="vimeo"><a
                                            href="#" target="_blank"> </a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="wrap">
            <div class="copy-right-left">
                <p>Copyright
                    <script>
                        document.write(new Date().getFullYear());
                    </script> - <a href="#">FIMPIZ AKV</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
