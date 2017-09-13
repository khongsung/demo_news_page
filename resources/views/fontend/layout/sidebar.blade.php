<div class="advs">
	<a href="#" target="">
		<img src="{!! asset('ks01_admin/fontend/template/img/img1_advs.png') !!}" alt="" />
	</a>
</div>
<!-- the end img advertise -->

<div>
	<div class="wwidget_title_sb">
		<a href="#" target="">Đọc nhiều nhất</a>
	</div>
	<div>
		<ul class="list_cat">
		<?php
			$news = App\Models\News::all();
		?>
		@foreach ($news as $news_sidebar)
		
			<li class="clearfix">
				<a href="{!! route('detail', ['id' => $news_sidebar->id]) !!}" target="" class="thumb">
					<img src="img/img1_list_post1.png" alt="" />
				</a>
				<a href="{!! route('detail', ['id' => $news_sidebar->id]) !!}">{{ $news_sidebar->title }}</a>
			</li>
			
		@endforeach

		</ul>
	</div>
</div>
<!-- the end category -->
<div class="advs">
	<img src="img/img2_advs.png" alt="" />
</div>