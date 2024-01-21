@extends("../dashbord")
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
                    <h4 class="text-danger font-italic">Liste des utilisateurs ayant fait des réservations</h4>
                </div>

                <a class="btn btn-primary my-4 m-auto d-block col-2" href=" {{route('location.vehiculesALouer')}} ">Réserver une voiture</a>
                <div>
                    <table class="table table-responsive table-striped table-success table-bordered text-center"
                        id="sampleTable">
                        <thead>
                            <tr>
                                <th>Pièce d'identité</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse</th>
                                <th>Ville</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Date location</th>
                                <th>Date retour</th>
                                <th>Véhicule loué</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($allReservedUsers as $person)
                                <tr>
                                    <td><img src=" {{ asset('storage/images_cars/persons/' . $person->card) }}" width="100"
                                            height="80" alt="User "></td>
                                    <td>{{ $person->user->last_name }} </td>
                                    <td>{{ $person->user->first_name }}</td>
                                    <td>{{ $person->adresse }}</td>
                                    <td>{{ $person->ville }}</td>
                                    <td>{{ $person->user->email }}</td>
                                    <td>{{ $person->user->telephone }}</td>
                                    <td>{{ $person->date_location }}</td>
                                    <td>{{ $person->date_location_back }}</td>
                                    <td>{{ $person->car->nom }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
