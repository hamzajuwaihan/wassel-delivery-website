

@extends('adminpages.layout.master')
@section('content')
<div class="content-wrapper ">
<div class="page-heading" style="margin-left: 300px; width:1200px">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                    <h3 class="m-5">Manage Orders</h3>
                </div>
        
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between; align-items:center">
                    <div>Orders Table</div>
                    <!-- <a href="/superadmin/Orders/create"><button class="btn btn-primary">Add User</button></a> -->
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Order No.</th>
                                <th>User Name</th>
                                <th>User location</th>
                                <th>User Phone</th>
                                <th>resturant name</th>
                                <th>Total</th>
                                <th>Notes</th> 
                                <th>Status</th>
                                <th>Adjustments</th>

                            </tr>
                        </thead>
                        <tbody>
                          
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <!-- edit button -->
                                        <a href="" class="ms-3 "><i class="fas fa-user-edit"></i></a>
                                        <form style="display: inline-block" method="POST"
                                            action="">
                                          <!-- Delete button -->
                                            <button class="btn text-primary"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                    
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection