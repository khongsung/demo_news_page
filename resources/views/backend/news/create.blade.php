@extends('backend.app')
@section('title', 'Thêm tin tức')
@section('content')
<!-- include libraries(jQuery, bootstrap) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm bài viết</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- text input -->
                <p style="color: red;font-weight: bold;text-align: center">{{ $errors->first() }}</p>

                <!-- <pre>
                {{ print_r($cate) }}
                </pre> -->

                <div class="form-group">
                	<label>Danh mục : </label>
	                <select name="category_id">
	                	<option value="">--chọn--</option>
                    @foreach ($cate as $val)
                      @if (old('category_id') == $val->id)
                        <option value="{{ $val->id }}" selected="selected">{{ $val->name }}</option>
                      @endif
                      <option value="{{ $val->id }}">{{ $val->name }}</option>
                    @endforeach
	                </select>
                </div>

                <div class="form-group">
                  <label>Tên Bài Viết</label>
                  <textarea class="form-control" name="title">{{ old('title') }}</textarea>
                </div>

                <div class="form-group">
                  <label>Miêu Tả</label>
                  <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                  <label>Nội Dung</label>
                  <textarea class="form-control" id="summernote" name="detail">{{ old('detail') }}</textarea>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Ảnh Bìa</label>
                  <input type="file" class="form-control" name="image" />
                </div>

                <div class="form-group">
                  <label>Trạng thái</label>
                  <select name="status" class="form-control">
                    @if (old('status') == 0)
                      <option value="0" selected="selected">Hiện</option>
                      <option value="1" >Ẩn</option>
                    @else 
                      <option value="0" >Hiện</option>
                      <option value="1" selected="selected">Ẩn</option>
                    @endif
                  </select>
                </div>

                <input type="submit" name="btnsubmit" class="btn btn-primary" value="Thêm Mới">
                

              </form>
            </div>
            <!-- /.box-body -->
          </div>


<script type="text/javascript">
	
	  $('#summernote').summernote({
		  height: 300,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  focus: true                  // set focus to editable area after initializing summernote
	  });
	
</script>
@endsection