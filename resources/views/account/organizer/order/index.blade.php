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
                    <th>ORDER</th>
                    <th>DATE</th>
                    <th>CUSTOMER NAME</th>
                    <th>STATUS</th>
                    <th>TOTAL</th>
                    <th>ORDER STATUS</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orderall as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->uid}}</td>
                    <td>{{$item->created_at->format('d M Y')}}</td>
                    <td>{{$item->name ? $item->name->name :''}}</td>
                    <td>

                        @if($item->status == 0)
                            <span class="btn btn-danger status-btn ">Cancel</span>
                        @elseif($item->status == 1)
                        <span class="btn btn-success status-btn">Confirmed</span>
                        @elseif($item->status == 2)
                        <span class="btn btn-warning status-btn">Pending</span>
                        @elseif($item->status == 3)
                        <span class="btn btn-info status-btn">Processing</span>
                        @elseif($item->status == 4)
                        <span class="btn btn-primary status-btn">Out Of Delivery</span>
                        @elseif($item->status == 5)
                        <span class="btn btn-warning status-btn">Delivered</span>
                        @elseif($item->status == 6)
                        <span class="btn btn-secondary status-btn">Returned</span>
                        @elseif($item->status == 7)
                        <span class="btn btn-dark status-btn">Failed</span>

                        @endif

                    </td>
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


                        <a href="{{route('user.order.billing',$item->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Invoice"><i class="bi bi-eye-fill"></i></a>

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
