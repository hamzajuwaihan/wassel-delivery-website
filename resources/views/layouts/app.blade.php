<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-inline-flex" href="{{ route('index') }}"><img
                        class="d-inline-block" src="assets/img/gallery/logo.svg" alt="logo" /><span
                        class="text-1000 fs-3 fw-bold ms-2 text-gradient">foodwaGon</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
                    <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
                        <p class="mb-0 fw-bold text-lg-center">Deliver to: <i
                                class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">Current
                                Location </span><span id="location">Mirpur 1 Bus Stand, Dhaka</span></p>
                    </div>
                   
                    <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
                        <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
                            <input class="form-control border-0 input-box bg-100" type="search"
                                placeholder="Search Food" aria-label="Search" />
                        </div>
                        <button class="btn btn-white shadow-warning text-warning" type="submit"> <i
                                class="fas fa-user me-2"></i>Login</button>
                    </form>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

        <body>
            
            @yield('content')
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-0 pt-7 bg-1000">

                <div class="container">
                    <div class="row justify-content-lg-between">
                        <h5 class="lh-lg fw-bold text-white">OUR TOP CITIES</h5>
                        <div class="col-6 col-md-4 col-lg-auto mb-3">
                            <ul class="list-unstyled mb-md-4 mb-lg-0">
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San
                                        Francisco</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Miami</a>
                                </li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San
                                        Diego</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">East
                                        Bay</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Long
                                        Beach</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4 col-lg-auto mb-3">
                            <ul class="list-unstyled mb-md-4 mb-lg-0">
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Los
                                        Angeles</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Washington
                                        DC</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Seattle</a>
                                </li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Portland</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Nashville</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4 col-lg-auto mb-3">
                            <ul class="list-unstyled mb-md-4 mb-lg-0">
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New York
                                        City</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Orange
                                        County</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Atlanta</a>
                                </li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Charlotte</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Denver</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4 col-lg-auto mb-3">
                            <ul class="list-unstyled mb-md-4 mb-lg-0">
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Chicago</a>
                                </li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Phoenix</a>
                                </li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Las
                                        Vegas</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Sacramento</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Oklahoma
                                        City</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4 col-lg-auto mb-3">
                            <ul class="list-unstyled mb-md-4 mb-lg-0">
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Columbus</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New
                                        Mexico</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Albuquerque</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Sacramento</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New
                                        Orleans</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr class="text-900" />
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
                            <h5 class="lh-lg fw-bold text-white">COMPANY</h5>
                            <ul class="list-unstyled mb-md-4 mb-lg-0">
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">About
                                        Us</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Team</a>
                                </li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none"
                                        href="#!">Careers</a>
                                </li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-2 col-lg-3 mb-3">
                            <h5 class="lh-lg fw-bold text-white">CONTACT</h5>
                            <ul class="list-unstyled mb-md-4 mb-lg-0">
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Help &amp;
                                        Support</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Partner
                                        with us </a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Ride with
                                        us</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Ride with
                                        us</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
                            <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
                            <ul class="list-unstyled mb-md-4 mb-lg-0">
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms
                                        &amp;
                                        Conditions</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund
                                        &amp; Cancellation</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy
                                        Policy</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Cookie
                                        Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
                            <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
                            <ul class="list-unstyled mb-md-4 mb-lg-0">
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms
                                        &amp;
                                        Conditions</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund
                                        &amp; Cancellation</a></li>
                                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy
                                        Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
                            <h5 class="lh-lg fw-bold text-500">FOLLOW US</h5>
                            <div class="text-start my-3"> <a href="#!">
                                    <svg class="svg-inline--fa fa-instagram fa-w-14 fs-2 me-2" aria-hidden="true"
                                        focusable="false" data-prefix="fab" data-icon="instagram" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="#BDBDBD"
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg></a><a href="#!">
                                    <svg class="svg-inline--fa fa-facebook fa-w-16 fs-2 mx-2" aria-hidden="true"
                                        focusable="false" data-prefix="fab" data-icon="facebook" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#BDBDBD"
                                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                        </path>
                                    </svg></a><a href="#!">
                                    <svg class="svg-inline--fa fa-twitter fa-w-16 fs-2 mx-2" aria-hidden="true"
                                        focusable="false" data-prefix="fab" data-icon="twitter" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#BDBDBD"
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                        </path>
                                    </svg></a></div>
                            <h3 class="text-500 my-4">Receive exclusive offers and <br />discounts in your mailbox</h3>
                            <div class="row input-group-icon mb-5">
                                <div class="col-auto"><i class="fas fa-envelope input-box-icon text-500 ms-3"></i>
                                    <input class="form-control input-box bg-800 border-0" type="email"
                                        placeholder="Enter Email" aria-label="email" />
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="border border-800" />
                    <div class="row flex-center pb-3">
                        <div class="col-md-6 order-0">
                            <p class="text-200 text-center text-md-start">All rights Reserved &copy; Your Company, 2021
                            </p>
                        </div>
                        <div class="col-md-6 order-1">
                            <p class="text-200 text-center text-md-end"> Made with&nbsp;
                                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15"
                                    height="15" fill="#FFB30E" viewBox="0 0 16 16">
                                    <path
                                        d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                    </path>
                                </svg>&nbsp;by&nbsp;<a class="text-200 fw-bold" href="https://themewagon.com/"
                                    target="_blank">ThemeWagon </a>
                            </p>
                        </div>
                    </div>
                </div><!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="\vendors\@popperjs\popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>


    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap"
        rel="stylesheet">
</body>

</html>
