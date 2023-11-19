@extends('admin.layout.layout')

@section('content')

    <div class="card">
        @include('admin.contenu.form',['contenu' => $contenu])
    </div>

@endsection
