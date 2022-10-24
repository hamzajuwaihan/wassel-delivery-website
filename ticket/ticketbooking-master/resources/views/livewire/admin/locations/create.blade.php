<div>
    <div class="card" style="width:30%; margin-left:500px; margin-top:150px;">
        <div class="card-header" style="background-color:#A66CFF; color:white;"><h2 style="margin-left:100px;">Location Create</h2></div>
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
                <input type="text" wire:model="state" class="form-control"><br>   
                <label >Location Name</label><br>
                <input type="text" wire:model="name" class="form-control"><br>
                <input type="submit" wire:click="store" class="btn btn-primary" style="margin-left:170px">
        </div>
    </div>
</div>
