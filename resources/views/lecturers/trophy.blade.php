@extends('layouts.app')

@section('content')
@include('students.include.information_partials')
<div class="container">
  <div class="row">
    <div class="col-2">
      <!-- One of three columns -->
      <img class="slider_img" src="https://images-na.ssl-images-amazon.com/images/I/61AyBTPUIIL._AC_SX425_.jpg">
    </div>
    <div class="col">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="slider_img" src="{{asset('images/ucl5.png')}}" alt="Los Angeles" style="">
    </div>

    <div class="item">
      <img class="slider_img" src="{{asset('images/ucl3.jpg')}}" alt="Chicago">
    </div>

    <div class="item">
      <img class="slider_img" src="{{asset('images/ucl1.jpg')}}" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    <div class="col-2">
      <!-- One of three columns -->
      <img class="slider_img" src="https://images-na.ssl-images-amazon.com/images/I/61AyBTPUIIL._AC_SX425_.jpg">
    </div>
  </div>
</div>

@endsection