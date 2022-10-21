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
                                            <input type="text" name="longitude" value="" class="form-control" placeholder="location"
                                                id="location-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-icon-left">
                                        <label for="location-id-icon">LATITUDE</label>
                                        <div class="position-relative">
                                            <input type="text" name="latitude" value="" class="form-control" placeholder="location"
                                                id="location-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <select>
                                    
                                    <option value="actual value 1">Display Text 1</option>
                                    <option value="actual value 2">Display Text 2</option>
                                    <option value="actual value 3">Display Text 3</option>
                                  </select>
                                  
                                {{-- <div class="form-group has-icon-left">
                                        <label for="location-id-icon">category_id</label>
                                        <div class="position-relative">
                                            <input type="text" name="category_id" value="" class="form-control" placeholder="location"
                                                id="location-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
       
                          
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="password-id-icon">Image</label>
                                        <div class="position-relative">
                                            <label for="image">
                                                <img src="" alt="profile_photo"
                                                    style="cursor: pointer">
                                                <input type="file" id="image" name="image" class="form-control d-none">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Add</button>
                                
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
@endsection