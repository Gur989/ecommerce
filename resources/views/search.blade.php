@extends('dummy')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-6 m-auto text-center fs-3">

       Search products
    </div></div>
   
        <div class="row my-5">
            @foreach ($prod as $item)
            <div class="col-3">
    <div class="card" >
     <a href="detail/{{$item->id}}"> <img src="{{$item->gallery}}" class="card-img-top img-fluid" alt="..." style="height:200px;">
        <div class="card-body">
          <h5 class="card-title">{{$item->name}}</h5>
          <p class="card-text">{{$item->Description}}</p>
          <a href="" class="btn btn-primary">Go somewhere</a>
        </div>
    </a>
      </div>
</div>
@endforeach



    </div></div>

</div>
@endsection






