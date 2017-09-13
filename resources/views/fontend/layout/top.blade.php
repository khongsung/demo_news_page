<div class="wp_inner clearfix">
	<a href="/" title="" class="logo fl_left">
		<img src="{!! asset('ks01_admin/fontend/template/img/logo.png') !!}" alt="" />
	</a>

	<form method="get" action="#" class="fl_right">
		<input type="search" name="search" placeholder="Search" />
		<input type="submit" name="" value=""/>
	</form>

	<ul class="list_menu fl_right">
		<li><a href="/" title="">Trang chủ</a></li>
	@foreach ($categories as $cate)
		<li><a href="{!! route('categories', ['id' => $cate->id]) !!}" title="">{{ $cate->name }}</a></li>
	@endforeach
	</ul>
</div>