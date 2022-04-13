@extends('account.layouts.app',['title' => 'Create Product'])

@push('css')
    <style>
        .for_feed{
        display: none;
        }
    </style>
@endpush



@section('content')
    
<!--start content-->
<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
    <div class="pe-3"><h5 class="text-white m-0">Product Create ({{request('product')}})</h5></div>
    <div class="ms-auto">
    <a href="{{route('admin.product.index')}}" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Product</a>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif


        <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div>
                    <input type="hidden" class="form-control" name="type" value="{{request('product')}}">
                </div>

               <div class="col-12 col-md-6 py-2">
                <label> Vendor Name <span class="text-danger">*</span></label>
                <select name="vendor_id" class="form-control">
                    <option value="">select</option>
                    @foreach($vendor as $item)
                        <option value="{{ $item->id }}" {{old('vendor_id') == $item->id ? 'selected' : ''}}>{{ $item->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-danger">{{ $errors->first('category_id') }}</small>
            </div>
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">{{request('product') == 'service' ? 'Service' : 'Product'}} Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">{{request('product') == 'service' ? 'Service' : 'Product'}} Arabic Name</label>
                    <input type="text" class="form-control" name="name_ar" value="{{old('name_ar')}}">
                    <span class="text-danger">{{$errors->first('name_ar')}}</span>

                </div>

                @if (request('product') !== 'service')
                <div class="col-12 col-md-6 py-2">
                    <label> Product Category <span class="text-danger">*</span></label>
                    <select name="category_id" class="form-control" >
                        <option value="">select</option>
                        @foreach($product_categories as $item)
                            <option value="{{ $item->id }}" {{old('category_id') == $item->id ? 'selected' : ''}}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-danger">{{ $errors->first('category_id') }}</small>
                </div>
                @endif
             

            

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">{{request('product') == 'service' ? 'Service' : 'Product'}} Price <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="price" value="{{old('price')}}">
                    <span class="text-danger">{{$errors->first('price')}}</span>
                </div>


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Discount Price <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="discount_price" value="{{old('discount_price')}}">
                    <span class="text-danger">{{$errors->first('discount_price')}}</span>
                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Active Price <span class="text-danger">*</span></label>
                    <select name="active_price" class="form-control">
                            <option value="1" {{old('active_price') == 1 ? 'selected' : ''}}>Regular Price</option>
                            <option value="2" {{old('active_price') == 2 ? 'selected' : ''}}>Discount Price</option>
                    </select>
                    <span class="text-danger">{{$errors->first('active_price')}}</span>

                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">{{request('product') == 'service' ? 'Service' : 'Product'}} Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="image">
                    <span class="text-danger">{{$errors->first('image')}}</span>

                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">{{request('product') == 'service' ? 'Service' : 'Product'}} Multiple Image</label>
                    <input type="file" class="form-control" name="multi_image[]" multiple>
                </div>

                <div class="for_feed">
                    <div class="row">
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Packaging Size <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="package_size" placeholder="25 KG" value="{{old('package_size')}}">
                        <span class="text-danger">{{$errors->first('package_size')}}</span>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Packaging Type<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="package_type" placeholder="drum"  value="{{old('package_type')}}">
                        <span class="text-danger">{{$errors->first('package_type')}}</span>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Country of Origin<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="country_of_origin" placeholder="Made in Saudi"  value="{{old('country_of_origin')}}">
                        <span class="text-danger">{{$errors->first('country_of_origin')}}</span>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label> Color</label>
                        <input type="text" class="form-control" name="color" value="{{old('name_ar')}}" value="{{old('color')}}">
                        <small class="form-text text-danger">{{ $errors->first('color') }}</small>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Cas Number</label>
                        <input type="text" class="form-control" name="cas" placeholder="8067-69-4" value="{{old('cas')}}">
                        <span class="text-danger">{{$errors->first('cas')}}</span>
                    </div>
                </div>
                </div>
                @if (request('product') !== 'service')
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Brand Name</label>
                    <input type="text" class="form-control" name="brand" placeholder="ACI" value="{{old('brand')}}">
                    <span class="text-danger">{{$errors->first('Package_type')}}</span>
                </div>
                @endif
                <div class="col-12 py-2">
                    <label for="" class="form-label">Short Description <span class="text-danger">*</span></label>
                    <textarea name="short_descriprion" cols="30" rows="10" class="form-control summernote"> {{old('short_descriprion')}}</textarea>
                    <span class="text-danger">{{$errors->first('short_descriprion')}}</span>

                </div>


                <div class="col-12 py-2">
                    <label for="" class="form-label">Arabic Short Description <span class="text-danger">*</span></label>
                    <textarea name="short_descriprion_ar" cols="30" rows="10" class="form-control summernote"> {{old('short_descriprion_ar')}}</textarea>
                    <span class="text-danger">{{$errors->first('short_descriprion_ar')}}</span>

                </div>


                <div class="col-12 py-2">
                    <label for="" class="form-label">Long Description <span class="text-danger">*</span></label>
                    <textarea name="long_description" cols="30" rows="10" class="form-control summernote"> {{old('long_description')}}</textarea>
                    <span class="text-danger">{{$errors->first('long_description')}}</span>
                </div>
                <div class="col-12 py-2">
                    <label for="" class="form-label">Arabic Long Description</label>
                    <textarea name="long_description_ar" cols="30" rows="10" class="form-control summernote"> {{old('long_description_ar')}}</textarea>
                    <span class="text-danger">{{$errors->first('long_description_ar')}}</span>
                </div>

                
                <div class="col-12 py-2">
                    <label for="" class="form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                            <option value="1" {{old('status') == 1 ? 'selected' : ''}}>Active</option>
                            <option value="2" {{old('status') == 2 ? 'selected' : ''}}>Pending</option>
                    </select>
                    <span class="text-danger">{{$errors->first('status')}}</span>
                </div>
                


                <div class="col-12 text-center mt-5">
                    <a href="{{route('admin.product.index')}}" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>

                </div>

            </div>
        </form>
    </div>
    </div>


</main>
<!--end page main-->

    

@endsection



@push('js')

    <script>

        $(document).ready(function(){
            var product = "{{request('product')}}"

            if(product == 'feed'){
                $(".for_feed").css("display", "block");
            }

        });  

    </script>
        
@endpush
