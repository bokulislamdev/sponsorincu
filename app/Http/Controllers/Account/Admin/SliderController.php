<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders'] = Slider::where('status',1)->get();
        return view('account.admin.slider.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('account.admin.slider.create');
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
            'image' => 'required',
        ]);

        $slider = new Slider();
        $input = $request->except('_token','image','_method');

        if ($request->hasFile('image')) {
            if($slider->image) {
            unlink(public_path($slider->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/sliders/'), $photo_name);
            $input['image'] = 'uploads/sliders/'. $photo_name;
        }

        $slider->fill($input)->save();

        Notify::success('Slider Create Successfully!');
        return redirect()->route('admin.slider.index');
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
        $data['slider'] = Slider::find($id);
        return view('account.admin.slider.edit',$data);
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
            'image' => 'required',
        ]);

        $slider = Slider::find($id);
        $input = $request->except('_token','image','_method');

        if ($request->hasFile('image')) {
            if($slider->image) {
            unlink(public_path($slider->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/sliders/'), $photo_name);
            $input['image'] = 'uploads/sliders/'. $photo_name;
        }

        $slider->fill($input)->save();

        Notify::success('Slider Update Successfully!');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        if($slider->image) {
        unlink(public_path($slider->image));
        }
        Slider::find($id)->delete();
        Notify::success('Slider Delete Successfully!');
        return redirect()->route('admin.slider.index');
    }
}
