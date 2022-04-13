@extends('account.layouts.app',['title' => 'Sponsor Packege'])



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
               <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div style="text-align: right;">
                                    <button style="cursor: pointer;" class="btn btn-success btn-sm pt-2 pb-2" type="button" id="more_fields" onclick="add_fields()">Add More Services <i class="fas fa-plus-circle"></i> </button>
                                </div>
                                
                                <div>
                                    <div>
                                        <form action="{{route('admin.package.post')}}" method="post">
                                            @csrf
                                            <div class="content mt-4" id="room_fileds">
                                                <div class="col-12 p-0 py-3 d-flex align-items-center">
                                                    <input type="hidden" value="{{request('event_id')}}" name="event_id[]">
                                                    <input type="text" style="margin-right: 10px;" class="form-control" id="inputEmail3" placeholder="Sponsor Service Item" value="" name="service_name[]" required>
                                                    <div style="width: 150px;">
                                                        <input id="basic" value="1" type="checkbox" name="basic[]">
                                                        <label for="basic">Basic</label>
                                                    </div>
                                                   <div style="width: 150px;">
                                                       <input id="standard" value="1" type="checkbox" name="standard[]">
                                                       <label for="">Standard</label>
                                                   </div>
                                                   <div style="width: 150px;">
                                                    <input id="premium" value="1" type="checkbox" name="premium[]">
                                                    <label for="premium">Premium</label>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="col-12 text-center mt-5">
                                                <a href="{{route('admin.event.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>

    </main>
    <!--end page main-->


    @push('js')
    <script>
        var room = 3;
        function add_fields() {
            room++;
            var objTo = document.getElementById('room_fileds')
            var divtest = document.createElement("div");
            divtest.innerHTML = `
            <div class="col-12 py-3 d-flex align-items-center">
                                                    <input type="text" style="margin-right: 10px;" class="form-control" id="inputEmail3" placeholder="Sponsor Service Item" value="" name="service_name[]" required>
                                                    <input type="hidden" value="{{request('event_id')}}" name="event_id[]">
                                                    <div style="width: 150px;">
                                                        <input id="basic'+ room +'" type="checkbox" name="basic[]" value="1">
                                                        <label for="basic'+ room +">Basic</label>
                                                    </div>
                                                   <div style="width: 150px;">
                                                       <input id="standard+ room +" type="checkbox" name="standard[]" value="1">
                                                       <label for="standard+ room +">Standard</label>
                                                   </div>
                                                   <div style="width: 150px;">
                                                    <input id="premium+ room +" type="checkbox" name="premium[]" value="1">
                                                    <label for="premium+ room +">Premium</label>
                                                    </div>
                                                </div>
            `;
            // divtest.innerHTML = '<div class=""></div><div class="content mt-3"> <input type="text" class="form-control" style="width:100%;" placeholder="add new item" name="service_name[]" value="" /> </div>';
            // divtest.innerHTML = '
            //         <div class="col-12 p-0 mt-4">
            //             <input type="text" class="form-control" id="inputEmail3" placeholder="Sponsor Service Item" value="" name="items[]" required>
            //         </div>
            //     ';
            
            objTo.appendChild(divtest)
        }
    </script>
    @endpush

@endsection
