@extends('owner.layout.master')
@section('content')
    <!-- Content wrapper -->

    <div class="content-wrapper">
        <!-- Content -->
        <div class="page-heading" style="margin-left: 300px; width:1200px">
            <div class="container-xxl flex-grow-1 container-p-y">

                {{-- {{ $order->id }} --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <h5 class="card-header">Order # Details</h5>
                            <!-- Account -->
                            <div class="col-6">
                                <table class="table mb-5 mx-2">
                                    <thead>
                                        <tr>
                                            <th>meal #</th>
                                            <th>quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($meals as $meal)
                                            <tr>
                                                <td>{{ $meal->id }}</td>
                                                <td>{{ $meal->amount }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <form action="{{ route('add-order.update',$order->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <hr class="my-0" />
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label"> Order NO.</label>
                                                <p>
                                                    <b>#{{ $order->id }}</b>
                                                </p>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="location" class="form-label">USER NAME</label>
                                                <p>
                                                    <b>{{ $name }}</b>
                                                </p>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">USER ADDRESS</label>
                                                <div class="input-group input-group-merge">
                                                    <p>
                                                        <b>{{ $order->address }}</b>
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">Order status</label>
                                                <div class="input-group input-group-merge">
                                                    <p>
                                                        <b>{{ $order->status }}</b>
                                                    </p>

                                                </div>
                                            </div>
                                            
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">USER PHONE</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">JOR (+962){{ $order->phone }}</span>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">TOTAL</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">${{ $order->total }}</span>

                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">NOTE</label>
                                                <div class="input-group input-group-merge">
                                                    <textarea name="" id="" cols="30" rows="10" disabled>{{ $order->note }}</textarea>

                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="status">Restaurant Status</label><br>
                                                <select name="status" class="form-control">
                                                    <option name="status" value="Pending">Pending</option>
                                                    <option name="status" value="Preparing">Preparing</option>
                                                    <option name="status" value="on the way">on the way</option>
                                                    <option name="status" value="delivered">delivered</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    </div>
                                </div>

                            </form>
                            <!-- /Account -->

                        </div>
                    @endsection
