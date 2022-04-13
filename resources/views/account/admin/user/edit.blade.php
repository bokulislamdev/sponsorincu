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
                        <form action="{{route('admin.user.update',$user->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">Username <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="username" value="{{$user->username}}">
                                    <span class="text-danger">{{$errors->first('username')}}</span>
                                </div>
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                </div>
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                                </div>
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" value="{{$user->country}}">
                                </div>
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" value="{{$user->country}}">
                                </div>
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" value="{{$user->city}}">
                                </div>
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" value="{{$user->address}}">
                                </div>
                                
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">User permission</label>
                                    <select name="role" id="" class="form-control">
                                        <option value="1" {{$user->role == 1 ? 'selected' : ""}}>Admin</option>
                                        <option value="2" {{$user->role == 2 ? 'selected' : ""}}>Vendor</option>
                                        <option value="3" {{$user->role == 2 ? 'selected' : ""}}>Genarel User</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="1" {{$user->status == 1 ? 'selected' : ""}}>Active</option>
                                        <option value="2" {{$user->status == 2 ? 'selected' : ""}}>Dactive</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 py-2">
                                    <label for="" class="form-label">Profile Image <img src="{{asset($user->image)}}" alt="Profile Photo" style="height: 100px;"></label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-12 text-center mt-5">
                                    <a href="{{route('admin.user.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Update</button>

                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                        
    
              </main>
           <!--end page main-->
@endsection