@extends('layout.layout')

@section('title', $search)

@section('content')
    <p>
        @forelse ($contenus as $contenu)
            <a href="{{ $contenu->fichierURL() }}" target="_self"
                style="color: #000;font-family: Helvetica,sans-serif;padding:none;">
                @if ($contenu->sous_categorie->afficher_acronyme)
                    {{ $contenu->sous_categorie->acronyme }}
                @endif
                @if ($contenu->sous_categorie->numero_requis)
                    {{ $contenu->numero }} -
                @endif
                {{ $contenu->titre }}
            </a><br />
        @empty
            <a>Tsy misy n'inona n'inona.</a>
        @endforelse
    </p>

@endsection
