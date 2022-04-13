@extends('account.layouts.app',['title' => 'Product Show'])



@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
            <div class="pe-3">
                <h5 class="text-white m-0">Product View</h5>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.product.index') }}" class="btn btn-primary custom-head-link"> <i
                        class="fadeIn animated bx bx-undo"></i> Back to Products</a>
            </div>
        </div>
        <!--end breadcrumb-->


        <div class="card">
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-border custom-table-css table-border table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Type</th>
                                <td>{{ $product->type }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Name</th>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Arabic Name</th>
                                <td>{{ $product->name_ar }}</td>
                            </tr>
                            
                            <tr>
                                <th scope="row"> Vendor Name</th>
                                <td>{{ $product->vendor ? $product->vendor->name : '' }}</td>
                            </tr>

    
                            

                            <tr>
                                <th scope="row">Color</th>
                                <td>{{ $product->color }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Price</th>
                                <td>{{ $product->price }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Discount Price</th>
                                <td>{{ $product->discount_price }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Active Price</th>
                                <td>
                                    @if ($product->active_price == 1)
                                        <span class="btn btn-primary status-btn">Regular Price</span>
                                    @elseif($product->active_price == 2)
                                        <span class="btn btn-warning status-btn">Discount Price</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Category</th>
                                <td>
                                    {{ $product->productcategory ? $product->productcategory->name : '' }}
                                </td>
                            </tr>

                            @if ($product->type == 'feed')
                            <tr>
                                <th scope="row">Package Size</th>
                                <td>
                                    {{ $product->package_size }}
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Package Type</th>
                                <td>
                                    {{ $product->package_type }}
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Cas No </th>
                                <td>
                                    {{ $product->cas }}
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Cas No </th>
                                <td>
                                    {{ $product->cas }}
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Country Of Origin </th>
                                <td>
                                    {{ $product->country_of_origin }}
                                </td>
                            </tr>
                            @endif

                            @if ($product->type !== 'service')
                            <tr>
                                <th scope="row">Brend</th>
                                <td>
                                    {{ $product->package_type }}
                                </td>
                            </tr>
                            @endif
                            


                            <tr>
                                <th scope="row">Short Description</th>
                                <td>{!! $product->short_descriprion !!}</td>
                            </tr>

                            <tr>
                                <th scope="row"> Arabic Short Description</th>
                                <td>{!! $product->short_descriprion_ar !!}</td>
                            </tr>

                            <tr>
                                <th scope="row">Long Description</th>
                                <td>{!! $product->long_description !!}</td>
                            </tr>

                            <tr>
                                <th scope="row">Arabic Long Description</th>
                                <td>{!! $product->long_description_ar !!}</td>
                            </tr>

                           
                            <tr>
                                <th scope="row">Status</th>
                                <td>
                                    @if ($product->status == 1)
                                        <span class="btn btn-success status-btn">Active</span>
                                    @elseif($product->status == 2)
                                        <span class="btn btn-danger status-btn">Deactive</span>
                                    @endif
                                </td>
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
                            <tr>
                                <th scope="row">Product Default Image</th>
                                <th scope="row">Product Multiple Image</th>
                                </td>
                            </tr>
                            <tr>

                                <td><img src="{{ asset($product->image) }}" style="width: 120px; alt=""></td>

                                <td>
                                    @foreach ($product->mutiimage as $item)
                                        <img src="{{ asset($item->multi_image) }}" alt="image" style="width:120px;"
                                            class="mx-2">
                                    @endforeach
                                </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                    </div>







            </main>
        <!--end page main-->
@endsection
