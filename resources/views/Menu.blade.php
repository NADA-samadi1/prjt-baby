{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">SHOPPING</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/produits/Homme">Homme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produits/Femme">Femme</a>
        </li>
       
      </ul>
    </div>
  </nav> --}}

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/Menu.css') }}">
  </head>
  <body>
    
    <nav class="navbar">
      <div class="nav">
          <img src="{{ asset('/imgs/logo3.avif') }}" class="brand-logo" alt="">
          <div class="nav-items">
              <div class="search">
                  <input type="text" class="search-box" placeholder="search brand, product">
                  <button class="search-btn">search</button>
              </div>
              <ul class="links-container">
                <li class="link-item"><a href="/" class="link">home</a></li>
                <li class="link-item"><a href="/produits/Femme" class="link">women</a></li>
                <li class="link-item"><a href="/produits/Homme" class="link">men</a></li>
                
            </ul>
              <div class="lesicons">
              <a href="/Ajouter"><img src="{{ asset('/imgs/loging.png') }}" alt=""></a>
              <a href="#"><img src="{{ asset('/imgs/cart.png') }}" alt=""></a>
            </div>
          </div>
      </div>
      </nav>
    
  
  </body>
  </html>