<div class="menu">
    <a class="toggleMenu" href="#"><img src="images/nav.png" alt=" " /></a>
    <ul class="nav">
        @foreach ($categories as $categorie)
            <li class="dropdown">
                <a class="dropbtn" href="#">{{ $categorie->nom }}</a>
                <div class="dropdown-content">
                    @foreach ($categorie->sous_categories as $sous_categorie)
                        <a href="#">{{ $sous_categorie->nom }}</a>
                    @endforeach
                </div>
            </li>
        @endforeach
        <div class="clear"> </div>
    </ul>
    <script type="text/javascript" src="js/responsive-nav.min.js"></script>
</div>
