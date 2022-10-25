@extends('layouts.app')

@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item " aria-current="page"><a href="{{ route('myaccount.index') }}">User
                                    Profile</a></li>
                            <li class="breadcrumb-item active"><a href="#">edit</a></li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="/images\user-picture.png" alt="avatar" class="rounded-circle img-fluid"
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
                            <form action="{{ route('myaccount.update',$user->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="mb-0" for="name">Full Name</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ $user->name }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="mb-0" for="email">Email</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="email" id="email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{-- <p class="mb-0">Phone</p> --}}
                                        <label class="mb-0" for="phone">Phone</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            value="{{ $user->phone }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
