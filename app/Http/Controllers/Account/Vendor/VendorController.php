<?php

namespace App\Http\Controllers\Account\Vendor;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function dashboard()
    {

        $data['user'] = User::find(Auth::user()->id);
        $data['total_product'] = Product::where('vendor_id', '=', Auth::user()->id)->where('status', '!=', 3)->count();
        $data['total_order'] = OrderDetail::where('vendor_id', '=', Auth::user()->id)->orderBy('qty')->count();
        $data['my_order']= Order::where('user_id','=', Auth::user()->id)->count();

        return view('account.vendor.dashboard', $data);
    }

    public function orderAll()
    {
        $data['orderall'] = Order::where('user_id', '=', Auth::user()->id)->get();
        return view('account.vendor.order.index', $data);
    }
    public function orderUser()
    {
        $data['product_order']=OrderDetail::where('vendor_id','=',Auth::user()->id)->get();

        return view('account.vendor.order.userorder',$data);
    }


    public function orderBilling($id)
    {
        $data['order'] = Order::find($id);
        return view('account.vendor.order.billing', $data);
    }
}
