<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\WebSetting;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class WebSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.admin.websetting.index');
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
        return view('account.admin.websetting.edit');
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
            'website_name' => ['required'],
        ]);


        $websetting = WebSetting::find($id);
        $input = $request->except('_token','sitebanner','logo','footer_logo','favicon','_method');
        
        if ($request->hasFile('sitebanner')) {
            
            if($websetting->sitebanner) {
            unlink(public_path($websetting->sitebanner));
            }
            $photo_name = time().rand().'.'.$request->sitebanner->extension();
            $request->sitebanner->move(public_path('uploads/websetting/'), $photo_name);
            $input['sitebanner'] = 'uploads/websetting/'. $photo_name;
        }

        if ($request->hasFile('logo')) {
            if($websetting->logo) {
            unlink(public_path($websetting->logo));
            }
            $photo_name = time().rand().'.'.$request->logo->extension();
            $request->logo->move(public_path('uploads/websetting/'), $photo_name);
            $input['logo'] = 'uploads/websetting/'. $photo_name;
        }
        
        if ($request->hasFile('footer_logo')) {
            if($websetting->footer_logo) {
            unlink(public_path($websetting->footer_logo));
            }
            $photo_name = time().rand().'.'.$request->footer_logo->extension();
            $request->footer_logo->move(public_path('uploads/websetting/'), $photo_name);
            $input['footer_logo'] = 'uploads/websetting/'. $photo_name;
        }
        
        if ($request->hasFile('favicon')) {
            if($websetting->favicon) {
            unlink(public_path($websetting->favicon));
            }
            $photo_name = time().rand().'.'.$request->favicon->extension();
            $request->favicon->move(public_path('uploads/websetting/'), $photo_name);
            $input['favicon'] = 'uploads/websetting/'. $photo_name;
        }

        $websetting->fill($input)->save();

        Notify::success('Website Seeting Update Successfully');
        return redirect()->route('admin.websetting.index');
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
}
