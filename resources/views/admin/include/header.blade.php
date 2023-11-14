<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') - FJKM AKV</title>
    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/demo.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('css/inter.css') }}" rel="stylesheet" />
    <style>
        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="{{ asset('dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page">
        @include('admin.include.navbar')
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
