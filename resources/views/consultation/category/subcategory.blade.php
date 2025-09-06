@extends('appwide')
@section('title', $subCategory->title . ' — спросить врача онлайн консультация')
@section('description', $subCategory->meta_description)
@section('keywords', $subCategory->meta_keywords)
@section('canonical', route('consultation.subrubric', [$subCategory->category->slug, $subCategory->slug]))

@section('content')

<div class="new-section-wrapper">
  <section class="main__intro category-intro">
    <div class="category-intro__wrapper">
      <div class="category-intro__inner">
        <div class="category-intro__top">
          <h1 class="category-intro__title">{{ $subCategory->h1 }}</h1>
          <div class="category-intro__text">
            @if ($subCategory->banner_image)
            {!! $subCategory->banner_image !!}
            @else
            <p class="category-intro__p">Сервис онлайн-консультаций {{ $subCategory->button_name }} предлагает
              профессиональную медицинскую поддержку. Наши специалисты готовы предоставить вам подробные рекомендации,
              которые подходят для вашего конкретного случая. На консультации вы сможете обсудить существующие симптомы,
              а также узнать о возможных побочных эффектах и взаимодействиях с медикаментами. Наша цель — помочь вам
              сориентироваться, дать четкие и обоснованные советы, чтобы вы могли принимать информированные решения о
              своем здоровье. Мы гарантируем полную конфиденциальность и поддержку на каждом этапе общения, чтобы
              сделать процесс получения медицинской информации максимально комфортным и безопасным.</p>
            @endif
          </div>
        </div>
        @if ($showcase->IsNotEmpty())
        <div class="category-intro__experts-cards expert-cards">
          @foreach($showcase as $item)
          <div class="expert-card js-lawyer-popup-open">
            <div class="expert-card__text">
              <span class="expert-card__title">{{ $item->user->first_name .' '. $item->user->middle_name }}</span>
              <div class="expert-card__subtitle">{{ $item->category->short_title }}</div>
            </div>
            <div class="expert-card__img-wrapper">
              <img src="/storage/common/play-button.svg" alt="" class="expert-card__player-button"
                data-src="/storage/sounds/test-sound.mp3">
              <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $item->user->avatar }}"
                alt="{{ $item->category->h1 }}" class="expert-card__img">
            </div>
          </div>
          @endforeach
        </div>
        @endif
      </div>
    </div>
  </section>
  <section class="main__ask-question-form ask-question-form">
    <div class="ask-question-form__wrapper">
      <h2 class="ask-question-form__title">Задать вопрос врачу онлайн</h2>
      <ul class="ask-question-form__blocks">
        <li class="ask-question-form__block">
          <img src="{{ Storage::url('common/category/first-step.svg') }}" class="ask-question-form__block-img">
          <div class="ask-question-form__separator"></div>
          <div class="ask-question-form__text-wrapper">
            <span class="ask-question-form__block-title">Спросите врача онлайн</span>
          </div>
        </li>
        <li class="ask-question-form__block">
          <img src="{{ Storage::url('common/category/second-step.svg') }}" class="ask-question-form__block-img">
          <div class="ask-question-form__separator"></div>
          <div class="ask-question-form__text-wrapper">
            <span class="ask-question-form__block-title">Укажите данные для связи</span>
          </div>
        </li>
        <li class="ask-question-form__block">
          <img src="{{ Storage::url('common/category/third-step.svg') }}" class="ask-question-form__block-img">
          <div class="ask-question-form__text-wrapper">
            <span class="ask-question-form__block-title">Ожидайте ответ</span>
          </div>
        </li>
      </ul>
      <div class="ask-question-form__form-wrapper">
        <form action="{{ route('consult.form') }}" method="get" class="ask-question-form__form">
          @csrf
          <textarea name="description" id="description" class="ask-question-form__textarea"></textarea>
          <input type="hidden" name="rubric_id" value="{{ $subCategory->category->id }}">
          <button type="submit" class="ask-question-form__submit new-red-button"> Продолжить →</button>
        </form>
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

</div>
@endsection