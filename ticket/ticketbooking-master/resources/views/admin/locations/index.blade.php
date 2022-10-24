<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>location index</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/customer/create.css')}}">
    </head>
    <body>
        <table class="table table-bordered table-dark" style="margin-top:10px;">
                <thead class="table-primary">
                    <tr>
                        <th>location name</th>
                        <th>state name</th>
                        <th>opration</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($locations as $loc)
                    <tr>
                        <td>{{$loc->name}}</td>
                        <td>{{$loc->state}}</td>
                        <td><a href="{{route('admin.locations.update',$loc->id)}}">edit</a> <a href="{{route('admin.locations.delete',$loc->id)}}">delete</a></td>
                    </tr>
                    @endforeach
                    <a href="{{route('admin.locations.create')}}" class="btn btn-primary">location create</a>
                </tbody>
            </table>
    </body>
</html>


   