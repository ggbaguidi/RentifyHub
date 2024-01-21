@extends('app')
@section('content')
@include('partials.header')
<div class="gamme">
    <a href="#">Accueil > A propos</a>
</div>
<p class="p1">QUI SOMMES-NOUS ?</p>

<style>
    .pBienvenue{
        font-size:1.5rem;
        text-align: justify;
        font-family: 'Times New Roman', Times, serif

    }
</style>

<section id="features" class="features">

    <div class="" data-aos="fade-up" style="display: flex; justify-content: center; align-items:center;">

      <div class="row" style="width: 80%;">

        <div class="col-lg-5 d-flex  ">
          <img src="assets/img/features.png" class="img-fluid" alt="">
        </div>

        <div class="col mt-5 mt-lg-0 d-flex" style="; width:100%;">
          
            <p class="pBienvenue">Bienvenue sur <b>RentifyHub BENIN</b>

                Notre mission est d’offrir à nos clients un vaste choix de diverses catégories de voitures dont ils pourront louer et les utilisateurs pour des occupations qu'ils désirent. Notre expérience en la matière nous permet de trouver le meilleur rapport qualité/prix pour vous. Et nous mettons un point d’honneur à vous proposer un excellent service client et assistance.
                
                Nous suivons de près les dernières tendances surtout en matière de la demande clientèle, de leur préférence, et donnons la priorité aux envies de nos clients. Nos clients, partout dans le monde, sont ainsi heureux de faire partie de la communauté <b>Card House Hiring </b>. Plusieurs clients témoignagnent de notre politique de sécurité, nous offrons pour zéro cas d'accident en nous assurant de la sécurité de nos produits avant, au cours et après location.
                
                Nous espérons que vous aimerez nos produits autant que nous aimons les trouver pour vous. <br> <br>
               Nous sommes nés en Avril 2005 et enrégistré sous <b>N°20RB1894R45</b> en république du Bénin. Conformémentaux lois et textes de la république, nous offrons depuis des années des services de qualités à nos clients. Nous sommes sités au carrefour IITA à 100m de la DBSU à gauche en quittant quittant Cotonou. Merci et heureux de vous compter parmis les nôtres. <br><br>
               N'hésitez pas à nous <a href="#">contacter</a> pour tout autres informations ou pour bénéficier de nos services. 

            
            </p>

       
        </div>

      </div> 

      

      
    </div>

  </section>

@include('partials.footer')
@endsection