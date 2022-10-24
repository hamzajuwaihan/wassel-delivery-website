<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin dashboard</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
    </head>
    <body>
        <div class="card" style="width:20%; height:150px;margin-bottom:20px; margin-left:50px; margin-top:20px;">
            <a href="{{route('admin.location_index')}}">location page</a><br>
        </div>  
        <div class="card" style="width:20%; height:150px;margin-bottom:20px; margin-left:50px;">
            <a href="{{route('admin.theatres.index')}}">theatre page</a><br>
        </div>  
        <div class="card" style="width:20%; height:150px;margin-bottom:20px; margin-left:50px;">
            <a href="{{route('admin.movies.index')}}">movies page</a><br>
        </div>

        <a href="{{ route('admin.logout') }}">Logout</a>
    </body>
</html>


