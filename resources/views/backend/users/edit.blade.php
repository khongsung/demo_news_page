@extends('backend.app')
@section('title', 'Sửa Tài Khoản')
@section('content')
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Chỉnh sửa người dùng</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" action="" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <!-- text input -->
      <p style="color: red;font-weight: bold;text-align: center">{{ $errors->first() }}</p>
      @foreach($users as $val)
        <div class="form-group">
          <label>Họ và tên</label>
          <input type="text" class="form-control" placeholder="Họ và tên của bạn" name="name" value="{{ $val->username }}" />
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" value="" />
        </div>

        <div class="form-group">
          <label>Confirm password</label>
          <input type="password" class="form-control" name="password_confirmation">
        </div>
        @if(Auth::user()->id != $val->id)
        <div class="form-group">
          <label>Level</label>
          <select  name="level" class="form-control">
            <option value="1" @if($val->level == 1) { selected } @endif>Admin</option>
            <option value="2" @if($val->level == 2) { selected } @endif>Member</option>
          </select>
        </div>
        @endif
      @endforeach
      <input type="submit" name="btnsubmit" class="btn -btn success" value="Thêm Mới">
      

    </form>
  </div>
  <!-- /.box-body -->
</div>
@endsection