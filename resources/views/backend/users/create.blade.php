@extends('backend.app')
@section('title', 'Tạo Tài Khoản')
@section('content')
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Thêm người dùng mới</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" action="" method="POST">
      {{ csrf_field() }}
      <!-- text input -->
      <p style="color: red;font-weight: bold;text-align: center">{{ $errors->first() }}</p>

      <div class="form-group">
        <label>Họ và tên</label>
        <input type="text" class="form-control" placeholder="Họ và tên của bạn" name="name" value="{{ old('name') }}">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
      </div>

      <div class="form-group">
        <label>Confirm password</label>
        <input type="password" class="form-control" name="password_confirmation">
      </div>

      <div class="form-group">
        <label>Level</label>
        <select  name="level" class="form-control">
          <option value="1" selected @if(old('level') == 1) { selected } @endif>Admin</option>
          <option value="2" @if(old('level') == 2) { selected } @endif>Member</option>
        </select>
      </div>

      <input type="submit" name="btnsubmit" class="btn -btn success" value="Thêm Mới">
      

    </form>
  </div>
  <!-- /.box-body -->
</div>
@endsection