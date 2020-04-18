<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/bower_components/Ionicons/css/ionicons.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/dist/css/AdminLTE.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset ('admin/plugins/iCheck/square/blue.css')); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<?php //Hiển thị thông báo thành công?>
<?php if( Session::has('success') ): ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong><?php echo e(Session::get('success')); ?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
<?php endif; ?>
<?php //Hiển thị thông báo lỗi?>
<?php if( Session::has('error') ): ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong><?php echo e(Session::get('error')); ?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
<?php endif; ?>
<?php if($errors->any()): ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
<?php endif; ?>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-box-body">
        <div class="login-box-msg">
            <div class="row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    <img src="<?php echo e(url('/admin/dist/img/avatar.png')); ?>" alt="User" style="height:80px">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">

                </div>
                <!-- /.col -->
            </div>
        </div>
        <div id="error_message">

        </div>
    <form role="form" method="POST" >
            <div class="form-group has-feedback">
                
                <input class="form-control" placeholder="Username" name="username" id="username" type="text" value="<?php echo e(old('username')); ?>" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                
                <input class="form-control" placeholder="Mật khẩu" name="password" id="password" type="password" value="">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <button class="btn btn-lg btn-primary btn-block" id="btn_login" >Đăng nhập</button>
            <?php echo csrf_field(); ?>

        </form>
    </div>
</div>

<script src="<?php echo e(asset ('admin/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset ('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset ('admin/plugins/iCheck/icheck.min.js')); ?>"></script>
<script src="<?php echo e(asset ('client/js/login.js')); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
<?php /**PATH D:\TTHPTQG\resources\views/client/home/login.blade.php ENDPATH**/ ?>