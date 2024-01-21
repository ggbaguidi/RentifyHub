@extends("head")
@section("content")
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">@yield('origine1')</a></li>
          <li class="breadcrumb-item"><a href="#">@yield('origine2')</a></li>
        </ul>
      </div>
      <div class="row">
        @yield('main-content')
      </div>
</main>

@endsection