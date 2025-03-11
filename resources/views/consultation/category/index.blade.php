@extends('appwide')
@section('title', $category->title)
@section('description', $category->meta_description)
@section('keywords', $category->meta_keywords)
@section('canonical', 'consultation/'. $category->slug)

@section('content')

<section class="main__intro category-intro">
  <div class="category-intro__wrapper section-wrapper">
    <div class="category-intro__inner">
      <div class="category-intro__top">
        <h1 class="category-intro__title">{{ $category->h1 }}</h1>
        <div class="category-intro__text">
          <p class="category-intro__p">Работаем круглосуточно. Практикующие врачи и психологи. Консультацию
            {{ $category->name_v }} можно получить через разные способы коммуникации. В онлайн чате вы можете быстро
            задать вопрос и получить ответ в режиме реального времени, а по телефону — обсудить свои проблемы более
            подробно.
          </p>
          <p class="category-intro__p">
            Видеоконсультация позволяет врачам видеть пациента и проводить более полное обследование, в то время как
            мессенджеры обеспечивают удобство общения в любое время, позволяя делиться медицинскими документами и фото.
          </p>
        </div>
      </div>
      <div class="category-intro__button-block">
        <a href="/consultation/comment?rubric_id={{ $category->id }}" class="category-intro__button-link">Онлайн
          консультация</a>
        <div class="category-intro__button-text">Предоставим ответ в течение 25 минут</div>
      </div>
    </div>
  </div>
</section>

<section class="main__ask-question-form ask-question-form">
  <div class="ask-question-form__wrapper">
    <h2 class="ask-question-form__title">Задать вопрос гематологу онлайн </h2>
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

