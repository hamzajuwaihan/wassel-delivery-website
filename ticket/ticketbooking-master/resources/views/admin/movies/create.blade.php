<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie create</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/customer/create.css')}}">
    </head>
    <body>
        <div class="card" style="width:30%; margin-left:500px; margin-top:20px; padding-bottom:20px;">
            <div class="card-header" style="background-color:red"><h2 style="color:white; margin-left:100px;">Movie Create</h2></div>
            <div class="card-body">
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('admin.movies.store')}}" method="post" enctype="multipart/form-data" class="form">
                    @csrf
                    <label >theatre Name</label><br>
                    <select name="theatre_id" class="form-control">
                        @foreach($theatres as $theatre)
                        <option value="{{$theatre->id}}">{{$theatre->name}}</option>
                        @endforeach
                    </select><br>
                    <label >Movie Name</label><br>
                    <input type="text" name="name" class="form-control"><br>   
                    <label >genres</label><br>
                    <input type="text" name="genres" class="form-control"><br>
                    <label >time</label><br>
                    <input type="time" name="time" class="form-control"><br>
                    <label >date</label><br>
                    <input type="date" name="date" class="form-control"><br>
                    <label >price</label><br>
                    <input type="text" name="price" class="form-control"><br>
                    <label >image</label><br>
                    <input type="file" name="images" class="form-control"><br>
                    <input type="submit" value="submit" class="btn btn-primary"  style="margin-left:170px">
                </form>
            </div>
        </div>
    </body>
</html>


