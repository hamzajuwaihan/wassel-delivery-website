<div>
<a href="{{route('admin.movie_create')}}" class="btn btn-primary">movie create</a>
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
                    <td><a href="{{route('admin.movie_update', $movie->id)}}">edit</a> <button wire:click="deleteMovie({{ $movie->id }})">delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
