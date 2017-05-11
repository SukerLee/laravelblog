<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view( 'welcome');
    }
    
     public function login()
    {
         
         session(['admin'=>1]);
        return "登入！！！！";
    }
}
