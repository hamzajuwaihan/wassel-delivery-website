@extends('adminpages.layout.master')
@section('content')
    <div class="content-wrapper ">
        <div class="page-heading" style="margin-left: 300px; width:1200px">
            <div class="page-title">
                <h3 class="m-5">menu</h3>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            <div class="row d-flex align-items-center justify-content-start" style="flex-wrap: wrap">



                @foreach ($menus as $menu)
                    <!-- Food and Dining -->
                    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                <div class="card-title mb-0">
                                    <h5 class="m-0 me-2">{{ $menu->name }}</h5>
                                    <h5 class="m-0 me-2">{{ $menu->restaurant_id }}</h5>
                                    <small class="text-muted"># Total resturant </small>
                                </div>


                                @endforeach
                                @endsection