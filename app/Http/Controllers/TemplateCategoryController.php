<?php

namespace App\Http\Controllers;

use App\Model\TemplateCategory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TemplateCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        $categoris = TemplateCategory::all();
        return view('admin.templateCategories.category', compact(['categoris','users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.templateCategories.category');
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
            'text_ar' => 'required',
            'text_en'=> 'required'
        ]);
        $menus = new TemplateCategory();
        $menus->text_ar = $request->text_ar;
        $menus->text_en = $request->text_en;
        $menus->code = $request->code;
        $menus->save();
        return back()->with('success',trans('تم اضافة التصنيف بنجاح'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\TemplateCategory  $templateCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TemplateCategory $templateCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TemplateCategory  $templateCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.templateCategories.category')->with('category', TemplateCategory::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TemplateCategory  $templateCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $category = TemplateCategory::find($id);
        $category->text_ar = $request->text_ar;
        $category->text_en = $request->text_en;
        $category->code = $request->code;
        $category->save();
        return back()->with('success',trans('تم التعديل بنجاح'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TemplateCategory  $templateCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $categroy = TemplateCategory::findOrFail($request->category_id);
        $categroy->delete();
        return back()->with('delete',trans('تم الحذف  بنجاح'));
    }
}
