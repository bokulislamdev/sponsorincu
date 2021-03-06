@extends('account.layouts.app',['title' => 'Create Partner'])



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Partner</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.partner.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Partners</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <form action="{{route('admin.partner.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Name Arabic</label>
                    <input type="text" class="form-control" name="name_ar" value="{{old('name_ar')}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    <span class="text-danger">{{$errors->first('title')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Title Arabic</label>
                    <input type="text" class="form-control" name="title_ar" value="{{old('title_ar')}}">
                </div>
                
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Website Link <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="web_link" value="{{old('web_link')}}">
                    <span class="text-danger">{{$errors->first('web_link')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Logo <span class="text-danger">*</span></</label>
                    <input type="file" class="form-control" name="image">
                    <span class="text-danger">{{$errors->first('image')}}</span>
                </div>
                <div class="col-12 text-center mt-5">
                    <a href="{{route('admin.partner.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>

                </div>
            </div>
        </form>
    </div>
    </div>


</main>
<!--end page main-->
@endsection
