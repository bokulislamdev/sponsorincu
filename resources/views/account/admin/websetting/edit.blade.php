@extends('account.layouts.app',['title' => 'Edit Websetting'])

@push('css')
  <style>
        .custom-table-css tbody tr td{
            padding: 10px 0 !important;            
        }
  </style>
@endpush


@section('content')
    <!--start content-->
    <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Websetting</h5></div>
        <div class="ms-auto">
            <a href="{{route('admin.websetting.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Websetting</a>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.websetting.update',1)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Website Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="website_name" value="{{$websetting->website_name}}">
                        <span class="text-danger">{{$errors->first('website_name')}}</span>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="homepage_title" value="{{$websetting->homepage_title}}">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">About</label>
                        <input type="text" class="form-control" name="email" value="{{$websetting->about}}">
                        <span class="text-danger">{{$errors->first('about')}}</span>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Meta Tags</label>
                        <input type="text" class="form-control" name="meta_tags" value="{{$websetting->meta_tags}}">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Meta Description</label>
                        <input type="text" class="form-control" name="meta_description" value="{{$websetting->meta_description}}">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$websetting->email}}">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$websetting->phone}}">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">State Address</label>
                        <input type="text" class="form-control" name="state_address" value="{{$websetting->state_address}}">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Local_address</label>
                        <input type="text" class="form-control" name="local_address" value="{{$websetting->local_address}}">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$websetting->address}}">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Map Code</label>
                        <input type="text" class="form-control" name="map_code" value="{{$websetting->map_code}}">
                    </div>
                    
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Sitebanner : <img src="{{asset($websetting->sitebanner)}}"  style="height: 50px;"></label>
                        <input type="file" class="form-control" name="sitebanner">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Logo : <img src="{{asset($websetting->logo)}}" style="height: 50px;"></label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Footer Logo : <img src="{{asset($websetting->footer_logo)}}" style="height: 50px;"></label>
                        <input type="file" class="form-control" name="footer_logo">
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Favicon : <img src="{{asset($websetting->favicon)}}"  style="height: 50px;"></label>
                        <input type="file" class="form-control" name="favicon">
                    </div>
                    
                    <div class="col-12 text-center mt-5">
                        <a href="{{route('admin.websetting.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>

                    </div>
                </div>
            </form>
        </div>
        </div>
            

    </main>
<!--end page main-->
@endsection