@extends('_layouts.admins._master')

@section('title','Sửa thông tin loại sản phẩm')

@section('content-body')
    <div class="container boder">
        <div class="row">
            <div class="col">
                <form action="{{ route('nat_Admins.natloaisanpham.nat_editsubmit', $natlsp->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $natlsp->id }}">
                    <div class="card-header">
                        <h2>Sửa thông tin loại sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <!-- Mã Loại -->
                        <div class="mb-3 row">
                            <label for="natMaloai" class="col-sm-2 col-form-label">Mã Loại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $natlsp->natMaloai }}" id="natMaloai" name="natMaloai">
                            </div>
                        </div>

                        <!-- Tên Loại -->
                        <div class="mb-3 row">
                            <label for="natTenloai" class="col-sm-2 col-form-label">Tên Loại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $natlsp->natTenloai }}" id="natTenloai" name="natTenloai">
                            </div>
                        </div>

                        <!-- Trạng thái -->
                        <div class="mb-3 row">
                            <label for="natTrangthai" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="natTrangthai1" name="natTrangthai" value="1" {{ $natlsp->natTrangthai == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="natTrangthai1">Hiển thị</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="natTrangthai0" name="natTrangthai" value="0" {{ $natlsp->natTrangthai == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="natTrangthai0">Khóa</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Lưu lại</button>
                        <a href="{{ route('nat_Admins.natloaisanpham') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
