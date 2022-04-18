<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\Event;
use App\Models\EventType;
use App\Models\EventTopic;
use Illuminate\Support\Str;
use App\Models\EventPackage;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
     
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $topics = EventTopic::where('event_type_id',$request->id)->get();
            return $topics;
        }

        $data['events'] = Event::where('status','!=','0')->get();
        return view('account.admin.event.index',$data);
    }

   
    public function create()
    {
        $data['event_types'] = EventType::where('status',1)->get();
        $data['event_topices'] = EventTopic::where('status',1)->get();
        return view('account.admin.event.create',$data);
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'event_type_id' => 'required',
            'event_topic_id' => 'required',
            'date' => 'required',
            'image' => 'required',
            'description' => 'required',
            'aspect_attendance' => 'required',
            'aspect_male' => 'required',
        ]);
 
        $data = new Event();
        $input = $request->except('_token','image','_method');

        if ($request->hasFile('image')) {
            if($data->image) {
            unlink(public_path($data->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $path = 'uploads/events/'.$photo_name;
            Image::make($request->file('image'))->resize(600,400)->save(public_path($path), 100);
            $input['image'] = $path;
        }

        $input['slug'] = Str::slug($request->name,'-');
        $input['status'] = 1;

        $data->fill($input)->save();

        Notify::success('Event Create Successfully!');
        return redirect()->route('admin.event.index');
    }

    
    public function show($id)
    {
        $data['event_types'] = EventType::where('status',1)->get();
        $data['event_topices'] = EventTopic::where('status',1)->get();
        $data['event'] = Event::find($id);
        $data['sponsor_package'] = EventPackage::where('event_id',$id)->get();
        return view('account.admin.event.show',$data);
    }

    
    public function edit($id)
    {
        $data['event_types'] = EventType::where('status',1)->get();
        $data['event_topices'] = EventTopic::where('status',1)->get();
        $data['event'] = Event::find($id); 
        return view('account.admin.event.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'event_type_id' => 'required',
            // 'event_topic_id' => 'required',
            'date' => 'required',
            'description' => 'required',
            'aspect_attendance' => 'required',
            'aspect_male' => 'required',
        ]);
 
        $data = Event::find($id);
        $input = $request->except('_token','image','_method');

        if ($request->hasFile('image')) {
            if($data->image) {
            unlink(public_path($data->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $path = 'uploads/events/'.$photo_name;
            Image::make($request->file('image'))->resize(600,400)->save(public_path($path), 100);
            $input['image'] = $path;
        }

        $input['slug'] = Str::slug($request->name,'-');

        $data->fill($input)->save();

        Notify::success('Event Update Successfully!');
        return redirect()->route('admin.event.index');
    }

    
    public function destroy($id)
    {
        $data = Event::find($id);
        $data->status = 0;
        $data->save();
        Notify::success('Event Delete Successfully!');
        return redirect()->route('admin.event.index');
    }

    public function packageCreate(){
        return view('account.admin.event.package-create');
    }
    
    public function packagePost(Request $request){
        $request->validate([
            'event_id' => 'required',
            'service_name' => 'array',
            'service_name.*' => 'required|string',
        ]);

        $basic = $request->get('basic');
        $premium = $request->get('premium');
        $event_id = $request->get('event_id');
        $standard = $request->get('standard');
        $service_name = $request->get('service_name');

        foreach ($event_id as $key => $id) {
            EventPackage::create([
                'event_id' => $id,
                'basic' => $basic[$key] ?? 0,
                'premium' => $premium[$key] ?? 0,
                'standard' => $standard[$key] ?? 0,
                'service_name' => $service_name[$key],
            ]);
        }

        Notify::success('Event Package Create Successfully!');
        return redirect()->back();   
    }


    public function basicPackagePrice(Request $request , $id){
        $request->validate([
            'basic_price' => 'required'
        ]);

        $data = Event::find($id);
        $data->basic_price = $request->basic_price;
        $data->save();

        Notify::success('Event Package Price Update Successfully!');
        return redirect()->back();   
    }

    public function standardPackagePrice(Request $request , $id){
        $request->validate([
            'standard_price' => 'required'
        ]);

        $data = Event::find($id);
        $data->standard_price = $request->standard_price;
        $data->save();

        Notify::success('Event Package Price Update Successfully!');
        return redirect()->back();   
    }

    public function premiumPackagePrice(Request $request , $id){
        $request->validate([
            'premium_price' => 'required'
        ]);

        $data = Event::find($id);
        $data->premium_price = $request->premium_price;
        $data->save();

        Notify::success('Event Package Price Update Successfully!');
        return redirect()->back();   
    }
}
