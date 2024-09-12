@extends('app')
@section('title', 'Статьи')
@section('description', 'Статьи')
@section('keywords', 'Статьи')
@section('canonical', 'articles')

@section('content')
@include('parts.sidebar')
<section class="main__content-block content-block">
  <div class="content-block__wrapper">
	
		@include('mainpage.news.block')		
  </div>
</section>
@endsection