<section class="main__category-info category-info">
  <div class="category-info__wrapper section-wrapper">
    <div class="category-info__inner">
      <ul class="category-info__tabs">
        <li class="category-info__tab" data-tab="1">Задать вопрос</li>
        <li class="category-info__tab category-info__tab--active" data-tab="2">Специалисты</li>
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
        <li class="category-info__tab category-info__tab--active" data-tab="2">
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
          <div class="category-info__form category-form">
            <div class="category-form__wrapper">
              <h2 class="category-form__title">Задать вопрос {{ $category->button_name }} онлайн</h2>
              <form action="/" class="category-form__form">
                <textarea name="text" class="category-form__textarea"
                  placeholder="Опишите детали для {{ $category->name_v }}, которые важны для ответа."></textarea>
                <input type="submit" value="Продолжить →" class="category-form__submit">
              </form>
            </div>
          </div>
        </div>


        <div class="category-info__tab-content category-info__tab-content--active" id="tab-2">

          <div class="category-info__category-card-wrapper">
            @foreach ($texts as $text)
            <div class="category-info__category-card category-card">
              <div class="category-card__wrapper">
                <div class="category-card__left">
                  <div class="category-card__header-info">
                    <a href="{{ route('user.profile.item', $text->user->username) }}"
                      class="category-card__avatar-link">
                      <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $text->user->avatar }}" alt=""
                        class="category-card__avatar">
                    </a>
                    <a href="{{ route('user.profile.item', $text->user->username) }}"
                      class="category-card__fullname">{{ $text->user->first_name .' '. $text->user->middle_name }}</a>
                    <span class="category-card__online">{{ 
    $text->user->last_activity > now()->subMinutes(5) 
    ? 'Сейчас онлайн' 
    : ($text->user->gender === 0 
        ? 'Был сегодня в ' . \Carbon\Carbon::parse($text->user->last_activity)->format('H:i') 
        : 'Была сегодня в ' . \Carbon\Carbon::parse($text->user->last_activity)->format('H:i')) 
}}</span>
                    <div class="category-card__icons">
                      <div class="category-card__icon-wrapper">
                        <div class="category-card__icon-img">
                          <svg width="1em" height="1em" viewBox="0 0 24 23" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ui_YpY4A">
                            <path
                              d="M13.039 2.63884C12.8853 2.1965 12.4683 1.9 12 1.9C11.5317 1.9 11.1147 2.1965 10.961 2.63884L8.97872 8.34156L2.94255 8.46457C2.47435 8.47411 2.06351 8.77904 1.9188 9.22442C1.77409 9.6698 1.92722 10.158 2.3004 10.4409L7.11146 14.0884L5.36317 19.8671C5.22756 20.3154 5.39061 20.8003 5.76948 21.0756C6.14834 21.3508 6.65994 21.3561 7.04434 21.0886L12 17.6401L16.9557 21.0886C17.3401 21.3561 17.8517 21.3508 18.2305 21.0756C18.6094 20.8003 18.7724 20.3154 18.6368 19.8671L16.8885 14.0884L21.6996 10.4409C22.0728 10.158 22.2259 9.6698 22.0812 9.22442C21.9365 8.77904 21.5257 8.47411 21.0574 8.46457L15.0213 8.34156L13.039 2.63884Z"
                              stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <span class="icon-text">5,0</span>
                      </div>
                      <div class="category-card__icon-wrapper">
                        <div class="category-card__icon-img">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ui_YpY4A">
                            <path
                              d="M4 11.43H4.85L4.85 10.58H4V11.43ZM4 13.6358H3.15H4ZM5.70711 14.3429L6.30815 14.9439L5.70711 14.3429ZM8.62 11.43V10.58H8.26792L8.01896 10.8289L8.62 11.43ZM2.85 4.54999C2.85 3.91486 3.36487 3.39999 4 3.39999V1.69999C2.42599 1.69999 1.15 2.97597 1.15 4.54999H2.85ZM2.85 9.42999V4.54999H1.15V9.42999H2.85ZM4 10.58C3.36487 10.58 2.85 10.0651 2.85 9.42999H1.15C1.15 11.004 2.42599 12.28 4 12.28V10.58ZM4.85 13.6358L4.85 11.43H3.15L3.15 13.6358H4.85ZM5.10607 13.7418C5.07398 13.7739 5.04838 13.7827 5.02952 13.7859C5.00601 13.79 4.97511 13.7878 4.9426 13.7744C4.91008 13.7609 4.8867 13.7406 4.87296 13.7211C4.86193 13.7054 4.85 13.6811 4.85 13.6358H3.15C3.15 15.2839 5.14271 16.1094 6.30815 14.9439L5.10607 13.7418ZM8.01896 10.8289L5.10607 13.7418L6.30815 14.9439L9.22104 12.031L8.01896 10.8289ZM12 10.58H8.62V12.28H12V10.58ZM13.15 9.42999C13.15 10.0651 12.6351 10.58 12 10.58V12.28C13.574 12.28 14.85 11.004 14.85 9.42999H13.15ZM13.15 4.54999V9.42999H14.85V4.54999H13.15ZM12 3.39999C12.6351 3.39999 13.15 3.91486 13.15 4.54999H14.85C14.85 2.97598 13.574 1.69999 12 1.69999V3.39999ZM4 3.39999H12V1.69999H4V3.39999Z"
                              fill="currentColor"></path>
                          </svg>
                        </div>
                        <a href="/" class="icon-text">189 отзывов</a>
                      </div>
                    </div>
                  </div>
                  <div class="category-card__passport">
                    <div class="category-card__passport-img">
                      <svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.9651 4.83824C13.739 4.17941 12.5549 3.98382 12.135 3.43824C11.7152 2.88235 11.8767 1.73971 11.3061 1.33824C10.7356 0.936765 9.65912 1.44118 8.97017 1.23529C8.29198 1.01912 7.7322 0 7.00019 0C6.26818 0 5.7084 1.01912 5.04098 1.23529C4.35203 1.44118 3.27554 0.936765 2.69424 1.33824C2.1237 1.73971 2.28517 2.88235 1.86534 3.43824C1.45627 3.98382 0.261371 4.17941 0.0353084 4.83824C-0.179989 5.47647 0.659672 6.3 0.659672 7C0.659672 7.7 -0.179989 8.52353 0.0353084 9.16177C0.261371 9.82059 1.44551 10.0162 1.86534 10.5618C2.28517 11.1176 2.1237 12.2603 2.69424 12.6618C3.26477 13.0632 4.34126 12.5588 5.03022 12.7647C5.7084 12.9809 6.26818 14 7.00019 14C7.7322 14 8.29198 12.9809 8.9594 12.775C9.64835 12.5588 10.7248 13.0632 11.2954 12.6721C11.8767 12.2706 11.7044 11.1279 12.1243 10.5721C12.5441 10.0265 13.7282 9.83088 13.9543 9.17206C14.1696 8.53382 13.3299 7.71029 13.3299 7.01029C13.3299 6.3103 14.1804 5.47647 13.9651 4.83824ZM10.7141 5.84706L5.9237 10.4279L3.2863 7.90588C2.98489 7.61765 2.98489 7.16471 3.2863 6.87647C3.58772 6.58824 4.06138 6.58824 4.36279 6.87647L5.9237 8.36912L9.63759 4.81765C9.939 4.52941 10.4127 4.52941 10.7141 4.81765C11.0155 5.10588 11.0155 5.55882 10.7141 5.84706Z"
                          fill="#18d15c"></path>
                      </svg>
                    </div>
                    <span class="category-card__passport-text">Паспорт проверен</span>
                  </div>
                  <div class="category-card__passport">
                    <div class="category-card__passport-img">
                      <svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.9651 4.83824C13.739 4.17941 12.5549 3.98382 12.135 3.43824C11.7152 2.88235 11.8767 1.73971 11.3061 1.33824C10.7356 0.936765 9.65912 1.44118 8.97017 1.23529C8.29198 1.01912 7.7322 0 7.00019 0C6.26818 0 5.7084 1.01912 5.04098 1.23529C4.35203 1.44118 3.27554 0.936765 2.69424 1.33824C2.1237 1.73971 2.28517 2.88235 1.86534 3.43824C1.45627 3.98382 0.261371 4.17941 0.0353084 4.83824C-0.179989 5.47647 0.659672 6.3 0.659672 7C0.659672 7.7 -0.179989 8.52353 0.0353084 9.16177C0.261371 9.82059 1.44551 10.0162 1.86534 10.5618C2.28517 11.1176 2.1237 12.2603 2.69424 12.6618C3.26477 13.0632 4.34126 12.5588 5.03022 12.7647C5.7084 12.9809 6.26818 14 7.00019 14C7.7322 14 8.29198 12.9809 8.9594 12.775C9.64835 12.5588 10.7248 13.0632 11.2954 12.6721C11.8767 12.2706 11.7044 11.1279 12.1243 10.5721C12.5441 10.0265 13.7282 9.83088 13.9543 9.17206C14.1696 8.53382 13.3299 7.71029 13.3299 7.01029C13.3299 6.3103 14.1804 5.47647 13.9651 4.83824ZM10.7141 5.84706L5.9237 10.4279L3.2863 7.90588C2.98489 7.61765 2.98489 7.16471 3.2863 6.87647C3.58772 6.58824 4.06138 6.58824 4.36279 6.87647L5.9237 8.36912L9.63759 4.81765C9.939 4.52941 10.4127 4.52941 10.7141 4.81765C11.0155 5.10588 11.0155 5.55882 10.7141 5.84706Z"
                          fill="#18d15c"></path>
                      </svg>
                    </div>
                    <span class="category-card__passport-text">Диплом проверен</span>
                  </div>
                  <a href="#" class="category-card__msg category-card__msg--mobile red-button">Написать
                    сообщение</a>
                  <div class="category-card__text-wrapper">
                    <span class="category-card__text">{{ $text->description }}</span>
                  </div>
                  <span class="category-card__small-title">Образование и опыт </span>
                  <span class="category-card__big-text">{{ $text->user->work_place }}
                  </span>
                  @php /*<span class="category-card__small-title">Услуги и цены </span>
                  <div class="category-card__dotted-wrapper">
                    <div class="category-card__dotted-item">
                      <span class="category-card__dotted-text">Форма Р14001 </span>
                      <div class="category-card__dots"></div>
                      <span class="category-card__dotted-text-right">от 1000 ₽/усл</span>
                    </div>
                    <div class="category-card__dotted-item">
                      <span class="category-card__dotted-text">Форма Р14001 </span>
                      <div class="category-card__dots"></div>
                      <span class="category-card__dotted-text-right">от 1000 ₽/усл</span>
                    </div>
                    <div class="category-card__dotted-item">
                      <span class="category-card__dotted-text">Бухгалтеры </span>
                      <div class="category-card__dots"></div>
                      <span class="category-card__dotted-text-right">по договорённости </span>
                    </div>
                  </div>*/@endphp
                </div>
                <div class="category-card__right">
                  <a href="/" class="category-card__msg red-button">Написать сообщение</a>
                  <span class="category-card__small-title--sidebar">Работает дистанционно</span>
                  <span class="category-card__text">Специалист из Москвы</span>

                  <span class="category-card__small-title--sidebar">Среднее время отклика</span>
                  <span class="category-card__text">
                    @php
                    $minutes = $text->user->response; // например, это число минут
                    $minuteWord = \App\Helpers\TextHelper::getMinuteWord($minutes);
                    @endphp
                    {{ $minutes }} {{ $minuteWord }}</span>

                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="main__questions-accordion questions-accordion">
  <div class="questions-accordion__wrapper">
    <div class="questions-accordion__inner container">
      <ul class="questions-accordion__list">
        <li class="questions-accordion__item question-accordion">
          <div class="question-accordion__wrapper">
            <div class="question-accordion__inner">
              <span class="question-accordion__title">Сколько по времени занимает оплата зарубежного сервиса?</span>
              <div class="question-accordion__button">
                <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                  class="Accordion__icon">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                    fill="#000"></path>
                </svg>
              </div>
            </div>
            <div class="question-accordion__ansver-wrapper">
              <span class="question-accordion__ansver-text">От нескольких минут до нескольких часов.</span>
            </div>
          </div>
        </li>
        <li class="questions-accordion__item question-accordion">
          <div class="question-accordion__wrapper">
            <div class="question-accordion__inner">
              <span class="question-accordion__title">Сколько по времени занимает оплата зарубежного сервиса?</span>
              <div class="question-accordion__button">
                <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                  class="Accordion__icon">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                    fill="#000"></path>
                </svg>
              </div>
            </div>
            <div class="question-accordion__ansver-wrapper">
              <span class="question-accordion__ansver-text">От нескольких минут до нескольких часов.</span>
            </div>
          </div>
        </li>
        <li class="questions-accordion__item question-accordion">
          <div class="question-accordion__wrapper">
            <div class="question-accordion__inner">
              <span class="question-accordion__title">Сколько по времени занимает оплата зарубежного сервиса?</span>
              <div class="question-accordion__button">
                <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                  class="Accordion__icon">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                    fill="#000"></path>
                </svg>
              </div>
            </div>
            <div class="question-accordion__ansver-wrapper">
              <span class="question-accordion__ansver-text">От нескольких минут до нескольких часов.</span>
            </div>
          </div>
        </li>
        <li class="questions-accordion__item question-accordion">
          <div class="question-accordion__wrapper">
            <div class="question-accordion__inner">
              <span class="question-accordion__title">Сколько по времени занимает оплата зарубежного сервиса?</span>
              <div class="question-accordion__button">
                <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                  class="Accordion__icon">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                    fill="#000"></path>
                </svg>
              </div>
            </div>
            <div class="question-accordion__ansver-wrapper">
              <span class="question-accordion__ansver-text">От нескольких минут до нескольких часов.</span>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

