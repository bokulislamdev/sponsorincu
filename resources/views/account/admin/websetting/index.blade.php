@extends('account.layouts.app',['title' => 'Websetting'])



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Admin Users</h5></div>
    <div class="ms-auto">
        <a href="{{route('admin.websetting.edit',1)}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-message-square-edit"></i> Edit Websetting</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <table class="table table-border custom-table-css table-border table-hover">
            <tbody>
                <tr>
                <th scope="row">Website Name</th>
                <td>{{$websetting->website_name}}</td>
                </tr>
                <tr>
                <th scope="row">Title</th>
                <td>{{$websetting->homepage_title}}</td>
                </tr>
                <tr>
                <th scope="row">About</th>
                <td>{{$websetting->about}}</td>
                </tr>
                <tr>
                <th scope="row">Meta Tags</th>
                <td>{{$websetting->meta_tags}}</td>
                </tr>
                <tr>
                <th scope="row">Meta Description</th>
                <td>{{$websetting->meta_description}}</td>
                </tr>
                <tr>
                <th scope="row">Sitebanner</th>
                <td><img src="{{asset($websetting->sitebanner)}}" alt="Banner Photo"></td>
                </tr>
                <tr>
                <th scope="row">Logo</th>
                <td><img src="{{asset($websetting->logo)}}" alt=""></td>
                </tr>
                <tr>
                <th scope="row">Footer Logo</th>
                <td><img src="{{asset($websetting->footer_logo)}}" alt=""></td>
                </tr>
                <tr>
                    <th scope="row">Favicon Icon </th>
                    <td><img src="{{asset($websetting->favicon)}}" alt=""></td>
                </tr>
                <tr>
                <th scope="row">Email></th>
                <td>{{$websetting->email}}</td>
                </tr>
            <tr>
                <th scope="row">State Address></th>
                <td>{{$websetting->state_address}}</td>
                </tr>
                <tr>
                <th scope="row">Local Address</th>
                <td>{{$websetting->local_address}}</td>
                </tr>
                <tr>
                <th scope="row">Address</th>
                <td>{{$websetting->address}}</td>
                </tr>
                <tr>
                <th scope="row">Map Code</th>
                <td>{{$websetting->map_code}}</td>
                </tr>
                
                
                
            </tbody>
            </table>
    </div>
    </div>
        

</main>
<!--end page main-->
@endsection