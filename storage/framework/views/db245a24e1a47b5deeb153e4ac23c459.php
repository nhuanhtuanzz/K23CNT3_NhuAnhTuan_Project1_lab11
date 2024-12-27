<?php $__env->startSection('title','Danh sách sản phẩm'); ?>

<?php $__env->startSection('content-body'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex w-100 justify-content-between">
            </div>
        </div>
            <h1>Danh sách loại sản phẩm</h1>
            <a href="<?php echo e(route('nat_Admins.natloaisanpham.nat_create')); ?>" class="btn btn-success">Thêm mới</a>
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
                    <?php $__empty_1 = true; $__currentLoopData = $natlsp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->natMaloai); ?></td>
                            <td><?php echo e($item->natTenloai); ?></td>
                            <td><?php echo e($item->natTrangthai); ?></td>
                            <td>
                                View / 
                                <a href="<?php echo e(route('nat_Admins.natloaisanpham.nat_edit', $item->id)); ?>">edit</a> / delete
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <th colspan="5">Chưa có thông tin loại sản phẩm</th>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.admins._master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project1\K23CNT3_NhuAnhTuan_Project1Lab\K23CNT3_NhuAnhTuan_2310900111_Project1\resources\views/nat_Admins/natloaisanpham/nat_list.blade.php ENDPATH**/ ?>