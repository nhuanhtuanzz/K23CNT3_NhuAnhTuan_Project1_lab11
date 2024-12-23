<?php $__env->startSection('title','Thêm mới sản phẩm'); ?>

<?php $__env->startSection('content-body'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="<?php echo e(route('nat_Admins.natloaisanpham.nat_createsubmit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
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
                            <a href="<?php echo e(route('nat_Admins.natloaisanpham')); ?>" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.admins._master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project1\K23CNT3_NhuAnhTuan_Project1Lab\K23CNT3_NhuAnhTuan_2310900111_Project1\resources\views/nat_Admins/natloaisanpham/nat_create.blade.php ENDPATH**/ ?>