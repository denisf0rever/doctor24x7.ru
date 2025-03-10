@extends('appsidebarfree')
@section('title', 'Консультация врача онлайн — задать вопрос и получить ответ в течение часа')
@section('description', 'Консультируют практикующие врачи, документы об образовании проверены администрацией сайта')
@section('keywords', 'Задать вопрос врачу онлайн, консультация врача онлайн')
@section('canonical', 'consultation/comment')

@section('content')
<section class="main__text-service text-service">
  <h1 class="text-service__title">Консультация врача онлайн</h1>
  <div class="text-service__wrapper section-wrapper">
    <ul class="text-service__list">
      <li class="text-service__item"><b>Через сколько ответит врач?</b> Готовим ответ в среднем 25 минут. Наш сервис
        работает круглосуточно.</li>
      <li class="text-service__item"><b>Гарантии.</b> Мы юридическое лицо и несем ответственность перед
        законодательством РФ. Нашим сервисом уже воспользовались более 700.000 пользователей. Юридическая информация и
        отзывы <a href="/about-us" target="_blank">тут</a>. Документы врачей проверены. Минимальный стаж врачей 8 лет.
      </li>
      <li class="text-service__item"><b>Как проходит консультация?</b> Врач предоставит ответ и мы оповестим вас по
        почте, вы сможете задать дополнительные вопросы в онлайн чате. Ответ максимально подробный, чтобы консультация
        была полезной для вас.</li>
      <li class="text-service__item"><b>Как задать вопрос врачу?</b> Чтобы получить консультацию врача, заполните форму
        и ожидайте ответ в течение часа.</li>
    </ul>
  </div>
</section>

<section class="consultants-pupup">
  <div class="consultants-pupup__open red-button" id="consultants-pupup">Консультанты</div>
  <div class="consultants-pupup__overlay"></div>
  <div class="consultants-pupup__wrapper">
    <div class="consultants-pupup__header">
      <span class="consultants-pupup__title">Выберите специалиста</span>
      <div class="consultants-pupup__close">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23">
          <g fill="none" fill-rule="evenodd">
            <path fill="#515151" d="M.04 21.753L21.253.54l.707.707L.747 22.46z"></path>
            <path fill="#525252" d="M21.96 21.753L.747.54l-.707.707L21.253 22.46z"></path>
          </g>
        </svg>
      </div>
    </div>
    <div class="consultants-pupup__main">
      <div class="consultants-pupup__left-list">
        <ul class="consultants-pupup__categories">
          <li class="consultants-pupup__category" data-category="gematolog">
            <span class="consultants-pupup__category-title">Гематолог</span>
            <div class="consultants-pupup__category-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="M5 3L11 8L5 13">
                </path>
              </svg>
            </div>
          </li>
          <li class="consultants-pupup__category" data-category="surgeon">
            <span class="consultants-pupup__category-title">Хирург</span>
            <div class="consultants-pupup__category-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="M5 3L11 8L5 13">
                </path>
              </svg>
            </div>
          </li>
          <li class="consultants-pupup__category" data-category="gematolog">
            <span class="consultants-pupup__category-title">Гематолог</span>
            <div class="consultants-pupup__category-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="M5 3L11 8L5 13">
                </path>
              </svg>
            </div>
          </li>
          <li class="consultants-pupup__category" data-category="surgeon">
            <span class="consultants-pupup__category-title">Хирург</span>
            <div class="consultants-pupup__category-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="M5 3L11 8L5 13">
                </path>
              </svg>
            </div>
          </li>
          <li class="consultants-pupup__category" data-category="gematolog">
            <span class="consultants-pupup__category-title">Гематолог</span>
            <div class="consultants-pupup__category-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="M5 3L11 8L5 13">
                </path>
              </svg>
            </div>
          </li>
          <li class="consultants-pupup__category" data-category="surgeon">
            <span class="consultants-pupup__category-title">Хирург</span>
            <div class="consultants-pupup__category-arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 16 16" height="16" width="16">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="M5 3L11 8L5 13">
                </path>
              </svg></div>
          </li>
          <li class="consultants-pupup__category" data-category="gematolog">
            <span class="consultants-pupup__category-title">Гематолог</span>
            <div class="consultants-pupup__category-arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 16 16" height="16" width="16">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="M5 3L11 8L5 13">
                </path>
              </svg></div>
          </li>
          <li class="consultants-pupup__category" data-category="surgeon">
            <span class="consultants-pupup__category-title">Хирург</span>
            <div class="consultants-pupup__category-arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 16 16" height="16" width="16">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="M5 3L11 8L5 13">
                </path>
              </svg></div>
          </li>
        </ul>
      </div>
      <div class="consultants-pupup__right-list">
        <div class="consultants-pupup__back-btn">
          <div class="consultants-pupup__back-btn-img">
            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
              <path d="M8 17L3 12M3 12L8 7M3 12H21" stroke="#000000" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </div>
          <span class="consultants-pupup__back-btn-text">
            Назад
          </span>

        </div>
        <ul class="consultants-pupup__specialists">
          <li class="consultants-pupup__specialist">
            <a href="/" class="consultants-pupup__specialist-link">
              <img src="https://i.pravatar.cc/300" alt="" class="consultants-pupup__specialist-avatar">
              <span class="consultants-pupup__specialist-fullname">Тестовое имя</span>
              <span class="consultants-pupup__specialist-subtitle">Subtitle</span>
            </a>
          </li>
          <li class="consultants-pupup__specialist">
            <a href="/" class="consultants-pupup__specialist-link">
              <img src="https://i.pravatar.cc/300" alt="" class="consultants-pupup__specialist-avatar">
              <span class="consultants-pupup__specialist-fullname">Тестовое имя</span>
              <span class="consultants-pupup__specialist-subtitle">Subtitle</span>
            </a>
          </li>
          <li class="consultants-pupup__specialist">
            <a href="/" class="consultants-pupup__specialist-link">
              <img src="https://i.pravatar.cc/300" alt="" class="consultants-pupup__specialist-avatar">
              <span class="consultants-pupup__specialist-fullname">Тестовое имя</span>
              <span class="consultants-pupup__specialist-subtitle">Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. At, cum? Velit, ab! Quod mollitia quas repudiandae praesentium accusamus quis quos nostrum, nemo
                tenetur atque, explicabo, a iure officiis! Quasi, laborum?</span>
            </a>
          </li>
          <li class="consultants-pupup__specialist">
            <a href="/" class="consultants-pupup__specialist-link">
              <img src="https://i.pravatar.cc/300" alt="" class="consultants-pupup__specialist-avatar">
              <span class="consultants-pupup__specialist-fullname">Тестовое имя</span>
              <span class="consultants-pupup__specialist-subtitle">Subtitle</span>
            </a>
          </li>
          <li class="consultants-pupup__specialist">
            <a href="/" class="consultants-pupup__specialist-link">
              <img src="https://i.pravatar.cc/300" alt="" class="consultants-pupup__specialist-avatar">
              <span class="consultants-pupup__specialist-fullname">Тестовое имя</span>
              <span class="consultants-pupup__specialist-subtitle">Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. At, cum? Velit, ab! Quod mollitia quas repudiandae praesentium accusamus quis quos nostrum, nemo
                tenetur atque, explicabo, a iure officiis! Quasi, laborum?</span>
            </a>
          </li>
          <li class="consultants-pupup__specialist">
            <a href="/" class="consultants-pupup__specialist-link">
              <img src="https://i.pravatar.cc/300" alt="" class="consultants-pupup__specialist-avatar">
              <span class="consultants-pupup__specialist-fullname">Тестовое имя</span>
              <span class="consultants-pupup__specialist-subtitle">Subtitle</span>
            </a>
          </li>
          <li class="consultants-pupup__specialist">
            <a href="/" class="consultants-pupup__specialist-link">
              <img src="https://i.pravatar.cc/300" alt="" class="consultants-pupup__specialist-avatar">
              <span class="consultants-pupup__specialist-fullname">Тестовое имя</span>
              <span class="consultants-pupup__specialist-subtitle">Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. At, cum? Velit, ab! Quod mollitia quas repudiandae praesentium accusamus quis quos nostrum, nemo
                tenetur atque, explicabo, a iure officiis! Quasi, laborum?</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


