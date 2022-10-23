@extends('owner.layout.master')
@section('content')
    <!-- Content wrapper -->


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
    <div class="content-wrapper">
        <!-- Content -->
        <div class="page-heading" style="margin-left: 300px; width:1200px">
            <div class="container-xxl flex-grow-1 container-p-y">
                <h3 class="fw-bold py-3 mb-4">Restaurant Edit </h3>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <h5 class="card-header">Restaurant Details</h5>
                            <!-- Account -->
                            <form action="{{ route('restaurantview.update', $restaurant->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PATCH')
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="/images/{{ $restaurant->image }}" alt="user-avatar" class="d-block rounded"
                                        height="100" width="100" id="uploadedAvatar" />
                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload new photo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" name="image" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" />
                                        </label>
                                        <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Reset</span>
                                        </button>
                                        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label"> Name</label>
                                        <input class="form-control" type="text" id="name" name="name"
                                            value="{{ $restaurant->name }}" autofocus />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="location" class="form-label">Location</label>
                                        <input class="form-control" type="text" name="location" id="location"
                                            value="{{ $restaurant->location }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">JOR (+962)</span>
                                            <input type="text" id="phoneNumber" name="phone" class="form-control"
                                                placeholder="" value="{{ $restaurant->phone }}" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="Delivery_fee">Delivery fee</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">JD</span>
                                            <input type="number" id="Delivery_fee" name="delivery_fee" class="form-control"
                                                placeholder="" value="{{ $restaurant->delivery_fee }}" step="0.01" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="status">Restaurant Status</label><br>
                                        <select name="status" class="form-control">
                                            <option name="status" value="Available">Available</option>
                                            <option name="status" value="Closed">Closed</option>
                                            <option name="status" value="Busy">Busy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                </div>
                            </div>
                            </form>
                            <!-- /Account -->
                        </div>


                        <!--we can remove it -->
                        {{-- <div class="card">
                            <h5 class="card-header">Delete Account</h5>
                            <div class="card-body">
                                <div class="mb-3 col-12 mb-0">
                                    <div class="alert alert-warning">
                                        <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your
                                            account?
                                        </h6>
                                        <p class="mb-0">Once you delete your account, there is no going back. Please be
                                            certain.</p>
                                    </div>
                                </div>
                                <form id="formAccountDeactivation" onsubmit="return false">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="accountActivation"
                                            id="accountActivation" />
                                        <label class="form-check-label" for="accountActivation">I confirm my account
                                            deactivation</label>
                                    </div>
                                    <button type="submit" class="btn btn-danger deactivate-account">Deactivate
                                        Account</button>
                                </form>
                            </div>
                            <!--end delete form -->

                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- / Content -->

        @endsection
