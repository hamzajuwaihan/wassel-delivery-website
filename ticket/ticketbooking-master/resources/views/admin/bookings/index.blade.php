<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin login</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <form action="{{ route('admin.bookings.index') }}" method="get">
            <input type="search" name="name" >
            <button class="btn btn-info">search</button>
        </form>

        <table class="table table-bordered table-dark" style="margin-top:20px;">
            <thead class="table-primary">
                <tr>
                    <th>id</th>
                    <th>user id</th>
                    <th>theatre name</th>
                    <th>movie name</th>
                    <th>quantity</th>
                    <th>total price</th>
                    <th>opration</th>
                </tr>
            </thead>
            <tbody> 
                @foreach($bookings as $booking)
                <tr>
                    <td>{{$booking->id}}</td>
                    <td>{{$booking->user->name}}</td>
                    <td>{{$booking->theatre->name}}</td>
                    <td>{{$booking->movie->name}}</td>
                    <td>{{$booking->quantity}}</td>
                    <td>{{$booking->total_price}}</td>
                <td><a href="{{route('admin.bookings.delete', $booking->id)}}">delete</a> </td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
