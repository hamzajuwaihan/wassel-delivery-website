@extends('adminpages.layout.master')
@section('content')
<div class="col-md-8 offset-md-2 col-12 mt-5" style="margin-left: 370px;" >
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Restaurants</h4>
            </div>
            <div class="card-content">
                <div class="card-body">

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

    {{-- @foreach ( $restaurants as $restaurant)

    <label for="first-name-icon">{{ $restaurant->name }}</label>
    @endforeach --}}


                    <form class="form form-vertical" method="POST" action="{{ route('dashboardrestaurants.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="name" value="" class="form-control" placeholder="Name"
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
                                            <input type="text" name="phone" value="" class="form-control" placeholder="phone"
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
                                            <input type="text" name="location" value="" class="form-control" placeholder="location"
                                                id="location-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-icon-left">
                                        <label for="location-id-icon">LONGITUDE</label>
                                        <div class="position-relative">
                                            <input type="text" name="longitude" value="" class="form-control" placeholder="longitude"
                                                id="location-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="form-group has-icon-left">
                                        <label for="location-id-icon">LATITUDE</label>
                                        <div class="position-relative">
                                            <input type="text" name="latitude" value="" class="form-control" placeholder="latitude"
                                                id="location-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="Delivery_fee">Delivery fee</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">JD</span>
                                        <input type="number" id="Delivery_fee" name="delivery_fee" class="form-control"
                                            placeholder="" value="0" step="0.01" />
                                    </div>
                                </div>
                             
                                <label for="category-id-icon"name="category">category name</label><br>
                                <select name="category">
                                    
                                    <option name="category" value="1">main food</option>
                                    <option name="category" value="2">sweets</option>
                                    <option name="category" value="3">drinks</option>
                                  
                                  </select>
                                
                                  


                                {{-- <div class="form-group has-icon-left">
                                        <label for="category-id-icon">category_id</label>
                                        <div class="position-relative">
                                            <input type="text" name="category_id" value="" class="form-control" placeholder="category"
                                                id="category-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        --}}
                          </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left mx-4">
                                        <label for="password-id-icon">Upload Image</label>
                                        <div class="position-relative">
                                            <label for="image">
                                                <img src="../adminassets/img/avatars/default.png" class="d-block rounded"
                                                height="100"
                                                width="100"
                                                id="uploadedAvatar" alt="profile_photo"
                                                    style="cursor: pointer">
                                                <input type="file" id="image" name="image" class="form-control d-none">
                                            </label>
                                        </div><br>
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload new photo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" name="image" class="form-control d-none">
                                          </label>
                                    </div>
                                    
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-4 mb-3">Add</button>
                                
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
@endsection