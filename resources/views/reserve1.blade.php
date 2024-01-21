@extends('app')
@section('content')
@include('partials.header')

    <section class="container" style="margin:100px auto">
        <div class="alert alert-info">
            <h3>Vous voulez réserver le véhicule <span class="text-danger">{{ $voiture_reserve->nom }}</span> </h3>
            <p>Veuillez alors completer les informations suivantes:</p>
        </div>
        <form method="POST" action="{{ route('location.update', ['location' => $voiture_reserve->id]) }}" 
            class="my-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-5 text-center bg-success text-white">
                <h2>FORMULAIRE DE RESERVATION</h2>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger my-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            @if (session('reservedMessage'))
                <div class="alert alert-success text-center col-md-8 m-auto my-3">
                    <h5> {{ session('reservedMessage') }} </h5>
                </div>
            @endif

            @if (session('reservedFailledMessage'))
            <div class="alert alert-danger text-center col-md-8 m-auto my-3">
                <h5> {{ session('reservedFailledMessage') }} </h5>
            </div>
        @endif

        @if (session('my_id'))
        <div class="alert alert-danger text-center col-md-8 m-auto my-3">
            <h5> {{ session('my_id') }} </h5>
        </div>
    @endif

            <div class="row d-flex justify-center align-center grosDiv"
                style="display: flex; align-items: center; justify-content: center; ">
                <div class="form-row row">
                    <div class="col-6">
                        <label for="adresse">Adresse* </label>
                        <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Entrer votre adresse de résidence ">
                    </div>
                    <div class="col-6">
                        <label for="ville">Ville*</label>
                        <input type="text" class="form-control" name="ville" id="ville" placeholder="Entrer votre Ville  ">
                    </div>
                </div>


                <div class="form-row row">
                    <div class="col-6">
                        <label for="Pays">Pays*</label>
                        <input type="text" class="form-control" name="pays" id="pays" placeholder="Entre votre Pays ">
                    </div>
                    <div class="col-6">
                        <label for="maison">Maison*</label>
                        <input type="text" class="form-control" name="maison"  id="maison" placeholder="Entre votre Maison  ">
                    </div>
                </div>

                <div class="form-row row justify-center align-items-center">
                    <div class="col-6">
                        <label for="societe">Societe</label>
                        <input type="text" class="form-control" name="societe" id="societe" placeholder="Entre votre Société ">
                    </div>
                    <div class="col-6">
                        <label for="card">Photo carte d'identé*</label>
                        <input type="file" class="form-control" name="card" id="card"> 
                    </div>
                </div>

                <div class="form-row row">
                    <div class="col-6">
                        <label for="date_location">Date de location*</label>
                        <input type="date" class="form-control" name="date_location" id="date_location" placeholder="Entrer la Date de location  ">
                    </div>
                    <div class="col-6">
                        <label for="heure_location">Heure de location*</label>
                        <input type="time" class="form-control" name="heure_location" id="heure_location" placeholder="Entrer l'Heure de location  ">
                    </div>
                </div>

                <div class="form-row row">
                    <div class="col-6">
                        <label for="date_location_back">Date de retour*</label>
                        <input type="date" class="form-control" name="date_location_back" id="date_location_back" placeholder="Entrer la Date de retour du véhicule ">
                    </div>
                    <div class="col-6">
                        <label for="heure_location_back">Heure de retour*</label>
                        <input type="time" class="form-control" name="heure_location_back" id="heure_location_back"
                            placeholder="Entrer l'Heure de retour du véhicule  ">
                    </div>
                </div>

                <div class="  my-4 text-center m-auto">
                    <input type="submit" value="RESERVER"
                        class="col-md-4 p-3 bg-primary text-white font-weight-bold border-0" name="reserveCar"
                        id="reserveCar">
                </div>


            </div>

        </form>
    </section>

    @include('partials.footer')
@endsection
