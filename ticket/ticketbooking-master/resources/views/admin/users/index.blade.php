<table>
    <thead>
        <tr>
            <th>user name</th>
            <th>email </th>
            <th>password</th>
            <th>phone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->phone}}</td>
            <td><a href="{{route('admin.users_update', $user->id)}}">edit</a> <a href="{{route('admin.users.delete', $user->id)}}">delete</a></td>
        </tr>
        @endforeach
        <a href="{{route('admin.users.create')}}">users create</a>
    </tbody>
</table>