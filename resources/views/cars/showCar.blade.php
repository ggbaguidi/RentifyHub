@extends("../dashbord")
@section('main-content')


<div class="col-md-12 " >
    <div class="tile p-5 ">
      <div class="overlay">
        <div class="m-loader mr-4 p-5">
          <svg class="m-circular" viewBox="25 25 50 50">
              <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
          </svg>
        </div>
        <h3 class="l-text">Chargement des données...</h3>
      </div>
      <div class="tile-title-w-btn">
        <h3 class="title"></h3>
        {{-- <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i>Add Item	</a></p> --}}
      </div>
      <div class="tile-body">
        
      </div>
    </div>
  </div>
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary col-md-4  text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Cliquer ici pour voir plus les informations
</button>























  

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <h5 class="mb-2 text-white">Informations relatives à {{ $showedCar->nom }}</h5>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="mb-3 text-center">

                        <img src="{{ asset('storage/images_cars/' . $showedCar->photo) }}" width="450" height="250"
                            alt="vehicule">
                    </div>
                    <table class="table tabble-striped table-info table-bordered">
                        <thead >
                            <tr>
                                <th>Caractériques</th>
                                <th>Données</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Description</td>
                                <td> {{ $showedCar->description }} </td>
                            </tr>
                            <tr>
                                <td>Poids à vide</td>
                                <td> {{ $showedCar->poids_vide }} </td>
                            </tr>
                            <tr>
                                <td>Marque</td>
                                <td> {{ $showedCar->marque->type_marque }} </td>
                            </tr>
                            <tr>
                                <td>categorie</td>
                                <td> {{ $showedCar->categorie->type_categorie }} </td>
                            </tr>
                            <tr>
                                <td>Nombre d'usager</td>
                                <td> {{ $showedCar->nombre_usager }} </td>
                            </tr>
                            <tr>
                                <td>Capacite du réservoir</td>
                                <td> {{ $showedCar->capacite_reservoir }} </td>
                            </tr>
                            <tr>
                                <td>Carburant</td>
                                <td> {{ $showedCar->carburant }} </td>
                            </tr>
                            <tr>
                                <td>Prix</td>
                                <td> {{ $showedCar->prix }} F CFA</td>
                            </tr>
                            <tr>
                                <td>Enrégistré par :</td>
                                <td> {{ $showedCar->user->last_name }} {{ $showedCar->user->first_name }} </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td> {{ $showedCar->statut }} </td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <form action="{{ route('cars.destroy', ['car' => $showedCar]) }}"
                        method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-danger m-1"
                            style="width:80%;margin:auto;">Suprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




