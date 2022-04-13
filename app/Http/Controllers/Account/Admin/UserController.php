<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::where('status',1)->where('role',1)->get();
        return view('account.admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['user'] = User::find($id);
        return view('account.admin.user.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = User::find($id);
        return view('account.admin.user.edit',$data);
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
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255',],
        ]);
        
        $profile = User::find($id);
        $input = $request->except('_token','image','_method');

        if ($request->hasFile('image')) {
            if($profile->image) {
            unlink(public_path($profile->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/userprofile/'), $photo_name);
            $input['image'] = 'uploads/userprofile/'. $photo_name;
        }

        $profile->fill($input)->save();

        Notify::success('User Update Successfully!');
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $image_name = User::find($id);
        if($image_name->image) {
        unlink(public_path($image_name->image));
        }
        User::find($id)->delete();
        Notify::success('User Delete Successfully!');
        return redirect()->route('admin.user.index');
    }

    public function vendorAll(){
        $data['users'] = User::where('status',1)->where('role',2)->get();
        return view('account.admin.user.vendor',$data);
    }

    public function userAll(){
        $data['users'] = User::where('status',1)->where('role',3)->get();
        return view('account.admin.user.user',$data);
    }
    
    public function adminChangePassword($id){
        $data['user'] = User::find($id);
        return view('account.admin.user.change-password',$data);
    }


    public function adminChangePasswordPost(Request $request, $id){
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $password = User::find($id);
        $password->password = Hash::make($request->password);
        $password->save();

        Notify::success('Password Change Successfully!');
        return redirect()->route('admin.user.index');
    }
}
