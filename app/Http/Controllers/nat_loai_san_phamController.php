<?php

namespace App\Http\Controllers;
use App\Models\nat_loai_san_pham;
use Illuminate\Http\Request;

class nat_loai_san_phamController extends Controller
{
           public function natList()
    {
        $natlsp = nat_loai_san_pham::all();
        return view('admins.nat_loaisanpham.nat_list', ['natloaisanpham' => $natlsp]);
    }
}
