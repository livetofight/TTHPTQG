@extends('client.share.master')
@section('content')
{{-- {{$a}} --}}
<section class="content">
    <div class="row">
        <div class="col-xs-3"></div>
        <div class="col-xs-3" style="text-align:center"><p>Môn thi</p></div>
        <div class="col-xs-3" style="text-align:center">Thời gian làm bài</div>
        <div class="col-xs-3"></div>
    </div>
    <div class="row" style="padding-left:30%; padding-top:2%">Lưu ý: </div>
    <div class="row" style="padding-top:2%">
        <div class="col-xs-3"></div>
        <div class="col-xs-3" style="width:150px; text-align:center;"><button class="btn btn-block btn-success">Bắt đầu làm bài</button></div>
        <div class="col-xs-3" style="text-align:center"><button>Xem lại bài làm</button></div>
        <div class="col-xs-3"></div>
    </div>
</section>
@endsection()
