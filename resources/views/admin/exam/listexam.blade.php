@extends('admin.share.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thi
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Thi</a></li>
            <li class="active">Danh sách thi</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header" style="text-align: height: 50px;line-height: 50px;white-space: nowrap;">
                        <h2 class="box-title">Danh sách  thi</h2>
                        <div class="pull-right">
                            <a href="{{ asset ('/exam/addexam ') }}" class="btn btn-app"> <i class="fa  fa-plus"></i> Thêm mới</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã đề thi</th>
                                    <th>Tên học sinh</th>
                                    <th>Công cụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($examlist as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->id_exam}}</td>
                                        <td>{{$item->student->fullname}}</td>
                                        <td> 4</td>
                                    </tr>
                                @endforeach
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
