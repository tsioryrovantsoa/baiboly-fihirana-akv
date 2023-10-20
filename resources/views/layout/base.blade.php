@include('include.header')

<body>
    @include('include.logo-menu')
    <div class="main-con">
        <div class="slider">
            <div class="color"> <span> </span></div>
            <div class="wrap">
                <div class="fluid_container">
                    @include('image')
                    <div class="clear"></div>
                </div>
            </div>
            <div class="blog-content">
                <div class="wrap">
                    <div class="blog-grids">
                        <div class="blog-left">
                            <h2 style="color: #e8603c;
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
                            @include('blog-right')
                        </div>
                        <div class="clear"> </div>
                    </div>
                </div>
            </div>
        </div>
        @include('include.footer')
</body>

</html>
