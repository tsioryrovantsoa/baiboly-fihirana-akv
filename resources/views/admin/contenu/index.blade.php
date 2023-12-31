@extends('admin.layout.layout')

@section('title', 'Contenu')

@section('content')
    <form class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="sous_categorie" class="form-label">Sous Categorie :</label>
                        <select name="sous_categorie" id="sous_categorie" class="form-select">
                            <option value="" class="text-secondary"
                                {{ request('sous_categorie') === '' ? 'selected' : '' }}>
                                -- Sélectionnez --</option>
                            @foreach ($souscategories as $souscategorie)
                                <option value="{{ $souscategorie->id }}" class="text-secondary" @selected(request('sous_categorie') == $souscategorie->id)>{{ $souscategorie->nom }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="search" class="form-label">Titre ou Numero ou Fichier :</label>
                        <input type="text" name="search" id="" value="{{ $search ?? '' }}"
                            placeholder="Titre ou Numero ou Fichier" class="form-control">
                    </div>
                </div>

                <div class="col-5 align-self-end">
                    <button class="btn btn-primary">Filtrer</button>
                    <a href="{{ route('admin.contenu.index') }}" class="btn btn-secondary">Reinitialiser</a>
                    <a href="{{ route('admin.contenu.create') }}" class="btn btn-success"><svg
                            xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 5l0 14"></path>
                            <path d="M5 12l14 0"></path>
                        </svg>
                        Nouveau Contenu</a>
                </div>
            </div>
        </div>
    </form>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table table-striped">
                <thead>
                    <tr>

                        @php
                            $nonSortableColumns = ['sous_categorie'];
                        @endphp

                        @foreach (['sous_categorie' => 'Sous Categorie', 'titre' => 'Numero - Titre', 'fichier' => 'Fichier', 'fichier_date' => 'Date fichier', 'fichier_taille' => 'Taille', 'updated_at' => 'Date'] as $key => $label)
                            <th
                                class="{{ in_array($key, $nonSortableColumns) ? 'not-sortable' : ((request('sort_by') == $key && request('order') == 'asc') || (request('sort_by') == $key && request('order') == 'desc') ? 'text-primary' : '') }}">
                                {{ $label }}
                                @if (!in_array($key, $nonSortableColumns))
                                    <a href="{{ request()->fullUrlWithQuery(['sort_by' => $key, 'order' => request('sort_by') == $key && request('order') == 'asc' ? 'desc' : 'asc']) }}"
                                        class="text-decoration-none ms-2" style="color: inherit">
                                        @if (request('sort_by') == $key && request('order') == 'desc')
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-sort-descending" width="15"
                                                height="15" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 6l9 0" />
                                                <path d="M4 12l7 0" />
                                                <path d="M4 18l7 0" />
                                                <path d="M15 15l3 3l3 -3" />
                                                <path d="M18 6l0 12" />
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-sort-ascending" width="15"
                                                height="15" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 6l7 0" />
                                                <path d="M4 12l7 0" />
                                                <path d="M4 18l9 0" />
                                                <path d="M15 9l3 -3l3 3" />
                                                <path d="M18 6l0 12" />
                                            </svg>
                                        @endif
                                    </a>
                                @endif
                            </th>
                        @endforeach
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contenus as $contenu)
                        <tr @class(['table-danger' => $contenu->fichier_taille > 0.3])>
                            <td>
                                {{ $contenu->sous_categorie->acronyme }}
                            </td>
                            <td>
                                @if ($contenu->numero)
                                    {{ $contenu->numero }} -
                                @endif
                                {{ $contenu->titre }}
                            </td>
                            <td class="text-muted">
                                <small>{{ $contenu->fichier ?? '-' }}</small>
                            </td>
                            <td>
                                <small>{{ $contenu->fichier_date?->isoFormat('DD MMM YYYY HH:mm:ss') ?? '-' }}</small>
                            </td>
                            <td>
                                <small>{{ $contenu->fichier_taille ?? '-' }} Mo</small>
                            </td>
                            <td>
                                <small>{{ $contenu->updated_at?->isoFormat('DD MMM YYYY HH:mm:ss') ?? '-' }}</small>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <form action="{{ route('admin.open.powerpoint') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="filePath" value="{{ $contenu->getFullUrl() }}">
                                        <button class="btn btn-sm btn-outline-success"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-file-filled" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M12 2l.117 .007a1 1 0 0 1 .876 .876l.007 .117v4l.005 .15a2 2 0 0 0 1.838 1.844l.157 .006h4l.117 .007a1 1 0 0 1 .876 .876l.007 .117v9a3 3 0 0 1 -2.824 2.995l-.176 .005h-10a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-14a3 3 0 0 1 2.824 -2.995l.176 -.005h5z"
                                                    stroke-width="0" fill="currentColor"></path>
                                                <path d="M19 7h-4l-.001 -4.001z" stroke-width="0" fill="currentColor">
                                                </path>
                                            </svg>
                                        </button>
                                    </form>
                                    <a href="{{ route('admin.contenu.edit', ['contenu' => $contenu]) }}"
                                        class="btn btn-sm btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.contenu.destroy', $contenu) }}" method="POST"
                                        onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer');">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-outline-danger" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-trash-filled" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z"
                                                    stroke-width="0" fill="currentColor"></path>
                                                <path
                                                    d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z"
                                                    stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Tsy misy n'inona n'inona
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            @if ($contenus->hasPages())
                <div class="mt-3 px-3"> {{ $contenus->links() }}</div>
            @endif
        </div>
    </div>

@endsection
