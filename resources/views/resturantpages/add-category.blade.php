@extends('resturantpages.layout.master')
@section('content')
<div class="col-md-8 offset-md-2 col-12 mt-5" style="margin-left: 370px;" >
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Category</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action=""
                        enctype="multipart/form-data">
                    
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="Category-name-icon">Category Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="Categoryname" value="" class="form-control" placeholder="Category Name"
                                                id="Category-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="col-12">

                                    <div class="form-group has-icon-left">
                                        <label for=" category-description-id-icon">Category Description</label>
                                        <div class="position-relative">
                                            <input type="text" name=" category-description" value="" class="form-control" placeholder=" category description"
                                                id=" category-description-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-icon-left">
                                        <label for="release-id-icon">Release Date</label>
                                        <div class="position-relative">
                                            <input type="text" name="release" value="" class="form-control" placeholder="release"
                                                id="release-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-release"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                   
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="password-id-icon">Image</label>
                                        <div class="position-relative">
                                            <label for="image">
                                                <img src="{{ asset('img/Add_Image_icon.png') }}" alt="profile_photo"
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