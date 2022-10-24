<div>
<div class="header">
            <h1>TENTUKOTTAI</h1>
            <img src="/images/icon.png" class="image">
            <div class="search">
                <div class="form">
                    <input type="search" wire:model="name" class="form-control" >
                    <input type="submit" wire:click="search" class="btn">
                </div>

            </div> 
                <a href="{{route('user.logout')}}" class="btn" id="logout">logout</a>
                <a href="{{route('user.create')}}" class="btn" id="register">Register</a> 
        </div>

        <h3 class="title1">All movies</h3><br>
        <div class="all_movies">
            @foreach($movies as $movie)
                <div class="movie">
                    <div class="content" style="text-align:center;"> <img src="/images/{{$movie->images}}" style="width:200px;" class="images"><br>
                    <a href="{{route('user.bookingcreate',$movie->id)}}" class="movie_title">{{$movie->name}}</a> <h6>{{$movie->genres}}</h6> <h6>{{$movie->time}}</h6></div>
                </div>
            @endforeach
        </div>

        <h3 class="title2">Action And Drama</h3>
        <div class="genres">
            @foreach($genres as $genre)
                <div class="genre">
                    <div class="content1"> <img src="/images/{{$genre->images}}" class="images" ><br> <a href="{{route('user.bookingcreate',$movie->id)}}" class="movie_title1">{{$genre->name}}</a>
                     <h6 class="ti">{{$genre->genres}}<h6> <h6 class="ti1">{{$movie->time}}</h6></div>
                </div>
            @endforeach    
        </div>

</div>
