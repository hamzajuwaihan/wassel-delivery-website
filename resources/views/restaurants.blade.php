@extends('layouts.app')

@section('content')




<section class="py-5 overflow-hidden bg-primary " id="home">
    <div class="container">
        <div class="row flex-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner"
                    href="#!"><img class="img-fluid rounded-circle"  src="assets/img/gallery/hero-header.png" alt="hero-header" /></a>
            </div>
            <div class="col-md-7 col-lg-6 py-4 text-md-start text-center">
                <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-4 text-light"> Restaurants</h1>
                <h1 class="text-800 mb-5 fs-4"><br class="d-none d-xxl-block" />Choose you Favourite Food
                    </h1>
              
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>

    <div class="container mt-5">
        <div class="row gx-2 mt-5">
            @foreach ($restaurants as $restaurant)
                <div class="col-sm-6 col-md-4 col-lg-4  mb-5">
                    <a href="{{ route('restaurants.show',$restaurant->id) }}">
                        <div class="card card-span  text-white rounded-3" style="height:400px;">
                            <img class="img-fluid rounded-3 "
                                src="./images/{{ $restaurant->image }}" alt="..." style="height: 280px;width:300px"/>
                            
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3"><img class="img-fluid"
                                        src="assets/img/gallery/Ce.JPG" width="50px" height="50px" alt="" />
                                    <div class="flex-1 ms-3">
                                        <h5 class="mb-0 fw-bold text-1000">{{ $restaurant->name }}
                                        </h5><span
                                            class="text-primary fs--1 me-1"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span><span
                                            class="mb-0 text-primary"></span>
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
