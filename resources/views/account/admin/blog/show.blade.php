@extends('account.layouts.app',['title' => 'Blog Show'])



@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
            <div class="pe-3">
                <h5 class="text-white m-0">Blog View</h5>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.blog.index') }}" class="btn btn-primary custom-head-link"> <i
                        class="fadeIn animated bx bx-undo"></i> Back to Blog</a>
            </div>
        </div>
        <!--end breadcrumb-->


        <div class="card">
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-border custom-table-css table-border table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Blog Title</th>
                                <td>{{ $blog->title }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Blog Title Arabic</th>
                                <td>{{ $blog->title_ar }}</td>
                            </tr>



                            <tr>
                                <th scope="row">Category</th>
                                <td>

                                    {{ $blog->blogCategory ? $blog->blogCategory->name : '' }}


                                </td>
                            </tr>


                            <tr>
                                <th scope="row">Blog Details</th>
                                <td>{!! $blog->description !!}</td>
                            </tr>

                            <tr>
                                <th scope="row"> Blog Details Arabic</th>
                                <td>{!! $blog->description_ar !!}</td>
                            </tr>



                            <tr>
                                <th>Check Box</th>
                               <td>
                                <div class="col-12">
                                    <div class="d-flex d-flex justify-content-start">
                                        <div style="margin-right: 30px;">
                                            <input type="checkbox" name="sell_post" value="1" {{$blog->sell_post == 1 ? 'checked' : ''}}>
                                            <label for="">Sell Post</label>

                                        </div>
                                        <div style="margin-right: 30px;">
                                            <input type="checkbox" name="offer_post" value="1" {{$blog->offer_post == 1 ? 'checked' : ''}}>
                                            <label for="">Offer Post</label>

                                        </div>

                                    </div>
                                </div>

                               </td>

                            </tr>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class=" card">
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-border custom-table-css table-border table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Blog Default Image</th>

                                </td>
                            </tr>
                            <tr>

                                <td><img src="{{ asset($blog->image) }}" style="width: 120px; alt=""></td>


                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>







    </main>
    <!--end page main-->
@endsection
