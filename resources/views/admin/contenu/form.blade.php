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
                        @isset($contenu)
                            <div class="mb-3">
                                <div class="form-label">Fichier</div>
                                <input type="file" class="form-control" name="fichier">
                                <span class="form-check-description">
                                    Fichier actuel :
                                    <a href="{{ $contenu->fichierURL() }}" target="_self" class="custom-link">
                                        {{ $contenu->fichierURL() }}
                                    </a><br />
                                </span>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-end">
        <div class="d-flex">
            <a href="{{ route('admin.contenu.index') }}" class="btn btn-link">Retour</a>
            <button type="submit" class="btn btn-primary ms-auto">{{isset($contenu) ? 'Modifier' : 'Creer'}}</button>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Désactiver le champ numéro s'il s'agit d'un ajout
        const contenuId = "{{ isset($contenu) ? $contenu->id : '' }}";
        const requis_sous =
            "{{ isset($contenu->sous_categorie->numero_requis) ? $contenu->sous_categorie->numero_requis : false }}"

        if (contenuId === '') {
            $('input[name="numero"]').prop('disabled', true);
        }

        if (requis_sous == false) {
            const numeroInput = $('input[name="numero"]');
            numeroInput.val('').hide();
            numeroInput.prev('label').hide(); // Masquer le label
        }

        // Écouter les changements de la sous-catégorie
        $('select[name="sous_categorie_id"]').change(function() {
            const sousCategorieId = $(this).val();

            // Vérifier si la valeur de la sous-catégorie n'est pas vide
            if (sousCategorieId !== '') {
                // Effectuer une requête AJAX pour obtenir l'attribut requis_numero
                $.ajax({
                    url: '/get-requis-numero', // Remplacez par l'URL de votre endpoint
                    method: 'GET',
                    data: {
                        sous_categorie_id: sousCategorieId
                    },
                    success: function(response) {
                        const requisNumero = response.requis_numero;

                        // Si requis_numero est vrai, effectuer une autre requête pour obtenir le prochain numéro
                        if (requisNumero) {
                            $.ajax({
                                url: '/get-prochain-numero', // Remplacez par l'URL appropriée
                                method: 'GET',
                                data: {
                                    sous_categorie_id: sousCategorieId
                                },
                                success: function(response) {
                                    const prochainNumero = response
                                        .prochain_numero;

                                    // Mettre à jour le champ "numero" avec la valeur appropriée
                                    const numeroInput = $(
                                        'input[name="numero"]');
                                    numeroInput.val(prochainNumero).show();
                                    numeroInput.prev('label')
                                        .show(); // Afficher le label
                                }
                            });
                        } else {
                            // Si requis_numero est faux, vider et masquer le champ "numero" et son label
                            const numeroInput = $('input[name="numero"]');
                            numeroInput.val('').hide();
                            numeroInput.prev('label').hide(); // Masquer le label
                        }
                    }
                });
            } else {
                // Si la valeur de la sous-catégorie est vide, vider et masquer le champ "numero" et son label
                const numeroInput = $('input[name="numero"]');
                numeroInput.val('').hide();
                numeroInput.prev('label').hide(); // Masquer le label
            }
        });
    });
</script>
