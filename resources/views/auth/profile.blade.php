@extends('admin.share.master')
@section('title','Thông tin cá nhân')
@section('content')
<section class="content">
    <form>
        <label>Bạn có thể chỉnh sửa thông tin cá nhân tại đây</label>
        <hr>
        <div id="error_message" class="form-group col-md-7">

        </div>
        <div>
            <input type="hidden" id="inputID" value="{{Auth::user()->id}}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-7">
                <label>Username</label>
                <input type="text" class="form-control" id="inputUsername" value="{{Auth::user()->username}}">
            </div>
        </div>
        <div>
            <div class="form-group col-md-7">
                <label>Full name</label>
                <input type="text" class="form-control" id="inputFullname" value="{{Auth::user()->fullname}}">
            </div>
        </div>
        <div>
            <div class="form-group col-md-7">
                <label>Email</label>
                <input type="email" class="form-control" id="inputEmail" value="{{Auth::user()->email}}">
            </div>
        </div>
        <div class="form-row col-md-7">
            <div class="form-group col-md-3" >
                <button type="submit" class="btn btn-primary" id="btnUpdate" style="float: right;">Cập nhật</button>
            </div>
            <div class="form-group col-md-3">
                <a href="/home" class="btn btn-primary">Hủy</button>
            </div>
        </div>
      </form>
</section>
@endsection()
