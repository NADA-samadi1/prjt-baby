<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Ajoutez le style pour le conteneur des cartes */
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
    </style>
</head>
<body>
    @extends('Master')
   
    @section('title','Produits')
    @section('content')
    <h2>Liste des Produits de la catégorie {{ $categorie }}</h2>
    <div class="card-container">
        @foreach($products as $item)
            <div class="card">
                <img class="card-img-top" src="{{ asset('imgs/' . $item['image']) }}" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">{{$item ['titre']}}</h4>
                    <p class="card-text">{{$item ['prix']}}</p>
                    <a href="#" class="btn btn-dark">voir detail</a>
                </div>
            </div>
        @endforeach
    </div>
    @endsection
</body>
</html>
