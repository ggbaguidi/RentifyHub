<header id="header" class="header shadow" style=" padding:30px 0 30px 0;;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="url{{url('/')}}" class="logo d-flex align-items-center" >
        <img src="/images/logo_R.png" alt=""  style="width: 100%;height:100px">
      </a>

   
      
<nav id="navbar" class="navbar">
  <ul>
   
    <li><a class="nav-link scrollto" href="{{url('/')}}" style="font-size: 1.2rem" >Accueil</a></li>
    <li class="nav-link scrollto"  ><a href="{{route('location.vehiculesALouer')}}"><span style="font-size: 1.2rem">Nos véhicules</span></a>
      
    </li>
    <!--<li><a class="nav-link scrollto" href="#services" style="font-size: 1.2rem" >Actualités</a></li>-->
    <li><a class="nav-link scrollto" href="{{url('../securite1')}}" style="font-size: 1.2rem" >Politique de sécurité</a></li>

    <li><a class="nav-link scrollto" href="{{url('../contact')}}" style="font-size: 1.2rem" >Nous contacter</a></li>
  

    @guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
        </li>
    @endif

    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
       <a id="navbarDropdown" class="nav-link dropdown-toggle text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="fas fa-user mx-2 p-1 fs-3"></i> {{ Auth::user()->first_name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Se déconnecter') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
@endguest


  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav> 
    </div>
</header>