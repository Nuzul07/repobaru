<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
   

  </head>

  <body id="page-top">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="/gambar/index.jpg" class="d-block w-100" alt="..." style="width: 300px; height: 450px;">
    </div>
    <div class="carousel-item">
      <img src="/gambar/photo.jpg" class="d-block w-100" alt="..." style="width: 300px; height: 450px;">
    </div>
    <div class="carousel-item">
      <img src="/gambar/Hyatt-Place-St-George-Convention-Center-P004-Exterior.adapt.16x9.1920.1080" class="d-block w-100" alt="..." style="width: 300px; height: 450px;">
    </div>
  </div>
</div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Kost Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          	<li class="nav-item">
          		<a class="nav-link js-scroll-trigger" href="{{ url('/user') }}">Home
          		</a>
          	</li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/all') }}">Pesan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                              Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                @csrf
              </form>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    
@yield('content')

  </body>

</html>
