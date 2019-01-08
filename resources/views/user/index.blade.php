@extends('navbar-user')
@section('content')
<style type="text/css">
	.margin {
		margin-top: 80px;
	}
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h1 style="text-align: center;">Pilih Kost yang sesuai</h1>
<div class="container" style="margin: 20px 0px 20px 100px">
            <div style="margin-bottom: 30px;">
            </div>
            <div class="card-deck">
                <div class="row" style="width: 100%;">
                    @foreach ($kamar as $kamars)
                    <div class="col-md-4">
                      <div class="card" style="margin: 20px 0 20px 0">
                        <img class="card-img-top" style="height: 180px; width: 100%; display: block;" src="{{ url('/gambar', $kamars->gambar) }}" data-holder-rendered="true">
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Nomor Kamar : {{$kamars->nomorkamar}}</small><br>
                          <a href="{{ url('/all') }}" class="btn btn-primary">Pesan</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
              
                
                
                </div>
                <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
            </div>
        </div>
@endsection