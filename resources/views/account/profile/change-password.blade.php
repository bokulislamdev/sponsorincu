@extends('account.layouts.app',['title' => 'Change User Password'])

@section('content')
	       <!--start content-->
           <main class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center">
              <div class="breadcrumb-title pe-3 text-white">Pages</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt text-white"></i></a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Edit User Profile</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                
                    <a href="{{route('account.profile.index')}}" class="btn btn-success px-5 radius-30"><i class="fadeIn animated bx bx-user" style="margin-right: 8px;"></i>Profile</a>
                
                {{-- <div class="btn-group">
                  <button type="button" class="btn btn-light">Settings</button>
                  <button type="button" class="btn btn-light split-bg-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div> --}}
              </div>
            </div>
            <!--end breadcrumb-->
           
            <div class="profile-cover bg-dark"></div>

            <div class="row">
              <div class="col-12 col-lg-8 m-auto">
                <div class="card shadow-sm border-0">
                  <div class="card-body">
                      <h5 class="mb-0">My Account</h5>
                      <hr>

                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">CHANGE PASSWORD</h6>
                        </div>
                        <div class="card-body">
                          <form class="row g-3" action="{{route('account.change.password',$profile->id)}}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Carrent Password <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="current_password">
                                <span class="text-danger">{{$errors->first('current_password')}}</span>
                             </div>
                             <div class="col-12">
                              <label class="form-label">New Password <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="new_password">
                              <span class="text-danger">{{$errors->first('new_password')}}</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="password_confirmation">
                                <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                             </div>
                            
                            <div class="text-start">
                                <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                              </div>
                          </form>
                        </div>
                      </div>
                      
                  </div>
                </div>
              </div>

            </div>
            <!--end row-->

          </main>
       <!--end page main-->
@endsection