@extends('appwide')
@section('title', 'Консультация '.$category->name_v.' в ' .$city->name_p .' — задать вопрос врачу онлайн')
@section('description', 'Круглосуточная консультация по медицинским вопросам в ' .$city->name_p .' онлайн и по телефону, гарантия ответа в течение часа')
@section('keywords', 'Консультация врача в ' .$city->name_p .', задать вопрос врачу в ' .$city->name_p)
@section('canonical', 'consultation/city/'. $city->slug)

@section('content')
<div class="new-section-wrapper">
  <section class="main__intro category-intro">
    <div class="category-intro__wrapper">
      <div class="category-intro__inner">
        <div class="category-intro__top">
          <h1 class="category-intro__title">Консультация {{ $category->name_v }} в {{ $city->name_p }}</h1>
          <div class="category-intro__text">
            <p class="category-intro__p">Сервис онлайн-консультаций предлагает профессиональную помощь в диагностике и
              лечении заболеваний. На сайте консультируют {{ $category->amount_doctors }} @if($category->amount_doctors
              ==
              1)
              {{ Str::lcfirst($category->font_color) }}.
              @elseif($category->amount_doctors >= 2 && $category->amount_doctors <= 4)
                {{ Str::lcfirst($category->name_v) }}. @else {{ Str::lcfirst($category->name_v_m) }}.@endif Мы
                понимаем, как важно быстро и точно получить ответ на вопросы, касающиеся здоровья, поэтому наши
                специалисты всегда готовы предоставить вам квалифицированные рекомендации, основанные на актуальных
                данных и индивидуальных особенностях вашего состояния. Процесс консультации прост и удобен: вы можете
                задать вопросы, обсудить симптомы и получить советы по выбору лечения, не выходя из дома. Мы гарантируем
                полную конфиденциальность и безопасность ваших данных, а также оперативность в ответах. Заботьтесь о
                своем здоровье вместе с нашим сервисом.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="main__ask-question-form ask-question-form">
    <div class="ask-question-form__wrapper">
      <h2 class="ask-question-form__title">Задать вопрос {{ $category->button_name }} онлайн</h2>
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

@if ($doctors->isNotEmpty())
<section class="main__doc-list doc-list">
  <div class="doc-list__wrapper container">
    <h3 class="doc-list__title">Помощь {{ $category->name_v }}</h3>
    <span class="doc-list__subtitle">Консультации онлайн в реальном времени, без записей и очередей. Задайте вопрос и ожидайте ответ в течение часа.</span>
    <div class="doc-list__list">
	@foreach ($doctors as $doctor)
      <a href="{{ route('profile.user.item', $doctor->username) }}" class="doc-list__link">
        <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $doctor->avatar }}" alt="" class="doc-list__img">
        <span class="doc-list__fullname">{{ $doctor->id }} {{ $doctor->first_name }} {{ $doctor->middle_name }}</span>
        <span class="doc-list__specialization">{{ $doctor->icq }}</span>
      </a>
	 @endforeach
    </div>
  </div>
</section>
@endif
@endsection