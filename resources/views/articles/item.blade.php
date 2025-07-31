@extends('articleSidebars')
@section('title', $article->meta_title ?? $article->title)
@section('description', $article->metadescription)
@section('keywords', $article->metakey)
@section('canonical', 'content/'. $article->id)

@section('content')
<div class="content-block__wrapper">
  <h1 class="content-block__header">{{ $article->title }}</h1>
  <div class="content-block__intro-wrapper">
    <p><span class="content-block__subtitle">{{ $article->question_after }}</span></p>
    <p class="content-block__intro">{{ $article->introduction }}</p>
  </div>
  <span class="content-block__content-header">Содержание статьи:</span>
  {!! $article->full_story !!}
  <div class="content-block__footer">
    <div class="content-block__footer-left">
      <span class="content-block__footer-text">Время прочтения: {{ $article->reading_time }}</span>
      <!-- <span class="content-block__footer-text">{!! $article->full_text !!}</span> -->
      <span class="content-block__footer-text">Просмотры: {{ $article->hits }}</span>
      <span class="content-block__footer-text">Врач <a
          href="{{ route('profile.user.item', $article->author->username ?? '5121') }}">{{ $article->author->full_name ?? 'Екатерина Гудкова' }}
        </a></span>
      <span class="content-block__footer-text"> {{ $date }}</span>
    </div>
    <div class="content-block__footer-right">
      <div class="content-block__rating content-block-rating">
        <div class="content-block-rating__wrapper">
          <div class="content-block-rating__top">
            <span class="content-block-rating__text">Рейтинг: 5;</span>
            <span class="content-block-rating__text">Голосов: 1</span>
          </div>
          <div class="content-block-rating__stars">
            <img src="/storage/common/star-off.png" alt="" class="content-block-rating__star">
            <img src="/storage/common/star-off.png" alt="" class="content-block-rating__star">
            <img src="/storage/common/star-off.png" alt="" class="content-block-rating__star">
            <img src="/storage/common/star-off.png" alt="" class="content-block-rating__star">
            <img src="/storage/common/star-off.png" alt="" class="content-block-rating__star">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('articles.comments')
@endsection