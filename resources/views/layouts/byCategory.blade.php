@extends('layouts/app')

@section('content')

<div class="container mt-3">
<div class="row">
	@foreach($articles as $article)
	@php
	$img=$article->images->first();
	$image_name=$img['image'];
	@endphp
	<div class="col-lg-4 text-left">
		<div class="card h-100">

        <ol>
    <a href="#"><img class="card-img-top" height="150px" src="" alt="image" ></a>
    <div class="card-body">
        <h5 class="card-title">
            <a href="/projects/{{ $article->article_id }}">{{$article->name}}</a></li>
        </h5>
		<h6>{{ $article->rent_price }}</h6>
	</div>
</div>
</div>
		@endforeach
				  </div>
	@include('layouts.showCategory')
@endsection
