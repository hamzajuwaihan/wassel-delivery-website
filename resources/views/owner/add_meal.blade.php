@extends('owner.layout.master')
@section('content')
    <div class="col-md-8 offset-md-2 col-12 mt-5" style="margin-left: 370px;">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Meal</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('addMeal.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-body">
                            <div class="row">

                                <div class=" mb-3 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="name">Meal Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="name" value="" class="form-control"
                                                placeholder="Name" id="name">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label" for="price">Price</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">JD</span>
                                        <input type="number" id="price" name="price" class="form-control"
                                            placeholder="" value="" step="0.01" />
                                    </div>
                                </div>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">

                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload new photo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" name="image" class="account-file-input"
                                                hidden accept="image/png, image/jpeg" />
                                        </label>
                                        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
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
