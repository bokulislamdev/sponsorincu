@extends('account.layouts.app',['title' => 'Change Users Password'])



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">User Change Password</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.user.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Admin</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <form action="{{route('admin.user.change.password.post',$user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Pssword <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="password">
                    <span class="text-danger">{{$errors->first('password')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="password_confirmation">
                    <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
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