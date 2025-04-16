@extends('appwide')
@section('title', 'Консультация врача в ' .$city->name_p .' — 68 врачей задать вопрос онлайн')
@section('description', 'Круглосуточная консультация по медицинским вопросам в ' .$city->name_p .' онлайн и по телефону,
гарантия ответа в течение часа')
@section('keywords', 'Консультация врача в ' .$city->name_p .', задать вопрос врачу в ' .$city->name_p)
@section('canonical', 'consultation/city/'. $city->slug)

@section('content')

<div class="new-section-wrapper">
<section class="main__intro category-intro">
  <div class="category-intro__wrapper">
    <div class="category-intro__inner">
      <div class="category-intro__top">
        <h1 class="category-intro__title">Консультация врача в {{ $city->name_p }}</h1>
        <div class="category-intro__text">
          <p class="category-intro__p">Онлайн-консультации врачей - возможность быстро и удобно получить квалифицированную медицинскую помощь, не выходя из дома. Наша команда готова ответить на ваши вопросы, провести диагностику и предложить рекомендации по лечению заболеваний. Мы ценим ваше время и здоровье, поэтому гарантируем безопасность и конфиденциальность ваших данных. Используя современные технологии, мы обеспечиваем доступ к медицинским консультациям в любое время.</p>
        </div>
      </div>
      <div class="category-intro__button-block">
        <a href="/consultation/comment?rubric_id={{ $city->id }}" class="category-intro__button-link">Задать вопрос
          →</a>
        <div class="category-intro__button-text">Предоставим ответ в течение 25 минут</div>
      </div>
      
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
          <span class="ask-question-form__block-subtitle">Напишите свой вопрос</span>
        </div>
      </li>
      <li class="ask-question-form__block">
        <img src="{{ Storage::url('common/category/second-step.svg') }}" class="ask-question-form__block-img">
        <div class="ask-question-form__separator"></div>
        <div class="ask-question-form__text-wrapper">
          <span class="ask-question-form__block-title">Укажите данные для связи</span>
          <span class="ask-question-form__block-subtitle">Телефон или почта</span>
        </div>
      </li>
      <li class="ask-question-form__block">
        <img src="{{ Storage::url('common/category/third-step.svg') }}" class="ask-question-form__block-img">
        <div class="ask-question-form__text-wrapper">
          <span class="ask-question-form__block-title">Ожидайте ответ</span>
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
@endsection