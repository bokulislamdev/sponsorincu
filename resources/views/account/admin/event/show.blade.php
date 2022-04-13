@extends('account.layouts.app',['title' => 'Event Show'])

@push('css')
    <style>
        .package-rate input{
            outline: none;
            border: 1px solid #4c5258;
            padding: 4px;
            border-radius: 4px;
            color: #000000;
            font-weight: 700;
        }
        .package-rate input::placeholder{
            color: #000000;
        }
    </style>
@endpush

@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
            <div class="pe-3">
                <h5 class="text-white m-0">Event View</h5>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.event.index') }}" class="btn btn-primary custom-head-link"> <i
                        class="fadeIn animated bx bx-undo"></i> Back to Event</a>
            </div>
        </div>
        <!--end breadcrumb-->


        <div class="card">
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-border custom-table-css table-border table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Event Name</th>
                                <td>{{ $event->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Event Arabic Name</th>
                                <td>{{ $event->name_ar }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Event Image</th>
                                <td>
                                    <img src="{{ asset($event->image) }}" style="width: 120px; alt=""></td>


                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td>{{ $event->address }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Event Type</th>
                                <td>

                                    {{ $event->event_type ? $event->event_type->name : '' }}


                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Event Topic</th>
                                <td>
                                    {{ $event->event_topic ? $event->event_topic->name : '' }}
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Event Date</th>
                                <td>{{ $event->date }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Aspect Attendance</th>
                                <td>{{ $event->aspect_attendance }} Peoples</td>
                            </tr>
                            <tr>
                                <th scope="row">Aspect Male( % )</th>
                                <td>{{ $event->aspect_male }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Aspect Female( % )</th>
                                <td>{{ $event->aspect_female }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Description</th>
                                <td>{!! $event->description !!}</td>
                            </tr>
                            <tr>
                                <th scope="row">Description Arabic</th>
                                <td>{!! $event->description_ar !!}</td>
                            </tr>
                            <tr>
                                <th scope="row">Publish</th>
                                <td>
                                    @if ($event->is_published == 0)
                                        Not Published
                                    @elseif($event->is_published == 1)
                                        Published
                                    @endif

                                </td>
                            </tr>

                            <tr>
                                <th scope="row">Status</th>
                                <td>
                                    @if ($event->status == 0)
                                        Dactive
                                    @elseif($event->status == 1)
                                        Active
                                    @endif

                                </td>
                            </tr>

                            <tr>
                                <th scope="row">Event Details</th>
                                <td>{!! $event->description !!}</td>
                            </tr>

                            <tr>
                                <th scope="row"> Event Details Arabic</th>
                                <td>{!! $event->description_ar !!}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class=" card">
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-border custom-table-css table-border table-hover">
                        <tbody>
                          <div class="border-bottom pb-2 d-flex justify-content-between align-items-center">
                            <h3>Sponsor Package</h3>
                            <a class="btn btn-primary" href="{{route('admin.create.package',['event_id'=>$event->id])}}">Create Package</a>
                          </div>
                        </tbody>
                    </table>



                    <div class="d-flex justify-content-between package-rate">
                        <div class="px-3">
                            <form action="{{route('basic.package.price.store',$event->id)}}" method="post">
                                @csrf
                                <input type="number" name="basic_price" value="{{$event->basic_price}}" placeholder="Basic Price">
                                <button class="btn btn-sm btn-success" type="submit">Save</button>
                            </form>
                        </div>
                        <div class="px-3">
                            <form action="{{route('standard.package.price.store',$event->id)}}" method="post">
                                @csrf
                                <input type="number" placeholder="standard Price" name="standard_price" value="{{$event->standard_price}}">
                                <button class="btn btn-sm btn-success" type="submit">Save</button>
                            </form>
                        </div>
                        <div class="px-3">
                            <form action="{{route('premium.package.price.store',$event->id)}}" method="post">
                                @csrf
                                <input type="number" placeholder="premium Price" name="premium_price" value="{{$event->premium_price}}">
                                <button class="btn btn-sm btn-success" type="submit">Save</button>
                           </form>
                        </div>
                    </div>



                </div>
                <div class="table-responsive mt-3">
                    <table class="table align-middle">
                        <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Service Name</th>
                            <th>Basic</th>
                            <th>Standard</th>
                            <th>premium</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($sponsor_package as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->service_name}}</td>
                            <td>
                                @if ($item->basic == 1)
                                    <i class="lni lni-checkmark text-success"></i>
                                @elseif ($item->basic == 0)
                                    <i class="lni lni-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if ($item->standard == 1)
                                    <i class="lni lni-checkmark text-success"></i>
                                @elseif ($item->standard == 0)
                                    <i class="lni lni-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if ($item->premium == 1)
                                <i class="lni lni-checkmark text-success"></i>
                                @elseif ($item->premium == 0)
                                    <i class="lni lni-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                <form id="delete-form" action="{{route('admin.event-topic.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="delete-admin" onClick="deleteItem()">
                                        <span  class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></span>
                                    </button>
                                </form>
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
