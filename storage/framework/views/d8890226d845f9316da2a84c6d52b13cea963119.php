<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/bower_components/font-awesome/css/font-awesome.min.css ')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/bower_components/Ionicons/css/ionicons.min.css ')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/dist/css/AdminLTE.min.css ')); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
      folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/dist/css/skins/_all-skins.min.css ')); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/bower_components/jvectormap/jquery-jvectormap.css ')); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css ')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css ')); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css ')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/plugins/iCheck/square/blue.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset ('client/css/site.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset ('client/css/client.css')); ?>">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <?php echo $__env->make('client.share.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: auto">
    <div class="container">
      <!-- Content Header (Page header) -->
      <?php echo $__env->yieldContent('content'); ?>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $__env->make('client.share.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->

      <!-- jQuery 3 -->
      <script src="<?php echo e(asset ('admin/bower_components/jquery/dist/jquery.min.js ')); ?>"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="<?php echo e(asset ('admin/bower_components/jquery-ui/jquery-ui.min.js ')); ?>"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button);
      </script>
      <!-- Bootstrap 3.3.7 -->
      <script src="<?php echo e(asset ('admin/bower_components/bootstrap/dist/js/bootstrap.min.js ')); ?>"></script>
      <!-- Morris.js charts -->
      <script src="<?php echo e(asset ('admin/bower_components/raphael/raphael.min.js ')); ?>"></script>
      <script src="<?php echo e(asset ('admin/bower_components/morris.js/morris.min.js ')); ?>"></script>
      <!-- Sparkline -->
      <script src="<?php echo e(asset ('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js ')); ?>"></script>
      <!-- jvectormap -->
      <script src="<?php echo e(asset ('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js ')); ?>"></script>
      <script src="<?php echo e(asset ('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js ')); ?>"></script>
      <!-- jQuery Knob Chart -->
      <script src="<?php echo e(asset ('admin/bower_components/jquery-knob/dist/jquery.knob.min.js ')); ?>"></script>
      <!-- daterangepicker -->
      <script src="<?php echo e(asset ('admin/bower_components/moment/min/moment.min.js ')); ?>"></script>
      <script src="<?php echo e(asset ('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js ')); ?>"></script>
      <!-- datepicker -->
      <script src="<?php echo e(asset ('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js ')); ?>"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="<?php echo e(asset ('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js ')); ?>"></script>
      <!-- Slimscroll -->
      <script src="<?php echo e(asset ('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js ')); ?>"></script>
      <!-- FastClick -->
      <script src="<?php echo e(asset ('admin/bower_components/fastclick/lib/fastclick.js ')); ?>"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo e(asset ('admin/dist/js/adminlte.min.js ')); ?>"></script>

      <script src="<?php echo e(asset ('admin/dist/js/demo.js ')); ?>"></script>
      <script src="<?php echo e(asset ('client/js/countdown.js')); ?>"></script>  
      <script src="<?php echo e(asset ('client/js/site.js')); ?>"></script> 
  </body>
</html>

<?php /**PATH D:\TTHPTQG\resources\views/client/share/master.blade.php ENDPATH**/ ?>