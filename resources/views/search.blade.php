@extends('layouts.app')
@section('content')
<div class="container"></div>
    

<br>

<form method="GET" action="search" class="row gx-2 gy-2 align-items-center">
    <div class="col-8 align-items-center
    ">
        <div class="input-group-icon"><i class="fas fa-search input-box-icon text-primary"></i>
            <label class="visually-hidden" for="inputDelivery">Address</label>
            <input  name="search" value="{{ request()->get('search') }}"  class="form-control input-box form-foodwagon-control"
                id="inputDelivery" type="text" placeholder="Search Your Favourite Food" />
        </div>
    </div>
    <div class="d-grid gap-3 col-sm-auto">
        <button  class="btn btn-danger" type="submit">Find Food</button>
    </div>
</form>




<div class="container mt-5">
    <div class="row gx-2 mt-5">
        @foreach($restaurants as $restaurant)
            <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                
                    <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100"
                            />
                        <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i
                                    class="fas fa-tag me-2 fs-0"></i><span class="fs-0">20%
                                    off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i
                                    class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span>
                        </div>
                        <div class="card-body ps-0">
                            <div class="d-flex align-items-center mb-3"><img class="img-fluid"
                                    src="assets/img/gallery/food-world-logo.png" alt="" />
                                <div class="flex-1 ms-3">
                                    <h5 class="mb-0 fw-bold text-1000">{{ $restaurant->name }}</h5><span
                                        class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span
                                        class="mb-0 text-primary">46</span>
                                </div>
                            </div>

                          
                                <span class="badge bg-soft-success p-2">
                                    <span class="fw-bold fs-1 text-success">
                                        {{ $restaurant->location }}
                                    </span>
                                </span>
                           
                           

                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</div>
</body>
    
</html>
@endsection