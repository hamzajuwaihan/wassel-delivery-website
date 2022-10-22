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
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="product-remove">
                        <form action="" method="">
                            <button type="submit" name="delete" value="" class="btn"
                                onclick="return confirm('Are you sure you want to delete this product?')">
                                <i class="bi bi-x-circle"></i>
                            </button>

                        </form>
                    </td>
                    <td>
                        <img src="" alt="book image" srcset="" style="width:150px;height:150px;">
                    </td>
                    <td>
                        <a href="#" class="text-decoration-none">
                        </a>
                    </td>
                    <td>
                        <bdi>

                        </bdi>
                    </td>
                    <td>

                    </td>
                    <td>
                        <bdi>

                        </bdi>
                    </td>
                </tr>



            </tbody>


        </table>
        <div class="container-fluid my-5">
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
                        <tr class="">
                            <td>Subtotal</td>
                            <td>
                                <bdi></bdi>
                            </td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Shipping to 21, as'salt, as'saly, 156189.</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">



                                <form method='' action=''>
                                    <input type="hidden" name="nondublicate" value="">
                                    <input type="hidden" name="sum" value="">
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-lg btn-danger" href="#!" role="button">
                                            checkout
                                        </a>
                                    </div>
                                </form>


                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
