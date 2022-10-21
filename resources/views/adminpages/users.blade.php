

@extends('adminpages.layout.master')
@section('content')
<div class="content-wrapper ">
<div class="page-heading" style="margin-left: 300px; width:1200px">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                    <h3 class="m-5">Manage Users</h3>
                </div>
        
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <section class="section">
            <div class="card">

                <div class="card-header" style="display: flex; justify-content:space-between; align-items:center">
                    <div>Users Table</div>
                    <a href="/add-user"><button class="btn btn-primary">Add User</button></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                           
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                {{-- <th>User Last Name</th> --}}
                                <th>User Email</th>
                                
                                <th>User Phone</th>
                                <th>User Type</th>
                                <th >Action</th>
                                {{-- <th>??</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                   
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->type }}</td>
                                    
                                    <td>
                                        <!-- edit button -->
                                        <a href="" class="ms-3 "><i class="fas fa-user-edit"></i></a>
                                        <form style="display: inline-block" method="POST"
                                            action="{{ route('users.destroy',$user->id) }}"onsubmit="return confirm('Are you sure?');" >
                                            <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>

                                          <!-- Delete button -->
                                          @csrf
                                          @method('DELETE')
                                            <button class="btn text-primary">Delete<i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection