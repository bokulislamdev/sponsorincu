<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\EventType;
use App\Models\EventTopic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class EventTypeController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['event_types'] = EventType::where('status',1)->get();
        return view('account.admin.event-type.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('account.admin.event-type.create');
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
            'name' => 'required',
        ]);
 

        $data = new EventType();
        $input = $request->except('_token','_method','slug');
        $input['slug'] = Str::slug($request->name,'-');
        $data->fill($input)->save();

        Notify::success('Event Type Create Successfully!');
        return redirect()->url('admin.event-type.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['event_type'] = EventType::findOrFail($id);
        $data['event_topics'] = EventTopic::where('event_type_id',$id)->get();
        return view('account.admin.event-type.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['event_type'] = EventType::find($id); 
        return view('account.admin.event-type.edit',$data);
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
        ]);

        $data = EventType::find($id);
        $input = $request->except('_token','_method');
        $input['slug'] = Str::slug($request->name,'-');
        $data->fill($input)->save();

        Notify::success('Event Type Update Successfully!');
        return redirect()->route('admin.event-type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = EventType::find($id);
        $data->status = 0;
        $data->save();
        Notify::success('Event Type Delete Successfully!');
        return redirect()->route('admin.event-type.index');
    }


    public function getsubcategory(Request $request){

        $category_id = $request->category_id;
        $categoryHtmlOption = "<option value=''> Select Sub Category</option>";
        $categories = EventTopic::where([['event_type_id', $category_id]])->get();

        foreach ($categories as $subcategory) {
            
            $categoryHtmlOption .= "<option value='$subcategory->id'>$subcategory->name</option>";
        }
        // echo $cityHtmlOption;
        return ($categoryHtmlOption);

    }
}
