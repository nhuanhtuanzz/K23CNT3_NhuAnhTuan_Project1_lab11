@extends('_layouts.admins._master')
@section('title','Danh sách sản phẩm')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex w-100 justify-content-between">
            </div>
        </div>
            <h1>Danh sách loại sản phẩm</h1>
            <a href="{{route('nat_Admins.natloaisanpham.nat_create')}}" class="btn btn-success">Thêm mới</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr> 
                        <th>#</th>  
                        <th>Mã loại</th>  
                        <th>Tên loại</th>  
                        <th>Trạng thái</th>  
                        <th>Chức năng</th>  
                    </tr>
                </thead>
                <tbody>
                    @forelse ($natlsp as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$item->natMaloai}}</td>
                            <td>{{$item->natTenloai}}</td>
                            <td>{{$item->natTrangthai}}</td>
                            <td>
                                View / 
                                <a href="nat_Admins.natloaisanpham.nat_edit">edit</a> / delete
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">Chưa có thông tin loại sản phẩm</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection