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
            <p class="category-intro__p">Онлайн-консультации врачей - возможность быстро и удобно получить
              квалифицированную медицинскую помощь, не выходя из дома. Наша команда готова ответить на ваши вопросы,
              провести диагностику и предложить рекомендации по лечению заболеваний. Мы ценим ваше время и здоровье,
              поэтому гарантируем безопасность и конфиденциальность ваших данных. Используя современные технологии, мы
              обеспечиваем доступ к медицинским консультациям в любое время.</p>
          </div>
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
          <button type="submit" class="ask-question-form__submit new-red-button"> Продолжить →</button>
        </form>
      </div>
    </div>
  </section>
</div>

@if ($doctors->isNotEmpty())
<section class="main__doc-list doc-list">
  <div class="doc-list__wrapper container">
    <h3 class="doc-list__title">Врачи нашего сервиса</h3>
    <span class="doc-list__subtitle">Консультации онлайн в реальном времени, без записей и очередей. Задайте вопрос и
      ожидайте ответ в течение часа.</span>
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