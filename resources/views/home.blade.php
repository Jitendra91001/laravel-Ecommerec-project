@extends('layouts')
@section('contant')
 {{-- start slider --}}
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{('/images/1.png')}}" height=400px; class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{('/images/2.jpg')}}" height=400px; class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{('/images/1.jpg')}}" height=400px; class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
  {{-- end slider --}}
<div class="container">
  <h1 class="text-center text-primary">Our new Products</h1>
    <div class="row">
        @foreach ($product as $item)
        <div class="card" style="width: 18rem; margin:15px;">
            <a href="details/{{$item['id']}}" >
            <img src="{{$item['gallery']}}"width="200px"height="200px" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title">{{$item['name']}}</h5>
              <p class="card-text">{{$item['description']}}</p>
              <a href="details/{{$item['id']}}" class="btn btn-primary">Details</a>
            </div>
          </div>     
            @endforeach
        </div>
</div>
</div>
@endsection