@extends('owner.layout.master')
@section('content')
    <!-- Layout container -->
    <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                <!-- <div class="navbar-nav align-items-center">
                  <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input
                      type="text"
                      class="form-control border-0 shadow-none"
                      placeholder="Search..."
                      aria-label="Search..."
                    />
                  </div>
                </div> -->
                <!-- /Search -->

                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- Place this tag where you want the button to render. -->


                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="./images/{{ $restaurant->image }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="./images/{{ $restaurant->image }}" alt
                                                    class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-semibold d-block">{{ $restaurant->name }}</span>
                                            <small class="text-muted">{{ $restaurant->status }}</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>


                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                    <i class="bx bx-power-off me-2"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                {{-- <span class="align-middle">Log Out</span> --}}
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!--/ User -->
                </ul>
            </div>
        </nav>

        <!-- / Navbar -->
        <!-- Content -->
        <div class="content-wrapper ">
            <div class="page-heading" style="margin-left: 400px; width:1200px">
                <div class="page-title">
                    <h3 class="m-5">Restaurant Details</h3>

                  
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success"  style="margin-right: 600px; width:380px ">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                   <div class="row d-flex align-items-center justify-content-start" style="flex-wrap: wrap">
                        <!-- Food and Dining -->
                        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                    <div class="card-title mb-0">
                                        <h5 class="m-0 me-2">{{ $restaurant->name }}</h5>
                                        <small class="text-muted">{{ $restaurant->location }}</small>

                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="orederStatistics"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        </button>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            {{-- <h2 class="mb-2">40</h2>
                                        <span>Total Restaurant They serve Food </span> --}}
                                            <img src="images/{{ $restaurant->image }}" width="200px" height="100px">
                                        </div>
                                        <div id="orderStatisticsChart"></div>
                                    </div>
                                    <ul class="p-0 m-0">
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-primary"><i
                                                        class="bi bi-telephone"></i></span>
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">phone: {{ $restaurant->phone }}</h6>

                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-success"><i
                                                        class="bi bi-geo-alt-fill"></i></span>
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">longitude: {{ $restaurant->longitude }}</h6>

                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-info"><i
                                                        class="bi bi-geo-alt-fill"></i></span>
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">latitude: {{ $restaurant->latitude }}</h6>

                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-secondary"><i
                                                        class="bi bi-info-circle-fill"></i></span>
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">status: {{ $restaurant->status }}</h6>

                                                </div>


                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
