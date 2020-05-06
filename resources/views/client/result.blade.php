<div id="contentbody">
@extends('client.share.master')
@section('title','Xem lại bài làm')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-8 col-md-8">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-question"></i>
                        <h3 class="box-title">
                            <strong>Câu 1:</strong> 
                        </h3>
                        <span style="font-size: 16px">Content_2</span>
                    </div>
                    <div class="box-body">
                        <dl class="dl-horizontal" id="ques_0">
                            <dt>
                                <input type="radio" name="question_0" class="minimal" onclick="change_css(0)">A.
                            </dt>
                            <dd>A.</dd>
                            <dt>
                                <input type="radio" name="question_0" class="minimal" onclick="change_css(0)">B.
                            </dt>
                            <dd>B.</dd>
                            <dt>
                                <input type="radio" name="question_0" class="minimal" onclick="change_css(0)">C.
                            </dt>
                            <dd>C.</dd>
                            <dt>
                                <input type="radio" name="question_0" class="minimal" onclick="change_css(0)">D.
                            </dt>
                            <dd>D.</dd>
                        </dl>
                    </div>
                </div>
        </div>
        <div class="col-xs-4 col-md-4">
            <div class="box box-default color-palette-box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <i class="fa fa-clock-o"></i> THỜI GIAN HOÀN THÀNH
                    </h3> 
                    <p class="text-red" id="time">01:52:12</p>
                </div>
                <div class="box-body">
                    <div class="box box-solid">
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                              <tbody><tr>
                                <th>Tên: </th>
                                <th>Huy Trần</th>
                              </tr>
                              <tr>
                                <td>SBD: </td>
                                <td>3951050015</td>
                              </tr>
                              <tr>
                                <td>CMND: </td>
                                <td>231164100</td>
                              </tr>
                              <tr>
                                <td>Số câu đúng: </td>
                                <td>5/10</td>
                              </tr>
                              <tr>
                                <td>Điểm: </td>
                                <td>6.75</td>
                              </tr>
                            </tbody></table>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>
@endsection()
</div>