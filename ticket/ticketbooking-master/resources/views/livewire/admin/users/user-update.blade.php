<div>
    <div class="card" style="height:500px; width:30%; margin-left:500px; margin-top:150px;">
        <div class="card-header" style="background-color:#A66CFF; color:white;">
            <h1 style="margin-left:90px;">User create</h1>
        </div>
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

                <label >name</label><br>
                <input type="text" wire:model="name" class="form-control"><br>   
                <label >email</label><br>
                <input type="email" wire:model="email" class="form-control"><br>
                <label >password</label><br>
                <input type="password" wire:model="password"  class="form-control"><br>
                <label >phone</label><br>
                <input type="text" wire:model="phone"  class="form-control"><br>
                <input type="submit" wire:click="store" class="btn btn-primary"  style="margin-left:170px;">
        </div>
    </div>
</div>
