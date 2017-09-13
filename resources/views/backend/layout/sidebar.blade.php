
<div class="user-panel">
  <div class="pull-left image">
    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
  </div>
  <div class="pull-left info">
    <p>{!! Auth::user()->username !!}</p>
    <!-- Status -->
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
  </div>
</div>

<!-- search form (Optional) -->
<form action="#" method="get" class="sidebar-form">
  <div class="input-group">
    <input type="text" name="q" class="form-control" placeholder="Search...">
    <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
        </button>
      </span>
  </div>
</form>
<!-- /.search form -->

<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">HEADER</li>
  <!-- Optionally, you can add icons to the links -->
  <li class="active"><a href="{!! url('admin/users') !!}"><i class="fa fa-link"></i> <span>Quản lý người dùng</span></a></li>
  <li><a href="{!! url('admin/categories') !!}"><i class="fa fa-link"></i> <span>Quản lý danh mục</span></a></li>
  <li>
    <a href="{!! url('admin/news') !!}"><i class="fa fa-link"></i> <span>Quản lý bài viết</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
  </li>
</ul>
<!-- /.sidebar-menu -->
