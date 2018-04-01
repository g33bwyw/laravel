<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

class LoginController extends BaseController
{
    //
    function login(){
        return view('admin/login');
    }
}
