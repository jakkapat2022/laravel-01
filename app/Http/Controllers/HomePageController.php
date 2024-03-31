<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view('homepages.index');
    }

    public function login(){
        return view('homepages.login');
    }
}
