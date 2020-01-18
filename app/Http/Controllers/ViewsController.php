<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function register()
    {
        return view('register.page_register');
    }
    public function login()
    {
        return view('login.page_login');
    }
}
