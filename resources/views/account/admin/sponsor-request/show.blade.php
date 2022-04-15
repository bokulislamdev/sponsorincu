@extends('account.layouts.app',['title' => 'Sponsor Request Show'])



@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
            <div class="pe-3">
                <h5 class="text-white m-0">Show Sponsor Request</h5>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.sponsor-request.index') }}" class="btn btn-primary custom-head-link"> <i
                        class="fadeIn animated bx bx-undo"></i> Back to Sponsor Request</a>
            </div>
        </div>
        <!--end breadcrumb-->


        <div class="card">
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-border custom-table-css table-border table-hover">
                        <tbody>
                            
                            <tr>
                                <th scope="row">Full Name</th>
                                <td>{{ $sponsor_request->first_name }} {{ $sponsor_request->last_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Company Name</th>
                                <td>{{ $sponsor_request->company }}</td>
                            </tr>
                            
                            <tr>
                                <th scope="row"> Email</th>
                                <td>{{ $sponsor_request->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row"> Phone</th>
                                <td>{{ $sponsor_request->phone }}</td>
                            </tr>
                            <tr>
                                <th scope="row"> Package</th>
                                <td>{{ $sponsor_request->package }}</td>
                            </tr>
                             <tr>
                                <th scope="row"> Message</th>
                                <td>{{ $sponsor_request->message }}</td>
                            </tr>
                           
                            <tr>
                                <th scope="row">Trams Condition</th>
                                <td>
                                    @if ($sponsor_request->trams_condition == 1)
                                        <span class="btn btn-success status-btn">Yes</span>
                                    @elseif($sponsor_request->status == 0)
                                        <span class="btn btn-danger status-btn">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>
                                    @if ($sponsor_request->status == 1)
                                        <span class="btn btn-success status-btn">Active</span>
                                    @elseif($sponsor_request->status == 2)
                                        <span class="btn btn-danger status-btn">Deactive</span>
                                    @endif
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



@endsection
