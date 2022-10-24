@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row gx-2 mt-5">
            @foreach ($restaurants as $restaurant)
                <div class="col-sm-6 col-md-4 col-lg-3  mb-5">
                    <a href="{{ route('restaurants.show',$restaurant->id) }}">
                        <div class="card card-span  text-white rounded-3" style="height:400px;">
                            <img class="img-fluid rounded-3 "
                                src="./images/{{ $restaurant->image }}" alt="..." style="height: 300px;"/>
                            
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3"><img class="img-fluid"
                                        src="assets/img/gallery/food-world-logo.png" alt="" />
                                    <div class="flex-1 ms-3">
                                        <h5 class="mb-0 fw-bold text-1000">{{ $restaurant->name }}</h5><span
                                            class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span
                                            class="mb-0 text-primary">46</span>
                                    </div>
                                </div>

                                @if ($restaurant->status == 'Available')
                                    <span class="badge bg-soft-success p-2">
                                        <span class="fw-bold fs-1 text-success">
                                            {{ $restaurant->status }}
                                        </span>
                                    </span>
                                @elseif ($restaurant->status == 'Available')
                                @endif

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
