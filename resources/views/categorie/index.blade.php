@extends('layout.layout')

@section('title', $categorie->nom)

@section('content')
    <div class="gallery1">
        <div class="container">
            <div id="portfoliolist">
                @forelse ($categorie->sous_categories as $sous_categorie)
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <a
                                href="{{ route('souscategorie.show', ['slug' => $sous_categorie->getSlug(), $sous_categorie]) }}">
                                <img src="{{ $sous_categorie->fichierLogo() }}" alt="Image 1" />
                                <span><img src="{{ asset('images/plus.png') }}" alt="" /> </span>
                                <div class="desc">
                                    <h3>{{ $sous_categorie->acronyme ?? $sous_categorie->nom }}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div>
                        <p>Tsy misy n'inona n'inona</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

@endsection
