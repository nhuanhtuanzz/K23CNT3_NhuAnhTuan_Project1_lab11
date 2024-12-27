<?php $__env->startSection('title','Sửa thông tin loại sản phẩm'); ?>

<?php $__env->startSection('content-body'); ?>
    <div class="container boder">
        <div class="row">
            <div class="col">
                <form action="<?php echo e(route('nat_Admins.natloaisanpham.nat_editsubmit', $natlsp->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($natlsp->id); ?>">
                    <div class="card-header">
                        <h2>Sửa thông tin loại sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <!-- Mã Loại -->
                        <div class="mb-3 row">
                            <label for="natMaloai" class="col-sm-2 col-form-label">Mã Loại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo e($natlsp->natMaloai); ?>" id="natMaloai" name="natMaloai">
                            </div>
                        </div>

                        <!-- Tên Loại -->
                        <div class="mb-3 row">
                            <label for="natTenloai" class="col-sm-2 col-form-label">Tên Loại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo e($natlsp->natTenloai); ?>" id="natTenloai" name="natTenloai">
                            </div>
                        </div>

                        <!-- Trạng thái -->
                        <div class="mb-3 row">
                            <label for="natTrangthai" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="natTrangthai1" name="natTrangthai" value="1" <?php echo e($natlsp->natTrangthai == 1 ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="natTrangthai1">Hiển thị</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="natTrangthai0" name="natTrangthai" value="0" <?php echo e($natlsp->natTrangthai == 0 ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="natTrangthai0">Khóa</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Lưu lại</button>
                        <a href="<?php echo e(route('nat_Admins.natloaisanpham')); ?>" class="btn btn-secondary">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.admins._master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project1\K23CNT3_NhuAnhTuan_Project1Lab\K23CNT3_NhuAnhTuan_2310900111_Project1\resources\views/nat_Admins/natloaisanpham/nat_edit.blade.php ENDPATH**/ ?>