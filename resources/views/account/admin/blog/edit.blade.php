@extends('account.layouts.app',['title' => 'Edit Blog'])



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Update Blog</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.blog.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Blog Category</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <form action="{{route('admin.blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Blog Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                    <span class="text-danger">{{$errors->first('title')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Blog Title Arabic</label>
                    <input type="text" class="form-control" name="title_ar" value="{{$blog->title_ar}}">
                    <span class="text-danger">{{$errors->first('title_ar')}}</span>
                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Blog Category <span class="text-danger">*</span></label>
                    <select name="blog_category_id" id="" class="form-control">
                        @foreach ($blog_categories as $item)
                        <option value="{{$item->id}}" {{$item->id == $blog->blog_category_id ? 'selected' : ''}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{$errors->first('blog_category_id')}}</span>
                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" {{$blog->status  == 1 ? 'selected' : ""}}>Active</option>
                        <option value="2" {{$blog->status == 2 ? 'selected' : ""}}>Dactive</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Image <img src="{{asset($blog->image)}}" alt="" style="width: 100px;"></label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="col-12 py-2">
                    <label for="" class="form-label">Blog Details</label>
                    <textarea name="description" class="form-control summernote">{{$blog->description}}</textarea>
                </div>
                <div class="col-12 py-2">
                    <label for="" class="form-label">Blog Details Arabic</label>
                    <textarea name="description"  class="form-control summernote">{{$blog->description}}</textarea>
                </div>

                <div class="d-flex mt-2">
                    <div style="margin-right: 40px">
                        <input type="checkbox" id="sell_post" name="sell_post" value="1" {{$blog->sell_post == 1 ? 'checked' : ''}}>
                        <label for="sell_post">Sell Post</label>
                    </div>
                    <div>
                        <input type="checkbox" id="offer_post" name="offer_post" value="1" {{$blog->offer_post == 1 ? 'checked' : ''}}>
                        <label for="offer_post">Offer Post</label>
                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="{{route('admin.blog.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>


            </div>
        </form>
    </div>
    </div>


</main>
<!--end page main-->
@endsection

