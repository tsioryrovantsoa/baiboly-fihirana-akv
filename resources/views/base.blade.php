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
        @include('image')
        <div class="blog-content">
            <div class="wrap">
                <div class="blog-grids">
                    <div class="blog-left">
                        <h2 style="    color: #e8603c;
						font-size: 30px;">@yield('title')</h2>
                        <br>
                        <div class="from_blog">
                            @yield('content')
                        </div>
                    </div>
                    @include('blog-right')
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
