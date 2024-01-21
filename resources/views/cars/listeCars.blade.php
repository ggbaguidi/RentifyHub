@extends("../dashbord")
@section('origine1')
    <span class="font-weight-bold font-italic text-decoration-none">Véhicule</span>
@endsection
@section('origine2')
    <span class="font-weight-bold font-italic text-decoration-none">Liste des Véhicules</span>
@endsection
@section('main-content')
    <div class="col-md-12" style="margin: 0px auto;">
        <div class="tile">
            <div class="tile-body">
                @if (session('updatedMessage'))
                    <div class="alert alert-success mb-3">
                        <h6> {{ session('updatedMessage') }} </h3>
                    </div>
                @endif
                @if (session('deletedMessage'))
                    <div class="alert alert-success mb-3">
                        <h6> {{ session('deletedMessage') }} </h3>
                    </div>
                @endif
                <div class="text-center my-3 alert alert-info">
                    <h4 class="text-danger font-italic">Liste des véhicules </h4>
                </div>
                <div class="text-center mb-4">
                    <a class="btn btn-info" href=" {{ route('cars.create') }} ">Ajouter une Voiture</a>
                </div>
                <div class="table-responsive container">
                    <table class="table table-striped table-success table-bordered text-center " id="sampleTable">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Marque</th>
                                <th>categorie</th>
                                <th>Nombre d'usager</th>
                                <th>Capacite du réservoir</th>
                                <th>Carburant</th>
                                <th>Prix</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($allcars as $car)
                                <tr>
                                    <td><img src="{{ asset('storage/images_cars/' . $car->photo) }}" width="150"
                                            height="100" alt="vehicule"></td>
                                    <td> {{ $car->nom }} </td>
                                    <td>{{ $allmarques->find($car->marque_id)->type_marque }}</td>
                                    <td>{{ $allcategories->find($car->categorie_id)->type_categorie }}</td>
                                    <td>{{ $car->nombre_usager }}</td>
                                    <td>{{ $car->capacite_reservoir }}</td>
                                    <td>{{ $car->carburant }}</td>
                                    <td>{{ $car->prix }}FCFA</td>
                                    <td>{{ $car->statut }}</td>
                                    <td>

                                        <div class=" dropstart">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">

                                                <a href=" {{ route('cars.edit', ['car' => $car->id]) }}"
                                                    class=" btn btn-primary mb-1" style="width: 80%">Editer</a>

                                                <a href=" {{ route('cars.show', ['car' => $car->id]) }}"
                                                    class=" btn btn-info mb-1" style="width: 80%">Consulter</a>

                                                <form action="{{ route('cars.destroy', ['car' => $car->id]) }}"
                                                    method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn btn-danger m-1"
                                                        style="width:80%;margin:auto;">Suprimer</button>
                                                </form>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection
