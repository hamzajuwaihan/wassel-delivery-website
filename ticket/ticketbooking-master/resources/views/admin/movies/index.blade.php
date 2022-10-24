<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movies Index</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>

        <form action="{{ route('admin.movies.index') }}" method="get">
            <input type="search" name="name" >
            <button class="btn btn-info">search</button>
        </form>
        <a href="{{route('admin.movies.create')}}" class="btn btn-primary">movie create</a>
        <table class="table table-bordered table-dark" style="margin-top:20px;">
            <thead class="table-primary">
                <tr>
                    <th> theatre name </th>
                    <th> Movie name </th>
                    <th> genres </th>
                    <th> time </th>
                    <th> date </th>
                    <th> price </th>
                    <th> opration </th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->theatre->name }}</td>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->genres }}</td>
                    <td>{{ $movie->time }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>{{ $movie->price }}</td>
                    <td><a href="{{route('admin.movies.update', $movie->id)}}">edit</a> <a href="{{route('admin.movies.delete', $movie->id)}}">delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>

