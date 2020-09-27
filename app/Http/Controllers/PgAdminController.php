<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class PgAdminController extends Controller
{
    public function index(){
        return view('admin.index')->with('users', user::get());
    }
}
