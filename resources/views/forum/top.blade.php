@extends('appwide')
@section('title', 'Рейтинг врачей')
@section('description', 'Рейтинг врачей')
@section('keywords', 'Рейтинг врачей')
@section('canonical', 'forum/top')

@section('content')
<section class="forum">
  <div class="forum__wrapper">
    <div class="forum__inner">
      <div class="forum__left-sidebar">
        @include('forum.menu')
      </div>
      <div class="forum__main">
        <div class="forum__topics forum-topics">
          <div class="forum-topics__wrapper section-wrapper">
            <div class="forum-topics__header">
              <h3 class="forum-topics__title">Топ врачей</h3>
            </div>
            <ul class="forum-topics__list">
              @foreach ($doctors as $doctor)
              <li class="forum-topics__item">
                <div class="forum-topics__small-blog small-blog">
                  <a href="{{ route('profile.user.item', $doctor->username) }}" class="small-blog__wrapper">
                    <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $doctor->avatar }}" alt=""
                      class="small-blog__img">
                    <span class="small-blog__title">{{ $doctor->first_name }} {{ $doctor->last_name }}</span>
                    <span class="small-blog__subs">{{ $doctor->answers_count }} консультаций</span>
                  </a>
                </div>
                <a href="{{ route('chat.form', $doctor->id) }}" class="forum-topics__button"
                  target="_blank">Консультация</a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <div class="forum__right-sidebar">
        @include('forum.sidebar')
      </div>
    </div>
  </div>
</section>
@endsection