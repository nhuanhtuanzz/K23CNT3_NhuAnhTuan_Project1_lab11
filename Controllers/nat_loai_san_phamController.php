<?php

namespace App\Http\Controllers;
use App\Models\nat_loai_san_pham;
use Illuminate\Http\Request;

class nat_loai_san_phamController extends Controller
{
    public function natList()
    {
        $natlspss = nat_loai_san_pham::all();
        return view('nat_Admins.natloaisanpham.nat_list', ['natlsp' => $natlspss]);
    }
    public function natCreate()
    {
        return view('nat_Admins.natloaisanpham.nat_create');
    }
    public function natCreateSubmit(Request $request)
    {
        $natlsp = new nat_loai_san_pham;
        $natlsp -> natMaloai = $request -> natMaloai;
        $natlsp -> natTenloai = $request -> natTenloai;
        $natlsp -> natTrangthai = $request -> natTrangthai;

        $natlsp ->save();

        return redirect()->route('nat_Admins.natloaisanpham');
    }
    public function natEdit($id)
    {
        $natlsp = nat_loai_san_pham::find($id);
        return view('nat_Admins.natloaisanpham.nat_edit',['natlsp'=>$natlsp]);
    }
    #Edit - submit
    public function ldtEditSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $natlsp =  nat_loai_san_pham::find($request->id);

        $natlsp->natMaloai = $request->natMaloai;
        $natlsp->natTenloai = $request->natTenloai;
        $natlsp->natTrangThai = $request->natTrangThai;

        $natlsp->save();
        return redirect()->route('natAdmins.natlsp');
    }

    }

