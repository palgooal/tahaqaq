<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use App\Model\Page;
use App\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.menu.menu')->with('menus',Menu::orderBy('sort','asc')->get())
        ->with('pages', Page::get())
        ->with('users', User::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.menu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name_ar' => 'required',
            'url' => 'required',

            'sort' => 'required'

        ]);
        $menus = new Menu();

        if($request->url !== null){

            $menus->url = $request->url;
        }else if($request->slug !== "1"){

            $menus->url = $request->slug;
        }
        $menus->name_ar = $request->name_ar;
        $menus->name_en = $request->name_en;

        $menus->sort = $request->sort;
        $menus->save();
        return back()->with('success',trans('تم اضافة القائمة بنجاح'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.menu.menu')->with('menus', Menu::find($id));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->name_ar = $request->name_ar;
        $menu->name_en = $request->name_en;
        $menu->url = $request->url;
        $menu->sort = $request->sort;
        $menu->save();
        return redirect('pg-admin/menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $menu = Menu::findOrFail($request->menu_id);
        $menu->delete();
        return back()->with('delete',trans('تم الحذف  بنجاح'));
    }
}
