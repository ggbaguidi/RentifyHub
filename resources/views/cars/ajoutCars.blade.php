@extends('../dashbord')

@section('origine1')
    <span class="font-weight-bold font-italic text-decoration-none">Véhicule</span>
@endsection
@section('origine2')
    <span class="font-weight-bold font-italic text-decoration-none">Ajout de Véhicule/span>
@endsection

@section('main-content')


    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Ajout d'un nouveau véhicule</h3>
            <div class="tile-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('addedMessage'))
                    
                    <div class="alert alert-success">
                        <h6> {{ session('addedMessage') }} </h6>
                    </div>
                    
                @endif

                @if (session('updatedMessage'))
                    
                    <div class="alert alert-success">
                        <h6> {{ session('addedMessage') }} </h6>
                    </div>
                    
                @endif

                <form method="POST" action=" {{ route('cars.store') }} " enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="form-group col-md-4 ">
                            <label for="nom" class="control-label">Nom</label>
                            <input class="form-control" type="text" placeholder="Entrer le nom de la voiture" name="nom">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="marque_id">Marque</label>
                            <select class="form-control" name="marque_id" id="marque_id">
                                @foreach ($lesmarques as $marque)
                                    <option value=" {{ $marque->id }} ">{{ $marque->type_marque }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="categorie_id">Categorie</label>
                            <select class="form-control" name="categorie_id" id="categorie_id">
                                @foreach ($lescategories as $categorie)
                                    <option value=" {{ $categorie->id }} ">{{ $categorie->type_categorie }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-group col-md-4 ">
                            <label class="control-label" for="dimensions">Dimensions</label>
                            <input class="form-control" type="text" placeholder="Entrer les dimensions" name="dimensions"
                                id="dimensions">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="empattement">Empattement</label>
                            <input class="form-control" type="text" placeholder="Entrer l'empattement" name="empattement"
                                id="empattement">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="poids_vide">Poids à vide</label>
                            <input class="form-control" type="text" placeholder="Entrer le poids à vide" name="poids_vide"
                                id="poids_vide">
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="form-group col-md-4 ">
                            <label class="control-label" for="carburant">Carburant</label>
                            <input class="form-control" type="text" placeholder="Entrer le type de carburant"
                                name="carburant" id="carburant">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="cylindre">Cylindre</label>
                            <input class="form-control" type="text" placeholder="Entrer le cylindre" name="cylindre"
                                id="cylindre">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="garde_sol">Garde sol</label>
                            <input class="form-control" type="text" placeholder="Entrer le garde sol" name="garde_sol"
                                id="garde_sol">
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-4">
                            <label for="photo" form="control-label">Photo</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="capacite_reservoir">Capacité du réservoir</label>
                            <input class="form-control" type="text" placeholder="Entrer la capacité du réservoirs"
                                name="capacite_reservoir" id="capacite_reservoir">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="nombre_usager">Nombre maximum d'usager</label>
                            <input class="form-control" type="text" placeholder="Entrer le nombre d'usager"
                                name="nombre_usager" id="nombre_usager">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-group col-md-4">
                            <label for="prix" form="control-label">Prix</label>
                            <input type="text" name="prix"  id="prix" class="form-control"
                                placeholder="Entrer le prix de vente">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="alimentation">Alimentation</label>
                            <input class="form-control" type="text" placeholder="Entrer l'alimentation"
                                name="alimentation" id="alimentation">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="description">Description</label>
                            <textarea class="form-control" rows="3" cols="50" style="resize: none;"
                                name="description">Entrer une description du véhicule ici...</textarea>
                        </div>
                    </div>

                    <div>
                        <input type="submit" name="sendCar" value="Ajouter voiture" id="sendCar" class="btn btn-info">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
