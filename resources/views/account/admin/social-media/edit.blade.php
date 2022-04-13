@extends('account.layouts.app',['title' => 'Edit Social Media'])



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Social Media</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.social-media.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Social Media</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body custom-form-admin">
        <form action="{{route('admin.social-media.update',$social_media->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">facebook</label>
                    <input type="text" class="form-control" name="facebook" value="{{$social_media->facebook}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">youtube</label>
                    <input type="text" class="form-control" name="youtube" value="{{$social_media->youtube}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">linkdin</label>
                    <input type="text" class="form-control" name="linkdin" value="{{$social_media->linkdin}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">twitter</label>
                    <input type="text" class="form-control" name="twitter" value="{{$social_media->twitter}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">instagram</label>
                    <input type="text" class="form-control" name="instagram" value="{{$social_media->instagram}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">pinterest</label>
                    <input type="text" class="form-control" name="pinterest" value="{{$social_media->pinterest}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">telegram</label>
                    <input type="text" class="form-control" name="telegram" value="{{$social_media->telegram}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">whatsapp</label>
                    <input type="text" class="form-control" name="whatsapp" value="{{$social_media->whatsapp}}">
                </div>
               

                <div class="col-12 text-center mt-5">
                    <a href="{{route('admin.social-media.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
    </div>
        

</main>
<!--end page main-->
@endsection