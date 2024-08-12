@extends('dummy')

@section('content')
<div class="container">
   
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
            @foreach ($pod as $item)
                
        
          <div class="carousel-item {{$item['id']==6?'active':''}} " >
            <img src="{{$item['gallery']}}" class="d-block w-50 img-fluid mx-auto" alt="..." style="height:500px; width:500px;" >
            <p>{{$item['name']}}</p>
          </div>
         
          @endforeach
</div>
       
        <button class="carousel-control-prev text-dark " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bg-secondary " aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button> 
        <button class="carousel-control-next text-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon bg-secondary" aria-hidden="true" ></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>  
</div>


<div class="container">
    <div class="row">
    <div class="col-6 m-auto text-center fs-1">

       Trending Products
    </div></div>
   
        <div class="row my-5">
            @foreach ($pod as $item)
            <div class="col-3">
    <div class="card" >
     <a href="detail/{{$item['id']}}"> <img src="{{$item['gallery']}}" class="card-img-top img-fluid" alt="..." style="height:200px;">
        <div class="card-body">
          <h5 class="card-title">{{$item['name']}}</h5>
          <p class="card-text">{{$item['Description']}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </a>
      </div>
</div>
@endforeach



    </div></div>

</div>
@endsection