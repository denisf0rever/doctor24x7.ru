@extends('appwide')
@section('title', 'Карта сайта')
@section('description', 'Карта сайта')
@section('keywords', 'Карта сайта')
@section('canonical', 'page/sitemap')

@section('content')
<section class="sitemap">
  <div class="sitemap__wrapper container">
    <h1 class="sitemap__title">Консультации</h1>
    <div class="sitemap__list">
      @foreach ($categories as $category)
		<a href="{{ route('consultation.category', $category->slug) }}" class="sitemap__item">{{ $category->short_title }}</a>
	@endforeach
    </div>
  </div>
</section>

@endsection