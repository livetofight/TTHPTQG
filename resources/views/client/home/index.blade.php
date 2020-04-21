@extends('client.share.master')
@section('title','Home')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-6 col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="{{ asset ('client/upload/chamthan.png')}}" alt="User Image">
                <span class="username"><a href="#">QUY CHẾ THI </a></span>
                <span class="description">Công bố  - 7:30  20/02/2020</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="text-align: justify">
              <p>Bộ Giáo dục tổ chức thi 5 bài, gồm 3 bài thi độc lập là: Toán, Ngữ văn, Ngoại ngữ và 2 bài thi tổ hợp là Khoa học Tự nhiên (tổ hợp các môn Vật lý, Hóa học, Sinh học), Khoa học Xã hội (tổ hợp các môn Lịch sử, Địa lý, Giáo dục công dân đối với thí sinh học chương trình giáo dục THPT; tổ hợp các môn Lịch sử, Địa lý đối với thí sinh học chương trình giáo dục thường xuyên). 

                Để xét công nhận tốt nghiệp THPT, thí sinh THPT phải dự thi 4 bài thi, gồm 3 bài thi độc lập là Toán, Ngữ văn, Ngoại ngữ và một bài thi tự chọn trong số 2 bài thi tổ hợp. Thí sinh giáo dục thường xuyên dự thi 3 bài, gồm 2 bài thi độc lập là Toán, Ngữ văn và một bài thi do thí sinh tự chọn trong số 2 bài thi tổ hợp.
                
                Để tăng cơ hội xét tuyển sinh đại học, cao đẳng, thí sinh được chọn dự thi cả 2 bài thi tổ hợp. Điểm bài thi tổ hợp nào cao hơn sẽ được chọn để tính điểm xét công nhận tốt nghiệp THPT. Theo quy chế, kỳ thi THPT quốc gia được tổ chức hàng năm. Ngày thi, lịch thi, hình thức thi và thời gian làm bài thi được quy định trong hướng dẫn tổ chức thi THPT quốc gia hàng năm của Bộ Giáo dục và Đào tạo.

                Như vậy thông tư không chỉ rõ ngày thi cũng như hình thức thi là gì. 
                
                </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xs-6 col-md-6">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <div class="user-block">
                                <img class="img-circle" src="{{ asset ('client/upload/book.png')}}"  alt="User Image">
                            <span class="username"><a href="#">{{$name_subject->first()->name}}</a></span>
                            <span class="description">Giờ Thi: {{ $date->first()->test_date->format('H:i')}}</span>
                            </div>
                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Số câu hỏi</td>
                                            <td>:</td>
                                            <td>{{$subject->number}} câu</td>
                                        </tr>
                                        <tr>
                                            <td>Thời gian</td>
                                            <td>:</td>
                                            <td>{{$subject->time}} phút</td>
                                        </tr>

                                        <tr>
                                            <td>Hình thức thi</td>
                                            <td>:</td>
                                            <td>Trắc nghiệm</td>
                                        </tr>
                                        <tr>
                                            <td>Thang điểm</td>
                                            <td>:</td>
                                            <td>10 điểm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-6">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <div class="user-block">
                                <img class="img-circle" src="{{ asset ('client/upload/student-icon.png')}}"  alt="User Image">
                            <span class="username"><a href="#">{{$student->fullname}}</a></span>
                                <span class="description" >Ngày thi :{{ $date->first()->test_date->format('d/m/Y') }}</span>
                            </div>
                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>CMND</td>
                                            <td>:</td>
                                            <td>{{$student->cmnd}}</td>
                                        </tr>
                                        <tr>
                                            <td>Ngày Sinh</td>
                                            <td>:</td>
                                            <td>{{$student->date_of_birth->format('d/m/Y')}}</td>
                                        </tr>
                                        <tr>
                                            <td>Giới tính</td>
                                            <td>:</td>
                                            <td>{{$student->gender}}</td>
                                        </tr>
                                        <tr>
                                            <td>Môn thi</td>
                                            <td>:</td>
                                            <td>{{$student->subject_list}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- /.box-header -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <div class="box-body">
                        <div class="box-body no-padding">
                            <div class="row" style="text-align: center">
                                <div class="col-xs-6 col-md-6">
                                    <button type="button" class="btn bg-purple margin" onclick="location.href='{{ url('result') }}'">Xem Lại Bài Thi</button>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <button type="button" class="btn bg-navy margin" onclick="location.href='{{ url('task') }}'">Vào Thi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        <!-- /.col -->
    </div>
</section>
@endsection()
