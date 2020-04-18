<?php $__env->startSection('title','Chi tiết học sinh'); ?>
<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Học Sinh
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a ><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo e(url('admin/student')); ?>" >Học Sinh</a></li>
        <li class="active">Chi tiết học sinh</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header" style="text-align: height: 50px;line-height: 50px;white-space: nowrap;">
                    <h3 class="box-title">Chi tiết học sinh</h3>
                    <div class="pull-right">
                        <a class="btn btn-app">
                            <i class="fa fa-save"></i> Save
                        </a>
                        <a class="btn btn-app dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <i class="glyphicon glyphicon-export"></i>
                        </a>
                    </div>
                </div>

                <div class="box-body">
                    
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
<?php echo $__env->make('admin.share.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTHPTQG\resources\views/admin/student/student-detail.blade.php ENDPATH**/ ?>