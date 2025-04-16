@extends('appwide')
@section('title', $subCategory->title)
@section('description', $subCategory->meta_description)
@section('keywords', $subCategory->meta_keywords)
@section('canonical', 'consultation/'. $subCategory->slug)

@section('content')

<div class="new-section-wrapper">
<section class="main__intro category-intro">
  <div class="category-intro__wrapper">
    <div class="category-intro__inner">
      <div class="category-intro__top">
        <h1 class="category-intro__title">{{ $subCategory->h1 }}</h1>
        <div class="category-intro__text">
          <p class="category-intro__p">@if ($subCategory->banner_image)
		  {{ $subCategory->banner_image }}
	  @else
		  Сервис онлайн-консультаций {{ $subCategory->button_name }} предлагает профессиональную медицинскую поддержку. Наши специалисты готовы предоставить вам подробные рекомендации, которые подходят для вашего конкретного случая. На консультации вы сможете обсудить существующие симптомы, а также узнать о возможных побочных эффектах и взаимодействиях с медикаментами. Наша цель — помочь вам сориентироваться, дать четкие и обоснованные советы, чтобы вы могли принимать информированные решения о своем здоровье. Мы гарантируем полную конфиденциальность и поддержку на каждом этапе общения, чтобы сделать процесс получения медицинской информации максимально комфортным и безопасным.</p>
	  @endif
        </div>
      </div>
      <div class="category-intro__button-block">
        <a href="/consultation/comment?rubric_id={{ $subCategory->id }}" class="category-intro__button-link">Задать
          вопрос →</a>
        <div class="category-intro__button-text">Предоставим ответ в течение 25 минут</div>
      </div>
    </div>
  </div>
</section>
<section class="main__ask-question-form ask-question-form">
  <div class="ask-question-form__wrapper">
    <h2 class="ask-question-form__title">Задать вопрос {{ $subCategory->button_name }}</h2>
    <ul class="ask-question-form__blocks">
      <li class="ask-question-form__block">
        <img src="{{ Storage::url('common/category/first-step.svg') }}" class="ask-question-form__block-img">
        <div class="ask-question-form__separator"></div>
        <div class="ask-question-form__text-wrapper">
          <span class="ask-question-form__block-title">Спросите врача онлайн </span>
          <span class="ask-question-form__block-subtitle">Напишите свой вопрос </span>
        </div>
      </li>
      <li class="ask-question-form__block">
        <img src="{{ Storage::url('common/category/second-step.svg') }}" class="ask-question-form__block-img">
        <div class="ask-question-form__separator"></div>
        <div class="ask-question-form__text-wrapper">
          <span class="ask-question-form__block-title">Укажите данные для связи </span>
          <span class="ask-question-form__block-subtitle">Телефон или почта </span>
        </div>
      </li>
      <li class="ask-question-form__block">
        <img src="{{ Storage::url('common/category/third-step.svg') }}" class="ask-question-form__block-img">
        <div class="ask-question-form__text-wrapper">
          <span class="ask-question-form__block-title">Ожидайте ответ </span>
          <span class="ask-question-form__block-subtitle">Максимальное ожидание ~25 минут</span>
        </div>
      </li>
    </ul>
    <div class="ask-question-form__form-wrapper">
      <form action="" class="ask-question-form__form">
        <textarea name="" id="" class="ask-question-form__textarea"></textarea>
        <button type="submit" class="ask-question-form__submit"> Продолжить →</button>
      </form>
    </div>
  </div>
</section>
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