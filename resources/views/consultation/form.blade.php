@extends('app')
@section('title', 'Добавить вопрос')
@section('description', '')
@section('keywords', '')
@section('canonical', 'consultation/create')

@section('content')

@foreach($errors->all() as $error)
{{ $error }} <br />
@endforeach


<main class="main">
  <div class="main__wrapper container">
    <section class="main__text-service text-service">
      <h2 class="text-service__title">Консультация врача онлайн </h2>
      <span class="text-service__subtitle">Задать вопрос врачу в простой форме и получить ответ в течение часа
      </span>
      <div class="text-service__wrapper section-wrapper">
        <ul class="text-service__list">
          <li class="text-service__item">
            <b>Через сколько врач отвечает?</b> Обратившиеся ждут ответ в среднем 25 минут.
          </li>
          <li class="text-service__item"><b>Гарантии.</b> Мы юридическое лицо и несем ответственность перед
            законодательством РФ. Нашим сервисом уже воспользовались тысячи людей. Юридическая информация и отзывы <a
              href="/about-us">тут</a>.
          </li>
          <li class="text-service__item"><b>Как проходит консультация?</b> Когда врач предоставит ответ - пришлем на
            вашу почту уведомление, сможете задать дополнительные вопросы. Мы даем максимум информации, чтобы
            консультация была полезной. Консультируют практикующие врачи, минимальный стаж 10 лет.</li>
          <li class="text-service__item"><b>Более 100 врачей</b> предоставляют консультации. При необходимости, может
            ответить несколько врачей (конференция).</li>
        </ul>
      </div>
    </section>



    <section class="main__consultation-slider consultation-slider">
      <h2 class="consultation-slider__title">Медицинские консультации предоставляют
      </h2>
      <span class="consultation-slider__subtitle">В онлайн сервисе работает более 100 врачей, всех специализаций
      </span>
      <div class="consultation-slider__wrapper">
        <div class="consultation-slider__arrow consultation-slider__arrow-before"><span>&lsaquo;</span></div>
        <div class="consultation-slider__arrow consultation-slider__arrow-after"><span>&rsaquo;</span></div>
        <div class="consultation-slider__slider">
          <ul class="consultation-slider__slider-wrapper swiper-wrapper">
            <li class="consultation-slider__slide swiper-slide consultation-slide">
              <div class="consultation-slide__wrapper">
                <div class="consultation-slide__img-wrapper">
                  <img src="/" alt="" class="consultation-slide__img">
                </div>
                <div class="consultation-slide__text">
                  <span class="consultation-slide__fullname">Альбина Альбертовна</span>
                  <span class="consultation-slide__specialization">Гематолог</span>
                </div>
              </div>
            </li>
            <li class="consultation-slider__slide swiper-slide consultation-slide">
              <div class="consultation-slide__wrapper">
                <div class="consultation-slide__img-wrapper">
                  <img src="/" alt="" class="consultation-slide__img">
                </div>
                <div class="consultation-slide__text">
                  <span class="consultation-slide__fullname">Альбина Альбертовна</span>
                  <span class="consultation-slide__specialization">Гематолог</span>
                </div>
              </div>
            </li>
            <li class="consultation-slider__slide swiper-slide consultation-slide">
              <div class="consultation-slide__wrapper">
                <div class="consultation-slide__img-wrapper">
                  <img src="/" alt="" class="consultation-slide__img">
                </div>
                <div class="consultation-slide__text">
                  <span class="consultation-slide__fullname">Альбина Альбертовна</span>
                  <span class="consultation-slide__specialization">Гематолог</span>
                </div>
              </div>
            </li>
            <li class="consultation-slider__slide swiper-slide consultation-slide">
              <div class="consultation-slide__wrapper">
                <div class="consultation-slide__img-wrapper">
                  <img src="/" alt="" class="consultation-slide__img">
                </div>
                <div class="consultation-slide__text">
                  <span class="consultation-slide__fullname">Альбина Альбертовна</span>
                  <span class="consultation-slide__specialization">Гематолог</span>
                </div>
              </div>
            </li>
            <li class="consultation-slider__slide swiper-slide consultation-slide">
              <div class="consultation-slide__wrapper">
                <div class="consultation-slide__img-wrapper">
                  <img src="/" alt="" class="consultation-slide__img">
                </div>
                <div class="consultation-slide__text">
                  <span class="consultation-slide__fullname">Альбина Альбертовна</span>
                  <span class="consultation-slide__specialization">Гематолог</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>




    <section class="main__form form">
      <div class="content-block__wrapper">
        <h1 class="content-block__header">Заявка на онлайн консультацию</h1>
        <div class="content-block__subtitle-wrapper">
          <form method="POST" action="{{ route('consult.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form__input-wrapper">
              <label class="form__label" for="Заголовок вопроса">Заголовок вопроса</label>
              <input class="form__input" type="text" id="username" name="title" value="{{ old('title') }}">
            </div>
            <div class="form__input-wrapper">
              <label class="form__label" for="Возраст пациента">Возраст пациента</label>
              <input class="form__input" type="text" id="age" name="age" value="{{ old('age') }}">
            </div>

            <div class="form__input-wrapper">
              <label class="form__label" for="Ваше имя">Как к вам обращаться?</label>
              <input class="form__input" type="text" id="username" name="username" value="{{ old('username') }}">
            </div>

            <div class="form__input-wrapper">
              <label class="form__label" for="Ваше имя">Ваш email</label>
              <input class="form__input" type="text" id="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form__input-wrapper">
              <label class="form__label" for="Ваше имя">Ваш город</label>
              <input class="form__input" type="text" id="email" name="city_id" value="5633">
            </div>

            <select id="rubric_id" name="rubric_id" class="form__status-select">
              @foreach($categories as $category)
              <option class="" value="{{ $category->id ? $category->id : old('category') }}">
                {{ $category->short_title }}
              </option>
              @endforeach
            </select>

            <div>
              <textarea name="description" id="description">{{ old('description') }}</textarea>
            </div>

            <div>

              <label class="form__label-photo">
                <img src="/images/dashboard/#.svg" alt="" class="form__input-photo-img">
                <span class="form__input-photo-text">Загрузить фото</span>
                <input class="form__input-photo @error('image')input-error @enderror" type="file" name="image">
              </label>
            </div>

            <div class="form__input-wrapper">
              <label class="form__label" for="Ваше имя">Ваш город</label>
              <input class="form__input" type="submit" value="Отправить">
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</main>

@endsection