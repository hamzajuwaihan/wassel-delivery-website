@extends('resturantpages.layout.master')
@section('content')
<div class="col-md-8 offset-md-2 col-12 mt-5" style="margin-left: 370px;" >
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Order</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{"
                        enctype="multipart/form-data">
                    
                        <div class="form-body">
                            <div class="row"> 
                                <div class="form-group has-icon-left">
                                        <label for="number-id-icon">No.</label>
                                        <div class="position-relative">
                                            <input type="text" name="number" value="" class="form-control" placeholder="number"
                                                id="number-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-number"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="meal-name-icon">Meal Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="meal-name" value="" class="form-control" placeholder="Name"
                                                id="meal-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">

                                <div class="form-group has-icon-left">
                                        <label for="description-id-icon">Meal Description</label>
                                        <div class="position-relative">
                                            <input type="text" name="description" value="" class="form-control" placeholder="description"
                                                id="description-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group has-icon-left">
                                        <label for="category-id-icon">Meal Category</label>
                                        <div class="position-relative">
                                            <input type="text" name="category" value="" class="form-control" placeholder="category"
                                                id="category-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-icon-left">
                                        <label for="start-Date-id-icon">order Date</label>
                                        <div class="position-relative">
                                            <input type="text" name="start-Date" value="" class="form-control" placeholder="order-Date"
                                                id="start-Date-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="form-group has-icon-left">
                                        <label for="User-id-icon">User Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="user-name" value="" class="form-control" placeholder="user-name"
                                                id="user-name-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="location-id-icon">User location</label>
                                        <div class="position-relative">
                                            <input type="text" name="user-location" value="" class="form-control" placeholder="user-location"
                                                id="user-location-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
       
                          
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