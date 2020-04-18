<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>

                    <p>Môn Học</p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="<?php echo e(url ('/subject')); ?>" class="small-box-footer">Chi Tiết  <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Học Sinh</p>
                </div>
                <div class="icon">
                    <i class="fa fa-group"></i>
                </div>
                <a href="<?php echo e(url ('/student')); ?>" class="small-box-footer">Chi Tiết <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>44</h3>

                    <p>Câu Hỏi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-question-circle"></i>
                </div>
                <a href="<?php echo e(asset ('/question')); ?>" class="small-box-footer">Chi Tiết <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>

                    <p>Đề Thi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file"></i>
                </div>
                <a href="<?php echo e(asset ('listexam')); ?>" class="small-box-footer">Chi Tiết<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.share.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTHPTQG\resources\views/admin/home/dashboard.blade.php ENDPATH**/ ?>