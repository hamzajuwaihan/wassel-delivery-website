@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-warning text-center" role="alert">{{ $errors->first() }}</div>
    @endif
    @if(session('success'))
    <div class="alert alert-success text-center" role="alert">{{session('success')}}</div>
@endif
    <div class="container mt-5">
        {{-- {{ $restaurant }} --}}
        <div class="row justify-content-center">

            <div class="col-sm-6 col-md-4 col-lg-6 h-100 mb-5">
                <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100"
                        src="{{ asset('assets/img/gallery/kuakata.png') }}" alt="...">
                    <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><svg
                                class="svg-inline--fa fa-tag fa-w-16 me-2 fs-0" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="tag" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M0 252.118V48C0 21.49 21.49 0 48 0h204.118a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.745 18.745-49.137 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118zM112 64c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z">
                                </path>
                            </svg><!-- <i class="fas fa-tag me-2 fs-0"></i> Font Awesome fontawesome.com --><span
                                class="fs-0">10%
                                off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><svg
                                class="svg-inline--fa fa-clock fa-w-16 me-1 fs-0" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z">
                                </path>
                            </svg><!-- <i class="fas fa-clock me-1 fs-0"></i> Font Awesome fontawesome.com --><span
                                class="fs-0">Fast</span></span>
                    </div>
                    <div class="card-body ps-0 ">
                        <div class="d-flex align-items-center mb-3 text-center"><img class="img-fluid"
                                src="assets/img/gallery/kuakata-logo.png" alt="">
                            <div class="flex-1 ms-3">
                                <h4 class="mb-0 fw-bold text-1000 text-center">{{ $restaurant->name }}</h4><span
                                    class="text-primary fs--1 me-1"><svg class="svg-inline--fa fa-star fa-w-18"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg><!-- <i class="fas fa-star"></i> Font Awesome fontawesome.com --></span><span
                                    class="mb-0 text-primary">50</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <span class="badge bg-soft-success">
                                <span class="fw-bold fs-1 text-success">{{ $restaurant->status }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <h2 class="text-center mb-2 mt-2">
        {{ $restaurant->name }} Menu
    </h2>

    <div class="container mt-5 mb-5">


        @foreach ($meals as $meal)
            <div>
                <div class="card mb-3  " style="height: 350px">
                    <div class="row g-0 ">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/gallery/toffes-cake.png') }}" class="w-100 rounded-start"
                                alt="..." style="height: 350px">
                        </div>
                        <div class="col-md-8">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="card-body">
                                        <div class="card-body ps-0">
                                            <h5 class="fs-5 fw-bold text-1000 text-truncate mb-1">{{ $meal->name }}</h5>
                                            <div>
                                                {{-- //meal price --}}
                                            </div><span class="text-1000 fw-bold fs-3 mb-2">$4.00</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mt-5">
                                <div class="col align-self-end ">
                                    <form action="{{ route('AddToCart') }}" method="post" class="m-2">
                                        @csrf

                                        <input type="number" name="quantity" id="" min="1"
                                            class="form-control col-3 mb-3 mt-4" value="1" required>
                                        <input type="hidden" value="{{ $meal->id }}" name="mealId">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-lg btn-danger" role="button" type="submit">
                                                Order now
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
