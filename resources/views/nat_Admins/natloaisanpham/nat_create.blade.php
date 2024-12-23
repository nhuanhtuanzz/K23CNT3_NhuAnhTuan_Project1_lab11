@extends('_layouts.admins._master')
@section('title','Thêm mới sản phẩm')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('nat_Admins.natloaisanpham.nat_createsubmit')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="natMaloai" class="col-sm-2 col-form-label">Mã loại</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  id="natMaloai" name="natMaloai">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="natTenloai" class="col-sm-2 col-form-label">Tên loại</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  id="natTenloai" name="natTenloai">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="natTrangthai" class="col-sm-2 col-form-label">Trạng thái</label>
                                <div class="col-sm-10">
                                  <input type="radio" id="natTrangthai1" name="natTrangthai" value="1" checked>
                                  <label for="natTrangthai1">hiển thị</label>
                                  &nbsp;
                                  <input type="radio" id="natTrangthai0" name="natTrangthai" value="0">
                                  <label for="natTrangthaoi0">khóa</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Ghi lại</button>
                            <a href="{{route('nat_Admins.natloaisanpham')}}" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>    
    </div>
@endsection