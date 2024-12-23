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
        $natlsps = nat_loai_san_pham::find($id);
        if (!$natlsps) {
            return redirect()->route('nat_Admins.natloaisanpham')->with('Lỗi', 'Loại sản phẩm không tồn tại!');
        }
            return view('nat_Admins.natloaisanpham.nat_edit',['natlsp'=>$natlsps]);
    }
    
    public function natEditSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'natMaloai' => 'required|string|max:255|unique:nat_loai_san_pham,natMaloai,' . $request->id,  
            'natTenloai' => 'required|string|max:255',   
            'natTrangthai' => 'required|in:0,1',
        ]);
        $natlsps = nat_loai_san_pham::find($request->id);
        if (!$natlsps) {
            return redirect()->route('nat_Admins.natloaisanpham')->with('Lỗi', 'Loại sản phẩm không tồn tại!');
        }
        $natlsps->natMaloai = $request->natMaloai;
        $natlsps->natTenloai = $request->natTenloai;
        $natlsps->natTrangthai = $request->natTrangthai;
    
        $natlsps->save();
    
        return redirect()->route('nat_Admins.natloaisanpham')->with( 'Cập nhật thành công!');
    }

    }

