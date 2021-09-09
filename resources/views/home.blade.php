<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Model-controller</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
<div class="container-fluid mt-2">
           
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Welcome!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Choose</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">and</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">enjoy!</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Movies
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>
            </div>
        
        </nav>
            </div>

        <main class="container mt-2">
            <div class="row">
                    @foreach($allMovies as $movie)
                        <div class="movie-content col-2">
                            <img src="{{ $movie->cover }}" alt="copertina"/>
                            <h4>{{$movie->title}}</h4>
                            <div class="content-text">
                              <span>Date: {{$movie->date}}</span>
                              <span>Vote: {{$movie->vote}}</span>
                              <span>{{$movie->nationality}}</span>
                            </div>
                        </div>
                    @endforeach
                
            </div>
        </main>
</div>


</body>
</html>
 
