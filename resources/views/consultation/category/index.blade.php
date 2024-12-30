@extends('appsidebarfree')
@section('title', $category->title)
@section('description', $category->meta_description)
@section('keywords', $category->meta_keywords)
@section('canonical', 'consultation/'. $category->slug)

@section('content')
	@if ($category->subcategories->isNotEmpty())
	@foreach($category->subcategories as $subcategory)
		<a href="{{ $subcategory->short_title }}">{{ $subcategory->short_title }}</a>
	@endforeach
	@endif
@endsection