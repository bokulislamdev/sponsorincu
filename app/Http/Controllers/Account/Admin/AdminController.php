<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Contract;
use App\Models\Subscribe;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        $data['user'] = User::find(Auth::user()->id);
        $data['user_count'] = User::count();
        
        return view('account.admin.dashboard',$data);
    }

    public function dashboardd(){
        dd('asdfasf');
    }

    public function index()
    {
        $data['contract']=Contact::get();
        return view('account.admin.contract.index',$data);
    }
    public function destroy($id)
    {

        Contact::find($id)->delete();

        Notify::success('Contract Delete Successfully!');
        return redirect()->route('admin.contract.index');

    }

    public function subscribe()
    {
        $data['subscribelist'] = Subscribe::get();
        return view('account.admin.subscribe.subscribelist', $data);
    }

    public function subscribedestroy($id)
    {


        Subscribe::find($id)->delete();

        Notify::success('Subscribe Delete Successfully!');
        return redirect()->back();
    }


}
