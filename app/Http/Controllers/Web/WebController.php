<?php

namespace App\Http\Controllers\Web;

use App\Models\Blog;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Contract;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ProductCategory;
use Dflydev\DotAccessData\Data;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Event;
use App\Models\EventPackage;
use App\Models\EventTopic;
use App\Models\EventType;
use App\Models\Partner;
use App\Models\ProductMultiImage;
use App\Models\Service;
use App\Models\SponsorRequest;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use PhpParser\Node\Expr\FuncCall;
use Mail;

class WebController extends Controller
{
    public function homepage()
    {
        $data['event_types'] = EventType::where('status',1)->get();
        $data['event_topics_default'] = EventTopic::where('status',1)->limit(4)->get();
        $data['events'] = Event::latest()->where('is_published',1)->where('status','!=',0)->limit(12)->get();
        // $data['event_type'] = EventType::where('status',1)->get();
        return view('web.homepage', $data);
    }

    public function about()
    {
        return view('web.about');
    }

    public function event(Request $request){

        $query = Event::query();
        $data['event_type'] = EventType::where('status',1)->get();

        // return $request->all();
        if ($request->type) {
            
            
            // $data['event_type'] = $request->type;
            $query = $query->where('event_type_id', $request->type);
        }
        if ($request->location) {

            $query = $query->where('address', 'LIKE', "%$request->location%");
        }
        if ($request->event) {

            $query = $query->where('name', 'LIKE', "%$request->event%");
        }
        if ($request->topic) {
            // $data['event_topic'] = $request->topic;
            $query = $query->where('event_topic_id', $request->topic);
        }
        if ($request->date) {
            // $data['date'] = $request->date;
            $query =  $query->where('date', $request->date);
        }
        
        $data['events'] = $query->latest()->where('is_published',1)->where('status','!=',0)->limit(24)->get();

        return view('web.event',$data);
    }
    
    public function eventcategory(){
        $data['event_types'] = EventType::where('status',1)->get();
        
        return view('web.event-category',$data);
    }

    public function eventDetails($slug){
        $data['event'] = Event::where('slug','=',$slug)->firstOrFail();
        $event_in = Event::where('slug','=',$slug)->firstOrFail();
        $data['package'] = EventPackage::where('event_id',$event_in->id)->get();
      
        return view('web.event-details',$data);
    }
    
    public function eventRequest(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'event_id' => 'required',
            'package' => 'required',
            'message' => 'required',
        ]);

        $data = new SponsorRequest();
        $input = $request->except('_token');
        $data->fill($input)->save();

        Notify::success('Sponsor Request Successfully!');
        return redirect()->back();

    }
    
    
    public function contact(Request $request)
    {
        return view('web.contact');
    }
  


    public function contactStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
         

        ]);
        $data = new Contact();
        $input = $request->except('_token');
        $data->fill($input)->save();
        
        
        
        /*
        $data = array('name'=>" ");
       
        Mail::send(['text'=>'mail.contact'], $data, function($message) {
             $message->to('info@sponsorsincu.com', '')->subject
                ('Website Notification');
             $message->from('noreply@sponsorsincu.com','Sponsors Incubator');
        });
*/
        
        
        
        
    
        Notify::success('Contact Request Successfully!');
        return redirect()->back();
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required',

        ]);

        $data=new Subscribe();
        $data->email=$request->email;
        $data->save();

        Notify::success('Subscripe Successfully');
        return redirect()->back();

    }

    public function service(){
        return view('web.service');
    }

    public function singleTopic($slug){
        $data['event_topic'] = EventTopic::where('slug',$slug)->first();
        $event_topic_in = EventTopic::where('slug',$slug)->first();
        $data['event_type'] = EventType::where('status',1)->get();
        $data['events'] = Event::latest()->where('is_published',1)->where('status','!=',0)->where('event_topic_id',$event_topic_in->id)->limit(24)->get();
        return view('web.single-topic',$data);
    }
    
    public function singleEventType($slug){
        $data['event_types'] = EventType::where('slug',$slug)->first();
        $event_types_in = EventType::where('slug',$slug)->first();
        $data['event_topics'] = EventTopic::where('event_type_id',$event_types_in->id)->get();
        return view('web.single-type',$data);
    }

    public function productCategory($slug)
    {

        $product_cat = ProductCategory::where('slug', $slug)->first();
        $data['fetureproducts'] = Product::where('status', 1)->limit(10)->get();
        $data['products'] = Product::where('status', 1)->where('category_id', $product_cat->id)->get();
        return view('web.product-category', $data);
    }


    public function blogDetails($slug)
    {
        $data['blog'] = Blog::where('slug', $slug)->first();
        $single_blog = Blog::where('slug', $slug)->first();
        $data['categories'] = ProductCategory::where('status', '=', 1)->get();
        $data['recent_blog'] = Blog::where('status', '=', 1)->limit(5)->where('id', '!=', $single_blog->id)->get();
        $data['sale_blog'] = Blog::where('status', '=', 1)->where('sell_post', '=', 1)->limit(5)->where('id', '!=', $single_blog->id)->get();
        $data['offer_blog'] = Blog::where('status', '=', 1)->where('offer_post', '=', 1)->limit(5)->where('id', '!=', $single_blog->id)->get();


        return view('web.blog-details', $data);
    }

    public function blog()
    {
        $data['recent_blog'] = Blog::where('status', '=', 1)->limit(5)->get();
        $data['sale_blog'] = Blog::where('status', '=', 1)->where('sell_post', '=', 1)->limit(5)->get();
        $data['offer_blog'] = Blog::where('status', '=', 1)->where('offer_post', '=', 1)->limit(5)->get();
        $data['blog'] = Blog::where('status', '=', 1)->limit(7)->get();
        return view('web.blog', $data);
    }

    public function eventTopicGet(Request $request){
        if ($request->ajax()) {
            $topics = EventTopic::where('event_type_id',$request->id)->get();
            return $topics;
        }
    }

    public function becomeSponsor(){
        return view('web.become-sponsor');
    }




 

}
