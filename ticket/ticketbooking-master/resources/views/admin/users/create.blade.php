@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif
<form action="{{route('admin.users.store')}}" method="post" >
    @csrf
    <label >name</label><br>
    <input type="text" name="name"><br>   
    <label >email</label><br>
    <input type="email" name="email"><br>
    <label >password</label><br>
    <input type="password" name="password"><br>
    <label >phone</label><br>
    <input type="text" name="phone"><br>
    <input type="submit" value="submit">
</form>
