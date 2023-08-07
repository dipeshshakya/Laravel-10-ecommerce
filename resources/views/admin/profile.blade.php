@extends('admin.dashboard')
@section('admin')
<div class="page-content">

  
    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
            <img class="wd-70 rounded-circle" src="{{(!empty($data->photo))? url('upload/admin/images/'.$data->photo) : 'https://via.placeholder.com/100x100' }}" alt="profile">
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
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
              <p class="text-muted">November 15, 2015</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
              <p class="text-muted">New York, USA</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">me@nobleui.com</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
              <p class="text-muted">www.nobleui.com</p>
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
  
                    <h6 class="card-title">Basic Form</h6>
  
                                  <form class="forms-sample">
                                      <div class="mb-3">
                                          <label for="exampleInputUsername1" class="form-label">Username</label>
                                          <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Password">
                                      </div>
                                      <div class="form-check mb-3">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">
                                              Remember me
                                          </label>
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

@endsection