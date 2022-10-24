@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-light h-100">
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
                                {{ session('order.meals')[$meal->id] }}

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
                                <td>Shipping</td>
                                <td>Shipping to 21, as'salt, as'saly, 156189.</td>
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
                            @if (session()->has('order.meals'))
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
                                            You must login in order to checkout !
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
    </div>
@endsection
