@extends('app')
@section('content')
  @include('partials.header')
    <div class="gamme">
      <a href="#">Véhicules</a>
    </div>
    <p class="p1">JE DÉCOUVRE LES VEHECULES A LOUER</p>
    
    <section id="values" class="values">
     
    
      <div class="container-fluid mt-" data-aos="fade-up">
    
        <div class="row ">
    
          @foreach ($allCars as  $car)
          <a href="{{route('location.show',['location'=>$car->id])}}" class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="{{asset('storage/images_cars/'.$car->photo)}}" class="img-fluid" alt="véhicule image" height="300"  width="500">
              <h3> {{$car->nom}} </h3>
            </div>
          </a>
    
          @endforeach
          
    
        </div>
    
      </div>
    </div>
    
    </section>
  @include('partials.footer')
@endsection

