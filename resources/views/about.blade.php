<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce-About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
    <h1 class="text-center fs-1"> About<h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 ">
                     
                </div>
                <div class="col-2 fs-5 text-end" >
                    <a href="{{url('/about/en')}}">English</a>
                    <a href="{{url('/about/hin')}}">Hindi</a>
                    <a href="{{url('/about/pun')}}">Punjabi</a>
                </div>
            </div>
        </div>
        <h1 class="fs-3 text-center text-warning">@lang('message.welcome')</h1></br></br>
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                    <div class="col-10">
                        <p class="text-dark fs-3">@lang('message.main')</p>
                    </div>
                    <div class="col-1"></div>
            </div>
        </div>
       

</body>
</html>