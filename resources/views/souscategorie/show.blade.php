@extends('layout.layout')

@section('title', $souscategorie->nom)

@section('content')
    <p>
        @forelse ($contenus as $contenu)
            <a href="{{ $contenu->fichierURL() }}" target="_self"
                style="color: #000;font-family: Helvetica,sans-serif;padding:none;">
                @if ($souscategorie->afficher_acronyme)
                    {{ $souscategorie->acronyme }}
                @endif
                @if ($souscategorie->numero_requis)
                    {{ $contenu->numero }} -
                @endif
                {{ $contenu->titre }}
            </a><br />
        @empty
            <a>Tsy misy n'inona n'inona.</a>
        @endforelse
    </p>
    {{ $contenus->links('pagination.pagination') }}
@endsection
