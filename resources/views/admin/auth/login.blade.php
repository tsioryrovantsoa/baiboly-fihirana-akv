@include('admin.include.header')

<body class=" d-flex flex-column bg-white">
    <script src="{{ asset('dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="{{ route('home') }}" class="navbar-brand navbar-brand-autodark"><img
                            src="{{ asset('images/logo.png') }}" height="100" alt=""></a>
                </div>
                <h2 class="h3 text-center mb-3">
                    Miarahaba
                </h2>
                <form action="#" method="get" autocomplete="off" novalidate>
                    <div class="mb-3">
                        <label class="form-label">Identifiant</label>
                        <input type="email" class="form-control" autocomplete="off">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Mot de passe
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" autocomplete="off">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Se connecter</button>
                    </div>
                </form>
                <div class="text-center text-muted mt-3">
                    <a href="{{ route('home') }}" tabindex="-1">Hiverina</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Photo -->
            <div class="bg-cover h-100 min-vh-100"
                style="background-image: url({{ asset('images/fiangonana-ivelany.jpg') }})">
            </div>
        </div>
    </div>
    @include('admin.include.footer')
