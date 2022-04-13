<?php

namespace App\Http\Controllers\Account\User;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {

        $data['user'] = User::find(Auth::user()->id);
        $data['user_count'] = User::count();
        $data['total_product'] = Product::where('status', '!=', 3)->count();
        $data['total_categories'] = ProductCategory::count();
        $data['total_color'] = ProductColor::count();
        $data['total_order'] = Order::where('user_id', Auth::user()->id)->count();
        return view('account.user.dashboard', $data);
    }

    public function orderAll()


    {
        $data['orderall'] = Order::where('user_id', '=', Auth::user()->id)->get();
        return view('account.user.order.index', $data);
    }



    public function orderBilling($id)
    {

        $data['order'] = Order::find($id);
        return view('account.user.order.billing', $data);
    }
}
