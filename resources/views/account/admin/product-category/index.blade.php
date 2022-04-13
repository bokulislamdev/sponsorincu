@extends('account.layouts.app',['title' => 'Product Color List'])



@section('content')
    <!--start content-->
    <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Product Category List</h5></div>
        <div class="ms-auto">
            <a href="{{route('admin.product-category.create')}}" class="btn btn-primary custom-head-link"> <i class="lni lni-circle-plus custom-head-link"></i> Create Product Category</a>
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
                    <th>Arabic Name</th>
                    <th>Slug</th>
                    <th>Commission</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->name_ar}}</td>
                    <td>{{$item->slug}}</td>
                    <td>{{$item->commission}}</td>

                    <td>
                        @if ($item->status == 1)
                            <span class="btn btn-success status-btn">Active</span>
                        @elseif($item->status == 2)
                        <span class="btn btn-danger status-btn">Deactive</span>
                        @endif
                    </td>
                    <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="{{route('admin.product-category.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>

                        <form id="delete-form" action="{{route('admin.product-category.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="button" class="delete-admin" onClick="deleteItem()">
                                <span  class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></span>
                            </button>
                        </form>
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
