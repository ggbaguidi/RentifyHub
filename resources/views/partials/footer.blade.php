<style>
    footer{
        width: 100%;
    }


</style>

<footer id="footer" class="footer" >

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4 class=" fs-5 ">Notre Newsletter</h4>
            <p class="fs-5">Veuillez-vous abonnez pour ne rater aucune des nouvelles actualités</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post"  id="newletter-form">
              <input type="email" name="email" style=""><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top" >
      <div class="container" >
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="images/RentifyHub.png" alt="">
            </a>
            <p class="" style="font-size: 20px;">Le bon endroit pour louer vos voitures en toute sécurité pour vos courses et manifestations de tout genre. Nous faisons tout pour votre bien-être.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href=" {{url('../acuueil')}} ">Accueil</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href=" {{route('location.vehiculesALouer')}} ">Location</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('../securite1')}}">Sécurité</a></li>
              
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>En plus</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('../apropos')}}">A propos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('../accueil')}}">Notre maison</a></li>
              
            </ul>
          </div>

          <div class="col-lg-6 col-md-12 footer-contact text-center text-md-start">
            <h4>Nous contacter</h4>
            <p> <strong>Contacts:</strong> <br> (+229) 52445460 <br> (+229) 55278332 </p>
              <p><strong>Email:</strong> contact@rentifyhub.com<br></p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright <strong><span>&copy; RentifyHub BENIN | {{ Date('Y') }} </span></strong>. Tous droits résevés
      </div>
    </div>
  </footer><!-- End Footer -->