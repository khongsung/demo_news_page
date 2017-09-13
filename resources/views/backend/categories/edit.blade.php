@extends('backend.app')
@section('title', 'Sửa danh mục')
@section('content')
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Sửa Danh Mục</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" action="" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <!-- text input -->
      <p style="color: red;font-weight: bold;text-align: center">{{ $errors->first('name') }}</p>
      @foreach($data as $val)
        <div class="form-group">
          <label>Tên Danh mục</label>
          <input type="text" class="form-control" placeholder="Tên Danh mục" name="name" value="{{ $val->name }}" />
        </div>
      @endforeach
      <input type="submit" name="btnsubmit" class="btn -btn success" value="Lưu lại" />

    </form>
  </div>
  <!-- /.box-body -->
</div>
@endsection