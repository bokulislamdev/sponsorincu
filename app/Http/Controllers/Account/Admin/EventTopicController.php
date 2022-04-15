<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\EventTopic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class EventTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['event_topics'] = EventTopic::where('status',1)->get();
        return view('account.admin.event-topic.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.admin.event-topic.create');
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
            'event_type_id' => 'required',
        ]);
        
        $event_id = $request->event_type_id;

        $data = new EventTopic();
        $input = $request->except('_token','_method');
        $input['slug'] = Str::slug($request->name,'-');

        $data->fill($input)->save();

        Notify::success('Event Topic Create Successfully!');
        return redirect()->route('admin.event-type.show', $event_id);
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

        
        $data['event_topic'] = EventTopic::find($id); 
        return view('account.admin.event-topic.edit',$data);
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

        $event_id = $request->event_type_id;

        $data = EventTopic::find($id);
        $input = $request->except('_token','_method');
        $input['slug'] = Str::slug($request->name,'-');
        $data->fill($input)->save();

        Notify::success('Event Topic Update Successfully!');
        return redirect()->route('admin.event-type.show', $event_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EventTopic::find($id)->delete();
        Notify::success('Event Topic Delete Successfully!');
        return redirect()->back();
    }
}
