@extends('layouts')
@section('contant')
<div class="container">
    @include('flashdata')
    <h1 class="text-center my-3">Cart list</h1>
<table frame="top" border="3" style="text-align:center;" cellpadding="20px"   class="table table-bordered py-0  ">
    <thead>
    <tr>
        <th>Name</th>
        <th>Prise</th>
        <th>Description</th>
        <th>Image</th>
        <th>Remove Product</th>
        <th>Order Now</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($product as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->description}}</td>
        <td><img src="{{$item->gallery}}" height="70px" width="100px"/></td>
        <td><a href="/remove/{{$item->cart_id}}"><button class="btn btn-warning">Remove Item</button></a></td>
        <td><a href="/ordernow"><button class="btn btn-info">Order now</button></a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection