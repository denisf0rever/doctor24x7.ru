@extends('appsidebarfree')
@section('title', $user->full_name . ' — ' . $user->icq .', персональная страница')
@section('description', $user->full_name . ' — ' . $user->icq .', персональная страница')
@section('keywords', $user->full_name . ' — ' . $user->icq .', персональная страница')
@section('canonical', route('profile.user.item', $user->username))

@section('chat')
@vite(['resources/views/user/profile/src/main.jsx'])
@endsection

@section('content')


<div class="profile-page">
  <div class="profile-sidebar">
  
  
  <div class="user-block">
  <div class="user-block__header-info">
    <div class="user-block__avatar-image">
      <picture>
          <source type="image/webp" srcset="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $user->avatar }}"
            class="user-block__avatar">
          <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $user->avatar }}" alt=""
            class="user-block__avatar">
        </picture>
    </div>

    <div class="user-block__name-specialization">
      <h1 class="user-block__fullname">{{ $user->full_name }}</h1>
      <span class="user-block__online">{{ $user->city }}</span>
    </div>

    <div class="user-block__consultations-row">
      <span class="user-block__row-label">Проведено консультаций</span>
      <span class="user-block__row-value">{{ $user->comments->count() }}</span>
    </div>
	
    <div class="user-block__registration-row">
      <span class="user-block__row-label">На сайте с</span>
      <span class="user-block__row-value">{{ $date }}</span>
    </div>

    <div class="user-block__id-row">
      <span class="user-block__row-label">ID</span>
      <span class="user-block__row-value">{{ $user->id }}</span>
    </div>

    <div class="user-block__views-row">
      <span class="user-block__row-label">Просмотров</span>
      <span class="user-block__row-value">{{ $user->views }}</span>
    </div>

    <div class="user-block__price-row">
      <span class="user-block__row-label">Стоимость консультации</span>
      <span class="user-block__row-value">от 1000 рублей</span>
    </div>
  </div>
</div>

<div class="profile-buttons">
	<button class="profile-buttons__button profile-buttons__button--verified">
		<svg role="img" aria-hidden="true" data-icon="verified" viewBox="0 0 24 24" name="verified" fill="#008cf2"
		class="profile-buttons__button-svg"><path d="M12.7 1.28a1 1 0 0 0-1.4 0L9.18 3.33l-2.92-.41a1 1 0 0 0-1.12.82l-.51 2.9-2.6 1.39a1 1 0 0 0-.44 1.32L2.9 12l-1.3 2.65a1 1 0 0 0 .43 1.32l2.6 1.39.52 2.9c.09.53.59.9 1.12.82l2.92-.41 2.12 2.05a1 1 0 0 0 1.4 0l2.12-2.05 2.92.41a1 1 0 0 0 1.12-.82l.51-2.9 2.6-1.39a1 1 0 0 0 .44-1.32L21.1 12l1.3-2.65a1 1 0 0 0-.43-1.32l-2.6-1.39-.52-2.9a1 1 0 0 0-1.12-.82l-2.92.41-2.12-2.05Zm4 9.43-5 5a1 1 0 0 1-1.4 0l-2.5-2.5a1 1 0 1 1 1.4-1.42l1.8 1.8 4.3-4.3a1 1 0 1 1 1.4 1.42Z"></path></svg>Данные подтверждены
	</button>
	<button class="profile-buttons__button profile-buttons__button--primary">Чат консультация</button>
</div>
</div>

<div class="profile-content">
<section class="content-section">
	<div class="content-section__header"><div class="content-section__title">Проведенные консультации</div></div>
	<div class="content-section__body">
	<div class="consultations-list">
	@php 
		use Carbon\Carbon;
	@endphp 
	  @foreach ($latestConsultations as $comment)
	  @php 
		$dateString = $comment->created_at;
		$createdAt = Carbon::parse($dateString);
		
		$date = $createdAt->translatedFormat('j F Y') . ' года';
	  @endphp
	  <div class="consultation-card">
		<div class="consultation-card__header">
		  <div class="consultation-card__date">{{ $date }}</div>
		  <div class="consultation-card__status consultation-card__status--completed">Завершено</div>
		</div>
		<div class="consultation-card__content">
		  <div class="consultation-card__info">
			<a href="{{ route('consultation.item', $comment->comment_id) }}" class="consultation-card__title">{{ $comment->consultation->title }}</a>
		  </div>
		</div>
	  </div>
	  @endforeach
	  <!--<div class="consultation-card">
		<div class="consultation-card__header">
		  <div class="consultation-card__date">10 октября 2025 г. 14:20</div>
		  <div class="consultation-card__status consultation-card__status--in-progress">
			В процессе
		  </div>
		</div>
		
		<div class="consultation-card__content">
		  <div class="consultation-card__info">
			<h3 class="consultation-card__title">Диагностика результатов анализов</h3>
			<p class="consultation-card__description">Интерпретация лабораторных исследований</p>
		  </div>
		</div>
	  </div>-->
	</div>
	</div>
