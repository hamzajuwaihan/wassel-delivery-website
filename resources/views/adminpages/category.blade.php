@extends('adminpages.layout.master')
@section('content')
    <div class="content-wrapper ">
        <div class="page-heading" style="margin-left: 300px; width:1200px">
            <div class="page-title">
                <h3 class="m-5">All Category</h3>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            <div class="row d-flex align-items-center justify-content-start" style="flex-wrap: wrap">



                @foreach ($categories as $category)
                    <!-- Food and Dining -->
                    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                <div class="card-title mb-0">
                                    <h5 class="m-0 me-2">{{ $category->name }}</h5>
                                    <small class="text-muted"># Total resturant </small>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">

                                    </button>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex flex-column align-items-center gap-1">
                                        <h2 class="mb-2">{{\DB::table('restaurants')->count()}}</h2>
                                        <span>Total Restaurant They serve Food </span>
                                    </div>
                                    <div id="orderStatisticsChart"></div>
                                </div>
                                <ul class="p-0 m-0">
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-primary"><i
                                                    class="bx bx-"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Restaurants 1</h6>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-success"><i
                                                    class="bx bx-"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Restaurants 2</h6>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Restaurants 3</h6>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-secondary"><i
                                                    class="bx bx-"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Restaurants 4</h6>

                                            </div>
                  
                                        </div>
                                    </li>
                                </ul>
                            </div> 
                             <form style="display: inline-block " method="POST"action="{{ route('category.destroy', $category->id) }}"onsubmit="return confirm('Are you sure?');">
                    <a class="btn btn-primary mx-3 mb-2" href="{{ route('category.edit', $category->id) }}" >Edit</a>
                      <!-- Delete button -->
                      @csrf
                      @method('DELETE')
                        <button class="btn text-primary  mb-2">Delete<i class="far fa-trash-alt"></i></button>
                    </form> 
                        </div>
                    </div>

                    <!--/ Food and Dining -->
                @endforeach



            </div>
        </div>
    </div>
    </div>
@endsection
