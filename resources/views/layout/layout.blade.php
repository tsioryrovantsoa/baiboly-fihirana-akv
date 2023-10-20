@include('include.header')

<body>
    @include('include.logo-menu')
    <div class="top-heading">
        <div class="wrap">
            <h1>@yield('title')</h1>
        </div>
    </div>
    <div class="wrap">
        <div class="content">
            <div class="main-grid">
                <div class="grid-left">
                    @yield('content')
                </div>
                <div class="grid-right">
                    @include('blog-right')
                </div>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    </div>
    @include('include.footer')
</body>

</html>
