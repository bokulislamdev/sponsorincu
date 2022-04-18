@extends('account.layouts.app',['title' => 'Contact Show'])



@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
            <div class="pe-3">
                <h5 class="text-white m-0">Contact View</h5>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.contract.index') }}" class="btn btn-primary custom-head-link"> <i
                        class="fadeIn animated bx bx-undo"></i> Back to Contacts</a>
            </div>
        </div>
        <!--end breadcrumb-->


        <div class="card">
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-border custom-table-css table-border table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">First Name</th>
                                <td>{{ $contact->first_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Last Name</th>
                                <td>{{ $contact->last_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $contact->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Phone</th>
                                <td>{{ $contact->phone }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Country</th>
                                <td>{{ $contact->country }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td>{{ $contact->address }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Job Title</th>
                                <td>{{ $contact->job_title }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Message</th>
                                <td>{{ $contact->message }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </main>
    <!--end page main-->
@endsection
