<?php

namespace App\Http\Controllers\Account\Vendor;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductMultiImage;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;



class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::where('status','!=','3')->where('vendor_id','=',Auth::user()->id)->get();

        return view('account.vendor.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $data['product_categories'] = ProductCategory::get();
        $data['product_colors'] = ProductColor::get();

        return view('account.vendor.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'price'=>'required|numeric',
            'short_descriprion'=>'required',
            'long_description'=>'required',
            'image'=>'required',

        ]);


        $data=new Product();

        $input = $request->except('_token','image','_method');

        if ($request->hasFile('image')) {
            if($data->image) {
            unlink(public_path($data->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $path = 'uploads/products/'.$photo_name;
            Image::make($request->file('image'))->resize(600,400)->save(public_path($path), 100);
            $input['image'] = $path;
        }

        $input['vendor_id'] =  Auth::user()->id;
        $input['slug'] = Str::slug($request->name,'-');


        $data->fill($input)->save();


        if ($request->hasFile('multi_image')) {
            foreach ($request->multi_image as $image) {
                $photo_name = time().rand(1, 100).'.'.$image->extension();
                $path = 'uploads/products/'.$photo_name;
                Image::make($image)->resize(600,400)->save(public_path($path), 100);
                ProductMultiImage::create([
                    'product_id' => $data->id,
                    'multi_image' => $path,
                ]);
            }
        }

        Notify::success('Product Create Successfully!');
        return redirect()->route('vendor.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data['product']= Product::find($id);


        // $single_case = Casee::find($id);
        // $data['case_solutions'] = Case_Solution::where('casee_id',$single_case->id)->get();

        return view('account.vendor.product.show',$data);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product']= Product::find($id);
        $data['product_categories'] = ProductCategory::get();
        $data['product_colors'] = ProductColor::get();
        $data['vendor']=User::where('role',2)->get();

        return view('account.vendor.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'price'=>'required|numeric',
            'short_descriprion'=>'required',
            'long_description'=>'required',

        ]);




        $data= Product::find($id);

        $input = $request->except('_token','image','_method');

        if ($request->hasFile('image')) {
            if($data->image) {
            unlink(public_path($data->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $path = 'uploads/products/'.$photo_name;
            Image::make($request->file('image'))->resize(600,400)->save(public_path($path), 100);
            $input['image'] = $path;
        }
        $input['slug'] = Str::slug($request->name,'-');

        $data->fill($input)->save();


        if ($request->hasFile('multi_image')) {
            $multiple_images = ProductMultiImage::where('product_id', $data->id)->get();
            // for delete
            foreach ($multiple_images as $multiple_image) {
                if ($multiple_image) {
                    $multiple_image->delete();
                }
                if ($multiple_image->multi_image) {
                    unlink($multiple_image->multi_image);
                }
            }
            // for create
            foreach ($request->multi_image as $image) {
                $photo_name = time().rand(1, 100).'.'.$image->extension();
                $path = 'uploads/products/'.$photo_name;
                Image::make($image)->resize(600,400)->save(public_path($path), 100);
                ProductMultiImage::create([
                    'product_id' => $data->id,
                    'multi_image' => $path,
                ]);
            }
        }


        Notify::success('Product Update Successfully!');
        return redirect()->route('vendor.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $products = Product::find($id);

        $products->status = 3;

        $products->save();

        Notify::success('Product Delete Successfully!');
        return redirect()->route('vendor.product.index');
    }
}
