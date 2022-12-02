<?php

use App\Http\Controllers\productController;
$total=0;
if(Session::has('user'))
{
  $total = productController::cardItem();
}
else {
  
}


?>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">E-Comm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/aboutus">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('products')}}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('myorder')}}">Orders</a>
          </li>
        </ul>

        <li class="nav-item" style="list-style:none;">
          <a class="text-right text-dark me-3" style="text-decoration: none;"  href="/cartlist"><i class="fa fa-shopping-cart fs-5">({{$total}})</i></a>
        </li>
      </ul>
        

        <form class="d-flex" action="/search" role="search">
          <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        @if(Session::has('user'))
        <li class="nav-item dropdown"  style="list-style:none;">
          <a class="nav-link dropdown-toggle mx-2" style="text-decoration: none;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" style="--bs-dropdown-item-padding-y: 2px;" href="/myprofile/{{Session::get('user')['id']}}">Myprofile</a></li>
            <li><a class="dropdown-item" style="--bs-dropdown-item-padding-y: 2px;" href="/forgot">Logout</a></li>
          </ul>
          @else
            <li style="list-style: none"><a class="dropdown-item mx-2" style="--bs-dropdown-item-padding-y: 2px; text-decoration: none; font-waight:bold;" href="/login">Login</a></li>
            <li style="list-style: none"><a class="dropdown-item mx-2" style="--bs-dropdown-item-padding-y: 2px; text-decoration: none; font-waight:bold;" href="/ragister">Ragister</a></li>
            @endif
        </li>
      </div>
    </div>
  </nav>