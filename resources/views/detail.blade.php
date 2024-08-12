@extends("dummy")

@section("content")
<div class="container">
    <div class="row">
        @if(isset($trending))
        <div class="col-6">
            <img src="/{{$trending->gallery}}" class="img-fluid my-5 ps-5" alt="Product Image" style="height:550px; width:550px;">
        </div>

        <div class="col-6 position-relative" style="height: 500px;">
            <div>


                {{-- <form ac tion="{{ url()->previous() }}" method="get">
                    <button type="submit" class="btn btn-secondary">Back</button>
                </form> --}}
                
                <div class="name pt-5 fs-1 text-success" style="margin-top:50px;  ;">Product: {{$trending->name}}</div>
                <div class="price fs-1 mt-3  text-primary">Price: ${{$trending->price}}</div>
            </div>
            <button onClick="Window.history.back()" class="text-dark fs-5 mt-5  btn btn-danger" style="width:110px">Go back</button>
            <div class="addTo position-absolute mt-3">
              <form action="{{Route('addToCart')}}" method="POST">
                    @csrf
                <input type="text" name="id" value={{$trending->id}}>
                <button class="btn btn-primary addtocart mt-3" style="width:110px">Add to Cart</button>
                </form>
            </div>
            <div class="addTo position-absolute bottom-0 mt-5">
                <button class="btn btn-warning buynow mb-3" style="width:110px">Buy now</button>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection