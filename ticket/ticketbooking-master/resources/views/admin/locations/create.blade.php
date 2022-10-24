<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>location create</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <div class="card" style="width:30%; margin-left:500px; margin-top:150px;">
            <div class="card-header" style="background-color:red; color:white;"><h2 style="margin-left:100px;">Location Create</h2></div>
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
                <form action="{{route('admin.locations.store')}}" method="post" class="form">
                    @csrf
                    <label >State Name</label><br>
                    <input type="text" name="state" class="form-control"><br>   
                    <label >Location Name</label><br>
                    <input type="text" name="name" class="form-control"><br>
                    <input type="submit" value="submit" class="btn btn-primary" style="margin-left:170px">
                </form>
            </div>
        </div>
    </body>
</html>


