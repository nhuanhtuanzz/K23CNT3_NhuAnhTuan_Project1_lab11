<?php

namespace App\Http\Controllers;

use App\Models\nat_loai_san_pham;
use App\Models\nat_san_pham;
use Illuminate\Http\Request;

class nat_san_phamController extends Controller
{
    public function natList()
    {
        $natspss = nat_san_pham::where('natTrangthai',0)->get();
        return view('nat_Admins.natsanpham.nat_list', ['natsp' => $natspss]);
    }
    public function natCreate(){
        $natloaisanpham = nat_loai_san_pham::all();
        return view('nat_Admins.natsanpham.nat_create');
    }
    
}