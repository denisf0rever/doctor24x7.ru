@extends('app')
@section('title', $article->meta_title)
@section('description', $article->metadescription)
@section('keywords', $article->metakey)
@section('canonical', 'content/'. $article->id)

@section('content')
<section class="main__content-block content-block" style="padding: 15px;
    background: #fff;
    width: 640px;
    border-radius: 16px;">
  <div class="content-block__wrapper">
    <h1 class="content-block__header">{{ $article->title }}</h1>
    <div class="content-block__subtitle-wrapper">
      <span class="content-block__subtitle">{{ $article->question_after }}</span><br />
      <span class="content-block__subtitle">{{ $article->introduction }}</span><br />
    </div>
    <span class="content-block__content-header">Содержание статьи:</span>
    {!! $article->full_story !!}
    <div class="content-block__main-text">
    <span class="content-block__main-text-header">Время прочтения: {{ $article->reading_time }}</span>
      {!! $article->full_text !!}
		
		<p> Views: {{ $article->hits }}</p>
		<p>Врач офтальмолог <a href="/profile/article->author->id"> </a></p>
		<p>{{ $date }}</p>
	   
    </div>
  </div>
</section>

<section>
  <div class="content-block__wrapper">
    @foreach($article->comments as $comment)
	<p>{{ $comment->comment }}</p>
@endforeach
  </div>
</section>


@endsection