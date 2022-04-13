<?php

namespace App\Http\Controllers\Account\Admin;

use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog_categories'] = BlogCategory::where('status',1)->get();
        return view('account.admin.blog-category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('account.admin.blog-category.create');
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
 

        $blog_category = new BlogCategory();
        $input = $request->except('_token','_method');
        $input['slug'] = Str::slug($request->name,'-');

        $blog_category->fill($input)->save();

        Notify::success('Blog Category Create Successfully!');
        return redirect()->route('admin.blog-category.index');
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
        $data['blog_category'] = BlogCategory::find($id); 
        return view('account.admin.blog-category.edit',$data);
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

        $blog_category = BlogCategory::find($id);
        $input = $request->except('_token','_method');
        $input['slug'] = Str::slug($request->name,'-');

        $blog_category->fill($input)->save();

        Notify::success('Blog Category Update Successfully!');
        return redirect()->route('admin.blog-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = BlogCategory::find($id);
        $data->status = 0;
        $data->save();
        Notify::success('Blog Category Delete Successfully!');
        return redirect()->route('admin.blog-category.index');
    }
}
