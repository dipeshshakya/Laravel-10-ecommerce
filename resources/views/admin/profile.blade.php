@extends('admin.dashboard')
@section('admin')
<div class="page-content">

  
    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
            <img class="wd-80  rounded-circle" src="{{(!empty($data->photo))? url('upload/admin/image/'.$data->photo) : 'https://via.placeholder.com/100x100' }}" alt="profile">
              <h6 class="card-title mb-0">About</h6>
              <div class="dropdown">
                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="git-branch" class="icon-sm me-2"></i> <span class="">Update</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View all</span></a>
                </div>
              </div>
            </div>
            <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
              <p class="text-muted">{{$data->username}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
              <p class="text-muted">{{$data->address}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">{{$data->email}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
              <p class="text-muted">{{$data->phone}}</p>
            </div>
            <div class="mt-3 d-flex social-links">
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="github"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="twitter"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
        
            <div class="card">
                <div class="card-body">
  
                    <h6 class="card-title">Edit Profile</h6>
  
                        <form class="forms-sample" method="POST" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
                          @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" autocomplete="off" value="{{ $data->username }}" name="username">
                            </div>
                            <div class="mb-3">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" class="form-control" autocomplete="off" value="{{ $data->name }}" name="name">
                          </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control"  value="{{ $data->email }}" name="email" >
                            </div>

                            <div class="mb-3">
                              <label for="phone" class="form-label">Phone</label>
                              <input type="text" class="form-control" name="phone" autocomplete="off" value= "{{ $data->phone }}">
                          </div>

                          <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" autocomplete="off" value="{{ $data->address }}">
                        </div>
                            
                          <div class="mb-3">

                            <input type="file" class="form-control mb-3" name="photo" autocomplete="off"  id="image">
                            <img class="wd-80 rounded-circle" id="showImage" src="{{(!empty($data->photo))? url('upload/admin/image/'.$data->photo) : 'https://via.placeholder.com/100x100' }}" alt="profile">
                            
                        </div>
                            
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </form>
  
                </div>
              </div>
        </div>
      </div>
      <!-- middle wrapper end -->
   
    </div>

        </div>


        <script type="text/javascript">
          $(document).ready(function(){
            $('#image').change(function(e){
              var reader = new FileReader();
              reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);

              }
              reader.readAsDataURL(e.target.files['0']);
            })

          })
        
        </script>

@endsection