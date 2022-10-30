@extends('layouts.app')

@section('content')


    <!DOCTYPE html>
    <html>

    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <style>
            .shopping-cart {
                padding-bottom: 50px;
                font-family: 'Montserrat', sans-serif;
            }

            .shopping-cart.dark {
                background-color: #f6f6f6;
            }

            .shopping-cart .content {
                box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
                background-color: white;
            }

            .shopping-cart .block-heading {
                padding-top: 50px;
                margin-bottom: 40px;
                text-align: center;
            }

            .shopping-cart .block-heading p {
                text-align: center;
                max-width: 420px;
                margin: auto;
                opacity: 0.7;
            }

            .shopping-cart .dark .block-heading p {
                opacity: 0.8;
            }

            .shopping-cart .block-heading h1,
            .shopping-cart .block-heading h2,
            .shopping-cart .block-heading h3 {
                margin-bottom: 1.2rem;
                color: black;
            }

            .shopping-cart .items {
                margin: auto;
            }

            .shopping-cart .items .product {
                margin-bottom: 20px;
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .shopping-cart .items .product .info {
                padding-top: 0px;
                text-align: center;
            }

            .shopping-cart .items .product .info .product-name {
                font-weight: 600;
            }

            .shopping-cart .items .product .info .product-name .product-info {
                font-size: 14px;
                margin-top: 15px;
            }

            .shopping-cart .items .product .info .product-name .product-info .value {
                font-weight: 400;
            }

            .shopping-cart .items .product .info .quantity .quantity-input {
                margin: auto;
                width: 80px;
            }

            .shopping-cart .items .product .info .price {
                margin-top: 15px;
                font-weight: bold;
                font-size: 22px;
            }

            .shopping-cart .summary {
                border-top: 2px solid #fec45b;
                background-color: #fffcf5;
                height: 100%;
                padding: 30px;
            }

            .shopping-cart .summary h3 {
                text-align: center;
                font-size: 1.3em;
                font-weight: 600;
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .shopping-cart .summary .summary-item:not(:last-of-type) {
                padding-bottom: 10px;
                padding-top: 10px;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }

            .shopping-cart .summary .text {
                font-size: 1em;
                font-weight: 600;
            }

            .shopping-cart .summary .price {
                font-size: 1em;
                float: right;
            }

            .shopping-cart .summary button {
                margin-top: 20px;
            }

            @media (min-width: 768px) {
                .shopping-cart .items .product .info {
                    padding-top: 25px;
                    text-align: left;
                }

                .shopping-cart .items .product .info .price {
                    font-weight: bold;
                    font-size: 22px;
                    top: 17px;
                }

                .shopping-cart .items .product .info .quantity {
                    text-align: center;
                }

                .shopping-cart .items .product .info .quantity .quantity-input {
                    padding: 4px 10px;
                    text-align: center;
                }
            }
        </style>
    </head>

    <main class="page">
        <section class="shopping-cart dark pt-0">

            <div class="container">
                <div class="block-heading">
                    {{-- <h2><b>Shopping Cart</b></h2> --}}
                    <h1 style="font-size: 64px; color:#54595f; align-text:center" class="p-5"><b>Cart</b></h1>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">

                                    <table
                                        class="table table-borderless
                                    cart align-middle mx-2">
                                        <thead class="bg-white">
                                            <tr>
                                                <th colspan="2"></th>
                                                <th>Meal</th>
                                                <th>Price</th>
                                                <th>Quantity</th>

                                            </tr>
                                        </thead>

                                        <tbody>

                                            @if (session()->has('order'))
                                                @foreach ($meals as $meal)
                                                    <tr>
                                                        <td class="product-remove">

                                                            <button value="" class="btn" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal{{ $meal->id }}">
                                                                <i class="bi bi-x-circle text-danger"></i>
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal{{ $meal->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                data-bs-backdrop="static" aria-hidden="true">
                                                                <form action="{{ route('DeleteFromCart') }}" method="post">
                                                                    @csrf
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title fs-2"
                                                                                    id="exampleModalLabel">delete meal</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <input type="hidden" name="meal_id"
                                                                                value="{{ $meal->id }}">
                                                                            <div class="modal-body">
                                                                                are you sure ?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary bg-black"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="./images/{{ $meal->image }}" alt="book image"
                                                                srcset="" style="width:150px;height:150px;">
                                                        </td>
                                                        <td>
                                                            <a style="color: black"
                                                                href="{{ route('restaurants.show', $restaurant->id) }}"
                                                                class="text-decoration-none">
                                                                {{ $meal->name }}
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <bdi>
                                                                ${{ $meal->price }}
                                                            </bdi>
                                                        </td>
                                                        <td>
                                                            {{-- {{ $meal->id }} --}}
                                                            {{ session('order.meals')[$meal->id] }}

                                                        </td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <form action="{{ route('checkout') }}" method="POST">
                                    @csrf
                                    <div class="summary-item"><span class="text">Subtotal</span><span class="price">
                                            @if ($price !== 0)
                                                ${{ $price }}
                                            @else
                                                0
                                            @endif
                                        </span></div>
                                    <div class="summary-item"><span class="text">Delivery fee</span><span class="price">
                                            @if ($price !== 0)
                                                <bdi>${{ $restaurant->delivery_fee }}</bdi>
                                            @else
                                                0
                                            @endif
                                        </span></div>
                                    <div class="summary-item"><span class="text">Total</span><span class="price">
                                            @if ($price !== 0)
                                                ${{ $price + $restaurant->delivery_fee }}
                                            @else
                                                0
                                            @endif
                                        </span></div>

                                    <div class="summary-item"><br><span class="text">Note :
                                            <textarea class="form-control" placeholder="" id="floatingTextarea3" name="address" required></textarea>
                                        </span><span class="price">
                                        </span><br></div>
                                    <div class="summary-item"><br><span class="text">Address :
                                            <textarea class="form-control" placeholder="" id="floatingTextarea2" name="note"></textarea>
                                        </span><span class="price"> </span>
                                        <br>
                                    </div>
                                    <tr>
                                        <td colspan="2" class="pt-2">
                                            <label for=""><b>Delivery</b></label><br>
                                            <input type="radio" name="delivery" id="delivery" checked>
                                            <label for="delivery">Cash on delivery</label>
                                        </td>
                                    </tr>


                                    @if (session()->has('order.meals') && Auth::check())
                                        <tr>
                                            <td colspan="2">
                                                <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">
                                                <input type="hidden" name="total"
                                                    value="{{ $price + $restaurant->delivery_fee }}">
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-lg " style="background-color:#fec45b"
                                                        type="submit" role="button">
                                                        Checkout
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td colspan="2">
                                                <div class="alert alert-warning" role="alert">
                                                    You must have meals in cart and logged in in order to checkout !
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-lg " style="background-color:#fec45b"
                                                        type="submit" role="button" disabled>
                                                        checkout
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif

                                </form>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>

    </html>

@endsection


















{{-- <div class="container-fluid bg-light h-100">
        <div class="container text-center ">
            <h1 style="font-size: 64px; color:#54595f;" class="p-5">Cart</h1>

        </div>
        <table class="table cart align-middle ">
            <thead class="bg-white">
                <tr>
                    <th colspan="2"></th>
                    <th>Meal</th>
                    <th>Price</th>
                    <th>Quantity</th>

                </tr>
            </thead>

            <tbody>

                @if (session()->has('order'))
                    @foreach ($meals as $meal)
                        <tr>
                            <td class="product-remove">

                                <button value="" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $meal->id }}">
                                    <i class="bi bi-x-circle text-danger"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $meal->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
                                    <form action="{{ route('DeleteFromCart') }}" method="post">
                                        @csrf
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fs-2" id="exampleModalLabel">delete meal</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <input type="hidden" name="meal_id" value="{{ $meal->id }}">
                                                <div class="modal-body">
                                                    are you sure ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary bg-black"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <img src="./images/{{ $meal->image }}" alt="book image" srcset=""
                                    style="width:150px;height:150px;">
                            </td>
                            <td>
                                <a href="{{ route('restaurants.show', $restaurant->id) }}" class="text-decoration-none">
                                    {{ $meal->name }}
                                </a>
                            </td>
                            <td>
                                <bdi>
                                    ${{ $meal->price }}
                                </bdi>
                            </td>
                            <td>
                                {{-- {{ $meal->id }} --}}
{{-- {{ session('order.meals')[$meal->id] }}

                            </td>

                        </tr>
                    @endforeach
                @endif





            </tbody>


        </table>
        <div class="container-fluid pd-5 mt-5">
            <div class="row">
                <table class="col-4 ms-auto table  table-bordered cart-totals">
                    <thead>
                        <tr class="bg-white">
                            <th colspan="2">
                                <h3 class="p-3">Cart totals</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <tr class="">
                                <td>Subtotal</td>
                                <td>
                                    <bdi>
                                        @if ($price !== 0)
                                            ${{ $price }}
                                        @else
                                            0
                                        @endif
                                    </bdi>
                                </td>
                            </tr>
                            <tr class="">
                                <td>Delivery fee</td>
                                <td>
                                    @if ($price !== 0)
                                        <bdi>${{ $restaurant->delivery_fee }}</bdi>
                                    @else
                                        0
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>
                                    @if ($price !== 0)
                                        ${{ $price + $restaurant->delivery_fee }}
                                    @else
                                        0
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td>Note</td>
                                <td>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px" name="note"></textarea>
                                        <label for="floatingTextarea2">Note</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="" id="floatingTextarea3" style="height: 100px" name="address" required></textarea>
                                        <label for="floatingTextarea3">Address</label>
                                    </div>
                                </td>
                            </tr>
                            @if (session()->has('order.meals') && Auth::check())
                                <tr>
                                    <td colspan="2">
                                        <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">
                                        <input type="hidden" name="total"
                                            value="{{ $price + $restaurant->delivery_fee }}">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-lg btn-danger" type="submit" role="button">
                                                checkout
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="2">
                                        <div class="alert alert-warning" role="alert">
                                            You must have meals in cart and logged in in order to checkout !
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-lg btn-danger" type="submit" role="button" disabled>
                                                checkout
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endif

                        </form>
                    </tbody>
                </table>
            </div>

        </div>
    </div>  --}}
