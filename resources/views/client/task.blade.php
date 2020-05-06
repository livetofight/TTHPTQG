<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>SV | Làm Bài</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset ('admin/upload/favicon.ico') }}" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ asset ('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset ('admin/bower_components/font-awesome/css/font-awesome.min.css ') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset ('admin/bower_components/Ionicons/css/ionicons.min.css ') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset ('admin/dist/css/AdminLTE.min.css ') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset ('admin/dist/css/skins/_all-skins.min.css ') }}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset ('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset ('admin/bower_components/jvectormap/jquery-jvectormap.css ') }}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{ asset ('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css ') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset ('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css ') }}">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{ asset ('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css ') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset ('admin/plugins/iCheck/square/blue.css')}}">
          <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="{{ asset ('admin/plugins/iCheck/all.css')}}">
          <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset ('admin/dist/css/AdminLTE.min.css')}}">

        <link rel="stylesheet" href="{{ asset ('client/css/client.css')}}">


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper" style="background: #ecf0f5">   
            <section class="content">
                <div class="row">
                    <div class="col-xs-8 col-md-8">
                        <input type='hidden' id='current_page' />
                        <input type='hidden' id='show_item_page' />
                        <input type='hidden' id='number_of_pages' />
                        <div id="list_question">
                        </div>
                        <div class="box-footer clearfix">
                            <div id="page_navigation" style="text-align: center;">

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <div class="box box-default color-palette-box">
                            <div id="timestudent">
                                
                            </div>
                            <div id="student">

                            </div>
                        </div>

                        <div id="list_number">

                        </div>

                        <div class="box box-solid">
                            <button type="button" id="btnsubmit" class="btn btn-block btn-primary">Nộp bài</button>
                        </div>
                        <div class="row notification">
                            <div class="col-md-10">
                                <div class="box box-danger direct-chat direct-chat-danger">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Thông báo</h3>
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="direct-chat-messages">
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-msg right">
                                                    <img class="direct-chat-img" src="../client/upload/logo.png" alt="Message User Image"><!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        Hãy kiểm tra lại bài, bạn còn 1 phút để nộp bài !
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
<!-- jQuery 3 -->
<script src="{{ asset ('admin/bower_components/jquery/dist/jquery.min.js ') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('admin/dist/js/adminlte.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset ('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset ('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset ('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE for demo purposes --> 
<script src="{{ asset ('client/js/task.js') }}"></script>
