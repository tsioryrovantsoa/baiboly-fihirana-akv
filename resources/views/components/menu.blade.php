<div class="menu">
    <a class="toggleMenu" href="#"><img src="{{ asset('images/nav.png') }}" alt=" " /></a>
    <ul class="nav">
        <li class="dropdown @if (request()->is('baiboly*')) active @endif">
            <a class="dropbtn" href="{{ route('baiboly.index') }}">Baiboly</a>
        </li>
        @foreach ($categories as $categorie)
            @php
                $categoryRoute = route('categorie.show', ['slug' => $categorie->getSlug(), $categorie]);
                $isActiveCategory = request()->is("sokajy/{$categorie->getSlug()}*");

                $isActiveSubCategory = false;
                foreach ($categorie->sous_categories as $sous_categorie) {
                    if (request()->is("fjkm-akv/{$sous_categorie->getSlug()}*")) {
                        $isActiveSubCategory = true;
                        break;
                    }
                }
            @endphp
            <li class="dropdown @if ($isActiveCategory || $isActiveSubCategory) active @endif">
                <a class="dropbtn"
                    href="{{ $categorie->afficher_dropdown ? '#' : $categoryRoute }}">{{ $categorie->nom }}</a>
                @if ($categorie->afficher_dropdown)
                    <div class="dropdown-content">
                        @foreach ($categorie->sous_categories as $sous_categorie)
                            <a href="{{ route('souscategorie.show', ['slug' => $sous_categorie->getSlug(), $sous_categorie]) }}"
                                @if ($sous_categorie->nouvel_onglet) target="_blank" @endif>{{ $sous_categorie->nom }}</a>
                        @endforeach
                    </div>
                @endif
            </li>
        @endforeach
        <div class="clear"> </div>
    </ul>
    <script type="text/javascript" src="{{ asset('js/responsive-nav.min.js') }}"></script>
</div>
