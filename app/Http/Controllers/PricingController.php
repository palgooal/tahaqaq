<?php

namespace App\Http\Controllers;

use App\Model\pricing;
use App\User;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = pricing::get();
        $users = User::get();
        return view('admin.packages.IndexPackage', compact('packages', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/pg-admin/packges');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.packages.IndexPackage')->with('packages', pricing::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $package = pricing::find($id);
        $package->name_package = $request->name_package;
        $package->price = $request->price;
        $package->Details = $request->Details;
        $package->link = $request->link;
        $package->save();
        return back()->with('success',trans('تم التعديل بنجاح'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(pricing $pricing)
    {
        //
    }
}
