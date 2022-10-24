<div>
    <div class="card" style="width:30%; margin-left:500px; margin-top:170px;">
        <div class="card-header" style="background-color:#A66CFF;"><h2 style="color:white; margin-left:80px;">Theatre Update</h2></div>
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
                    <label >City Name</label><br>
                    <select name="location_id" class="form-control">
                        @foreach($location as $loc)
                        <option value="{{$loc->id}}">{{$loc->name}}</option>
                        @endforeach
                    </select><br>
                    <label >State Name</label><br>
                    <input type="text" wire:model="name" class="form-control"><br>   
                    <label >Location Name</label><br>
                    <input type="text" wire:model="area" class="form-control"><br>
                    <input type="submit" wire:click="update" class="btn btn-primary" style="margin-left:150px;">
        </div>
    </div>
</div>
