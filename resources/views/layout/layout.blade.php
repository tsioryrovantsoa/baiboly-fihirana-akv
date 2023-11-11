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
                @if (session()->has('success'))
                    <div class="message alert style-1 rounded" style="margin-top: 7px;padding: 12px 38px 14px 18px;">
                        {{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="success alert style-1 rounded" style="margin-top: 7px;padding: 12px 38px 14px 18px;">
                        @foreach ($errors->all() as $error)
                            {{ $error }}.<br>
                        @endforeach
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="success alert style-1 rounded" style="margin-top: 7px;padding: 12px 38px 14px 18px;">
                        {{ session('error') }}</div>
                @endif
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
