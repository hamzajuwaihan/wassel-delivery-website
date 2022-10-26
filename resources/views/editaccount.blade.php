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
                               <form action="{{ route('myaccount.update',$user->id) }}" method="POST" enctype="multipart/form-data"  >
                                @csrf
                                @method('PATCH')
                        <div class="card-body text-center">
                            <div class="text-center img-placeholder"  onClick="triggerClick()">
                                <h4>Upload Photo</h4>
                              </div>
                              <img src="/images/{{ $user->image }}" width="80px"height="80px" onClick="triggerClick()" id="profileDisplay">
                            </span>
                            <input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
          
                            {{-- <img src="/images\user-picture.png" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;"> --}}
                            <h5 class="my-3">{{ $user->name }}</h5>
                            {{-- <div class="d-flex justify-content-center mb-2">
                                <a class="btn btn-primary" href="{{ route('myaccount.edit', Auth::user()->id) }}">edit</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                
  <script>
    function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                  
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
