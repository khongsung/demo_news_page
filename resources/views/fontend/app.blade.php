<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="{!! asset('ks01_admin/fontend/template/css/reset.css') !!}" />
	<link rel="stylesheet" type="text/css" href="{!! asset('ks01_admin/fontend/template/css/global.css') !!}" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="{!! asset('ks01_admin/fontend/template/css/font-awesome/css/font-awesome.min.css') !!}" />
	<link rel="stylesheet" type="text/css" href="{!! asset('ks01_admin/fontend/template/css/category_sukien.css') !!}" />
</head>
<body>
	<div id="wapper">
		<div id="header">
			@include('fontend.layout.top')
		</div>
		<!-- the end header -->

		<div class="derected">
			<div class="wp_inner clearfix">
				<ul class="list_cat_derected">
					<li><a href="#" title="">Trang Chủ</a></li>
					<li><a href="#" title="">Sự kiện</a></li>
				</ul>
			</div>
		</div>
		<!-- the end derected -->

		<div id="main" class="wp_inner">
			<div class="content fl_left">
				
				@yield('content')
				
				<!-- pages divide -->
				<div class="page_number clearfix">
					<p>Trang: </p>
					<ul class="list_page_nb">
						<li><a href="#" target="">1</a></li>
						<li><a href="#" target="">2</a></li>
						<li><a href="#" target="">3</a></li>
						<li><a href="#" target="">...</a></li>
						<li><a href="#" target="">></a></li>
					</ul>
				</div>

			</div>
			<!-- the end content_main -->

			<div class="sidebar fl_right">
				@include('fontend.layout.sidebar')
			</div>
			<!-- the end sidebar -->
		</div>
		<!-- the end main -->

		<div id="wp_footer" class="clearfix">
			@include('fontend.layout.footer')
		</div>
		<!-- the end footer -->

		<div id="copyright">
			<p class="text_center">&copy All right reserved. Bản quyền thuộc về VIETSOZ.com</p>
		</div>
	</div>
</body>
</html>