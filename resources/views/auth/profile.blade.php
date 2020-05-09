@extends('admin.share.master')
@section('title','Thông tin cá nhân')
@section('content')
<section class="content">
    <form>
        <label>Bạn có thể chỉnh sửa thông tin cá nhân tại đây</label>
        <hr>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Username</label>
            <input type="text" class="form-control" id="inputUsername" value="{{Auth::user()->username}}">
          </div>
        </div>
        <div class="form-group col-md-12">
          <label>Full name</label>
          <input type="text" class="form-control" id="inputFullname" value="{{Auth::user()->fullname}}">
        </div>
        <div class="form-group col-md-12">
          <label>Email</label>
          <input type="email" class="form-control" id="inputEmail" value="{{Auth::user()->email}}">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6" >
                <button type="submit" class="btn btn-primary" id="btnUpdate" style="float: right;">Cập nhật</button>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </div>
        </div>
      </form>
</section>
@endsection()
