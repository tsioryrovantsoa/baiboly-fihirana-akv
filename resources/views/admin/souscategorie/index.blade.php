@extends('admin.layout.layout')

@section('title', 'Sous Categorie')

@section('content')
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Acronyme</th>
                        <th>Categorie</th>
                        <th>Ordre</th>
                        <th>Nouvelle onglet</th>
                        <th>Afficher Acronyme</th>
                        <th>Numéro requis</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sous_categories as $sous_categorie)
                        <tr>
                            <td>
                                <div class="d-flex py-1 align-items-center">
                                    <span class="avatar me-2"
                                        style="background-image: url({{ $sous_categorie->fichierLogo() }})"></span>
                                    <div class="flex-fill">
                                        <div class="font-weight-medium">{{ $sous_categorie->nom ?? '-' }}</div>
                                    </div>
                                </div>

                            </td>
                            <td>
                                {{ $sous_categorie->acronyme ?? '-' }}
                            </td>
                            <td>
                                {{ $sous_categorie->categorie->nom ?? '-' }}
                            </td>
                            <td>
                                {{ $sous_categorie->ordre ?? '-'}}
                            </td>
                            <td>
                                {{ $sous_categorie->nouvel_onglet ?? '-'}}
                            </td>
                            <td>
                                {{ $sous_categorie->afficher_acronyme ?? '-'}}
                            </td>
                            <td>
                                {{ $sous_categorie->numero_requis ?? '-'}}
                            </td>
                            <td>
                                <small>{{ $sous_categorie->updated_at?->isoFormat('DD MMM YYYY HH:mm:ss') ?? '-' }}</small>
                            </td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if ($sous_categories->hasPages())
                <div class="mt-3 px-3"> {{ $sous_categories->links() }}</div>
            @endif
        </div>
    </div>

@endsection
