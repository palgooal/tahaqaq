<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = user::all();
        return view('admin.users.users',  compact('users'));
    }

    public function create(){
        $users = user::get();
        return view('admin.users.AddUser', compact('users'));
    }

    public function store(Request $request){
        $users = new user();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->save();

        return back()->with('success',trans('تم اضافة بنجاح'));

    }

    public function show(Upload $upload){
        return view('users.users')->with('users',user::orderBy('name','asc')->get());
    }

    public function edit(Upload $upload){

    }

    public function update(Request $request, Upload $upload){

    }

    public function destroy(Request $request){
        $users = user::findOrFail($request->user_id);
        $users->delete();
        return back()->with('delete',trans('تم الحذف  بنجاح'));
    }
}
