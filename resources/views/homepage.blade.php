<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La mia cucina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-secondary">
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
    <h1 class="text-center text-danger">La mia cucina</h1>

    <div class="container">
        <div class="row">
            @foreach ($recipes as $recipe)
               <div class="col-12 col-md-6 mb-2">
                <div class="card img-fluid" style="width:100%;">
                  <img src="{{$recipe['image']}}" class="card-img-top img-fluid" alt="..." style="height: 350px">
                  <div class="card-body">
                    <h5 class="card-title"> {{$recipe['name']}} </h5>
                    <p class="card-text h6">Provenienza: {{$recipe['region']}} </p>
                    <p class="card-text"> <span class="text-center h5">Il procedimento: <br></span> {{$recipe['description']}} </p>
                    <p class="card-text h6">Tipo di piatto: {{$recipe['category']}}</p>
                    <a href=" {{route('dettaglio-ricetta',['id'=>$recipe['id']])}}" class="btn btn-primary">pagina ricetta</a>
                  </div> 
                </div>
              </div> 
            @endforeach
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>