<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nat_homeController extends Controller
{
    public function index()
    {
        return view('home');  // Trả về view 'home'
    }
}

