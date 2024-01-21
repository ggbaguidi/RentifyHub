@extends('../dashbord')

@section('main-content')


    <div class="col-md-8"  style="margin: 0px auto;">
        <div class="tile" >
            <h3 class="tile-title">Modifier une marque</h3>
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

                <form method="POST"  action=" {{route('marques.update',['marque'=>$currentMarque->id])}} ">
                    @csrf
                    @method('PUT')
                    <div class="form-group ">
                      
                        <label class="control-label" for="type_marque">Type de marque</label>
                        <input class="form-control" type="text" placeholder="Entrer le nom de la marque" name="type_marque"
                            id="type_marque"  value=" {{ $currentMarque->type_marque }} ">
                    </div>
                    <div class="form-group ">
                        <input type="submit" class="btn btn-primary" name="sendMarque" id="sendMarque"
                            value="Mettre à jour">
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
