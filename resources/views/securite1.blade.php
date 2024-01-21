@extends('app')
@section('content')
@include('partials.header')
<style>
  .grosDiv{
    height: 850px;
    background-image: url('images/foret5.jpg');
    background-size:100%;
    background-repeat: no-repeat;
    overflow: hidden;
  }
  .p1{
    padding-bottom: 20px;
  }
    .p2,.p3{
    font-weight: bold;
    text-align: center;
    width: 60%;
     
  }
  .p2{
      font-size: 3.2rem;
  }
  .p3{
    font-size: 2rem;
  }
  .sousdiv{
    height: 850px;
    background-color: rgba(0, 0, 0,0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .securite2{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 50px;
  }
  .securite21{
    width: 80%;
  }
  .securite21>p{
      font-size: 1.4rem;
      
  }
  .securite21>p:first-child{
    text-align: justify;
    line-height: 40px;
  }
  .securite21>p:last-child{
      margin-top: 15px;
      padding-top: 15px;
  }
  .securite21>h2{
      text-align: center;
      font-weight: bold;
      margin-top: 50px; 
      
  }
  .count-box{
      display: flex;
      flex-direction: column;
  }

</style>
  <div class="gamme">
    <a href="#">Véhicules > Sécurité</a>
  </div>
  <p class="p1">POLITIQUE DE SECURITE</p>

   <div class="row d-flex justify-center align-center grosDiv" style="display: flex; align-items: center; justify-content: center; ">

    <div class="sousdiv">
        <p class="text-white p2">NOUS SOMMES ENGAGES POUR VOTRE SECURITE</p>
         <p class="text-white p3">NOTRE PRINCIPAL OBJECTIF CHEZ CAR HOUSE HIRING : UN MONDE SANS ACCIDENT.</p> 
    </div>
         
    
  </div>

  <div class="securite2">
    <div class="securite21">
        <p>
            Nous investissons continuellement dans la recherche et le développement afin d’améliorer la qualité de nos produits et pour garantir votre sécurité. Nous souhaitons nous positionner en tant que modèle en intégrant toujours plus d’accessoires liés à la sécurité dans nos véhicules. Ainsi lorsque vous êtes au volant d’une Toyota, votre seule préoccupation doit être le plaisir de conduite et le voyage que vous entreprenez.
        </p>
        <h2>SECURITE EMBARQUEE</h2>
        <P>
            Pour une conduite en toute sécurité, nous mettons la technologie au service du conducteur et ce, en proposant différentes fonctionnalités.
        </P>
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">
      
              <div class="row gy-4">
      
                <div class="col-lg-3 col-md-6">
                  <div class="count-box">
                    <img src="images/securite1.png" alt="">
                    <div>
                      
                      <p>Aide au stationnement</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="count-box">
                    <img src="images/securite2.png" alt="">
                    <div>
                      
                      <p>Sécurité active</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="count-box">
                    <img src="images/securite3.png" alt="">
                    <div>
                      
                      <p>Détecteur de collision</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="count-box">
                    <img src="images/securite4.png" alt="">
                    <div>
                      
                      <p>Sécurité passive</p>
                    </div>
                  </div>
                </div>
      
              </div>
              <style>
                  .equipement{
                      margin-top: 50px;
                  }
                  .equipement>div{
                    display: flex;
                    justify-content: space-between;
                    width: 80%;
                   
                  }
                  .equipement>div>p:first-child{
                      font-weight: bold;
                  }
                  .equipement>div>p:last-child{  
                    width: 80%;
                  }
                  
                  #h31,#p11{
                      color: white;
                      font-size: 
                  }
                  #p11{
                      font-size: 1.2rem;
                      line-height: 30px;
                  }
              </style>
              <div class="equipement">
                  <div>
                      <p>Equipements obligatoires:</p>
                      <p>Ceintures de sécurité, airbags, sièges homologués</p>
                  </div>
                  <div>
                    <p>Aide au stationnement:</p>
                    <p>Matériaux à haute résistance</p>
                  </div>
                  <div>
                      <p>Habitacle:</p>
                      <p>Caméra de recul avec délimitation de l’espace environnant</p>
                  </div>
              </div>
      
            </div>
        </section>
    </div>
</div>


<section id="features" class="features bg-dark">

    <div class="container " data-aos="fade-up">

      <header class="section-header">
       
        <p class="text-white">SECURITE ACTIVE</p>
      </header>

      <div class="row" data-aos="fade-up">

        <div class="col-lg-6">
          <img src="images/active1.jpg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex " id="textActive" style="display: flex; justify-content:center; align-items center; flex-direction:column;">
            <h3 id="h31">CONTRÔLE DE LA MOTRICITÉ (TRC)</h3>
            <p id="p11">Limite la rotation des roues sur des surfaces glissantes quand vous roulez en ligne droite.</p>
        </div>

      </div> 

    
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-6 mt-5 mt-lg-0 d-flex " id="textActive" style="display: flex; justify-content:center; align-items center; flex-direction:column;">
            <h3 id="h31">CONTRÔLE DE STABILITÉ (ESP)</h3>
            <p id="p11">Aide à garder le contrôle du véhicule sur des surfaces glissantes en réduisant la puissance du moteur et via un freinage automatique.</p>
        </div>

        <div class="col-lg-6">
          <img src="images/active2.jpg" class="img-fluid" alt="">
        </div>

      </div>


      <div class="row" data-aos="fade-up">

        <div class="col-lg-6">
          <img src="images/active3.jpg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex " id="textActive" style="display: flex; justify-content:center; align-items center; flex-direction:column; margin-top:30px;">
            <h3 id="h31">SYSTÈME D’ANTI BLOCAGE DE ROUES (ABS)</h3>
            <p id="p11">Prévient tout risque de blocage des roues en cas de freinage puissant.</p>
        </div>

      </div> 

    
      <div class="row feture-tabs mt-5" data-aos="fade-up">
        <div class="col-lg-6 mt-5 mt-lg-0 d-flex " id="textActive" style="display: flex; justify-content:center; align-items center; flex-direction:column;margin-top:10px;">
            <h3 id="h31">ASSISTANCE AU FREINAGE</h3>
            <p id="p11">Augmente la stabilité du véhicule pendant la phase de freinage. Quand le véhicule détecte un freinage soudain, l’ordinateur de bord ajoute une pression maximale à la pédale de frein afin d’éviter toute collision. Certaines technologies, comme la « gestion intégrée de la dynamique du véhicule », sont capables d’anticiper votre intention de freiner et appliquent ainsi automatiquement un ensemble de paramètres afin d’assurer le niveau le plus élevé de contrôle du véhicule et de sa stabilité.</p>
        </div>

        <div class="col-lg-6">
          <img src="images/active4.jpg" class="img-fluid" alt="">
        </div>

      </div>

  

    </div>

  </section>
 

  @include('partials.footer')
@endsection