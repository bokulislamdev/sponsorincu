@extends('account.layouts.app',['title' => 'Product  List'])



@section('content')
    <!--start content-->
    <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Order List</h5></div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                <tr>
                    <th>SL#</th>
                    <th>ORDER ID</th>


                    <th>DATE</th>
                    <th>CUSTOMER NAME</th>

                    <th>TOTAL</th>
                    <th>PAYMENT STATUS</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orderprocessing as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->created_at->format('d M Y')}}</td>
                    <td>{{$item->user ? $item->user->name :''}}</td>

                    <td>{{$item->total}}</td>
                    <td>
                        @if ($item->payment_status == 0)
                        <span class="btn btn-danger status-btn">Unpaid</span>
                    @elseif($item->payment_status == 1)
                    <span class="btn btn-success status-btn">Paid</span>
                    @endif
                    </td>


                    <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">

                        <a href="{{route('admin.product.show',$item->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                        <a href="{{route('admin.product.show',$item->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Invoice"><i class="bi bi-eye-fill"></i></a>

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
