@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
<form action="{{route('admin.users.update',$users->id)}}" method="post" >
    @csrf
    <label >name</label><br>
    <input type="text" name="name" value="{{old ('name', $users->name )}}"><br>   
    <label >email</label><br>
    <input type="email" name="email" value="{{old ('email', $users->email )}}"><br>
    <label >password</label><br>
    <input type="password" name="password" value="{{old ('password', $users->password )}}"><br>
    <label >phone</label><br>
    <input type="text" name="phone" value="{{old ('phone', $users->phone )}}"><br>
    <input type="submit" value="submit">
</form>