@if ($category->subcategories->isNotEmpty())
<section class="main__themes themes">
  <div class="themes__wrapper section-wrapper small-container">
    <h2 class="themes__title">Вопросы {{ $category->button_name }} {{ $executionTime }}</h2>
    <ul class="themes__sort-list">
      <li class="themes__sort-item" data-sort-btn="1">
        <span class="themes__sort-item-text">Первая категория</span>
      </li>
      <li class="themes__sort-item" data-sort-btn="2">
        <span class="themes__sort-item-text">Вторая категория</span>
      </li>
      <li class="themes__sort-item" data-sort-btn="3">
        <span class="themes__sort-item-text">Третья категория</span>
      </li>
      <li class="themes__sort-item" data-sort-btn="4">
        <span class="themes__sort-item-text">Четвертая категория</span>
      </li>
      <li class="themes__sort-item" data-sort-btn="5">
        <span class="themes__sort-item-text">Пятая категория</span>
      </li>
      <li class="themes__sort-item" data-sort-btn="6">
        <span class="themes__sort-item-text">Шестая категория</span>
      </li>
      <li class="themes__sort-item" data-sort-btn="7">
        <span class="themes__sort-item-text">Седьмая категория</span>
      </li>
      <li class="themes__sort-item" data-sort-btn="8">
        <span class="themes__sort-item-text">Восьмая категория</span>
      </li>
    </ul>
    <ul class="themes__list">
      @foreach($groupedSubcategories as $letter => $subcategories)
      <li class="themes__item">
        <span class="themes__letter">{{ $letter }}</span>
        <ul class="themes__sublist">
          @foreach($subcategories as $subcategory)
          <li class="themes__subitem" data-sort-target="{{ $subcategory->position }}">
            <a href="{{ route('consultation.subrubric', ['categorySlug' => $category->slug, 
		  'subcategorySlug' => $subcategory->slug]) }}" class="themes__link">{{ $subcategory->short_title }}</a>
          </li>
          @endforeach
        </ul>
      </li>
      @endforeach
    </ul>
  </div>
