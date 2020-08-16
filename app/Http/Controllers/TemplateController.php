<?php

namespace App\Http\Controllers;

use App\Model\Template;
use App\Model\TemplateCategory;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $templates = Template::paginate(10);
        $categories = TemplateCategory::all();
        return view('admin.templates.index', compact(['templates','categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = TemplateCategory::all();
        return view('admin.templates.create', compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'title_ar' => 'required',
            'title_en'=> 'required',
            'name' => 'required'
        ]);

        $t = new Template();
        $t->name = $request->name;
        $t->title_ar = $request->title_ar;
        $t->title_en = $request->title_en;
        $t->small_details_ar = $request->small_details_ar;
        $t->small_details_en = $request->small_details_en;
        $t->details_ar = $request->details_ar;
        $t->details_en = $request->details_en;
        $t->category_id = $request->category_id;
        $t->image_url = $request->image_url;
        $t->preview_url = $request->preview_url;
        $t->save();

        return back()->with('success','save succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        //
    }
}
