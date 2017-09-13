@extends('fontend.app')

@section('title', '$categories->name')

@section('content')
	
	@foreach ($news as $news_cate)
		<div class="category_content clearfix">
			<a href="{!! route('detail', ['id' => $news_cate->id]) !!}" target="" class="thumb">
				<img src="img/img1_post_future1.png" alt="" />
			</a>
			<a href="{!! route('detail', ['id' => $news_cate->id]) !!}" target="">
				<h4>{{ $news_cate->title }}</h4>
			</a>
			<span>{{ $news_cate->created_at }}</span>
			<p>{{ $news_cate->description }}</p>
		</div>
	@endforeach

@endsection