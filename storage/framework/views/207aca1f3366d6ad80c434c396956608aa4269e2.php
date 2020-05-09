<?php $__env->startSection('title','Danh sách học sinh'); ?>
<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Học Sinh
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a ><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a>Học Sinh</a></li>
        <li class="active">Danh sách học sinh</li>
    </ol>
</section>

<section class="content">
    <div id="error_message">

    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header" style="text-align: height: 50px;line-height: 50px;white-space: nowrap;">
                    <h3 class="box-title">Danh sách học sinh</h3>
                    <div class="pull-right">
                        <div class="col-xs-9">
                            <form  method="post" enctype="multipart/form-data" id="file_form"> <?php echo e(csrf_field()); ?>

                                <div class="row">
                                    <div class="col-xs-8">
                                        <input type="file" id="inputFile" class="btn btn-app " />
                                    </div>
                                    <div class="col-xs-4">
                                        <a id ="btn_import" class="btn btn-app btn_import"><i class="glyphicon glyphicon-import"></i>Import</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-3">
                            <div class="btn-group">
                                <div class="form-group">
                                    <div class="input-group">
                                        <a class="btn btn-app" data-toggle="dropdown" aria-expanded="true">
                                            <i class="glyphicon glyphicon-export"></i>
                                            <span class="badge bg-blue">3</span>Export
                                        </a>
                                        <ul class="daterangepicker opensright dropdown-menu " >
                                            <li><a href="<?php echo e(url('admin/student/export')); ?>">DSHS</a></li>
                                            <li><a href="<?php echo e(url('export_excel')); ?>">Theo trường</a></li>
                                            <li><a href="<?php echo e(url('export_excel')); ?>">Theo môn </a></li>
                                        </ul>
                                    </div>
                                  </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Ngày sinh</th>
                                <th>CMND</th>
                                <th>Giới tính</th>
                                <th>Dân tộc</th>
                                
                                <th>Địa chỉ</th>
                                
                                <th>Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->fullname); ?></td>
                                    <td><?php echo e($item->date_of_birth->format('d/m/Y')); ?></td>
                                    <td><?php echo e($item->cmnd); ?></td>
                                    <td><?php echo e($item->gender); ?></td>
                                    <td><?php echo e($item->nation); ?></td>
                                    
                                    <td><?php echo e($item->address); ?></td>
                                    
                                    <td>
                                    <a href="<?php echo e(url('admin/student/' .$item->id )); ?>"><i title="Sửa" class="fa fa-pencil-square-o" style="margin-right: 5px;margin-left: 5px; color: darkred;"></i></a>
                                        <?php if($item['isActive']==1): ?> 
                                        <i title="Đã Thi" class="btn-isActive fa fa-eye "data-id=<?php echo e($item->id); ?> > </i>
                                        <?php else: ?> <i title="Chưa Thi" class="btn-isActive fa fa-eye-slash" data-id=<?php echo e($item->id); ?> > </i>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
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

<?php echo $__env->make('admin.share.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTHPTQG\resources\views/admin/student/student.blade.php ENDPATH**/ ?>