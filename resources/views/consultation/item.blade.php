@extends('app')
@section('title', $consultation->title .' — консультируют врачи на форуме')
@section('description', 'Консультация врача, вопрос: ' . $consultation->title)
@section('keywords', '')
@section('canonical', 'consultation/detail/'. $consultation->id)

@section('content')
@include('parts.sidebar')

</title>
<meta name="description" content="Консультация врача, вопрос: Гормональные таблетки">
<meta name="keywords" content="Вопрос гинекологу">


<section class="main__content-block content-block">
  <div class="content-block__wrapper">
    <h1 class="content-block__header">{{ $consultation->h1 }}</h1>
    <img src="{{ Storage::url($consultation->thumb) }}" alt="" class="content-block__img">
    <div class="content-block__subtitle-wrapper">
      <span class="content-block__subtitle">{{ $consultation->subtitle }}</span>
    </div>
    <span class="content-block__content-header">Содержание статьи:</span>
    {!! $consultation->content !!}
    <div class="content-block__main-text">
    <span class="content-block__main-text-header">Время прочтения: {{ $consultation->reading_time }}</span>
      {!! $consultation->full_text !!}
		
		<p> Views: {{ $consultation->views }}</p>
		
		<p>{{ $consultation->created_at }}</p>
	   
    </div>
  </div>
</section>
@endsection