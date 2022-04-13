@extends('account.layouts.app',['title' => 'Product List'])



@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
            <div class="pe-3">
                <h5 class="text-white m-0">Product List</h5>
            </div>
            <div class="ms-auto">
                {{-- <a href="{{ route('admin.product.create') }}" class="btn btn-primary custom-head-link"> <i
                        class="lni lni-circle-plus custom-head-link"></i> Create Product</a> --}}

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Create Product & Service
                          </button>
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


                                <th>Type</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Active Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->discount_price }}</td>
                                    <td>

                                        @if ($item->active_price == 1)
                                            <span class="btn btn-primary status-btn">Regular Price</span>
                                        @elseif($item->active_price == 2)
                                            <span class="btn btn-warning status-btn">Discount Price</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($item->status == 1)
                                            <span class="btn btn-success status-btn">Active</span>
                                        @elseif($item->status == 2)
                                            <span class="btn btn-danger status-btn">Pending</span>
                                        @elseif($item->status == 0)
                                            <span class="btn btn-danger status-btn">Cancel</span>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button class="btn" type="button" id="dropdownMenu2"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fadeIn animated bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <div class="custom-toggle">
                                                    <a href="{{ route('admin.product.show', $item->id) }}"
                                                        class="text-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                                        aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="{{ route('admin.product.edit', $item->id) }}"
                                                        class="text-warning" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                                        aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                    <form id="delete-form"
                                                        action="{{ route('admin.product.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="delete-admin" onClick="deleteItem()">
                                                            <span class="text-danger" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title=""
                                                                data-bs-original-title="Delete" aria-label="Delete"><i
                                                                    class="bi bi-trash-fill"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </ul>
                                        </div>
                                        {{-- <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">

                                <a href="#" class="dropdown-item"><i class="fa fa-eye text-success"></i> Show</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-edit text-primary"></i> Edit</a>
                                <form action="#" method="post" class="dropdown-item">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="border: none; background: none;"><i class="fa fa-trash text-danger"></i> Delete</button>
                                </form>

                            </div>
                        </div> --}}
                                        {{-- <div class="table-actions d-flex align-items-center gap-3 fs-6">

                        <a href="{{route('admin.product.show',$item->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                        <a href="{{route('admin.product.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>


                        <form id="delete-form" action="{{route('admin.product.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="button" class="delete-admin" onClick="deleteItem()">
                                <span  class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></span>
                            </button>
                        </form>
                    </div> --}}
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




    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Products and Services</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <p><a href="{{route('admin.product.create',['product'=>'feed'])}}">Feed</a></p>
           <p><a href="{{route('admin.product.create',['product'=>'service'])}}">Service</a></p>
           <p><a href="{{route('admin.product.create',['product'=>'medicines'])}}">Medicines</a></p>
           <p><a href="{{route('admin.product.create',['product'=>'vaccines'])}}">Vaccines </a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
