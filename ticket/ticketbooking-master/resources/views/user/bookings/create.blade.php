<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>user login</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/user/booking/create.css')}}">
    </head>
    <body>
        <div class="card" style="width:30%; height:400px; margin-left:500px; margin-top:150px;">
            <div class="card-header" style="background-color:red; height:50px;">
                
            </div>
            <div class="card-body">
                <form action="{{route('user.bookings.store',$movie->id)}}" method="post" class='form'>
                    @csrf
                    <p>theatre_name : {{$movie->theatre->name}}</p>
                    <p>movie_price : {{$movie->price}}</p>
                    <p>location name : {{$theatre->location->name}}</p>
                    <label class="text">quantity</label><br>
                    <input type="number" name="quantity" id="quantity" oninput="priceUpdated()" value=1 class="form-control"><br>
                    <label class="text">total price</label><br>
                    <input type="text" name="total_price" id="total" class="form-control"><br>
                    <input type="submit" value="booking" class="btn btn-danger" style="margin-left:150px;">
                </form>
                <script>
                    var movie = @json($movie);
                    function priceUpdated()
                    {
                        var quantity = document.getElementById('quantity').value;
                        if(quantity > 0)
                        {
                            document.getElementById('total').value = quantity * movie.price;   
                        }
                        else{
                            document.getElementById('quantity').value =1;
                        }   
                    }
                </script>
            </div>
        </div>
    </body>
</html>
