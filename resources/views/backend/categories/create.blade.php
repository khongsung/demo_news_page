@extends('backend.app')
@section('title', 'Tạo danh mục')
@section('content')
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Thêm Danh Mục</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" action="" method="POST">
      {{ csrf_field() }}
      <!-- text input -->
      <p style="color: red;font-weight: bold;text-align: center"></p>

      <div class="form-group">
        <label>Tên Danh mục</label>
        <input type="text" class="form-control" placeholder="Tên Danh mục" name="name">
      </div>

      <input type="submit" name="btnsubmit" class="btn -btn success" value="Thêm Mới">

    </form>
  </div>
  <!-- /.box-body -->
</div>
@endsection