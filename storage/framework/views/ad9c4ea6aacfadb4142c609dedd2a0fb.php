<?php $__env->startSection('title', 'Danh Sách Sản Phẩm'); ?>

<?php $__env->startSection('content-body'); ?>
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Sản Phẩm</h1>
                <a href="<?php echo e(route('nat_Admins.natsanpham.nat_create')); ?>" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i>Thêm mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Mã Loại</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $stt = 0;
                    ?>
                    <?php $__empty_1 = true; $__currentLoopData = $natsp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php
                            $stt++;
                        ?>
                        <tr>
                            <td><?php echo e($stt); ?></td>
                            <td><?php echo e($item->natMasanpham); ?></td>
                            <td><?php echo e($item->natTensanpham); ?></td>
                            <td style="display: flex; justify-content: center; align-items: center; height: 100px;">
                                <img src="<?php echo e(asset('storage/' . $item->natHinhanh)); ?>" alt="Sản phẩm <?php echo e($item->natMasanpham); ?>" width="100" height="100">
                            </td>
                            <td><?php echo e($item->natSoluong); ?></td>
                            <td><?php echo e(number_format($item->natDongia, 0, ',', '.')); ?> VND</td>
                            <td><?php echo e($item->natMaloai); ?></td>
                            <td>
                                <?php if($item->natTrangthai == 0): ?>
                                    <span class="badge bg-success">Hiển Thị</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Khóa</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="#">Chi tiết</a>
                                    <a href="#">Sửa</a>
                                    <a href="#">xóa</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="9" class="text-center text-muted">
                                Chưa có thông tin sản phẩm
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.admins._master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project1\K23CNT3_NhuAnhTuan_Project1Lab\K23CNT3_NhuAnhTuan_2310900111_Project1\resources\views/nat_Admins/natsanpham/nat_list.blade.php ENDPATH**/ ?>