@extends('owner.layout.master')
@section('content')
    <div class="content-wrapper ">
        <div class="page-heading" style="margin-left: 300px; width:1200px">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                        <h3 class="m-5">Manage Orders</h3>
                    </div>

                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content:space-between; align-items:center">
                        <div>Orders Table</div>
                        <!-- <a href="/superadmin/Orders/create"><button class="btn btn-primary">Add User</button></a> -->
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Order No.</th>
                                    <th>User Name</th>
                                    <th>User location</th>
                                    <th>User Phone</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($order_info as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>${{ $order->total }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>
                                            <a class="btn btn-primary me-2 text-white"
                                                href="{{ route('add-order.edit', $order->id) }}">
                                                edit
                                            </a>
                                        </td>
                                @endforeach
                                <!-- edit button -->

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
