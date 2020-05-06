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
            <li class="active">Danh sách đề thi</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header" style="text-align: aligin; height: 50px;line-height: 50px;white-space: nowrap;">
                        <h2 class="box-title">Danh sách đề thi</h2>
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
                                    <th>Tên môn học</th>
                                    <th>Số lượng câu hỏi</th>
                                    <th>Thời gian thi</th>
                                    <th>Thời gian tạo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exam as $item)
                                   <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->subject->name}}</td>
                                        <td>{{$item->number}}</td>
                                        <td>{{$item->time}}</td>
                                        <td>{{$item->created_at}}</td>
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
