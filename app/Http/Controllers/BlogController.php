<?php

namespace App\Http\Controllers;

use App\Model\Blog;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.IndexBlog')->with('blogs', Blog::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.AddBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->Title_ar = $request->Title_ar;
        $blog->Title_en = $request->Title_en;
        $blog->Body_ar = $request->Body_ar;
        $blog->Body_en = $request->Body_en;
        $blog->image = $request->image;
        $blog->slug = $request->slug;
        $blog->Tags = $request->Tags;
        $blog->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.blog.Editeblog')->with('blogs', Blog::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->Title_ar = $request->Title_ar;
        $blog->Title_en = $request->Title_en;
        $blog->Body_ar = $request->Body_ar;
        $blog->Body_en = $request->Body_en;
        $blog->image = $request->image;
        $blog->slug = $request->slug;
        $blog->Tags = $request->Tags;

        $blog->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
