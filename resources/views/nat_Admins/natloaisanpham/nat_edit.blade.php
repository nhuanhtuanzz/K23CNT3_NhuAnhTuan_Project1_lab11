@extends('_layouts.admins._master')
@section('title','Sửa Loại Sản Phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('nat_Admins.natloaisanpham.nat_editsubmit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $natlsp->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="natMaloai" class="form-label">Mã Loại</label>
                                <input type="text" class="form-control" id="natMaloai" name="natMaloai" value="{{ $natlsp->natMaloai }}" >
                                @error('natMaloai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <!-- Tên Loại -->
                            <div class="mb-3">
                                <label for="natTenloai" class="form-label">Tên Loại</label>
                                <input type="text" class="form-control" id="natTenloai" name="natTenloai" value="{{ old('natTenloai', $natlsp->natTenloai) }}" >
                                @error('natTenloai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="natTrangthai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="natTrangthai1" name="natTrangthai" value="1" {{ old('natTrangthai', $natlsp->natTrangthai) == 1 ? 'checked' : '' }} />
                                    <label for="natTrangthai1">Khóa</label>
                                    &nbsp;
                                    <input type="radio" id="natTrangthai0" name="natTrangthai" value="0" {{ old('natTrangthai', $natlsp->natTrangthai) == 0 ? 'checked' : '' }} />
                                    <label for="natTrangthai0">Hiển Thị</label>
                                </div>
                                @error('natTrangthai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Change button label to "Cập nhật" (Update) -->
                            <button class="btn btn-success" type="submit">Cập nhật</button>
                            <a href="{{ route('nat_Admins.natloaisanpham') }}" class="btn btn-primary">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection