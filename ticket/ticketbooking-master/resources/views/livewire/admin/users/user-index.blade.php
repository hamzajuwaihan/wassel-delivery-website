<div>
    <a href="{{ route ('admin.user_create')}}" class="btn btn-primary">user create </a>
    <table class="table table-bordered table-dark" style="magin-top:30px;">
        <thead class="table-primary">
            <tr>
                <th>user name</th>
                <th>email </th>
                <th>password</th>
                <th>phone</th>
                <th>opration</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->phone}}</td>
                <td><a href="{{route('admin.user_update',$user->id)}}">edit</a> <button wire:click="deleteUser({{ $user->id }})">delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
