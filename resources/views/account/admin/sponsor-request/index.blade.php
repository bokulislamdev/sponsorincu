@extends('account.layouts.app',['title' => 'Sponsor Request All'])



@section('content')
    <!--start content-->
    <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Sponsor Request </h5></div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($sponsor_request as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                    <td>{{$item->company}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        @if ($item->status == 1)
                            <span class="btn btn-success status-btn data_check" data-id="{{$item->id}}">Active</span>
                        @elseif($item->status == 2)
                        <span class="btn btn-danger status-btn data_check" data-id="{{$item->id}}">Deactive</span>
                        @endif
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fadeIn animated bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <div class="custom-toggle">
                                    <a href="{{route('admin.sponsor-request.show',$item->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{route('admin.sponsor-request.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <form id="delete-form" action="{{route('admin.sponsor-request.destroy',$item->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="delete-admin" onClick="deleteItem()">
                                            <span  class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </td>
                </tr>
                
                @endforeach

                </tbody>
            </table>
            </div>
        </div>
        </div>


        <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary show_modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div> --}}

        {{-- <!-- Modal -->
        <div class="modal fade" id="show_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Product Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="show_data">

                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

    </main>
<!--end page main-->
@endsection


@push('js')
<script>
    $('.data_check').on('click', function(e) {
        e.preventDefault();

        var product_id = $(this).data('id');

        

        $.ajax({
            url: "{{route('change.status.model')}}",
            data: {
                product_id: product_id
            },
            success: function(data) {
                $('#show_data').html(data);
                $('#show_modal').modal('show');
            },
            error: function(data) {
                console.log('error:', data);
            }
        });
    });

</script>
@endpush