</section>

<section class="content-section">
  <div class="content-section__header">
    <h2 class="content-section__title">Отзывы</h2>
    <a href="#" class="content-section__link">Все отзывы</a>
  </div>
  <div class="content-section__body">
    <div class="reviews-list">
      
	  @foreach ($latestReviews as $review)	
		@php 
		$dateString = $review->created_at;
		$createdAt = Carbon::parse($dateString);

		$date = $createdAt->translatedFormat('j F Y') . ' года';
		@endphp
		
      <div class="review-card">
        <div class="review-card__header">
          <div class="review-card__user">
            <!--<div class="review-card__avatar">
              <img src="#" alt="Аватар пользователя">
            </div>-->
            <div class="review-card__user-info">
              <div class="review-card__username">Анна Петрова</div>
              <div class="review-card__date">{{ $date }}</div>
            </div>
          </div>
          <div class="review-card__rating">
            <div class="rating-stars">
              <span class="rating-star full">★</span>
              <span class="rating-star full">★</span>
              <span class="rating-star full">★</span>
              <span class="rating-star full">★</span>
              <span class="rating-star full">★</span>
              <!--<span class="rating-star half">★</span>-->
              <span class="rating-value"> </span>
            </div>
          </div>
        </div>
        
        <div class="review-card__content">
          <p class="review-card__text">{{ $review->description }}</p>
        </div>
        
        <!--<div class="review-card__footer">
          <div class="review-card__consultation">
            Консультация: <strong></strong>
          </div>
         <button class="review-card__action-btn">Ответить</button>
        </div>-->
      </div>
		@endforeach
    </div>
  </div>
</section>

<section class="content-section">
  <div class="content-section__header">
	<div class="content-section__title">Обо мне</div>
  </div>
  <div class="content-section__body">
	<div class="about-content">
	{!! $user->additional_interest !!}
	{!! $user->science_interest !!}
	</div>
  </div>
</section>
  </div>
</div>

<div class="main__chat chat">
  <form action="/" id="chat-form" class="chat__form">
    <div class="chat__wrapper">
      <div class="chat__header">
        <div class="chat__head">
          <span class="chat__head-text">Онлайн чат</span>
          <div class="chat__close">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff" version="1.1"
              id="Layer_1" x="0px" y="0px" viewBox="0 0 371.23 371.23" style="enable-background:new 0 0 371.23 371.23;"
              xml:space="preserve">
              <polygon
                points="371.23,21.213 350.018,0 185.615,164.402 21.213,0 0,21.213 164.402,185.615 0,350.018 21.213,371.23   185.615,206.828 350.018,371.23 371.23,350.018 206.828,185.615 " />
            </svg>
          </div>
        </div>
        <div class="chat__consultant">
          <div class="chat__avatar">
            <img src="" alt="" class="chat__avatar-img">
            <span class="chat__fullname"></span>
            <span class="chat__specialization">placeholder</span>
          </div>
        </div>
      </div>
      <div class="chat__body">
        <div class="chat__message">Здравствуйте. Опишите свою проблему. </div>
        <div class="chat__textarea-wrapper">
          <span class="chat__title">Ваш вопрос</span>
          <div class="chat__question-wrapper">
            <textarea name="" id="" class="chat__question"
              placeholder="- опишите вашу ситуацию;&#10- сформулируйте вопрос."></textarea>
            <div class="chat__button-continue" id="button-next">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="icon-2xl">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M15.1918 8.90615C15.6381 8.45983 16.3618 8.45983 16.8081 8.90615L21.9509 14.049C22.3972 14.4953 22.3972 15.2189 21.9509 15.6652C21.5046 16.1116 20.781 16.1116 20.3347 15.6652L17.1428 12.4734V22.2857C17.1428 22.9169 16.6311 23.4286 15.9999 23.4286C15.3688 23.4286 14.8571 22.9169 14.8571 22.2857V12.4734L11.6652 15.6652C11.2189 16.1116 10.4953 16.1116 10.049 15.6652C9.60265 15.2189 9.60265 14.4953 10.049 14.049L15.1918 8.90615Z"
                  fill="currentColor"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="chat__additional-fields hide">
        <div class="chat__additional-field">
          <span class="chat__label">Заголовок вопроса </span>
          <input type="text" class="chat__input">
        </div>
        <div class="chat__additional-field">
          <span class="chat__label">Ваше имя </span>
          <input type="text" class="chat__input">
        </div>
        <div class="chat__additional-field">
          <span class="chat__label">Ваш email </span>
          <input type="text" class="chat__input">
        </div>
      </div>
      <div class="chat__footer">
        <div class="chat__footer-second hide">
          <div class="chat__button-prev" id="button-prev">Назад</div>
          <div class="chat__button-next" id="button-submit"> Отправить</div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection