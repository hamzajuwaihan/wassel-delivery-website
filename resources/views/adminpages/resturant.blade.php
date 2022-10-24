@extends('adminpages.layout.master')
@section('content')
<div class="content-wrapper ">
<div class="page-heading" style="margin-left: 300px; width:1200px">
    
        <div class="page-title ">
            <div class="row">
                <div class="col-10 col-md-6 order-md-1">
                    <h3 class="m-5">All Restaurants</h3>
                </div>
             
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <section class="section container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between; align-items:center">
                    <div>All Restaurants Table</div>
                    <a href="/add_resturant"><button class="btn btn-primary">Add Restaurants</button></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 100px;">Restaurant Logo</th>
                                <th>Restaurant Name</th>
                                <th>Restaurant Phone</th>
                                <th>Restaurant Location</th>
                                <th>longitude</th>
                                <th>latitude</th>

                                {{-- <th>Restaurant Website</th> --}}
                                <th style="width: 250px;">Adjustments</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($restaurants as $restaurant)
                                <tr>
                                    <td>{{ ++$i }}           </td>
                                    
                                        <td><img src="/images/{{ $restaurant->image }}" width="100px" height="100px;"></td>
                                     <!-- <img class="avatar me-2" style="object-fit: cover" width="50" height="50"
                                            src=""> -->
                                   
                                    <td>{{ $restaurant->name }}</td>
                                    <td>{{ $restaurant->phone }}</td>
                                    <td>{{ $restaurant->location }}</td>
                                    <td>{{ $restaurant->longitude }}</td>
                                    <td>{{ $restaurant->latitude }}</td>
                                   
                                    <td style="width: 250px;">
                                         <!-- edit button -->
                                        

                                        <form style="display: inline-block" method="POST"
                                        action="{{ route('dashboardrestaurants.destroy',$restaurant->id) }}"onsubmit="return confirm('Are you sure?');">
                                        <a class="btn btn-primary" href="{{ route('dashboardrestaurants.edit', $restaurant->id) }}">Edit</a>
                                          <!-- Delete button -->
                                          @csrf
                                          @method('DELETE')
                                            <button class="btn text-primary">Delete<i class="far fa-trash-alt"></i></button>
                                        </form> 
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                       
                    </table>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection
