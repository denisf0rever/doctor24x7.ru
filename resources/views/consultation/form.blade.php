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


    <section class="main__consultation-form consultation-form">
      <div class="consultation-form__wrapper">
        <h2 class="consultation-form__title">Задать вопрос врачам онлайн </h2>
        <div class="consultation-form__timeline-wrapper">
          <span class="consultation-form__timeline-text">Шаг <span id="step">1</span> из 4</span>
          <div class="consultation-form__timeline">
            <div class="consultation-form__timeline-active">

            </div>
          </div>
        </div>
        <form action="" class="consultation-form__form">
          <div class="consultation-form__tubs">
            <div class="consultation-form__tub consultation-form__tub-active" data-step="1">
              <div class="consultation-form__select-wrapper custom-select">
                <span class="consultation-form__rubric-input-span" for="rubric_id">Сомневаюсь с выбором</span>
                <input type="hidden" name="rubric_id" id="rubric_id" class="consultation-form__rubric-input" value="28">
                <img src="/images/svg/elements/selector/expand-more.svg" alt=""
                  class="consultation-form__status-arrow custom-select__arrow">
                <div class="consultation-form__status-select-wrapper custom-select__wrapper custom-select__hide">
                  <ul class="custom-select__list consultation-form__list">
                    @foreach($categories as $category)
                    <li class="consultation-form__option" value="{{ $category->id ? $category->id : old('category') }}">
                      {{ $category->short_title }}
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="consultation-form__subtitle">Выберите категорию </div>
            </div>
            <div class="consultation-form__tub" data-step="2">
              <label class="consultation-form__tub-title" for="title">Заголовок вопроса</label>
              <input class="consultation-form__input-title" type="text" id="title" name="title"
                value="{{ old('title') }}">
              <ul class="consultation-form__title-list">
                <li class="consultation-form__title-item">
                  Вы получите подробный <strong>ответ</strong> от содержательного заголовка
                </li>
                <li class="consultation-form__title-item">Опишите вопрос подробно. Например, «Вопрос врачу по поводу
                  противозачаточных и цикла», «Бросил курить, набрал вес, как быстро похудеть?»
                </li>
              </ul>
            </div>
            <div class="consultation-form__tub" data-step="3">

              <div class="consultation-form__tub-wrapper">
                <div class="consultation-form__tub-item">
                  <label class="consultation-form__tub-title" for="description">Текст вашего вопроса
                  </label>
                  <textarea class="consultation-form__description-textarea" id="description"
                    name="description">{{ old('description') }}</textarea>
                </div>
                <div class="consultation-form__tub-item">
                  <label class="consultation-form__tub-title" for="age">Возраст пациента</label>
                  <input class="consultation-form__age-input" type="number" id="age" name="age"
                    value="{{ old('age') }}">
                </div>
                <div class="consultation-form__tub-item">
                  <label class="consultation-form__tub-title">Снимки, анализы (необязательно)
                  </label>
                  <label class="consultation-form__photo-wrapper" for="file-upload">
                    <img src="/images/dashboard/#.svg" alt="" class="consultation-form__input-photo-img">
                    <span class="consultation-form__input-photo-text">Загрузить фото</span>
                  </label>
                  <input class="consultation-form__input-photo @error('image')input-error @enderror" type="file"
                    id="file-upload" name="image">
                </div>
              </div>
            </div>










            <div class="consultation-form__tub " data-step="4">

              <label class="consultation-form__tub-title" for="city">Ваш город</label>
              <input class="consultation-form__city-input" type="text" id="city" name="city_id" value="5633">

            </div>
          </div>
          <div class="consultation-form__buttons">
            <div class="consultation-form__btn consultation-form__btn-prev" id="consultation-form-prev">Назад</div>
            <div class="consultation-form__btn consultation-form__btn-next" id="consultation-form-next">Продолжить</div>
          </div>
        </form>
      </div>
    </section>

    <!-- <section class="main__form form">
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
    </section> -->
  </div>
</main>

@endsection