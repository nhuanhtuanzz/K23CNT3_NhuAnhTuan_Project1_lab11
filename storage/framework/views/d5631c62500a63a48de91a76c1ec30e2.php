<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        .sidebar{
            width: 250px;
            background: gray
        }
        .wrapper{
            width: calc(100% - 250px);
            background: #fff;
        
        }
        </style>
</head>
<body style="background:#ccc">
    <section class="container-fluid d-flex">
        <nav class="sideBar m-1">
            <?php echo $__env->make('_layouts.admins._menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </nav>
        <section class="wrapper boder my-1">
            <header class="my-1 p-1">
                <?php echo $__env->make('_layouts.admins._headerTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </header>
            <section class="content-body my-1 p-1">
                <?php echo $__env->yieldContent('content-body'); ?>
            </section>
        </section>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
</body>
</html><?php /**PATH C:\project1\K23CNT3_NhuAnhTuan_Project1Lab\K23CNT3_NhuAnhTuan_2310900111_Project1\resources\views/_layouts/admins/_master.blade.php ENDPATH**/ ?>