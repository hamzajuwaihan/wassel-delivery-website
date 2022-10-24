<div>
    <div class="card" style="width:30%; margin-left:550px; margin-top:150px;">
        <div class="card-header" style="background-color:red;"><h2 style="color:white; margin-left:90px;" >Location Update</h2></div>
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

                <label >State Name</label><br>
                <input type="text" wire:model="state" value="{{ old( 'state', $location->state )}}" class="form-control"><br>   
                <label >Location Name</label><br>
                <input type="text" wire:model="name" value="{{old( 'name', $location->name)}}" class="form-control"><br>
                <input type="submit" wire:click="update" class="btn btn-primary" style="margin-left:150px;">
        </div>
    </div>
</div>
