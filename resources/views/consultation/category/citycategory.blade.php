@extends('appwide')
@section('title', 'Консультация '.$category->name_v.' в ' .$city->name_p .' — задать вопрос врачу онлайн')
@section('description', 'Круглосуточная консультация по медицинским вопросам в ' .$city->name_p .' онлайн и по телефону,
гарантия ответа в течение часа')
@section('keywords', 'Консультация врача в ' .$city->name_p .', задать вопрос врачу в ' .$city->name_p)
@section('canonical', 'consultation/city/'. $city->slug)


<meta name="description"
  content="Ищете гинеколога? Врачи ответят в течение часа, задайте вопрос врачам гинекологам бесплатно">
<meta name="keywords" content="Консультация гинеколога онлайн, задать вопрос гинекологу, гинеколог онлайн">

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
                {{  Str::lcfirst($category->name_v) }}. @else {{  Str::lcfirst($category->name_v_m) }}. @endif Мы
                понимаем, как важно быстро и точно получить ответ на вопросы, касающиеся здоровья, поэтому наши
                специалисты всегда готовы предоставить вам квалифицированные рекомендации, основанные на актуальных
                данных и индивидуальных особенностях вашего состояния. Процесс консультации прост и удобен: вы можете
                задать вопросы, обсудить симптомы и получить советы по выбору лечения, не выходя из дома. Мы гарантируем
                полную конфиденциальность и безопасность ваших данных, а также оперативность в ответах. Заботьтесь о
                своем здоровье вместе с нашим сервисом.</p>
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
      <h2 class="ask-question-form__title">Задать вопрос PLACEHOLDER</h2>
      <ul class="ask-question-form__blocks">
        <li class="ask-question-form__block">
          <img src="{{ asset('storage/category/first-step.svg') }}" class="ask-question-form__block-img">
          <div class="ask-question-form__separator"></div>
          <div class="ask-question-form__text-wrapper">
            <span class="ask-question-form__block-title">Спросите врача онлайн </span>
            <span class="ask-question-form__block-subtitle">Напишите свой вопрос </span>
          </div>
        </li>
        <li class="ask-question-form__block">
          <img src="{{ asset('storage/category/second-step.svg') }}" class="ask-question-form__block-img">
          <div class="ask-question-form__separator"></div>
          <div class="ask-question-form__text-wrapper">
            <span class="ask-question-form__block-title">Укажите данные для связи </span>
            <span class="ask-question-form__block-subtitle">Телефон или почта </span>
          </div>
        </li>
        <li class="ask-question-form__block">
          <img src="{{ asset('storage/category/third-step.svg') }}" class="ask-question-form__block-img">
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
  <section class="main__сategory-info сategory-info ">
    <div class="category-info__wrapper">
      <div class="category-info__inner small-container">
        <ul class="category-info__tabs">
          <li class="category-info__tab" data-tab="1">Задать вопрос</li>
          <li class="category-info__tab city-info__tab--active" data-tab="2">Специалисты</li>
        </ul>
        <ul class="category-info__tabs--mobile">
          <li class="category-info__tab" data-tab="1">
            <div class="category-info__tab-icon">
              <svg width="1em" height="1em" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="ui_YpY4A">
                <path
                  d="M13.039 2.63884C12.8853 2.1965 12.4683 1.9 12 1.9C11.5317 1.9 11.1147 2.1965 10.961 2.63884L8.97872 8.34156L2.94255 8.46457C2.47435 8.47411 2.06351 8.77904 1.9188 9.22442C1.77409 9.6698 1.92722 10.158 2.3004 10.4409L7.11146 14.0884L5.36317 19.8671C5.22756 20.3154 5.39061 20.8003 5.76948 21.0756C6.14834 21.3508 6.65994 21.3561 7.04434 21.0886L12 17.6401L16.9557 21.0886C17.3401 21.3561 17.8517 21.3508 18.2305 21.0756C18.6094 20.8003 18.7724 20.3154 18.6368 19.8671L16.8885 14.0884L21.6996 10.4409C22.0728 10.158 22.2259 9.6698 22.0812 9.22442C21.9365 8.77904 21.5257 8.47411 21.0574 8.46457L15.0213 8.34156L13.039 2.63884Z"
                  stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"></path>
              </svg>
            </div>
            <span class="category-info__tab-icon-text">Задать вопрос</span>
          </li>
          <li class="category-info__tab city-info__tab--active" data-tab="2">
            <div class="category-info__tab-icon">
              <svg width="1em" height="1em" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="ui_YpY4A">
                <path
                  d="M13.039 2.63884C12.8853 2.1965 12.4683 1.9 12 1.9C11.5317 1.9 11.1147 2.1965 10.961 2.63884L8.97872 8.34156L2.94255 8.46457C2.47435 8.47411 2.06351 8.77904 1.9188 9.22442C1.77409 9.6698 1.92722 10.158 2.3004 10.4409L7.11146 14.0884L5.36317 19.8671C5.22756 20.3154 5.39061 20.8003 5.76948 21.0756C6.14834 21.3508 6.65994 21.3561 7.04434 21.0886L12 17.6401L16.9557 21.0886C17.3401 21.3561 17.8517 21.3508 18.2305 21.0756C18.6094 20.8003 18.7724 20.3154 18.6368 19.8671L16.8885 14.0884L21.6996 10.4409C22.0728 10.158 22.2259 9.6698 22.0812 9.22442C21.9365 8.77904 21.5257 8.47411 21.0574 8.46457L15.0213 8.34156L13.039 2.63884Z"
                  stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"></path>
              </svg>
            </div>
            <span class="category-info__tab-icon-text">Специалисты</span>
          </li>
        </ul>
        <div class="category-info__tab-content-list">
          <div class="category-info__tab-content" id="tab-1">
            <div class="category-info__form city-form">
              <div class="category-form__wrapper">
                <h2 class="category-form__title">Задать вопрос {{ $city->button_name }} онлайн</h2>
                <form action="/" class="category-form__form">
                  <textarea name="text" class="category-form__textarea"
                    placeholder="Опишите детали для {{ $city->name_v }}, которые важны для ответа."></textarea>
                  <input type="submit" value="Продолжить →" class="category-form__submit">
                </form>
              </div>
            </div>
          </div>


          <div class="category-info__tab-content city-info__tab-content--active" id="tab-2">

            <div class="category-info__city-card-wrapper">

            </div>
          </div>
        </div>
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

<section class="main__doc-list doc-list">
  <div class="doc-list__wrapper container">
    <h3 class="doc-list__title">Нужна помощь хирурга? </h3>
    <span class="doc-list__subtitle">Консультация хирурга онлайн в реальном времени </span>
    <div class="doc-list__list">
      <a href="/" class="doc-list__link">
        <img src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250" alt="" class="doc-list__img">
        <span class="doc-list__fullname">Виктория Витальевна</span>
        <span class="doc-list__specialization">Врач, онлайн консультант</span>
      </a>
      <a href="/" class="doc-list__link">
        <img src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250" alt="" class="doc-list__img">
        <span class="doc-list__fullname">Виктория Витальевна</span>
        <span class="doc-list__specialization">Врач, онлайн консультант</span>
      </a>
      <a href="/" class="doc-list__link">
        <img src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250" alt="" class="doc-list__img">
        <span class="doc-list__fullname">Виктория Витальевна</span>
        <span class="doc-list__specialization">Врач, онлайн консультант</span>
      </a>
      <a href="/" class="doc-list__link">
        <img src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250" alt="" class="doc-list__img">
        <span class="doc-list__fullname">Виктория Витальевна</span>
        <span class="doc-list__specialization">Врач, онлайн консультант</span>
      </a>
      <a href="/" class="doc-list__link">
        <img src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250" alt="" class="doc-list__img">
        <span class="doc-list__fullname">Виктория Витальевна</span>
        <span class="doc-list__specialization">Врач, онлайн консультант</span>
      </a>
      <a href="/" class="doc-list__link">
        <img src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250" alt="" class="doc-list__img">
        <span class="doc-list__fullname">Виктория Витальевна</span>
        <span class="doc-list__specialization">Врач, онлайн консультант</span>
      </a>
    </div>
  </div>
</section>

@endsection