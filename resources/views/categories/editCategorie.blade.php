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


                <form method="POST"  action=" {{route('categories.update',['category'=>$currentCategorie->id])}} ">
                  @csrf
                  @method('PUT')
                    <div class="form-group ">
                        <label class="control-label" for="type_categorie">Type de catégorie</label>
                        <input class="form-control" type="text" placeholder="Entrer le type de catégorie"
                            name="type_categorie" id="type_categorie" value=" {{ $currentCategorie->type_categorie }} ">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" name="sendCategorie" id="sendCategorie"
                            value="Mettre à jour">
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
