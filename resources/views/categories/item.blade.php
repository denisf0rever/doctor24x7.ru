@extends('app')
@section('title', $category->title)
@section('description', $category->metadescription)
@section('keywords', $category->metakey)
@section('canonical', 'category/'. $category->id)

@section('content')
@include('parts.sidebar')
<section class="main__content-block content-block">
	<div class="content-block__wrapper">
		<h1 class="content-block__header">{{ $category->h1 }} Views: {{ $category->views }}</h1>
		<img src="{{ Storage::url($category->thumb) }}" alt="" class="content-block__img">
		<div class="content-block__subtitle-wrapper">
		<span class="content-block__subtitle">{{ $category->short_title }}</span>
	</div>
	<span class="content-block__content-header">Содержание статьи:</span>
	{{ $category->description }}
	<div class="content-block__main-text">
	<h2 class="content-block__main-text-header">Подзаголовок</h2>
		{{ $category->description }}
	</div>
          </div>
</section>
@endsection