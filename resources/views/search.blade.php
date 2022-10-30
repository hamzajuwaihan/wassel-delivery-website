@extends('layouts.app')
@section('content')
    <div class="container"></div>


    <br>
    <div class=" row justify-content-center">
        <form method="GET" action="search" class="row gx-2 gy-2 justify-content-center">
            <div class="col-8 align-items-center
    ">
                <div class="input-group-icon"><i class="fas fa-search input-box-icon text-primary"></i>
                    <label class="visually-hidden" for="inputDelivery">Address</label>
                    <input name="search" value="{{ request()->get('search') }}"
                        class="form-control input-box form-foodwagon-control" id="inputDelivery" type="text"
                        placeholder="Search Your Favourite Food" />
                </div>
            </div>
            <div class="d-grid gap-3 col-sm-auto">
                <button class="btn btn-danger" type="submit">Find Food</button>
            </div>
        </form>
    </div>



    <div class="container mt-5 md-5" >
        @if (count($restaurants) == 0)
        <div style="height: 500px;">
            <h1>No Restaurants Found</h1>
        </div>
        @else
            <div class="row gx-2 mt-5">
                @foreach ($restaurants as $restaurant)
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5 mx-4">
                        <a href="{{ route('restaurants.show', $restaurant->id) }}">
                            <div class="card card-span h-100 text-white rounded-3 ">
                                {{-- <img src="images/{{ $restaurant->image }}" class="img-fluid rounded-3 h-100" style="height:300px;" /> --}}
                                <img class="img-fluid rounded-3 " src="./images/{{ $restaurant->image }}" alt="..."
                                    style="height: 300px;" />
                                <div class="card-body ps-0">
                                    <div class="d-flex align-items-center mb-3"><img class="img-fluid"
                                            src="assets/img/gallery/Ce.JPG" width="50px" height="50px" alt="" />
                                        <div class="flex-1 ms-3">
                                            <h5 class="mb-0 fw-bold text-1000"> {{ $restaurant->name }}</h5><span
                                                class="text-primary fs--1 me-1"><span
                                                    class="mb-0 text-primary">{{ $restaurant->location }}</span>
                                        </div>
                                    </div>


                                    <span class="badge bg-soft-success p-2">
                                        <span class="fw-bold fs-1 text-success ">
                                            {{ $restaurant->status }}
                                        </span>
                                    </span>



                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        @endif

    </div>
    </body>

    </html>
@endsection
