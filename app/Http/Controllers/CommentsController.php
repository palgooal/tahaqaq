<?php

namespace App\Http\Controllers;

use App\Model\Blog;
use App\Model\Comments;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $comments = Comments::get();
        $users  = User::get();
        return view('admin.Comments.IndexComments', compact('comments', 'users', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('SinglePost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comments = new Comments();
        $comments->name =$request->name;
        $comments->email =$request->email;
        $comments->comment =$request->comment;
        $comments->blog_id =$request->blog_id;
        $comments->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Comments::find($id);
        $users = User::get();
        return view('admin.Comments.showComments', compact('comments', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $comments = Comments::findOrFail($request->comment_id);
        $comments->delete();
        return back()->with('delete',trans('تم الحذف  بنجاح'));
    }
}
