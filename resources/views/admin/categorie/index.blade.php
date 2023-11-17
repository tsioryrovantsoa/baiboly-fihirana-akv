@extends('admin.layout.layout')

@section('title', 'Categorie')

@section('content')
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table table-striped">
                <thead>
                    <tr>
                        <th>Ordre</th>
                        <th>Nom</th>
                        <th>Afficher Dropdown</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                        <tr>
                            <td>
                                {{ $categorie->ordre ?? '-' }}
                            </td>
                            <td>
                                {{ $categorie->nom ?? '-' }}
                            </td>
                            <td>
                                {{ $categorie->afficher_dropdown }}
                            </td>
                            <td>
                                <small>{{ $categorie->updated_at?->isoFormat('DD MMM YYYY HH:mm:ss') ?? '-' }}</small>
                            </td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if ($categories->hasPages())
                <div class="mt-3 px-3"> {{ $categories->links() }}</div>
            @endif
        </div>
    </div>

@endsection
