<?php

namespace App\Http\Controllers;

use App\Model\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.upload.upload')->with('uploads', upload::get());
    }

    public function addMedia(){
        return view('admin.upload.formAddMedia');
    }

    public function selectMedia(){
        return view('admin.upload.selectMedia')->with('uploads', upload::get());
    }

    public function addMediaModal(){
        return view('admin.upload.formAddMediaModal');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.upload.formAddMedia');
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
            'path' => 'required',
            'alt'=> 'required',
            

        ]);
        $path= $request->path->store('images');
        $upload = new upload();
        $upload->path = $path;
        $upload->alt = $request->alt;
        $upload->save();
        return redirect('pg-admin/selectMedia');
        // return back()->with('success',trans('تم اضافة بنجاح'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = upload::find($id,'path')->path;
        $filePath1 = "images/".$path;
        upload::destroy($id);
        if (file_exists($filePath1)) {
        unlink($filePath1);
        }

        return back()->with('delete',trans('تم الحذف  بنجاح'));
    }
}
