<div>
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
                <td><a href="{{route('admin.location_update',$loc->id)}}">edit</a> <button wire:click="deleteLocation({{ $loc->id }})">delete</button></td>
            </tr>
            @endforeach
            <a href="{{route('admin.location_create')}}" class="btn btn-primary">location create</a>
        </tbody>
    </table>
</div>
