<?php $__env->startSection('title','Chưa đến ngày thi'); ?>
<?php $__env->startSection('content'); ?>

<div class="box " style=" text-align: center; margin-top: 10%">
    <!-- /.box-header -->
    <div class="box-body">
      <div class="callout callout-danger">
        <h4>Chưa đến ngày thi !</h4>
        <p>Vui lòng quay trở lại trong thời gian thi.</p>
      </div>
    </div>
    <!-- /.box-body -->
</div>
<div class="box box-solid" style="text-align: center">
    <div class="box-header with-border">
        <div class="box-body">
            <div class="box-body no-padding">
                <button type="button" class="btn bg-olive margin" onclick="location.href='<?php echo e(url('home')); ?>'">Quay Lại</button>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.share.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTHPTQG\resources\views/client/erorr.blade.php ENDPATH**/ ?>