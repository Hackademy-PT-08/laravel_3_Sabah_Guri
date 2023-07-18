<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La ma mia cucina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg  bg-body-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href=" {{route('homepage')}} ">Le mie ricette</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=" {{route('homepage')}} ">Home</a>
              </li>
              
  
             
            </ul>
          </div>
        </div>
      </nav>

    {{-- titolo --}}
    <h3 class="text-center h1">Ricette per regione</h3>
   
    {{-- card ricetta --}}
    <div class="container">
        <div class="row justify-content-center me-3">
            @foreach ($recipes as $recipe)
            <div class="col-12 col-md-6">
                <div class="card" style="width: 100%;">
                    <img src="{{$recipe['image']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"> {{$recipe['name']}} </h5>
                      <p class="card-text">{{$recipe['description']}} </p>
                      <a href=" {{route('dettaglio-ricetta',['id'=>$recipe['id']])}}" class="btn btn-primary">Pagina dettaglio </a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>