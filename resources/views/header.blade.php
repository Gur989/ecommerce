<?php

use App\Models\cart;
use Illuminate\Support\Facades\Session;
$userId= Session::get('user')['id'];

$crt=cart::select('userId')->where('userId',$userId)->get();
?>




<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand me-3" href="#">Ecommerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item me-3">
            <a class="nav-link " aria-current="page" href="{{route('productInfo')}}">Home</a>
          </li>   
          <li class="nav-item me-3">
            <a class="nav-link" href="#">Orders</a>
          </li>
        </ul>
        <form action="{{route('search')}}" class="d-flex me-auto w-50" role="search">
          @csrf
          <input class="form-control me-2" type="search" name="serch" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><a href="{{route('search')}}"> Search</button>
        </form>
      
        <ul class=" navbar-nav list-unstyled  mb-2 mb-lg-0 me-3">
        <li class="nav-item  ">
            <a class="nav-link my-auto" href="{{Route('cartList')}}">cart({{count($crt)}})</a>
        </li>
    </ul>
    <li class="nav-item dropdown list-unstyled me-3">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
       {{Session::get('user')['name']}}</a>
      <ul class="dropdown-menu list-unstyled me-2">
        <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
       
      </ul>
    </li>
  
      </div>
    </div>
  </nav>