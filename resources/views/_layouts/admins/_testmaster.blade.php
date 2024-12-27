<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            color: #333;
        }
        .header {
            display: flex;
            background-color: #3498db;
            color: white;
            padding: 20px 0;
            
        }
        .guest {
            display: flex;
            margin-left: 1200px;
            gap: 10px;
        }
        .guest a {
        text-decoration: none;
        font-size: 14px;
        padding: 8px 15px;
        border-radius: 5px;
        transition: background-color 0.3s;
        }
        .guest .login {
        background-color: #444;
        color: #fff;
        }
        .guest .login:hover {
        background-color: #555;
        }
        .guest .signin {
        background-color: #0087b5;
        color: #fff;
        }
        .guest .signin:hover {
        background-color: #84daff;
        }
        .sidebar {
            background-color: #ecf0f1;
            padding: 20px;
            border-right: 2px solid #bdc3c7;
        }
        .sidebar a {
            color: #3498db; 
            text-decoration: none;
            padding: 5px 0;
            display: block;
        }
        .sidebar a:hover {
            color: #2c3e50;
        }
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .btn-custom {
            background-color: #3498db;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #2980b9;
        }
        .product-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
        }
        .product-item {
        width: 48%;
        border: 2px solid #ddd;
        padding: 10px;
        border-radius: 8px;
        transition: all 0.3s ease;
        }
        .product-item img {
        width: 100%;
        border-radius: 8px;
        }
        .product-item:hover {
        border-color: #007bff;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }
        @media (max-width: 768px) {
       .product-item {
        width: 100%;
        }   
}


    </style>
</head>
<body>

    <div class="header">
        <div class="logo">

        </div>
        <div class="guest">
            <a href="#" class="login">Đăng ký</a>
            <a href="#" class="signin">Đăng nhập</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <h4>Menu</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; Nhu Anh Tuan K23CNT3</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
