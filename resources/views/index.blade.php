@extends('layouts.app')
@section('content')


    <section class="py-5 overflow-hidden bg-primary" id="home">
        <div class="container">
            <div class="row flex-center">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner"
                        href="#!"><img class="img-fluid" src="assets/img/gallery/hero-header.png" alt="hero-header" /></a>
                </div>
                <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
                    <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Are you starving?</h1>
                    <h1 class="text-800 mb-5 fs-4">Within a few clicks, find meals that<br class="d-none d-xxl-block" />are
                        accessible near you</h1>
                    <div class="card w-xxl-75">
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Search</button>
                                    {{-- <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false"><i
                                            class="fas fa-shopping-bag me-2"></i>Pickup</button> --}}
                                </div>
                            </nav>
                            <div class="tab-content mt-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <form method="GET" action="search" class="row gx-2 gy-2 align-items-center">
                                        <div class="col">
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
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <form class="row gx-4 gy-2 align-items-center">
                                        <div class="col">
                                            <div class="input-group-icon"><i
                                                    class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                                <label class="visually-hidden" for="inputPickup">Address</label>
                                                <input class="form-control input-box form-foodwagon-control"
                                                    id="inputPickup" type="text" placeholder="Enter Your Address" />
                                            </div>
                                        </div>
                                        <div class="d-grid gap-3 col-sm-auto">
                                            <button class="btn btn-danger" type="submit">Find Food</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">

        <div class="container">
            <div class="row h-100 gx-2 mt-7" > 
                @foreach ($restaurants as $restaurant)
                <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4" >
                    
                    <div class="card card-span h-100" style="height: 150px"> 
                       
                        <div class="mx-2 position-relative"> <img class="img-fluid rounded-3 w-100"
                                src="images/{{ $restaurant->image }}" alt="..." style="height: 220px;" />
                            <div class="card-actions">
                              
                            </div>
                        </div>
                       
                        <div class="card-body px-0">
                            <h5 class="fw-bold text-1000 text-truncate">&nbsp;&nbsp;&nbsp;{{ $restaurant->name }}</h5>
                        </div><a class="stretched-link" href="#"></a>
                    </div>
                </div> 
@endforeach
                
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 bg-primary-gradient">

        <div class="container">
            <div class="row justify-content-center g-0">
                <div class="col-xl-9">
                    <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                        <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">How does it work</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/location.png"
                                    height="112" alt="..." />
                                <h5 class="mt-4 fw-bold">Select location</h5>
                                <p class="mb-md-0">Choose the location where your food will be delivered.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/order.png"
                                    height="112" alt="..." />
                                <h5 class="mt-4 fw-bold">Choose order</h5>
                                <p class="mb-md-0">Check over hundreds of menus to pick your favorite food</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/pay.png"
                                    height="112" alt="..." />
                                <h5 class="mt-4 fw-bold">Pay advanced</h5>
                                <p class="mb-md-0">It's quick, safe, and simple. Select several methods of payment
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/meals.png"
                                    height="112" alt="..." />
                                <h5 class="mt-4 fw-bold">Enjoy meals</h5>
                                <p class="mb-md-0">Food is made and delivered directly to your home.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->





    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-5 pt-8">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-span mb-3 shadow-lg">
                        <div class="card-body py-0">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img
                                        class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0"
                                        src="assets/img/gallery/crispy-sandwiches.png" alt="..." /></div>
                                <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                    <h1 class="card-title mt-xl-5 mb-4">Best deals <span class="text-primary">
                                            Crispy Sandwiches</span></h1>
                                    <p class="fs-1">Enjoy the large size of sandwiches. Complete your meal with
                                        the perfect slice of sandwiches.</p>
                                    {{-- <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                            href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-span mb-3 shadow-lg">
                        <div class="card-body py-0">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-md-0"><img
                                        class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-start rounded-md-top-0"
                                        src="assets/img/gallery/fried-chicken.png" alt="..." /></div>
                                <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                    <h1 class="card-title mt-xl-5 mb-4">Celebrate parties with <span
                                            class="text-primary">Fried Chicken</span></h1>
                                    <p class="fs-1">Get the best fried chicken smeared with a lip smacking lemon
                                        chili flavor. Check out best deals for fried chicken.</p>
                                    {{-- <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                            href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-span mb-3 shadow-lg">
                        <div class="card-body py-0">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img
                                        class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0"
                                        src="assets/img/gallery/pizza.png" alt="..." /></div>
                                <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                    <h1 class="card-title mt-xl-5 mb-4">Wanna eat hot & <span class="text-primary">spicy
                                            Pizza?</span></h1>
                                    <p class="fs-1">Pair up with a friend and enjoy the hot and crispy pizza
                                        pops. Try it with the best deals.</p>
                                    {{-- <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                            href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->



    <section class="py-0">
        <div class="bg-holder"
            style="background-image:url(assets/img/gallery/cta-two-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row flex-center">
                <div class="col-xxl-9 py-7 text-center">
                    <h1 class="fw-bold mb-4 text-white fs-6">Have an Query?<br /> We're here to help 
                    </h1><a class="btn btn-danger" href="contactForm">Contact Us <i
                            class="fas fa-chevron-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
