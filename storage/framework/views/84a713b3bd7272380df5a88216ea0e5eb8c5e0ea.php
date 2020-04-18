<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Môn Học
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Môn Học</a></li>
            <li class="active">Danh sách môn học</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    

                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            Upload Validation Error<br><br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong><?php echo e($message); ?></strong>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(url('admin/subject')); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-header" style="text-align: height: 50px;line-height: 50px;white-space: nowrap;">
                            <h3 class="box-title">Danh sách môn học</h3>
                            <div class="pull-right">
                                <a class="btn btn-app ">
                                    <input type="file" name="select_file" id="exampleInputFile">
                                </a>
                                <input type="submit" class="btn btn-app " value="Import"/><i class="glyphicon glyphicon-import"></i>
                                
                            </div>
                        </div>
                    </form>
                    <button class="btn btn-app" id="add">Add</button>

                    <div class="box-body">
                        <table id="subject_table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Công cụ</th>

                                </tr>
                            </thead>
                            
                        </table>

                        


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.share.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTHPTQG\resources\views/admin/subject/subject.blade.php ENDPATH**/ ?>