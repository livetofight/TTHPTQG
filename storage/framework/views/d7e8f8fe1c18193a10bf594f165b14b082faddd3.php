<!DOCTYPE html>
    <html>
    <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
  <title>Admin | <?php echo $__env->yieldContent('title'); ?></title>
  <link rel="shortcut icon" type="image/png" href="<?php echo e(asset ('admin/upload/favicon.ico')); ?>" />
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
  <link rel="stylesheet" href="<?php echo e(asset ('admin/dist/css/admin.css ')); ?>">
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

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   <?php echo $__env->make('admin.share.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php echo $__env->make('admin.share.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php echo $__env->make('admin.share.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
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

<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset ('admin/dist/js/demo.js ')); ?>"></script>
<!-- DataTables -->
<script src="<?php echo e(asset ('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset ('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset ('admin/dist/js/demo.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset ('admin/plugins/iCheck/icheck.min.js')); ?>"></script>
<!-- page script -->
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="<?php echo e(asset ('admin/dist/js/student.js ')); ?>"></script>
<script>
    $(function() {
      $('#example2').DataTable()
      $('#example1').DataTable({
        "language":{
          "lengthMenu":     "Hiển thị _MENU_ kết quả",
          "emptyTable":     "Vui lòng thêm dữ liệu !",
          "info":           "Hiển thị _START_ từ _END_ của _TOTAL_ kết quả",
          "infoEmpty":      "Hiển thị 0 đến 0 của 0 kết quả",
          "search":         "Tìm kiếm:",
          "paginate": {
              "first":      "Đầu",
              "last":       "Cuối",
              "next":       "Tiến",
              "previous":   "Lùi"
          },
        }
      })
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    })
</script>

<?php if(!empty($custom_js)): ?> <script src="<?php echo e(asset ($custom_js)); ?>"></script>
<?php endif; ?>
</body>
</html>
<?php /**PATH D:\TTHPTQG\resources\views/admin/share/master.blade.php ENDPATH**/ ?>