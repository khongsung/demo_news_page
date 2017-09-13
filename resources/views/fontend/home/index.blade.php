@extends('fontend.app')

@section('title', 'Trang chủ')

@section('content')
	
	@foreach ($news as $news)
		<div class="category_content clearfix">
			<a href="{!! route('detail', ['id' => $news->id]) !!}" target="" class="thumb">
				<img src="img/img1_post_future1.png" alt="" />
			</a>
			<a href="{!! route('detail', ['id' => $news->id]) !!}" target="">
				<h4>{{ $news->title }}</h4>
			</a>
			<span>{{ $news->created_at }}</span>
			<p>{{ $news->description }}</p>
		</div>
	@endforeach

@endsection