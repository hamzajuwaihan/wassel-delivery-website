@extends('adminpages.layout.master')
@section('content')
<div class="col-md-8 offset-md-2 col-12 mt-5" style="margin-left: 370px;" >
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add User</h4>
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
                    <form class="form form-vertical" method="POST" action="{{ route('users.update',$user->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="First Name"
                                                id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Last Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="lastname" value="" class="form-control" placeholder="Last Name"
                                                id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-12">

                                    <div class="form-group has-icon-left">
                                        <label for="email-id-icon">Email</label>
                                        <div class="position-relative">
                                            <input type="text" name="email"  value="{{ $user->email }}" class="form-control" placeholder="Email"
                                                id="email-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    {{-- <div class="form-group has-icon-left">
                                        <label for="email-id-icon">Password</label>
                                        <div class="position-relative">
                                            <input type="text" name="password"  value="{{ $user->password }}" class="form-control" placeholder="Email"
                                                id="email-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group has-icon-left">
                                        <label for="phone-id-icon">phone</label>
                                        <div class="position-relative">
                                            <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="phone"
                                                id="phone-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for=" gender-id-icon"> type</label>
                                        <div class="position-relative">
                                            {{-- <input type=" gender" name="type" value="{{ $user->type }}" class="form-control"
                                                placeholder=" gender" id=" gender-id-icon"> --}}
                                                <select name="type" style="width:200px; height:30px;" id = "type" value="{{ $user->type }}">
                                   
                                                    <option value="admin">admin</option>
                                                    <option value="owner">owner</option>
                                                    <option value="user">user</option>
                                                    
                                                  </select> 
                                            <div class="form-control-icon">
                                                <i class="bi bi-map"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="password-id-icon">Password</label>
                                        <div class="position-relative">
                                            <input type="password" name="password" value="{{ old('password') }}" class="form-control"
                                                placeholder="Password" id="password-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                {{-- <div class="col-12">
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
                                </div> --}}
                                <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection