@extends('adminpages.layout.master')
@section('content')
<div class="content-wrapper ">
<div class="page-heading mt-5"style="margin-left: 470px; width:1500px ">
    
    <div class="page-title ">
        <div class="row">
<div class="col-12 col-md-6 order-md-1" >
        <div class="card">
            <div class="card-header">
                <h4 class="m-5">Add Restaurant</h4>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('dashboardrestaurants.update',$restaurant->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="name" value="{{ $restaurant->name }}" class="form-control" placeholder="Name"
                                                id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">

                                <div class="form-group has-icon-left">
                                        <label for="phone-id-icon">phone</label>
                                        <div class="position-relative">
                                            <input type="text" name="phone" value="{{ $restaurant->phone }}" class="form-control" placeholder="phone"
                                                id="phone-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group has-icon-left">
                                        <label for="location-id-icon">location</label>
                                        <div class="position-relative">
                                            <input type="text" name="location" value="{{ $restaurant->location }}" class="form-control" placeholder="location"
                                                id="location-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-icon-left">
                                        <label for="latitude-id-icon">latitude</label>
                                        <div class="position-relative">
                                            <input type="text" name="latitude" value="{{ $restaurant->latitude }}" class="form-control" placeholder="latitude"
                                                id="latitude-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-icon-left">
                                        <label for="longitude">longitude</label>
                                        <div class="position-relative">
                                            <input type="text" name="longitude" value="{{ $restaurant->longitude }}" class="form-control" placeholder="longitude"
                                                id="longitude">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                
       
                          
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="password-id-icon">Upload Image</label>
                                        <div class="position-relative">
                                            <label for="image">
                                                <img src="/images/{{ $restaurant->image }}" alt="profile_photo"
                                                    style="cursor: pointer">
                                                <input type="file" id="image" name="image" class="form-control d-none">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection