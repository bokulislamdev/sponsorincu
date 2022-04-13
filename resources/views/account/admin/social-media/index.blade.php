@extends('account.layouts.app',['title' => 'Social Media All'])



@section('content')
    <!--start content-->
    <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Sliders</h5></div>
        <div class="ms-auto">
            <a href="{{route('admin.social-media.edit',1)}}" class="btn btn-primary"> <i class="fadeIn animated bx bx-message-square-edit"></i>Edit Social Media</a>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                <tr>
                    <th>#</th>
                    <th>facebook</th>
                    <th>youtube</th>
                    <th>linkdin</th>
                    <th>twitter</th>
                    <th>instagram</th>
                    <th>pinterest</th>
                    <th>telegram</th>
                    <th>whatsapp</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($social_media as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->facebook}}</td>
                    <td>{{$item->youtube}}</td>
                    <td>{{$item->linkdintube}}</td>
                    <td>{{$item->twitter}}</td>
                    <td>{{$item->instagram}}</td>
                    <td>{{$item->pinterest}}</td>
                    <td>{{$item->telegram}}</td>
                    <td>{{$item->whatsapp}}</td>

                </tr>
                
                @endforeach

                </tbody>
            </table>
            </div>
        </div>
        </div>

    </main>
<!--end page main-->
@endsection