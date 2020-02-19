<link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
@extends('plantilla')
@section('seccion')
<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{URL::asset('img/gps.png')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">GPS CHILE</h5>
            <p class="card-text">Some quick example text to build on the GPS CHILE and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{URL::asset('img/gps.png')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">GPS CHILE</h5>
            <p class="card-text">Some quick example text to build on the GPS CHILE and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{URL::asset('img/gps.png')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">GPS CHILE</h5>
            <p class="card-text">Some quick example text to build on the GPS CHILE and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection