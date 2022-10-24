@extends('layouts.app')

@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="images\user-picture.png" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;">
                            <h5 class="my-3">{{ $user->name }}</h5>
                            <div class="d-flex justify-content-center mb-2">
                                <a class="btn btn-primary" href="{{ route('myaccount.edit', Auth::user()->id) }}">edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->phone }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date of creation</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4">Past <span class="text-primary font-italic me-1">Orders</span></p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    order id
                                                </th>
                                                <th>
                                                    restaurant name
                                                </th>
                                                <th>
                                                    status
                                                </th>
                                                <th>
                                                    total
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (empty($orders))
                                                <tr>
                                                    <td colspan="4">
                                                        <h1 class="text-center">No Post Orders</h1>
                                                    </td>
                                                </tr>
                                            @else
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->restaurant_id }}</td>
                                                        <td>{{ $order->status }}</td>
                                                        <td>${{ $order->total }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
