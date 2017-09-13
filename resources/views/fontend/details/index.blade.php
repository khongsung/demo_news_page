<style type="text/css">
	h1 {
		font-size: 24px;
		margin-bottom: 30px;
	}
	span {
		display: block;
		font-size: 12px;
		color: #444;
		margin-bottom: 20px;
	}

	p.description {
		color: #777;
		margin-bottom: 20px;
	}

	p.detail {
		text-align: justify;
	}

	p.author {
		text-align: right;
		margin: 40px 100px 0px 0px;
	}

</style>

@extends('fontend.app')

@section('title', 'Danh Mục')

@section('content')
	@foreach ($news as $news)
		<h1>{{ $news->title }}</h1>
		<span>Ngày đăng: {{ $news->created_at }}</span>
		<p class="description">{{ $news->description }}</p>

		<p class="detail">{!! $news->content !!}</p>

		<p class="author">--- <i>Nguồn: {{ $news->user->username }}</i> ---</p>
	@endforeach
@endsection