<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Câu Hỏi
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Câu Hỏi</a></li>
            <li class="active">Danh sách câu hỏi</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header" style="text-align: height: 50px;line-height: 50px;white-space: nowrap;">
                        <h3 class="box-title">Danh sách câu hỏi</h3>
                        <div class="pull-right">
                            <a class="btn btn-app ">
                                <input type="file" id="exampleInputFile">
                            </a>
                            <a class="btn btn-app "><i class="glyphicon glyphicon-import"></i>Import</a>
                            <a href="<?php echo e(route("exportQuestion")); ?>" class="btn btn-app "><i class="glyphicon glyphicon-export"></i>Export</a>
                        </div>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Câu hỏi</th>
                                    <th>Đáp án 1</th>
                                    <th>Đáp án 2</th>
                                    <th>Đáp án 3</th>
                                    <th>Đáp án 4</th>
                                    <th>Đáp án đúng</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $question; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->question_content); ?></td>
                                    <td><?php echo e($item->ans_1); ?></td>
                                    <td><?php echo e($item->ans_2); ?></td>
                                    <td><?php echo e($item->ans_3); ?></td>
                                    <td><?php echo e($item->ans_4); ?></td>
                                    <td><?php echo e($item->ans_correct); ?></td>
                                    <td><?php echo e($item->created_at); ?></td>
                                    <td><?php echo e($item->updated_at); ?></td>

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

<?php echo $__env->make('admin.share.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTHPTQG\resources\views/admin/question/question.blade.php ENDPATH**/ ?>