<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nat_quan_triController extends Controller
{
    public function natLogin(){
        return view('login.nat_login');
    }
    public function natLoginSubmit(Request $request){
        return view('login.nat_login');
    }
}
