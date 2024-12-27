@extends('_layouts.admins._testmaster')

@section('title', 'Trang chủ')

@section('content')
    <div class="promotion">
        <h4>Khuyến mãi đặc biệt</h4>
        <p>Mua 2 bánh mì bất kỳ, giảm 10%!</p>
        <button class="btn btn-success">Mua ngay</button>
    </div>
    
    <div class="product-grid">
        <div class="product-item">
            <img src="banh-mi-thit.jpg" alt="Bánh mì thịt nướng" class="img-fluid">
            <h4>Bánh mì thịt nướng</h4>
            <p class="price">30.000 VNĐ</p>
            <button class="btn btn-primary">Thêm vào giỏ</button>
        </div>
        <div class="product-item">
            <img src="banh-mi-chay.jpg" alt="Bánh mì chay" class="img-fluid">
            <h4>Bánh mì chay</h4>
            <p class="price">25.000 VNĐ</p>
            <button class="btn btn-primary">Thêm vào giỏ</button>
        </div>
        <div class="product-item">
            <img src="banh-mi-thit.jpg" alt="Bánh mì thịt nướng" class="img-fluid">
            <h4>Bánh mì thịt đặc biệt</h4>
            <p class="price">30.000 VNĐ</p>
            <button class="btn btn-primary">Thêm vào giỏ</button>
        </div>
        <div class="product-item">
            <img src="banh-mi-chay.jpg" alt="Bánh mì chay" class="img-fluid">
            <h4>Bánh mì que</h4>
            <p class="price">25.000 VNĐ</p>
            <button class="btn btn-primary">Thêm vào giỏ</button>
        </div><div class="product-item">
            <img src="banh-mi-thit.jpg" alt="Bánh mì thịt nướng" class="img-fluid">
            <h4>Bánh mì xúc xích</h4>
            <p class="price">30.000 VNĐ</p>
            <button class="btn btn-primary">Thêm vào giỏ</button>
        </div>
        <div class="product-item">
            <img src="banh-mi-chay.jpg" alt="Bánh mì chay" class="img-fluid">
            <h4>Bánh mì thập cẩm</h4>
            <p class="price">25.000 VNĐ</p>
            <button class="btn btn-primary">Thêm vào giỏ</button>
        </div>
    </div>
    
    
@endsection