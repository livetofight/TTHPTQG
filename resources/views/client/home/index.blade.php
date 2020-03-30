@extends('client.share.master')
@section('content')
{{-- {{$a}} --}}
<section class="content" style="margin:100px 0px 100px 0px;background-color:#a3caf3">
    <div style="width:85%; margin:auto">
        <div class="col-xs-2">
            <h3>Xem lại bài thi</h3>
            <ul>
                <li>
                    Lorem ipsum dolor sit.
                </li>
                <li>
                    Lorem ipsum dolor sit.
                </li>
                <li>
                    Lorem ipsum dolor sit.
                </li>
            </ul>
        </div>
        <div class="col-xs-6">
            <h3>Quy chế thi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ratione nesciunt nisi, deleniti id dolorem mollitia exercitationem rerum hic reiciendis voluptatem nobis quod reprehenderit quisquam illo ex ab rem nostrum!</p>
        </div>
        <div class="col-xs-4">
            <h3>Thông tin:</h3>
            <h4>Họ tên: Nguyễn Văn A</h4>
            <h4>Số báo danh: 39xxxxxxx</h4>
            <h4>Môn thi: Toán</h4>
            <h4>Thời gian thi: 2020/07/01 07:00</h4>
            <h4>Thời gian làm bài: 120 phút</h4>

            <button class="btn-success" id="btn_start">Vào thi</button>
        </div>
        <div countdown="" data-date="December 21 2020 10:10:10">
            Chỉ còn: <span data-days="">00</span> ngày
                     <span data-hours="">00</span> giờ
                     <span data-minutes="">00</span> phút
                     <span data-seconds="">00</span> giây
         </div>
    </div>
</section>

@endsection()
