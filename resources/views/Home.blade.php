<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
    <title>Document</title>
    {{-- <style>
        Ajoutez le style pour le conteneur des cartes
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            width: 30%;
            margin: 10px;
        }

        .card img {
            width: 100%;
            height: auto;
        }
    </style> --}}
</head>
<body>
@extends('Master')
@section('title', 'Home')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
    <ol class="carousel-indicators"> 
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> 
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
    </ol> 
    <div class="carousel-inner"> 
    <div class="carousel-item active"> 
        {{-- <div class="carousel-caption d-none d-md-block" id="bestf"> 
            <h1 class="besth1"> Find your new best friend</h1>  
        </div>  --}}
        <img class="d-block  img-fluid" src="{{ asset('imgs/zyro-image (1).png') }}" width="1000px" height="600px"  alt="First slide"> 
        <div class="carousel-caption d-none d-md-block my-5"> 

                <h3 class="home_h3"><span>Hi </span> Welcome To Our Pet Morocco Adoption </h3> 
                <a href="#" class="btnhome">Adopt Now</a> 
            
           
        </div> 
    </div> 
    <div class="carousel-item"> 
        <img class="d-block img-fluid" src="{{ asset('imgs/8d887821-ec92-4bcf-a949-2d417b42a8e8.jpg') }}"width="1000px" height="600px"  alt="Second slide"> 
        <div class="carousel-caption d-none d-md-block my-5"> 
            <h3 class="home_h3"><span>Hi </span> Welcome To Our Pet Morocco Adoption </h3> 
            <a href="#" class="btnhome">Adopt Now</a> 
        </div> 
    </div> 
    <div class="carousel-item"> 
        <img class="d-block  img-fluid" src="{{ asset('imgs/e9f1e614-ba41-434d-b151-7937468c50ab.jpg') }}" width="1000px" height="600px"  alt="Third slide"> 
        <div class="carousel-caption d-none d-md-block my-5"> 
            <h3 class="home_h3"><span>Hi </span> Welcome To Our Pet Morocco Adoption </h3> 
            <a href="#" class="btnhome">Adopt Now</a> 
        </div> 
    </div> 
    </div> 
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> 
    <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
    <span class="sr-only">Previous</span> 
    </a> 
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> 
    <span class="carousel-control-next-icon" aria-hidden="true"></span> 
    <span class="sr-only">Next</span> 
    </a> 
</div>

{{-- <div class="card-container">
    @foreach($products as $item)
        <div class="card">
            <img class="card-img-top" src="{{ asset('imgs/' . $item['image']) }}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">{{ $item['titre'] }}</h4>
                <p class="card-text">{{ $item['prix'] }}</p>
                <a href="#" class="btn btn-dark">voir detail</a>
            </div>
        </div>
    @endforeach
</div>
{{ $products->links('pagination::bootstrap-4') }} --}}
@endsection

</body>
</html>
