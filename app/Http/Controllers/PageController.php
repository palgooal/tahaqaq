<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use App\Model\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.IndexPages')->with('pages', Page::get());


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.AddPages');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->title_en ==null) ? Str::slug($request->title_ar) : Str::slug($request->title_en)  ;
        $page = new Page();
        $page->slug = $slug;
        $page->title_ar = $request->title_ar;
        $page->content_ar = $request->content_ar;
        $page->title_en = $request->title_en;
        $page->content_en = $request->content_en;
        $page->tags = $request->tags;
        $page->save();
        return redirect('/pg-admin/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('pages')->with('page', Page::where('slug', $slug)->first())
                            ->with('menus', Menu::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.EditPages')->with('pages', Page::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $slug = Str::slug($request->title_en ==null) ? Str::slug($request->title_ar) : Str::slug($request->title_en)  ;
        $page = $page;
        $page->slug = $slug;
        $page->title_ar = $request->title_ar;
        $page->content_ar = $request->content_ar;
        $page->title_en = $request->title_en;
        $page->content_en = $request->content_en;
        $page->tags = $request->tags;
        $page->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $page = Page::findOrFail($request->page_id);
        $page->delete();
        return back()->with('delete',trans('تم الحذف  بنجاح'));
    }
}
