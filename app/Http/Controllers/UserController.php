<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.users.users')->with('users',user::orderBy('name','asc')->get());
    }

    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
    
    }

    public function show(Upload $upload){
        return view('users.users')->with('users',user::orderBy('name','asc')->get());
    }

    public function edit(Upload $upload){

    }

    public function update(Request $request, Upload $upload){

    }

    public function destroy($id){

    }
}