</section>
@endif

<section class="main__reviews-slider reviews-slider">
  <div class="reviews-slider__wrapper">
    <div class="reviews-slider__header">
      <h3 class="reviews-slider__title">Отзывы клиентов</h3>
      <a href="/" class="reviews-slider__header-button">Все предложения</a>
    </div>
    <ul class="reviews-slider__tabs">
      <li class="reviews-slider__tab reviews-slider__tab--active">Все</li>
      <li class="reviews-slider__tab">Инвестиции</li>
      <li class="reviews-slider__tab">Дебетовые карты</li>
      <li class="reviews-slider__tab">Кредитные карты</li>
      <li class="reviews-slider__tab">Все</li>
      <li class="reviews-slider__tab">Инвестиции</li>
      <li class="reviews-slider__tab">Дебетовые карты</li>
      <li class="reviews-slider__tab">Кредитные карты</li>
      <li class="reviews-slider__tab">Все</li>
    </ul>
    <div class="reviews-slider__slider">
      <div class="swiper-wrapper">
        <div class="reviews-slider__slide swiper-slide">
          <div class="reviews-slider__slide-top">
            <img src="https://i.pravatar.cc/300" alt="" class="reviews-slider__avatar">
            <div class="reviews-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur placeat
              explicabo quaerat tempora, veritatis inventore unde corporis animi. Quidem enim, cupiditate odio illum
              officia
              dolore magni a. Molestias, consectetur iusto.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur placeat
              explicabo quaerat tempora, veritatis inventore unde corporis animi. Quidem enim, cupiditate odio illum
              officia
              dolore magni a. Molestias, consectetur iusto.</div>
          </div>
          <div class="reviews-slider__slide-bottom">
            <span class="reviews-slider__date">2025-01-01 00:00:01</span>
          </div>
        </div>
        <div class="reviews-slider__slide swiper-slide">
          <div class="reviews-slider__slide-top">
            <img src="https://i.pravatar.cc/300" alt="" class="reviews-slider__avatar">
            <div class="reviews-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur placeat
              explicabo quaerat tempora, veritatis inventore unde corporis animi. Quidem enim, cupiditate odio illum
              officia
              dolore magni a. Molestias, consectetur iusto.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur placeat
              explicabo quaerat tempora, veritatis inventore unde corporis animi. Quidem enim, cupiditate odio illum
              officia
              dolore magni a. Molestias, consectetur iusto.</div>
          </div>
          <div class="reviews-slider__slide-bottom">
            <span class="reviews-slider__date">2025-01-01 00:00:01</span>
          </div>
        </div>
        <div class="reviews-slider__slide swiper-slide">
          <div class="reviews-slider__slide-top">
            <img src="https://i.pravatar.cc/300" alt="" class="reviews-slider__avatar">
            <div class="reviews-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur placeat
              explicabo quaerat tempora, veritatis inventore unde corporis animi. Quidem enim, cupiditate odio illum
              officia
              dolore magni a. Molestias, consectetur iusto.</div>
          </div>
          <div class="reviews-slider__slide-bottom">
            <span class="reviews-slider__date">2025-01-01 00:00:01</span>
          </div>
        </div>
        <div class="reviews-slider__slide swiper-slide">
          <div class="reviews-slider__slide-top">
            <img src="https://i.pravatar.cc/300" alt="" class="reviews-slider__avatar">
            <div class="reviews-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur placeat
              explicabo quaerat tempora, veritatis inventore unde corporis animi. Quidem enim, cupiditate odio illum
              officia
              dolore magni a. Molestias, consectetur iusto.</div>
          </div>
          <div class="reviews-slider__slide-bottom">
            <span class="reviews-slider__date">2025-01-01 00:00:01</span>
          </div>
        </div>
        <div class="reviews-slider__slide swiper-slide">
          <div class="reviews-slider__slide-top">
            <img src="https://i.pravatar.cc/300" alt="" class="reviews-slider__avatar">
            <div class="reviews-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur placeat
              explicabo quaerat tempora, veritatis inventore unde corporis animi. Quidem enim, cupiditate odio illum
              officia
              dolore magni a. Molestias, consectetur iusto.</div>
          </div>
          <div class="reviews-slider__slide-bottom">
            <span class="reviews-slider__date">2025-01-01 00:00:01</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="main__description description">
  <div class="description__wrapper section-wrapper small-container">
    {!! $category->description !!}
  </div>
</section>

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