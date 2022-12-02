@extends('layouts')
@section('contant')
<div class="container">
  <h1 class="text-center text-primary">Our new Products</h1>
    <div class="row">
        @foreach ($orders as $item)
        <div class="card" style="width: 18rem; margin:15px;">
            <img src="{{$item->gallery}}"width="200px"height="200px" class="card-img-top" alt="..."/>
            <div class="card-body">
              <table class="table table-bordered">
                <tr class="m-auto">
                    <th>Name</th>
                    <td>{{$item->name}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$item->description}} </td>
                </tr>
                <tr>
                    <th>Payment_method&nbsp;&nbsp;&nbsp; </th>
                    <td> {{$item->payment_method}}  </td>
                </tr>
                <tr>
                    <th>Payment_status&nbsp;&nbsp;&nbsp; </th>
                    <td>{{$item->payment_status}} </td>
                </tr>
                <tr>
                    <th>Deliary_stutas&nbsp;&nbsp;&nbsp; </th>
                    <td> {{$item->status}}  </td>
                </tr>
                <tr>
                    <th>Address&nbsp;&nbsp;&nbsp; </th>
                    <td> {{$item->address}}</td>
                </tr>

              </table>
            </div>
          </div>    
            @endforeach
        </div>
</div>
</div>
@endsection