@if ($errors->any())
<div>
  <strong>Ошибки:</strong>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

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
            <div class="consultation-form__tub-item consultation-form__radio-slider">
              <div class="consultation-form__radio-list swiper-wrapper">
                <div class="consultation-form__radio-wrapper swiper-slide">
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
                <div class="consultation-form__radio-wrapper swiper-slide">
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
                <div class="consultation-form__radio-wrapper swiper-slide">
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
              <div class="consultation-form__photos">
                <div class="consultation-form__photo-item">
                  <label class="consultation-form__photo-wrapper" for="file-upload">
                    <img src="/images/dashboard/#.svg" alt="" class="consultation-form__input-photo-img">
                    <span class="consultation-form__input-photo-text">Загрузить фото</span>
                  </label>
                  <input class="consultation-form__input-photo @error('image')input-error @enderror" type="file"
                    id="file-upload" name="images[]">
                </div>
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
<section class="main__consultation-plan consultation-plan">
  <div class="consultation-plan__wrapper small-container">
    <div class="consultation-plan__top">
      <div class="consultation-plan__big-text consultation-plan__big-text-first">
        Чтобы <strong>задать вопрос врачу онлайн</strong>, вам потребуется
        всего несколько минут. Наши специалисты ответят в кратчайшие сроки и подскажут, как правильно поступить
        в вашей ситуации. Доверьте решение своей проблемы квалифицированным врачам!
      </div>
      <img src="{{ Storage::url('common/category/firstscreen.svg') }}" alt="" class="consultation-plan__img">
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
        <div class="consultation-plan__text">На вопросы отвечают врачи онлайн. Среднее время
          ответа на сайте — 25 минут.
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
    <p>При формулировании вопроса опишите ваш вопрос подробно, предоставьте информацию о возрасте, поле и принимаемых
      медикаментах. Если у вас есть результаты анализов или данные обследований, не забудьте их прикрепить. Чем больше
      информации у врача, тем эффективнее он сможет помочь вам и предоставить индивидуальные рекомендации по вашей
      проблеме. Вы можете задать вопрос анонимно. Уведомления о ответах врачей поступят вам на электронную почту. Все
      наши консультанты – это практикующие специалисты.</p>
    <p>Онлайн-консультация с врачом – это идеальное решение чтобы получить альтернативное мнение или получить ответ до
      посещения врача очно. Мы предлагаем услуги врачей различных специализаций, включая узких специалистов, которых
      может не быть в вашем населенном пункте. Консультации доступны круглосуточно. Для желающих получить платную
      консультацию предусмотрены ускоренные ответы – вы можете ожидать ответ уже в течение часа.</p>
  </div>
</section>

@endsection