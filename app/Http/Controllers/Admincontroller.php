<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function adminHome()
    {
        return view('adminHome');
    } 
}
