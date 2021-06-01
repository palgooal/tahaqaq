<?php

namespace App\Http\Controllers;

use App\Model\ouer_client;
use Illuminate\Http\Request;
use App\User;
class OuerClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        $our_client = ouer_client::orderBy('created_at','DESC')->get();
        return view('admin.our_client.index_our_client')
        ->with('users',$users)
        ->with('our_client',$our_client);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //image
        $users = User::get();
        return view('admin.our_client.index_our_client')->with('users',$users);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ouer_client();
        $data->url = $request->url;
        $data->image = $request->image;
        $data->save();
        return redirect('/pg-admin/ourClient')->with('success',trans('تم اضافة  بنجاح'))->with('errors',trans('يوجد خطأ'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ouer_client  $ouer_client
     * @return \Illuminate\Http\Response
     */
    public function show(ouer_client $ouer_client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ouer_client  $ouer_client
     * @return \Illuminate\Http\Response
     */
    public function edit(ouer_client $ouer_client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ouer_client  $ouer_client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ouer_client $ouer_client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ouer_client  $ouer_client
     * @return \Illuminate\Http\Response
     */
    public function destroy(ouer_client $ouer_client)
    {
        //
    }
}
