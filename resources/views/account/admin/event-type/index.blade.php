@extends('account.layouts.app',['title' => 'Event Type All'])



@section('content')
    <!--start content-->
    <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Event Types</h5></div>
        <div class="ms-auto">
            <a href="{{route('admin.event-type.create')}}" class="btn btn-primary custom-head-link"> <i class="lni lni-circle-plus custom-head-link"></i>Create Event Type</a>
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
                    <th>Name</th>
                    <th>Name Arabic</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($event_types as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->name_ar}}</td>
                    <td>
                        @if ($item->status == 1)
                            <span class="btn btn-success status-btn">Active</span>
                        @elseif($item->status == 2)
                        <span class="btn btn-danger status-btn">Deactive</span>
                        @endif
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fadeIn animated bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <div class="custom-toggle">
                                    <a href="{{route('admin.event-type.show',$item->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{route('admin.event-type.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <form id="delete-form" action="{{route('admin.event-type.destroy',$item->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="delete-admin" onClick="deleteItem()">
                                            <span  class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </div>
                    </td>
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