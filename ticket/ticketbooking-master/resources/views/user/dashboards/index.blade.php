<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>user dashboard</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/user/dashboard/header.css')}}">
    </head>
    <body>
        <div class="header">
            <h1>TENTUKOTTAI</h1>
            <img src="/images/icon.png" class="image">
            <div class="search">
                <form action="{{route('user.dashboard')}}" method="get" class="form">
                    <input type="search" name="name" class="form-control" >
                    <input type="submit" value="search" class="btn">
                </form>
            </div> 
                <a href="{{route('user.logout')}}" class="btn" id="logout">logout</a>
                <a href="{{route('user.create')}}" class="btn" id="register">Register</a> 
        </div>

        <h3 class="title1">All movies</h3><br>
        <div class="all_movies">
            @foreach($movies as $movie)
                <div class="movie">
                    <div class="content" style="text-align:center;"> <img src="/images/{{$movie->images}}" style="width:200px;" class="images"><br><a href="{{route('user.bookings.create',$movie->id)}}" class="movie_title">{{$movie->name}}</a> <h6>{{$movie->genres}}</h6> <h6>{{$movie->time}}</h6></div>
                </div>
            @endforeach
        </div>

        <h3 class="title2">Action And Drama</h3>
        <div class="genres">
            @foreach($genres as $genre)
                <div class="genre">
                    <div class="content1"> <img src="/images/{{$genre->images}}" class="images" ><br> <a href="{{route('user.bookings.create',$movie->id)}}" class="movie_title1">{{$movie->name}}</a> <h6 class="ti">{{$genre->genres}}<h6> <h6 class="ti1">{{$movie->time}}</h6></div>
                </div>
            @endforeach    
        </div>

    </body>
</html>
