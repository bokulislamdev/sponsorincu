@extends('account.layouts.app',['title' => 'User Profile'])



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
                    <li class="breadcrumb-item active text-white" aria-current="page">User Profile</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                
                    <a href="{{route('account.profile.edit',$profile->id)}}" class="btn btn-success radius-30"><i class="fadeIn animated bx bx-comment-edit" style="margin-right: 8px;"></i>Edit Profile</a>
                    <a href="{{route('account.password')}}" class="btn btn-primary radius-30"><i class="lni lni-pencil" style="margin-right: 8px;"></i>Change Password</a>

              </div>
            </div>
            <!--end breadcrumb-->
           
            <div class="profile-cover bg-dark"></div>
            <div class="row">
              <div class="col-12 col-lg-8 m-auto">
                <div class="card shadow-sm border-0 overflow-hidden">
                  <div class="card-body">
                      <div class="profile-avatar text-center">
                        <img src="{{asset($profile->image ? $profile->image : 'uploads/userprofile/default.png')}}" class="rounded-circle shadow" width="120" height="120" alt="">
                      </div>
                      <div class="text-center mt-4">
                        <h4 class="mb-1">{{$profile->name}}</h4>
                        <p class="mb-0 text-secondary">{{$profile->city}},{{$profile->country}}</p>
                      </div>
                      <hr>
                      <div class="text-start">
                        <table class="table table-border custom-table-css table-border table-hover">
                          <tbody>
                            <tr>
                              <th scope="row">Username</th>
                              <td>{{$profile->username}}</td>
                            </tr>
                            <tr>
                              <th scope="row">Full Name</th>
                              <td>{{$profile->name}}</td>
                            </tr>
                            <tr>
                              <th scope="row">Email</th>
                              <td>{{$profile->email}}</td>
                            </tr>
                            <tr>
                              <th scope="row">Phone Number</th>
                              <td>{{$profile->phone}}</td>
                            </tr>
                            <tr>
                              <th scope="row">City</th>
                              <td>{{$profile->city}}</td>
                            </tr>
                            <tr>
                              <th scope="row">Country</th>
                              <td>{{$profile->country}}</td>
                            </tr>
                            <tr>
                              <th scope="row">Address</th>
                              <td>{{$profile->address}}</td>
                            </tr>
                            <tr>
                            <tr>
                              <th scope="row">User Permission</th>
                              <td>
                                @if ($profile->role == 1)
                                    Admin User
                                @elseif($profile->role == 2)
                                    Vendor User
                                @elseif($profile->role == 3)
                                    Genarel User
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">User Status</th>
                              <td>
                                @if ($profile->status == 1)
                                    <span class="btn btn-primary btn-sm status-btn">Active</span>
                                @else
                                  <span  class="btn btn-danger btn-sm status-btn">Dactive</span>
                                @endif
                              </td>
                            </tr>
                           
                          </tbody>
                        </table>
                      </div>
                  </div>
                  
                </div>
              </div>
            </div><!--end row-->

          </main>
       <!--end page main-->
@endsection