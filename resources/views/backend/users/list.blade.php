@extends('backend.app')
@section('title', 'Danh Sách Người dùng')
@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách thành viên</h3>
          <a href="{!! url('admin/users/create') !!}" class="btn btn-primary pull-right">Thêm Mới</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody><tr>
              <th style="width: 10px">#</th>
              <th>Họ và tên</th>
              <th>Level</th>
              <th style="width: 150px;">Hành động</th>
            </tr>

            @foreach ($data as $val)
              <tr>
                <td>{{ $val->id }}</td>
                <td>{{ $val->username }}</td>
                <td>{{ $val->level }}</td>
                <td>
                  <a href="{!! route('getUserEdit', ['id' => $val['id']]) !!}" class="btn btn-primary">Sửa</a>
                  <a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="{!! route('getUserDel', ['id' => $val['id']]) !!}" class="btn btn-danger">Xóa</a>
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
