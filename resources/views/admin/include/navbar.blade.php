<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
                <img src="{{ asset('images/logo.png') }}" height="110" alt="Tabler" class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <div class="avatar bg-blue text-blue-fg" data-demo-color="">akv
                    </div>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ auth()->user()->name }}</div>
                        <div class="mt-1 small text-muted">Admin</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="dropdown-item">Déconnexion</button>
                    </form>
                </div>
            </div>
        </div>
        @php
            $route = request()
                ->route()
                ->getName();
        @endphp
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                <ul class="navbar-nav">
                    <li @class(['nav-item', 'active' => str_contains($route, 'contenu.')])>
                        <a class="nav-link" href="{{ route('admin.contenu.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-presentation" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 4l18 0" />
                                    <path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" />
                                    <path d="M12 16l0 4" />
                                    <path d="M9 20l6 0" />
                                    <path d="M8 12l3 -3l2 2l3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Contenu
                            </span>
                        </a>
                    </li>
                    <li @class(['nav-item', 'active' => str_contains($route, 'categorie.')])>
                        <a class="nav-link" href="{{ route('admin.categorie.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 4h6v6h-6z" />
                                    <path d="M14 4h6v6h-6z" />
                                    <path d="M4 14h6v6h-6z" />
                                    <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Categorie
                            </span>
                        </a>
                    </li>
                    <li @class(['nav-item', 'active' => str_contains($route, 'image.')])>
                        <a class='nav-link' href="{{ route('admin.image.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-slideshow"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 6l.01 0" />
                                    <path
                                        d="M3 3m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                                    <path d="M3 13l4 -4a3 5 0 0 1 3 0l4 4" />
                                    <path d="M13 12l2 -2a3 5 0 0 1 3 0l3 3" />
                                    <path d="M8 21l.01 0" />
                                    <path d="M12 21l.01 0" />
                                    <path d="M16 21l.01 0" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Image
                            </span>
                        </a>
                    </li>
                    <li @class([
                        'nav-item',
                        'active' => str_contains($route, 'admin.souscategorie.'),
                    ])>
                        <a class='nav-link' href="{{ route('admin.souscategorie.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 6l11 0" />
                                    <path d="M9 12l11 0" />
                                    <path d="M9 18l11 0" />
                                    <path d="M5 6l0 .01" />
                                    <path d="M5 12l0 .01" />
                                    <path d="M5 18l0 .01" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Sous Categorie
                            </span>
                        </a>
                    </li>
                    <li @class([
                        'nav-item',
                        'active' => str_contains($route, 'backup.'),
                    ])>
                        <a class='nav-link' href="{{ route('admin.backup') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-database-export" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3" />
                                    <path d="M4 6v6c0 1.657 3.582 3 8 3c1.118 0 2.183 -.086 3.15 -.241" />
                                    <path d="M20 12v-6" />
                                    <path d="M4 12v6c0 1.657 3.582 3 8 3c.157 0 .312 -.002 .466 -.005" />
                                    <path d="M16 19h6" />
                                    <path d="M19 16l3 3l-3 3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Backup
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
