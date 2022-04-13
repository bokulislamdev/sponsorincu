@extends('account.layouts.app',['title' => 'Edit Users'])



@section('content')
               <!--start content-->
               <main class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
                  <div class="pe-3"><h5 class="text-white m-0">Admin Users</h5></div>
                  <div class="ms-auto">
                    {{-- <a href="{{route('admin.user.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To User</a> --}}
                  </div>
                </div>
                <!--end breadcrumb-->
    
                <div class="card">
                    <div class="card-body">
                        <table class="table table-border custom-table-css table-border table-hover">
                            <tbody>
                              <tr>
                                <th scope="row">Username</th>
                                <td>{{$user->username}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Full Name</th>
                                <td>{{$user->name}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Email</th>
                                <td>{{$user->email}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Phone Number</th>
                                <td>{{$user->phone}}</td>
                              </tr>
                              <tr>
                                <th scope="row">City</th>
                                <td>{{$user->city}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Country</th>
                                <td>{{$user->country}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Address</th>
                                <td>{{$user->address}}</td>
                              </tr>
                              <tr>
                              <tr>
                                <th scope="row">User Permission</th>
                                <td>
                                  @if ($user->role == 1)
                                      Admin User
                                  @elseif($user->role == 2)
                                      Vendor User
                                  @elseif($user->role == 3)
                                      Genarel User
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">User Status</th>
                                <td>
                                  @if ($user->status == 1)
                                      <span class="btn btn-primary btn-sm">Active</span>
                                  @else
                                    <span  class="btn btn-danger btn-sm">Dactive</span>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Action</th>
                                <td>
                                    <a href="{{route('admin.user.edit',$user->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Views"><i class="bi bi-pencil-fill"></i></a>
                                </td>
                              </tr>
                             
                            </tbody>
                          </table>
                    </div>
                  </div>
                        
    
              </main>
           <!--end page main-->
@endsection