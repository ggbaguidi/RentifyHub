@extends('app')
@section('content')
@include('partials.header')


<div class="slideshow-container container-fluid p-0">
    <div class="mySlides fade p" style="width: 100%">
       <img src="images/foret2.jpg" style="width:100%; height:870px;">
       <div class="text" id="lienslideId">
        <div class="lienslide">
          <a href="{{url('locations/vehicules')}}">Je loue</a>
          <a href="#">Après location</a>
          <a href="{{url('contact')}}">Je contacte</a>
       </div>
       </div>
    </div>
    <div class="mySlides fade">
       <img src="images/foret1.jpg" style="width:100%;height:870px;">
       <div class="text" id="lienslideId">
        <div class="lienslide">
          <a href="{{url('locations/vehicules')}}">Je loue</a>
          <a href="#">Après location</a>
          <a href="{{url('contact')}}">Je contacte</a>
       </div>
       </div>
    </div>
    <div class="mySlides fade">
    <img src="images/foret2.jpg" style="width:100%;height:870px;">
    <div class="text" id="lienslideId">
       <div class="lienslide">
          <a href="{{url('locations/vehicules')}}">Je loue</a>
          <a href="#">Après location</a>
          <a href="{{url('contact')}}">Je contacte</a>
       </div>
    </div>
    <br>
    <div style="text-align:center">
       <span class="dot"></span> 
       <span class="dot"></span> 
       <span class="dot"></span> 
    </div>
</div>

<section id="values" class="values">

  <div class="container-fluid d-flex justify-content-center align-items-center " data-aos="fade-up" style="flex-direction: column;">

    <header class="section-header">
      <p>Des classes de voiture à louer à bon prix</p>
    </header>

    <div class="row" style="width:90%;">

      <div class="col-lg-4">
        <div class="box" data-aos="fade-up" data-aos-delay="200" id="box">
          <img src="images/auto4.png" class="img-fluid" alt="">
          <h3 >Land Cruser Prado</h3>
          <p><span> <b>Prix: 30 000F / Jour</b></p>
            <a href="{{url('locations/vehicules')}}">LOUER</a> 
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box" data-aos="fade-up" data-aos-delay="400" id="box">
          <img src="images/auto3.png" class="img-fluid" alt="">
          <h3>Mercedes Cross</h3>
          <p><span> <b>Prix: 20 000F / Jour</b></p>
           <a href="{{url('locations/vehicules')}}">LOUER</a> 
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box" data-aos="fade-up" data-aos-delay="600" id="box">
          <img src="images/auto2.png" class="img-fluid" alt="">
          <h3>Lanborgini</h3>
          <p><span> <b>Prix: 15 000F / Jour</b></p>
          <a href="{{url('locations/vehicules')}}">LOUER</a> 
        </div>
      </div>

    </div>

  </div>

</section>



<section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Quelques témoignages de nos clients</p>
      </header>
      <style>
          .bi-star-fill{
              color: blue;
          }
      </style>
      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                J'ai pris contacte avec <b>Car House Hiring</b> il y a de cela deux ans. J'avoue que c'est une équipe très dynamique qui fait fonctionner cette organisation. La satisfaction est toujours au rendez-vous et même je suis surpris des bonus qu'ils m'offrent.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Aimé Kouoffi</h3>
                <h4>Enseignant</h4>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>
          </div>


          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section>





@include('partials.footer')

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>
@endsection