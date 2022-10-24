@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
@endif

    <form action="{{route('admin.bookings.store')}}" method="post">
        @csrf
        <label >user name</label><br>
        <select name="user_id">
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>

        <label >location name</label><br>
        <select name="location_id" id="location_id" onchange="locationUpdated()">
            @foreach($locations as $loc)
            <option value="{{$loc->id}}">{{$loc->name}}</option>
            @endforeach
        </select><br>
        
        <label >theatre name</label><br>
        <select name="theatre_id" id="theatre_id" onchange="theatreUpdated()"></select><br>

        <label >movie name</label><br>
        <select name="movie_id" id="movie_id" onchange="priceUpdated()"></select><br> 

        <label >quantity</label><br>
        <input id="quantity" type="number" onchange="priceUpdated()" name="quantity" value=1><br>

        <label >price</label><br>
            <input id="price" type="text" name="price"><br>
        <label > total price</label><br>
        <input type="text" name="total_price" id="total"><br>
        <input type="submit" value="booking">
    
    </form>

<script>
    var locations = @json($locations);
    var movies = @json($movies);
    var theatres = @json($theatres);


    function locationUpdated(){
        var selectedLocation = document.getElementById('location_id').value;
        // console.log(selectedLocation);
        document.getElementById('theatre_id').innerHTML = '';

        theatres
            .filter(t => t.location_id == selectedLocation)
            .map(t => {
                document.getElementById('theatre_id').innerHTML += '<option value="'+ t.id +'">'+ t.name +'</option>';
            })

        // for(i = 0; i < theatres.length; i++){
        //     if (theatres[i].location_id == selectedLocation) {
        //         var opt = document.createElement('option');
        //         opt.value = theatres[i].id;
        //         opt.innerHTML = theatres[i].name;
        //         document.getElementById('theatre_id').append(opt);
        //     }
        // }

        theatreUpdated();
    }

    function theatreUpdated(){
        var selectedTheatre = document.getElementById('theatre_id').value;
        document.getElementById('movie_id').innerHTML ='';

        movies 
            .filter(m => m.theatre_id == selectedTheatre)
            .map(m => {
                document.getElementById('movie_id').innerHTML += '<option value="'+ m.id +'">'+  m.name +'</option>';
            });

        priceUpdated();
    }

    function priceUpdated()
    {
        var selectMovie = document.getElementById('movie_id').value;
        for(i =0 ; i< movies.length; i++){
            if(selectMovie == movies[i].id)
            {
                var price = document.getElementById('price').value = movies[i].price;
                var quantity = document.getElementById('quantity').value;
                document.getElementById('total').value =price * quantity;
            }
        }
        
    }

    window.addEventListener('load', function() {
        locationUpdated();
    });
</script>