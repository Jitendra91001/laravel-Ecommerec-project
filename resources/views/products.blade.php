@extends('layouts')
@section('contant')
<div class="container">
  <h1 class="text-center text-primary">Our new Products</h1>
    <div class="row">
        @foreach ($product as $item)
        <div class="card" style="width: 18rem; margin:15px;">
            <a href="details/{{$item['id']}}" >
            <img src="{{$item['gallery']}}"width="200px"height="200px" class="card-img-top" alt="..."/>
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