@extends('articleSidebars')
@section('title', $article->meta_title)
@section('description', $article->metadescription)
@section('keywords', $article->metakey)
@section('canonical', 'content/'. $article->id)

@section('content')

<!-- <section>
  <div class="content-block__wrapper">
    @foreach($article->comments as $comment)
    <p>{{ $comment->comment }}</p>
    @endforeach
  </div>
</section> -->


@endsection