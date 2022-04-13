@extends('account.layouts.app',['title' => 'Subscribe List'])



@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
            <div class="pe-3">
                <h5 class="text-white m-0">Subscribe List</h5>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table align-middle">
                        <thead class="table-secondary">
                            <tr>
                                <th>SL#</th>
                                <th>CUSTOMER EMAIL</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribelist as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">


                                            <form id="delete-form" action="{{ route('admin.subscribe.destroy', $item->id) }}"
                                                method="post">
                                                @csrf
                                                <button type="button" class="delete-admin" onClick="deleteItem()">
                                                    <span class="text-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                                        aria-label="Delete"><i class="bi bi-trash-fill"></i></span>
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
