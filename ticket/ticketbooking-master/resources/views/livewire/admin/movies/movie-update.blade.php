<div>
    <div class="card" style="width:30%; margin-left:500px; margin-top:20px; padding-bottom:20px;">
        <div class="card-header" style="background-color:#A66CFF"><h2 style="color:white; margin-left:100px;">Movie Update</h2></div>
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
                <select wire:model="theatre_id" class="form-control">
                    @foreach($theatres as $theatre)
                    <option value="{{$theatre->id}}">{{$theatre->name}}</option>
                    @endforeach
                </select><br>
                <label >Movie Name</label><br>
                <input type="text" wire:model="name" class="form-control"><br>   
                <label >genres</label><br>
                <input type="text" wire:model="genres" class="form-control"><br>
                <label >time</label><br>
                <input type="time" wire:model="time" class="form-control"><br>
                <label >date</label><br>
                <input type="date" wire:model="date" class="form-control"><br>
                <label >price</label><br>
                <input type="text" wire:model="price" class="form-control"><br>
                <input type="file" wire:model="images" class="form-control"><br>

                <input type="submit" wire:click="update" class="btn btn-primary" style="margin-left:170px;">
    
        </div>
    </div>
</div>
