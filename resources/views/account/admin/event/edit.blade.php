@extends('account.layouts.app',['title' => 'Update Evnet'])

@push('css')

@endpush



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Evnet Type</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.event.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Evnet</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
        <form action="{{route('admin.event.update',$event->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{$event->name}}">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Name Arabic</label>
                    <input type="text" class="form-control" name="name_ar" value="{{$event->name_ar}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{$event->address}}">
                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Event Type</label>
                    <select name="event_type_id" id="event_type_id" class="form-control" onchange="getEventToptic()">
                        <option value="">--Select--</option>
                        @foreach ($event_types as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $event->event_type_id ? 'selected' : '' }}>{{$item->name}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{$errors->first('event_type_id')}}</span>
                </div>


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Event Topice</label>
                    <select name="event_topic_id" id="event_topic" class="form-control">
                        <option value="">--Select--</option>
                    </select>
                    <span class="text-danger">{{$errors->first('event_topic_id')}}</span>
                </div>


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Event Date</label>
                    <input type="date" name="date" class="form-control" value="{{$event->date}}"/>
                    <span class="text-danger">{{$errors->first('event_topice_id')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Aspect Attendance</label>
                    <input type="number" name="aspect_attendance" class="form-control" value="{{$event->aspect_attendance}}"/>
                    <span class="text-danger">{{$errors->first('aspect_attendance')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Aspect Male ( % )</label>
                    <input type="number" name="aspect_male" class="form-control" value="{{$event->aspect_male}}"/>
                    <span class="text-danger">{{$errors->first('aspect_male')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Aspect Female ( % )</label>
                    <input type="number" name="aspect_female" class="form-control" value="{{$event->aspect_female}}"/>
                    <span class="text-danger">{{$errors->first('aspect_female')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control"/>
                    <span class="text-danger">{{$errors->first('image')}}</span>
                </div>
                <div class="col-12 py-2">
                    <label for="" class="form-label">Description</label>
                   <textarea name="description" class="summernote" id="" cols="30" rows="10">{{$event->description}}</textarea>
                    <span class="text-danger">{{$errors->first('description')}}</span>
                </div>
                <div class="col-12 py-2">
                    <label for="" class="form-label">Description Arabic</label>
                   <textarea name="description_ar" class="summernote" id="" cols="30" rows="10">{{$event->description_ar}}</textarea>
                    <span class="text-danger">{{$errors->first('description_ar')}}</span>
                </div>
               
                <div class="col-12 py-2">
                    <label for="" class="form-label">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" {{$event->status == 1 ? 'selected' : ""}}>Active</option>
                        <option value="2" {{$event->status == 2 ? 'selected' : ""}}>Dactive</option>
                    </select>
                </div>
                <div class="col-12 py-2">
                    <input type="checkbox" id="publish" value="1" name="is_published" {{$event->is_published == 1 ? 'checked' : ''}}>
                    <label for="publish">Publish website</label>
                </div>
              
                <div class="col-12 text-center mt-5">
                    <a href="{{route('admin.event.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
    </div>
        

</main>
<!--end page main-->





@push('js')

<script>
    function getEventToptic() {
        var event_type_id = $("#event_type_id").val()

        if (event_type_id) {
            $.ajax({
                url: `{{ route('admin.event.index') }}`,
                data: {
                    id: event_type_id
                },
                success: function(res) {
                    console.log(res)
                    $("#event_topic").empty()
                    var options = '';
                    $.each(res, function(index, row) {
                        options += "<option value='" + row.id + "'>" + row.name + "</option>";
                    })
                    console.log(options)
                    $("#event_topic").append(options);
                },
                error: function(e) {
                    console.log(e);
                    toastr.error('Something went wrong, please see the console')
                }
            });

            return;
        }
    }

    </script>
@endpush




@endsection