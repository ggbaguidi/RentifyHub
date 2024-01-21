@extends('app')
@include('partials.header')
@section('content')

<div class="gamme">
    <a href="#">Contact</a>
</div>
<p class="p1">CONTATEZ-NOUS</p>

<style>
    .style_2{
		margin: 40px 0;
	}
  


  .news_6 form{
  	   background-color: #fff;
  	   border: solid 1px #ddd;
  	   border-top-color: transparent ;
  	   border-radius: 10px;
  	   margin: 20px 0;
  }
  .news_6 form .form-header{
  	   height: 5px;
         background: linear-gradient(-90deg, rgb(111, 155, 236), #00f);
  	   border-radius: 10px 10px 0 0;
  }
  .news_6 form .form-content{
  	   padding: 40px 30px
  }
  .news_6 form .form-content h4{
	  	font-size: 16px;
	  	font-weight: bold;
	  	letter-spacing: 1px;
	  	text-align: center;
	  	margin-bottom: 30px;
	  	text-transform: uppercase;
  }
  .news_6 form .form-content .form-control{
	  	border-bottom: solid 1px #000;
	  	margin-bottom: 20px;
	  	border-radius: 0;
	  	font-size: 14px;
	  	padding-left: 0;
  }
  .news_6 form .form-content textarea.form-control{
  	    height: 150px;
  }
  .news_6 form .form-content .btn{
  	    background: linear-gradient(-90deg, rgb(111, 155, 236), #00f);
  	    border-color: #fff;
  	    color: #fff;
  	    font-size: 15px;
  	    font-weight: bold;
  	    letter-spacing: 1px;
  	    margin-top: 20px;
  	    padding: 10px 15px;
  	    transition-duration: 1s;
  }
  .news_6 form .form-content .btn:hover{
  	    background: linear-gradient(-90deg, #fff, #00f);
  }

</style>







<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-telephone" style="color: rgb(240, 125, 125)" ></i>
              <div>
                  <h4 style="color: #000; font-weight: bold; font-size:1.4rem;"> Téléphone</h4>
                  <a href="phone" class="">(+229) 52445460 <br>(+229) 55278332</a>
                </div>
            </div>
          </div>


        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-envelop"></i>
            <div>
              <h4 style="color: #000; font-weight: bold; font-size:1.4rem;"> Gmail</h4>
              <a href="wa.me/" class="fb">contact@rentifyhub.com</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-whatsapp" style="color: #15be56;"></i>
            <div>
                <h4 style="color: #000; font-weight: bold; font-size:1.4rem;"> Whatsapp</h4>
                <a href="wa.me/95371154" class="fb">https//wa.me/52445460</a>
              </div>
          </div>
        </div>

        

        <div class="col-lg-3 col-md-6">
            <div class="count-box">
                <i class="bi bi-facebook"></i>
                <div>
                  <h4 style="color: #000; font-weight: bold; font-size:1.4rem;"> Facebook</h4>
                  <a href="wa.me/" class="fb">https//www.facebook.com</a>
                </div>
            </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->
<div class="row style_2 col-md-offset-1" style=" display: flex; justify-content: center;">
    <div class="col-lg-5  d-flex justify-center; align-center " style=" display: flex; justfy-content: center;align-items: center;">
        
        <iframe style="height: 93%; width:100%;" class="shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8504219048846!2d2.310099715300049!3d6.413259395359785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9818e90027f%3A0x8e8283c9c958197f!2sUniversit%C3%A9%20d&#39;Abomey%20Calavi!5e0!3m2!1sfr!2sbj!4v1646231984906!5m2!1sfr!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class=" col-lg-5 news_6">
        <form>
            <div class="form-header"></div>
            <div class="form-content">
                <h4>Vos messages sont les bienvenus</h4>
                <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Votre nom" style="border-radius: 5px;padding-left:10px;">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="votre Email" style="border-radius: 5px;padding-left:10px;">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Objet" style="border-radius: 5px;padding-left:10px;">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <textarea class="form-control" placeholder="Message" style="border-radius: 5px;padding-left:10px;"></textarea>
                        <button class="btn">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</div>
@include('partials.footer')
@endsection