@extends('account.layouts.app',['title' => 'Edit User Profile'])

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
                      {{-- <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">USER INFORMATION</h6>
                        </div>
                        <div class="card-body">
                          <form class="row g-3">
                             <div class="col-6">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" value="@jhon">
                             </div>
                             <div class="col-6">
                              <label class="form-label">Email address</label>
                              <input type="text" class="form-control" value="xyz@example.com">
                            </div>
                              <div class="col-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" value="jhon">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" value="">
                            </div>
                          </form>
                        </div>
                      </div> --}}
                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">USER INFORMATION</h6>
                        </div>
                        <div class="card-body">
                          <form class="row g-3" action="{{route('account.profile.update',$profile->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-6">
                                <label class="form-label">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{$profile->username}}" name="username">
                                <span class="text-danger">{{$errors->first('username')}}</span>
                             </div>
                             <div class="col-6">
                              <label class="form-label">Full Name <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" value="{{$profile->name}}" name="name">
                              <span class="text-danger">{{$errors->first('name')}}</span>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{$profile->email}}" name="email">
                                <span class="text-danger">{{$errors->first('email')}}</span>
                             </div>
                             <div class="col-6">
                              <label class="form-label">Phone</label>
                              <input type="text" class="form-control" value="{{$profile->phone}}" name="phone">
                            </div>
                           
                             <div class="col-6">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" value="{{$profile->city}}" name="city">
                             </div>
                             <div class="col-6">
                              <label class="form-label">Country</label>
                              <input type="text" class="form-control" value="{{$profile->country}}" name="country">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" value="{{$profile->address}}" name="address">
                            </div>
                            <div class="col-6">
                                <label class="form-label">
                                    <img src="{{asset($profile->image ? $profile->image : 'uploads/userprofile/default.png')}}" alt="Profile Photo" style="width: 100px;">
                                </label>
                             </div>
                             <div class="col-6">
                              <label class="form-label">Profile Photo</label>
                              <input type="file" class="form-control" name="image">
                            </div>

                            <div class="text-end">
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