@extends('account.layouts.app',['title' => 'Create Evnet'])

@push('css')

@endpush



@section('content')
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Evnet</h5></div>
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
        <form action="{{route('admin.event.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Name Arabic</label>
                    <input type="text" class="form-control" name="name_ar" value="{{old('name_ar')}}">
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{old('address')}}">
                </div>



                {{-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="field-2" class="control-label">Select Category</label>
                        <select class="form-control" name="event_type_id" id="category_id">
                            <option value="">Select Category one</option>
                            @foreach ($event_types as $item)
                            <option value="{{$item->id}}" {{$item->id == old('event_type_id') ? 'selected' : ''}}>{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="field-2" class="control-label">Select Sub-Category</label>
                        <select class="form-control" name="event_topic_id" id="subcategory_id">
                            <option value="">Select Category one</option>
                            
                        </select>
                    </div>
                </div> --}}


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Event Type</label>
                    <select name="event_type_id" id="" class="form-control">
                        <option value="">--Select--</option>
                        @foreach ($event_types as $item)
                        <option value="{{$item->id}}" {{$item->id == old('event_type_id') ? 'selected' : ''}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{$errors->first('event_type_id')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Event Topice</label>
                    <select name="event_topic_id" id="" class="form-control">
                        <option value="">--Select--</option>
                        @foreach ($event_topices as $item)
                        <option value="{{$item->id}}" {{$item->id == old('event_topic_id') ? 'selected' : ''}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{$errors->first('event_topic_id')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Event Date</label>
                    <input type="date" name="date" class="form-control" value="{{old('date')}}"/>
                    <span class="text-danger">{{$errors->first('event_topice_id')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Aspect Attendance</label>
                    <input type="number" name="aspect_attendance" class="form-control" value="{{old('aspect_attendance')}}"/>
                    <span class="text-danger">{{$errors->first('aspect_attendance')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Aspect Male ( % )</label>
                    <input type="number" name="aspect_male" class="form-control" value="{{old('aspect_male')}}"/>
                    <span class="text-danger">{{$errors->first('aspect_male')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Aspect Female ( % )</label>
                    <input type="number" name="aspect_female" class="form-control" value="{{old('aspect_female')}}"/>
                    <span class="text-danger">{{$errors->first('aspect_female')}}</span>
                </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control"/>
                    <span class="text-danger">{{$errors->first('image')}}</span>
                </div>
                <div class="col-12 py-2">
                    <label for="" class="form-label">Description</label>
                   <textarea name="description" class="summernote" id="" cols="30" rows="10">{{old('description')}}</textarea>
                    <span class="text-danger">{{$errors->first('description')}}</span>
                </div>
                <div class="col-12 py-2">
                    <label for="" class="form-label">Description Arabic</label>
                   <textarea name="description_ar" class="summernote" id="" cols="30" rows="10">{{old('description_ar')}}</textarea>
                    <span class="text-danger">{{$errors->first('description_ar')}}</span>
                </div>
                {{-- <div class="py-2">
                    <input type="checkbox" id="publish" name="is_published" {{old('is_published') == 1 ? 'checked' : ''}}>
                    <label for="publish">Publish website</label>
                </div> --}}
              

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


    // $(document).ready(function(){
            
    //         $('#category_id').on('change', function(){

    //         var category_id =  $(this).val();

            
    //         var url = $('#getSubcategory').data("url");

    //         $.ajax({
    //             url: url,
    //             data: {category_id:category_id},
    //             type: "GET",
    //             success: function(response){
    //                 $('#subcategory_id').html(response);
    //             },  
    //         });
    //         });

    //     });









    $(function() {
      $('input[name="datetime"]').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });
    });
    </script>
@endpush


@endsection