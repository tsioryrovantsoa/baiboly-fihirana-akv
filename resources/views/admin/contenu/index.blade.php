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
                                <option value="{{ $souscategorie->id }}" class="text-secondary">{{ $souscategorie->nom }}
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

                <div class="col-3 align-self-end">
                    <button class="btn btn-primary">Filtrer</button>
                    <a href="{{ route('admin.contenu.index') }}" class="btn btn-secondary">Reinitialiser</a>
                </div>
            </div>
        </div>
    </form>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table table-striped">
                <thead>
                    <tr>
                        <th>Sous Categorie</th>
                        <th>Numero - Titre</th>
                        <th>Fichier</th>
                        <th>Date fichier</th>
                        <th>Taille</th>
                        <th>Date</th>
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
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-eye-filled" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M12 4c4.29 0 7.863 2.429 10.665 7.154l.22 .379l.045 .1l.03 .083l.014 .055l.014 .082l.011 .1v.11l-.014 .111a.992 .992 0 0 1 -.026 .11l-.039 .108l-.036 .075l-.016 .03c-2.764 4.836 -6.3 7.38 -10.555 7.499l-.313 .004c-4.396 0 -8.037 -2.549 -10.868 -7.504a1 1 0 0 1 0 -.992c2.831 -4.955 6.472 -7.504 10.868 -7.504zm0 5a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-trash-filled" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg>
                                    </a>

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
