<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin login</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/customer/create.css')}}">
    </head>
    <body>
        <div class="card" style="width:30%; margin-left:500px; margin-top:150px">
            <div class="card-header">
                <h4>Admin Login</h4>
            </div>
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

                <form action="{{route('admin.login.post')}}" method="post" class="form">
                    @csrf
                    <label >email</label>
                    <input type="email" name="email" class="form-control">
                    <label >password</label>
                    <input type="password" name="password" class="form-control" >
                    <input type="submit" value="submit" class="btn btn-primary" style="margin-top:20px; margin-left:160px">
                </form>
            </div>
        </div>
    </body>
</html>
