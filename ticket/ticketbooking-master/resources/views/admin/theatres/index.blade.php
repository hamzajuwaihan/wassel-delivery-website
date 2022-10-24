<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Theatre index</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/customer/create.css')}}">
    </head>
    <body>
        <form action="{{route('admin.theatres.index')}}" method="get" role="search">
            <input type="search" name="name">

            <button class="btn btn-info">Search</button>
        </form>
        <table class="table table-bordered table-dark">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>city name</th>
                    <th>theatre name</th>
                    <th>location name</th>
                    <th>opration</th>
                </tr>
            </thead>
            <tbody>
                @foreach($theatres as $theatre)
                <tr>
                    <td>#{{ $theatre->id }}</td>
                    <td>{{ $theatre->location->name }}</td>
                    <td>{{ $theatre->name }}</td>
                    <td>{{ $theatre->area }}</td>
                    <td><a href="{{ route('admin.theatres.update',$theatre->id)}}">edit</a> <a href="{{route('admin.theatres.delete',$theatre->id)}}">delete</a></td>
                </tr>
                @endforeach
                <a href="{{route('admin.theatres.create')}}">theatre create</a>
            </tbody>
        </table>    
    </body>
</html>

