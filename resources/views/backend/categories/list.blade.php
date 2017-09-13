@extends('backend.app')
@section('title', 'Tạo danh mục')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách danh mục</h3>
          <a href="{!! url('admin/categories/create') !!}" class="btn btn-primary pull-right">Thêm mới</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody><tr>
              <th style="width: 10px">#</th>
              <th>Tên Danh Mục</th>
              <th style="width: 150px;">Hành động</th>
            </tr>

            @foreach($data as $val)
              <tr>
                <td>{{ $val->id }}</td>
                <td>{{ $val->name }}</td>
                <td>
                  <a href="{!! route('getCatEdit', ['id' => $val->id]) !!}" class="btn btn-primary">Sửa</a>
                  <a onclick="return confirm('Bạn chắc chắn muốn xóa không?')" href="{!! route('getCatDel', ['id' => $val->id]) !!}" class="btn btn-danger">Xóa</a>
                </td>
              </tr>
            @endforeach            

          </tbody>
          </table>
        </div>
      
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">»</a></li>
          </ul>
        </div>
      </div>
      <!-- /.box -->

      <!-- /.box -->
    </div>
    <!-- /.col -->
    <!-- /.col -->
  </div>
  @endsection