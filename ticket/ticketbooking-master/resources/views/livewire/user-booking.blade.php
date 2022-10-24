<div>
<div class="card" style="width:30%; height:400px; margin-left:500px; margin-top:150px;">
            <div class="card-header" style="background-color:red; height:50px;">
                
            </div>
            <div class="card-body">
                
                    <p>theatre_name : {{$movie->theatre->name}}</p>
                    <p>movie_price : {{$movie->price}}</p>
                    <p>location name : {{$theatre->location->name}}</p>
                    <label class="text">quantity</label><br>
                    <input type="number" wire:model.lazy="quantity" id="quantity" value=1 class="form-control"><br>
                    <label class="text">total price</label><br>
                    <p>{{ $total_price }}</p>
                    <!-- <input type="text" wire:model="total_price" id="total" class="form-control"><br> -->
                    <input type="submit" wire:click="store" class="btn btn-danger" style="margin-left:150px;">

               
            </div>
        </div>
</div>
