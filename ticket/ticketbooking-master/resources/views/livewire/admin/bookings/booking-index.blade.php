<div>
    <table class="table table-bordered table-dark" style="margin-top:20px;">
        <thead class="table-primary">
            <tr>
                <th>id</th>
                <th>user id</th>
                <th>theatre name</th>
                <th>movie name</th>
                <th>quantity</th>
                <th>total price</th>
                <th>opration</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($bookings as $booking)
            <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->user->name}}</td>
                <td>{{$booking->theatre->name}}</td>
                <td>{{$booking->movie->name}}</td>
                <td>{{$booking->quantity}}</td>
                <td>{{$booking->total_price}}</td>
            <td><button wire:click="deleteBooking({{$booking->id}})">delete</button> </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('admin.booking_create')}}">booking create</a>
</div>
