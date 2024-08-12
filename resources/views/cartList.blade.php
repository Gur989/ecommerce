@extends('dummy')

@section('content')

<div class="container-fluid" style="background-color: #FAF9F6   ">
    

    @foreach ($data as $items)
    <div class="container">
    <div class="row ms-5 mt-5">
    <div class="col-5 card ms-5" style="width:28rem">
           <img src="{{$items->gallery}}" class=" card-img-top img-fluid mx-auto" style="width:70%; height:70%">
        <div class="card-body ">
            <div class="card-title">
                {{$items->name}}
            </div>
            <div class="card-text">
                <div class="prce">{{$items->price}}</div>
              <div class="desc">{{$items->Description}}</div>  
            </div>
        </div>
    </div>
    
       <div class="col-3 rmve my-auto ms-5" style="height:10%"> <button class="btn btn-warning rounded-pill "><a href="/remove/{{$items->id}}" class="text-dark">Remove from the cart</a></button>
       </div>
    </div>
</div>

     @endforeach

</div>

@endsection