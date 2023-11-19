@section('title', isset($contenu) ? 'Edit Contenu' : 'Add Contenu')

<form
    action="{{ isset($contenu) ? route('admin.contenu.update', ['contenu' => $contenu]) : route('admin.contenu.store') }}"
    enctype="multipart/form-data" method="post" class="card">
    @csrf
    @isset($contenu)
        @method('PUT')
    @endisset
    <div class="card-header">
        <h4 class="card-title">{{ isset($contenu) ? 'Edit Contenu' : 'Add Contenu' }}</h4>
    </div>
    <div class="card-body">
        <div class="row g-5">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-md-6 col-xl-12">
                        <div class="mb-3">
                            <div class="form-label">Sous Categorie</div>
                            <select class="form-select" name="sous_categorie_id">
                                <option value="" selected>-- Selectionnez --</option>
                                @if (isset($contenu))
                                    @foreach ($souscategories as $souscategorie)
                                        @php
                                            $isSelected = old('sous_categorie_id') == $souscategorie->id || ($contenu && $souscategorie->id == $contenu->sous_categorie_id);
                                        @endphp
                                        <option value="{{ $souscategorie->id }}"
                                            @if ($isSelected) selected @endif>
                                            {{ $souscategorie->nom }}
                                        </option>
                                    @endforeach
                                @else
                                    @foreach ($souscategories as $souscategorie)
                                        <option value="{{ $souscategorie->id }}"
                                            @if (old('sous_categorie_id') == $souscategorie->id) selected @endif>
                                            {{ $souscategorie->nom }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Numero</label>
                            <input type="number" class="form-control" name="numero"
                                value="{{ $contenu->numero ?? old('numero') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Titre</label>
                            <input type="text" class="form-control" name="titre"
                                value="{{ $contenu->titre ?? old('titre') }}">
                        </div>
                        <div class="mb-3">
                            <div class="form-label">Fichier</div>
                            <input type="file" class="form-control" name="fichier">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-md-6 col-xl-12">
                        <div class="mb-3">
                            <iframe src = '/ViewerJS/#../storage/slide/test.pdf' width='400' height='300' allowfullscreen webkitallowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-end">
        <div class="d-flex">
            <a href="{{ route('admin.contenu.index') }}" class="btn btn-link">Retour</a>
            <button type="submit" class="btn btn-primary ms-auto">Creer</button>
        </div>
    </div>
</form>
