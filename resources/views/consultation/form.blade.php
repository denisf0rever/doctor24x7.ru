@extends('appsidebarfree')
@section('title', 'Консультация врача онлайн — задать вопрос и получить ответ в течение часа')
@section('description', 'Консультируют практикующие врачи, документы об образовании проверены администрацией сайта')
@section('keywords', 'Задать вопрос врачу онлайну, консультация врача онлайн')
@section('canonical', 'consultation/create')

@section('content')
@foreach($errors->all() as $error)
{{ $error }} <br />
@endforeach

<section class="main__text-service text-service">
  <h1 class="text-service__title">Консультация врача онлайн</h1>
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
  <h2 class="consultation-slider__title">Медицинские консультации предоставляют</h2>
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
  <div class="consultation-form__wrapper small-container">
    <h2 class="consultation-form__title">Задать вопрос врачам онлайн </h2>
    <div class="consultation-form__timeline-wrapper">
      <span class="consultation-form__timeline-text">Шаг <span id="step">1</span> из 4</span>
      <div class="consultation-form__timeline">
        <div class="consultation-form__timeline-active">

        </div>
      </div>
    </div>
    <form id="consultation-form" method="POST" action="{{ route('consultation.create') }}" enctype="multipart/form-data"
      class="consultation-form__form">
	  @csrf
      <div class="consultation-form__tubs">
        <div class="consultation-form__tub consultation-form__tub-active" data-step="1">
          <div class="consultation-form__tub-wrapper">
            <div class="consultation-form__tub-item">
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
            <div class="consultation-form__tub-item">
              <div class="consultation-form__radio-list">
                <div class="consultation-form__radio-wrapper">
                  <input checked class="consultation-form__radio" hidden id="radio-first" type="radio" name="radio"
                    value="1">
                  <label for="radio-first" class="consultation-form__radio-label">
                    <div class="consultation-form__radio-text">
                      Срочный непополняемый с досрочным возвратом
                    </div>
                    <div class="  consultation-form__radio-big-number">
                      21.14%
                    </div>
                    <div class="consultation-form__radio-small-number">
                      + 2661 ₽
                    </div>
                    <div class="consultation-form__radio-circle">

                    </div>
                  </label>
                </div>
                <div class="consultation-form__radio-wrapper">
                  <input class="consultation-form__radio" hidden id="radio-second" type="radio" name="radio" value="2">
                  <label for="radio-second" class="consultation-form__radio-label">
                    <div class="consultation-form__radio-text">
                      Срочный непополняемый с досрочным возвратом
                    </div>
                    <div class="  consultation-form__radio-big-number">
                      21.14%
                    </div>
                    <div class="consultation-form__radio-small-number">
                      + 2661 ₽
                    </div>
                    <div class="consultation-form__radio-circle">

                    </div>
                  </label>
                </div>
                <div class="consultation-form__radio-wrapper">
                  <input class="consultation-form__radio" hidden id="radio-third" type="radio" name="radio" value="3">
                  <label for="radio-third" class="consultation-form__radio-label">
                    <div class="consultation-form__radio-text">
                      Срочный
                    </div>
                    <div class="  consultation-form__radio-big-number">
                      21.14%
                    </div>
                    <div class="consultation-form__radio-small-number">
                      + 2661 ₽
                    </div>
                    <div class="consultation-form__radio-circle">

                    </div>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="consultation-form__tub" data-step="2">
          <div class="consultation-form__tub-wrapper">
            <div class="consultation-form__tub-item">
              <label class="consultation-form__tub-title" for="title">Заголовок вопроса</label>
              <div class="consultation-form__validation-wrapper">
                <input class="consultation-form__standart-input" type="text" id="title" name="title"
                  value="{{ old('title') }}">
              </div>
              <ul class="consultation-form__title-list">
                <li class="consultation-form__title-item">
                  Вы получите подробный <strong>ответ</strong> от содержательного заголовка
                </li>
                <li class="consultation-form__title-item">Опишите вопрос подробно. Например, «Вопрос врачу по поводу
                  противозачаточных и цикла», «Бросил курить, набрал вес, как быстро похудеть?»
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="consultation-form__tub" data-step="3">
          <div class="consultation-form__tub-wrapper">
            <div class="consultation-form__tub-item">
              <label class="consultation-form__tub-title" for="description">Текст вашего вопроса
              </label>
              <div class="consultation-form__validation-wrapper">
                <textarea class="consultation-form__description-textarea" id="description"
                  name="description">{{ old('description') }}</textarea>
              </div>
            </div>
            <div class="consultation-form__tub-item">
              <label class="consultation-form__tub-title" for="age">Возраст пациента</label>
              <div class="consultation-form__validation-wrapper consultation-form__age-flex">
                <div class="consultation-form__age-type-select-wrapper custom-select">
                  <span class="consultation-form__age-type-input-span" for="age_type">Год/Лет</span>
                  <input type="hidden" name="age_type" id="age_type" class="consultation-form__age-type-input"
                    value="Год/Лет">
                  <img src="/images/svg/elements/selector/expand-more.svg" alt=""
                    class="consultation-form__status-arrow custom-select__arrow">
                  <div
                    class="consultation-form__age-type-select-list-wrapper custom-select__wrapper custom-select__hide">
                    <ul class="custom-select__list consultation-form__age-type-list">
                      <li class="consultation-form__age-type-option" value="Год/Лет">
                        Год/Лет
                      </li>
                      <li class="consultation-form__age-type-option" value="Месяцев">
                        Месяцев
                      </li>
                    </ul>
                  </div>
                </div>
                <input class="consultation-form__age-input" type="number" id="age" name="age" value="{{ old('age') }}">






              </div>





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

              <div class="consultation-form__additional-photos">

              </div>
              <span class="consultation-form__add-photo">Добавить изображение</span>
            </div>
          </div>
        </div>
        <div class="consultation-form__tub " data-step="4">
          <div class="consultation-form__tub-wrapper">
            <div class="consultation-form__tub-item">
              <label class="consultation-form__tub-title" for="city">Ваш город</label>
              <input class="consultation-form__standart-input" type="text" id="city" name="city_id" value="5633">
            </div>
            <div class="consultation-form__tub-item-double">
              <div class="consultation-form__tub-item">
                <label class="consultation-form__tub-title" for="username">Как к вам обращаться?</label>
                <div class="consultation-form__validation-wrapper">
                  <input class="consultation-form__standart-input" type="text" id="username" name="username"
                    value="{{ old('username') }}">
                </div>
              </div>
              <div class="consultation-form__tub-item">
                <label class="consultation-form__tub-title" for="email">Ваш email</label>
                <div class="consultation-form__validation-wrapper">
                  <input class="consultation-form__standart-input" type="email" id="email" name="email"
                    value="{{ old('email') }}">
                </div>
              </div>
            </div>
          </div>
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
          <form method="POST" action="" enctype="multipart/form-data">
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
<section class="main__consultation-plan consultation-plan">
  <div class="consultation-plan__wrapper small-container">
    <div class="consultation-plan__top">
      <div class="consultation-plan__big-text consultation-plan__big-text-first">
        Чтобы <strong>задать вопрос врачу онлайн</strong>, вам потребуется
        всего несколько минут. Наши специалисты ответят в кратчайшие сроки и подскажут, как правильно поступить
        в вашей ситуации. Доверьте решение своей проблемы квалифицированным врачам!
      </div>
      <img src="" alt="" class="consultation-plan__img">
      <div class="consultation-plan__big-text consultation-plan__big-text-last">Качественные консультации
        профессиональных врачей.</div>
    </div>
    <ul class="consultation-plan__list">
      <li class="consultation-plan__item">
        <span class="consultation-plan__title">Как работает сервис </span>
      </li>
      <li class="consultation-plan__item">
        <div class="consultation-plan__item-title">
          <div class="consultation-plan__number">1</div>
          <span class="consultation-plan__item-title-text">Задайте вопрос</span>
        </div>
        <div class="consultation-plan__text">Мы получаем более 200 вопросов каждый день.
          Задайте свой!
        </div>
      </li>
      <li class="consultation-plan__item">
        <div class="consultation-plan__item-title">
          <div class="consultation-plan__number">2</div>
          <span class="consultation-plan__item-title-text">Получите ответы</span>
        </div>
        <div class="consultation-plan__text">На вопросы отвечают врачи со всей России и Украины. Среднее время
          ответа на сайте — 45 минут.
        </div>
      </li>
      <li class="consultation-plan__item">
        <div class="consultation-plan__item-title">
          <div class="consultation-plan__number">3</div>
          <span class="consultation-plan__item-title-text">Проблема решена!</span>
        </div>
        <div class="consultation-plan__text">95,4% пациентов остаются полностью довольны ответами и рекомендуют нас
          друзьям.
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="main__description description">
  <div class="description__wrapper section-wrapper small-container">
    <p>Вас <strong>консультируют практикующие врачи</strong>, которые имеют дипломы об образовании, а также
      ежедневный опыт работ в медицине. Днем на работе, а вечером - отвечают на вопросы онлайн.</p>
    <p>Ваш вопрос должен описывать конкретную ситуацию, а также содержать информацию о возрасте, поле, принимаемых
      медикаментах. Если вы сдавали анализы или проводили обследования, то укажите их результаты. Чем больше у врача
      информации о вас - тем проще ему работать с вашим вопросом и, вы сможете получить рекомендации по своей
      проблеме.</p>
    <p>Вы можете задать вопрос анонимно. Задавая вопрос, вы можете добавить к нему изображение (рентгенограмму,
      результаты анализов и прочие документы). Уведомление об ответе врача-консультанта поступает автору вопроса
      <strong>на электронную почту</strong>. Все наши консультанты являются практикующими врачами.
    </p>
    <p>Зачастую бывает так, что человек, у которого возникли симптомы какого-либо заболевания или происходят иные
      изменения в организме, по каким-то причинам отказывается идти в больницу. Факторами, которые оказывают влияние
      на такие решения могут быть различными: чувство стыда, боязнь больниц, смущение или желание оставаться
      инкогнито. Иногда у пациента существует реальная потребность в получении дополнительной информации.
      Консультация врача онлайн станет идеальным вариантом для каждой из этих ситуаций. Получение качественной
      медицинской консультации по интернету абсолютно анонимно и возможно без регистрации.</p>
    <p>Предлагаются услуги самых разных специалистов, в том числе и узких специализаций, которых просто может не
      оказаться в населенном пункте, где находится пациент. Можно задать вопрос врачу в самых разных категориях.
      Онлайн консультация врача поможет разобраться в спорных вопросах, определить направление лечения, получить
      необходимую квалифицированную информационную поддержку. <strong>Обратиться к врачу можно
        круглосуточно</strong>, без телефона и без регистрации. Предусмотрены дополнительные возможности для
      желающих провести платную консультацию врача онлайн - ответ будет получен уже в течение часа.</p>
  </div>
</section>

@endsection