<?php $__env->startSection('title','Chưa đến ngày thi'); ?>
<?php $__env->startSection('content'); ?>

<div class="box " style=" text-align: center; margin-top: 10%">
    <!-- /.box-header -->
    <div class="box-body">
      <div class="callout callout-danger">
        <h4><?php echo e($title); ?></h4>
        <p><?php echo e($text); ?></p>
      </div>
    </div>
    <!-- /.box-body -->
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.share.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTHPTQG\resources\views/client/error.blade.php ENDPATH**/ ?>