@extends('appwide')
@section('title', $subCategory->title . ' — спросить врача онлайн консультация')
@section('description', $subCategory->meta_description)
@section('keywords', $subCategory->meta_keywords)
@section('canonical', route('consultation.subrubric', [$subCategory->category->slug, $subCategory->slug]))
@section('content')

<section class="main__intro category-intro">
<div class="category-intro__wrapper">
  <div class="category-intro__inner">
	<div class="category-intro__top">
	  <h1 class="category-intro__title">{{ $subCategory->h1 }}</h1>
	  <div class="category-intro__description">Онлайн чат с быстрым ответом</div>
	  <div class="category-intro__text">
		@if ($subCategory->banner_image)
			{!! $subCategory->banner_image !!}
		@else
			<p class="category-intro__p">Спросить врача онлайн — это просто. Гарантированный ответ в течение часа.</p>
		@endif
	  </div>
	  <div class="category-intro__consultation-buttons">
		<a href="{{ route('consult.form') }}" class="category-intro__consultation-btn category-intro__consultation-btn--online">Онлайн консультация</a>
		<a href="{{ route('consultation.messenger') }}" class="category-intro__consultation-btn category-intro__consultation-btn--whatsapp">WhatsApp</a>
		<a href="{{ route('consultation.messenger') }}" class="category-intro__consultation-btn category-intro__consultation-btn--telegram">Telegram</a>
	</div>
	</div>
  </div>
</div>
</section>

@if ($showcase->IsNotEmpty())
<section class="main__top-consultants">
    <div class="expert-cards__wrapper">
        <div class="expert-cards__top-title">Топ консультантов</div>
        <div class="expert-cards">
            @foreach($showcase as $item)
            <div class="expert-cards__item expert-cards__item--card">
                <div class="expert-cards__item-text">
                    <span class="expert-cards__item-title">{{ $item->user->first_name .' '. $item->user->middle_name }}</span>
                    <div class="expert-cards__item-subtitle">{{ $item->category->short_title }}</div>
                </div>
                <div class="expert-cards__item-img-wrapper">
                    <!--<img src="/storage/common/play-button.svg" alt="" class="expert-cards__item-player-button"
                        data-src="/storage/sounds/test-sound.mp3">-->
                    <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $item->user->avatar }}"
                        alt="{{ $item->category->h1 }}" class="expert-cards__item-img">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
		
<section class="main__ask-question-form ask-question-form">
    <div class="ask-question-form__wrapper">
      <div class="ask-question-form__inner">
        <h2 class="ask-question-form__title">Как это работает</h2>
        <ul class="ask-question-form__blocks">
          <li class="ask-question-form__block">
            <div class="ask-question-form__text-wrapper">
              <span class="ask-question-form__block-title">Опишите ситуацию
              </span>
              <span class="ask-question-form__block-text">Заполните простую форму, опишите вашу проблему и добавьте при
                необходимости файлы

              </span>
            </div>
          </li>
          <li class="ask-question-form__block">
            <div class="ask-question-form__text-wrapper">
              <span class="ask-question-form__block-title">Выберите консультанта
              </span>
              <span class="ask-question-form__block-text">Подберем специалистов под вашу задачу. Вы можете выбрать сами
                или довериться системе

              </span>
            </div>
          </li>
          <li class="ask-question-form__block">
            <div class="ask-question-form__text-wrapper">
              <span class="ask-question-form__block-title">Оплата консультации
              </span>
              <span class="ask-question-form__block-text">Оплатите удобным способом. Возврат при некачественной услуге
              </span>
            </div>
          </li>
          <li class="ask-question-form__block">
            <div class="ask-question-form__text-wrapper">
              <span class="ask-question-form__block-title">Получите решение
              </span>
              <span class="ask-question-form__block-text">Общайтесь в чате, по телефону или видео. Получите план
                действий
                и необходимые документы
              </span>

            </div>
          </li>
        </ul>
        <a href="/consultation/comment" class="ask-question-form__submit new-red-button">Начать консультацию</a>
      </div>

    </div>
  </section>
  
  @if ($discussions->isNotEmpty())
  <section class="main__popular-links popular-links">
    <div class="popular-links__wrapper">
      <h3 class="popular-links__title">Популярные консультации по теме «{{ $subCategory->h1 }}»</h3>
      <ul class="popular-links__list">
        @foreach($discussions as $discussion)
        <li class="popular-links__item">
          <a href="{{ route('consultation.item', $discussion->comment_id) }}" class="popular-links__link"
            target="_blank">{{ $discussion->title }} →</a>
        </li>
        @endforeach
      </ul>
    </div>
  </section>
  @endif
@endsection