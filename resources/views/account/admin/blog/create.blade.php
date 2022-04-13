@extends('account.layouts.app',['title' => 'Create Blog'])



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Blog</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.blog.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Blogs</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Blog Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    <span class="text-danger">{{$errors->first('title')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Blog Title Arabic</label>
                    <input type="text" class="form-control" name="title_ar" value="{{old('title_ar')}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="image">
                    <span class="text-danger">{{$errors->first('image')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Blog Category <span class="text-danger">*</span></label>
                    <select name="blog_category_id" id="" class="form-control">
                        @foreach ($blog_categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{$errors->first('blog_category_id')}}</span>
                </div>

                <div class="col-12 py-2">
                    <label for="" class="form-label">Blog Details <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control summernote"></textarea>
                    <span class="text-danger">{{$errors->first('description')}}</span>
                </div>
                <div class="col-12 py-2">
                    <label for="" class="form-label">Blog Details Arabic</label>
                    <textarea name="description_ar"  class="form-control summernote"></textarea>
                </div>
                <div class="d-flex mt-2">
                    <div style="margin-right: 40px">
                        <input type="checkbox" id="sell_post" name="sell_post" value="1" {{old('sell_post') == 1 ? checked : ''}}>
                        <label for="sell_post">Sell Post</label>
                    </div>
                    <div>
                        <input type="checkbox" id="offer_post" name="offer_post" value="1" {{old('offer_post') == 1 ? checked : ''}}>
                        <label for="offer_post">Offer Post</label>
                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="{{route('admin.blog.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
    </div>


</main>
<!--end page main-->
@endsection

