@extends('backend.app')
@section('title', 'Danh sách tin tức')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách bài viết</h3>
          <a href="{!! url('admin/news/create') !!}" class="btn btn-primary pull-right">Thêm Mới</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody><tr>
              <th style="width: 10px">#</th>
              <th>Ảnh</th>
              <th>Tiêu Đề</th>
              <th>Miêu Tả</th>
              <th>Danh Mục</th>
              <th>Tác giả</th>
              <th>Trạng thái</th>
              <th style="width: 150px;">Hành động</th>
            </tr>
              @foreach ($news as $val)
              
                <tr>
                  <td>{{ $val->id }}</td>
                  <td>
                    <img src="{{ $val->image }}" width="170px" height="100px" />
                  </td>
                  <td>{{ $val->title }}</td>
                  <td>{{ $val->description }}</td>
                  <td>{{ $val->category->name }}</td>
                  <td>{{ $val->user->username }}</td>
                  @if($val->status == 0)
                    <td>Hiện</td>
                  @else
                    <td>Ẩn</td>
                  @endif
                  <td>
                    <a href="{!! route('getNewEdit', ['id' => $val->id]) !!}" class="btn btn-primary">Sửa</a>
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="delete/{{ $val->id }}" class="btn btn-danger">Xóa</a>
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