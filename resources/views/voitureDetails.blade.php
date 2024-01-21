@extends('app')
@section('content')
    @include('partials.header')

    <div class="gamme">
        <a href="#">Véhicules >{{$currentVoiture->nom}}</a>
    </div>
<div class="alert alert-info my-4 m-auto  col-md-10">
  <p class="font-italic font-weight-bold text-center" style="font-size:20px">Le véhicule <span style="color:red"> {{$currentVoiture->nom}}</span>  de la marque {{$currentVoiture->marque->type_marque}}, catégorie des {{$currentVoiture->categorie->type_categorie}} se loue à <mark>{{$currentVoiture->prix}}</mark> FCFA/JOURS</p>
 
</div>
    <div class="col-md-10 my-5 m-auto font-bold text-justify" >

      <h2 class="mb-3">Description</h2>
        <h4 class="" style="z-index: -100;">
          {{$currentVoiture->description}}
        </h4>
    </div>
    <hr>
    
   
    <section id="features" class="features" style="margin-top: 0;padding-top:0;">

        <div class="container-fluid" data-aos="fade-up" style="padding:0;margin-top:0;">
          <div class="row feature-icons" data-aos="fade-up" style="padding:0;margin-top:0;">
            <p class="p1">CARACTERISTIQUES</p>
            <br>
            
            <div class="row">
  
              <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100" >
                <img src="{{asset('storage/images_cars/'.$currentVoiture->photo)}}" class="img-fluid p-4" alt="" style="width: 100%; height:350px">
              </div>
  
              <div class="col-xl-8 d-flex content">
                <div class="row align-self-center gy-4">
                    <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
                        <img src="/images/moteur.png" alt="#">
                        <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                        <h4>MOTEUR</h4>
                        <div class="listeCaracteristique" >
                            <p > <span>Alimentation:</span><span>{{$currentVoiture->alimentation}}</span> </p>
                            <p> <span>Carburant:</span><span>{{$currentVoiture->carburant}}</span> </p>
                            <p> <span>Cylindrés(cm <sup>3</sup>:</span><span>{{$currentVoiture->cylindre}}</span> </p>
                        </div>
                        </div>
                  </div>

                  <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
                    <img src="/images/dimension.png" alt="#">
                    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                    <h4>DIMENSION</h4>
                    <div class="listeCaracteristique"  >
                        <p> <span>Dimensions (Lxlxh) en mm : </span><span>{{$currentVoiture->dimensions}} </span> </p>
                        <p> <span>Empattement (mm) :</span><span>{{$currentVoiture->empattement}}</span> </p>
                        <p> <span>Garde au sol (mm) : </span><span>{{$currentVoiture->garde_sol}}</span> </p>
                    </div>


                    </div>
              </div>
  
              <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
                <img src="/images/poids.png" alt="#">
                <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                <h4>POIDS / CAPACITE </h4>
                <div class="listeCaracteristique" >
                    <p> <span>Capacité réservoir carburant (L) : </span><span> {{$currentVoiture->capacite_reservoir}}</span> </p>
                    <p> <span>Poids à vide (kg) : </span><span>{{$currentVoiture->poids_vide}}</span> </p>
                    <p> <span>Nombre d'usagers : </span><span>{{$currentVoiture->prix}} maximum</span> </p>
                </div>
                </div>
          </div>
          <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center; z-index:5;">
            
            <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;position: absolute; z-index:5; ">
                
              <a href=" {{route('location.edit',['location'=> $currentVoiture->id])}} " class="btn-reserve" onclick="document.getElementById('id01').style.display='block'" >RESERVEZ MAINTENANT</a>


                <a href=" {{url('./contact')}} " class="btn-info" onclick="document.getElementById('id02').style.display='block'" >CONTACTEZ-NOUS</a>

              
            </div>
      </div>
  
                </div>
              </div>
  
            </div>
  
          </div><!-- End Feature Icons -->
  
        </div>
  
      </section>

      @include('partials.footer')
@endsection