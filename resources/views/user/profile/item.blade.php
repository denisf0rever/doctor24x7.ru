@extends('app')
@section('title', $user->full_name)
@section('description', '2')
@section('keywords', '3')
@section('canonical', 'profile/'. '4')

@section('chat')
@vite(['resources/views/user/profile/src/main.jsx'])
@endsection

@section('content')
@include('parts.sidebar')
<div class="main-profile__field">
  <section class="main-profile__profile profile">
    <div class="profile__wrapper">
      <div class="user-chat" id="user-chat"></div>
		<picture>
			<source type="image/webp" srcset="/storage/avatar/webp/{{ $user->webp_avatar }}" class="profile__avatar">
			<img src="/storage/avatar/{{ $user->avatar }}" alt="" class="profile__avatar">
		</picture>
      <div class="profile__info">
        <h1 class="profile__name">{{ $user->full_name }}</h1>
        <div class="profile__text">
          <span class="profile__location">{{ $user->city }}</span>
          <span class="profile__on-site-time">На сайте с <strong>{{ $date }}</strong></span>
        </div>
        <div class="profile__online">
          <div class="profile__online-indicator profile__online-indicator-green"></div>
          <span class="profile__online-text">Онлайн</span>
        </div>
        <a href="#" class="profile__consultation">Получить консультацию</a>
      </div>
      <div class="profile__stat">
        <div class="profile__documents documents">
          <div class="documents__wrapper">
            <img src="images/placeholder.png" alt="" class="documents__img">
            <span class="documents__text">Документы проверены</span>
            <span class="documents__subtext">Паспорт, диплом об образовании</span>
          </div>
        </div>
        <div class="profile__rating">
          <div class="profile__stars">
            <img src="images/star-white.svg" alt="" class="profile__rating-img">
            <span class="profile__rating-amount">4,97</span>
          </div>
          <div class="profile__comments">
            <img src="images/star-white.svg" alt="" class="profile__rating-img">
            <span class="profile__rating-amount">34 отзыва</span>
          </div>
		  <div class="profile__comments">
            <img src="images/star-white.svg" alt="" class="profile__rating-img">
            <span class="profile__rating-amount">Views: {{ $user->views }}</span>
          </div>
        </div>
      </div>
      <div class="profile__categories">
        <ul class="profile__categories-list">
          <li class="profile__category">
            <div class="profile__category-title">Без категории</div>
            <div class="profile__category-amount">3</div>
          </li>
          <li class="profile__category">
            <div class="profile__category-title">Видео</div>
            <div class="profile__category-amount">0</div>
          </li>
          <li class="profile__category">
            <div class="profile__category-title">Интерьер</div>
            <div class="profile__category-amount">0</div>
          </li>
          <li class="profile__category">
            <div class="profile__category-title">Экстерьер</div>
            <div class="profile__category-amount">2</div>
          </li>
        </ul>
      </div>
    </div>
  </section>
</div>
@endsection