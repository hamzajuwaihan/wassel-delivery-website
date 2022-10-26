@extends('layouts.app')

@section('content')



<section class="py-5 overflow-hidden bg-primary" id="home">
    <div class="container">
        <div class="row flex-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner"
                    href="#!"><img class="img-fluid rounded-circle"  src="/images/{{ $restaurant->image }}"alt="hero-header" /></a>
            </div>
            <div class="col-md-7 col-lg-6 py-4 text-md-start text-center">
                <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-4 text-light">{{ $restaurant->name }} Menu</h1>
                <h1 class="text-800 mb-5 fs-4"><br class="d-none d-xxl-block" />Restaurant/Menu
                    </h1>
              
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    @if ($errors->any())
        <div class="alert alert-warning text-center" role="alert">{{ $errors->first() }}</div>
    @endif
    @if(session('success'))
    <div class="alert alert-success text-center" role="alert">{{session('success')}}</div>
@endif
    {{-- <div class="container mt-5"> --}}
        {{-- {{ $restaurant }} --}}
        {{-- <div class="row justify-content-center">

            <div class="col-sm-6 col-md-4 col-lg-6 h-100 mb-5">
                <div class=" card card-span  text-white text-center rounded-3"><img class="rounded img-fluid rounded-3 "
                        src="/images/{{ $restaurant->image }}" alt="..." style="height: 350px;">
                    
                    <div class="card-body ps-0 ">
                        <div class="d-flex align-items-center mb-3 text-center"><img class="img-fluid" 
                                src="assets/img/gallery/kuakata-logo.png"   alt=""  >
                            <div class="flex-1 ms-3">
                                <h4 class="mb-0 fw-bold text-1000 text-center">{{ $restaurant->name }}</h4><span
                                    class="text-primary fs--1 me-1"><svg class="svg-inline--fa fa-star fa-w-18"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>   </span><span
                                    class="mb-0 text-primary"></span>
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
    </div> --}}
    {{-- <h2 class="text-center mb-2 mt-2">
        {{ $restaurant->name }} Menu
    </h2> --}}

    <div class="container mt-5 mb-5">

        <div class="row row-cols-4 g-5 mx-5 ">
        @foreach ($meals as $meal)
        <div class="col ">




        <div class="card mt-5 " style="width: 15rem;">
            <img src="/images/{{ $meal->image }}" height="220px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $meal->name }}</h5>
              <p class="card-text">${{ $meal->price }}</p>
              {{-- <a href="#" class="btn btn-primary">Order Now</a> --}}
              <form action="{{ route('AddToCart') }}" method="post" class="m-2">
                @csrf

                <input type="number" name="quantity" id="" min="1"
                    class="form-control col-3 mb-3 mt-4"style="width:145px" value="1" required>
                <input type="hidden" value="{{ $meal->id }}" name="mealId">
                
                    <button class="btn btn-primary" role="button" type="submit">
                        Order now
                    </button>
              

            </form>
            </div>
          </div>

        </div>
        @endforeach
        </div>














    </div>






    
@endsection
