<div>
            <!-- <input type="search" name="name">
            <button class="btn btn-info">Search</button> -->
        <table class="table table-bordered table-dark">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>city name</th>
                    <th>theatre name</th>
                    <th>location name</th>
                    <th>opration</th>
                </tr>
            </thead>
            <tbody>
                @forelse($theatres as $theatre)
                <tr>
                    <td>#{{ $theatre->id }}</td>
                    <td>{{ optional($theatre->location)->name }}</td>
                    <td>{{ $theatre->name }}</td>
                    <td>{{ $theatre->area }}</td>
                    <td><a href="{{route('admin.theatre_update',$theatre->id)}}">edit</a> <button wire:click="deleteTheatre({{ $theatre->id }})">delete</button></td>
                </tr>
                @empty
                    <p>unavalable theatre</p>

                @endforelse
                
            </tbody>
        </table>    
</div>
