<?php

namespace App\Http\Controllers\Account;



use App\Models\User;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['profile'] = User::findOrFail(Auth::user()->id);
        
        return view('account.profile.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['profile'] = User::where('id', Auth::user()->id)->find($id);
        return view('account.profile.edit',$data);
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

        Notify::success('Profile Update Successfully!');
        return redirect()->route('account.profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function password(){

        $data['profile'] = User::findOrFail(Auth::user()->id);
        return view('account.profile.change-password',$data);
    }


    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'current_password'  => 'required',
            'new_password'      => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        if (Auth::attempt(['id' => Auth::user()->id, 'password' => $request->current_password])) {
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->new_password);
            $user->save();
            Notify::success('Password Update Successfully!');
            return redirect()->route('account.profile.index');
        } else {
            Notify::error('Sorry! Your current password do not match !');
            return redirect()->back();
        }
    }
}
