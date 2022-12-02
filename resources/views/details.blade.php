@extends('layouts')
@section('contant')
<div class="container">
<div class="row details">
    <div class="col-sm-6">
       <img src="{{$product['gallery']}}" height="350px"/>
    </div>
    <div class="col-sm-6">
       <a href="/products">Go back</a>
       <h2>{{$product['name']}}</h2>
       <p>{{$product['description']}}</p>
       <form action="/add_to_cart" method="POST">
         <input type="hidden" name="product_id" value="{{$product['id']}}" />
         @csrf
         <button class="btn btn-success">Add to cart</button><br/><br/>
       </form>
       ,<a href="/ordernow"><button class="btn btn-primary">Buy Now</button></a>
       
    </div>
</div>
</div>
@endsection