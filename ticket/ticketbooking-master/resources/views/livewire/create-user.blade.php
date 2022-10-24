
 <div class="card" style="width:30%; margin-left:500px; margin-top:150px;">  
     <div class="card-header" style="background-color:red">
         <h2 style="color:white; margin-left:130px">User Create</h2>
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

    <label >User name</label><br>
    <input type="text" wire:model="name" class="form-control"><br>
    <label >Email id</label><br>
    <input type="email" wire:model="email" class="form-control"><br>
    <label >password</label><br>
    <input type="password" wire:model="password"  class="form-control"><br>
    <label >Phone Number</label><br>
    <input type="text"  wire:model="phone" class="form-control" ><br>
    <input type="submit" wire:click="store" class="btn btn-primary" style="margin-left:170px;">
    <a href="{{route('user.dashboard')}}">Home</a>
    </div>
