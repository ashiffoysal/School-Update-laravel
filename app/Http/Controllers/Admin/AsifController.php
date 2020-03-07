<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsifController extends Controller
{
    public function dashboard(){
      return "dashboard";
    }
    public function login(){
      return view('auth.adminlogin.login');
    }

    public function register(){
      return view('auth.adminlogin.register');
    }

    public function homedash(){
      return "homedash";
    }
}
