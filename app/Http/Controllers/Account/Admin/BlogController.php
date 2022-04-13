<?php

namespace App\Http\Controllers\Account\Admin;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blogs'] = Blog::where('status',1)->get();
        return view('account.admin.blog.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['blog_categories'] = BlogCategory::where('status',1)->get();
        return view('account.admin.blog.create',$data);
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
            'title' => ['required'],
            'blog_category_id' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
        ]);

        $blog = new Blog();
        $input = $request->except('_token','image','_method');

        if ($request->hasFile('image')) {
            if($blog->image) {
            unlink(public_path($blog->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/blogs/'), $photo_name);
            $input['image'] = 'uploads/blogs/'. $photo_name;
        }
        $input['user_id'] = Auth::user()->id;
        $input['slug'] = Str::slug($request->title,'-');

        $blog->fill($input)->save();

        Notify::success('Blog Create Successfully!');
        return redirect()->route('admin.blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['blog'] = Blog::find($id);
        return view('account.admin.blog.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $data['blog'] = Blog::find($id);
        $data['blog_categories'] = BlogCategory::where('status',1)->get();

        return view('account.admin.blog.edit',$data);
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
            'title' => ['required'],
            'blog_category_id' => ['required'],
            'description' => ['required'],
        ]);



        $blog = Blog::find($id);
        $input = $request->except('_token','image','_method','offer_post','sell_post');

        if ($request->hasFile('image')) {
            if($blog->image) {
            unlink(public_path($blog->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/blogs/'), $photo_name);
            $input['image'] = 'uploads/blogs/'. $photo_name;
        }
        $input['slug'] = Str::slug($request->title,'-');
        $input['sell_post'] = $request->sell_post;
        $input['offer_post'] = $request->offer_postst;

        $blog->fill($input)->save();

        Notify::success('Blog Update Successfully!');
        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if($blog->image) {
        unlink(public_path($blog->image));
        }
        Blog::find($id)->delete();
        Notify::success('Blog Delete Successfully!');
        return redirect()->route('admin.blog.index');
    }
}
