@extends('admin.share.master')
@section('title','Câu hỏi')
@section('content')
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
                            <a class="btn btn-app "><i class="glyphicon glyphicon-export"></i>Export</a>
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
                                    <th>Công cụ</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>qq</td>
                                    <td>qq</td>
                                    <td>qq</td>
                                    <td>qq</td>
                                    <td>qq</td>
                                    <td>qq</td>
                                    <td>Internet Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>
                                        <i title="Sửa" class="fa fa-pencil-square-o" style="margin-right: 5px;margin-left: 5px;"></i>
                                        <i title=" Hiện " class="fa fa-eye"> </i>
                                        <i title=" Ẩn " class="fa fa-eye-slash"> </i>
                                        <i title=" Xóa " class="fa fa-trash-o " style="color: darkred; "></i>
                                    </td>
                                </tr>
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

@endsection()
