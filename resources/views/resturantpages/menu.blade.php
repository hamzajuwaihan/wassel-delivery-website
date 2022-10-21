@extends('resturantpages.layout.master')
@section('content')
<div class="content-wrapper ">
<div class="page-heading" style="margin-left: 300px; width:1200px">
    
        <div class="page-title ">
            <div class="row">
                <div class="col-10 col-md-6 order-md-1">
                    <h3 class="m-5">All Menu</h3>
                </div>
             
            </div>
        </div>
       
        <section class="section container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between; align-items:center">
                    <div>All Menu Table</div>
                    <a href="/add_meal"><button class="btn btn-primary" style="margin-left:700px">Add Meal</button></a>
                    <a href="/add-offers"><button class="btn btn-primary">Add Offers</button></a>

                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Meals Number</th>
                                <th>Meals Image</th>
                                <th>Meals Name</th>
                                <th>Meals Description</th>
                                <th>Meals Size</th>
                                <th>Meals Offer</th>
                                <th>Offer Expire Date</th>
                                <th>Adjustments</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>
                                    <td></td>
                                    <td>
                                     <!-- <img class="avatar me-2" style="object-fit: cover" width="50" height="50"
                                            src=""> -->
                                    </td>
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
