@extends('../dashbord')

@section('main-content')


    <div class="col-md-8"  style="margin: 0px auto;">
        <div class="tile">
            <h3 class="tile-title">Ajout d'une nouvelle catégorie</h3>
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
                    <div class="alert alert-success mb-3">
                    <h6> {{session('addedMessage')}} </h6>
                    </div> 
                @endif


                <form method="POST"  action=" {{route('categories.store')}} ">
                  @csrf
                    <div class="form-group ">
                        <label class="control-label" for="type_categorie">Type de catégorie</label>
                        <input class="form-control" type="text" placeholder="Entrer le type de catégorie"
                            name="type_categorie" id="type_categorie">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" name="sendCategorie" id="sendCategorie"
                            value="Ajouter Categorie">
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
