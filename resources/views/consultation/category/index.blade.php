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
        <h2 class="category-intro__title">Консультация аллерголога онлайн </h2>
        <div class="category-intro__text">
          <p class="category-intro__p">
            Работаем круглосуточно. Практикующие врачи и психологи. Консультацию аллерголога можно получить через разные
            способы коммуникации. В онлайн чате вы можете быстро задать вопрос и получить ответ в режиме реального
            времени, а по телефону — обсудить свои проблемы более подробно.
          </p>
          <p class="category-intro__p">
            Видеоконсультация позволяет врачам видеть пациента и проводить более полное обследование, в то время как
            мессенджеры обеспечивают удобство общения в любое время, позволяя делиться медицинскими документами и фото.
          </p>
        </div>
      </div>
      <div class="category-intro__button-block">
        <a href="/consultation/comment?rubric_id=2" class="category-intro__button-link">Онлайн консультация</a>
        <div class="category-intro__button-text">Предоставим ответ в течение 25 минут</div>
      </div>
    </div>
  </div>
</section>

<section class="main__category-info category-info">
  <div class="category-info__wrapper container section-wrapper">
    <h2 class="category-info__title">Нужна помощь педиатра?</h2>
    <div class="category-info__inner">
      <ul class="category-info__tabs">
        <li class="category-info__tab category-info__tab--active" data-tab="1">Задать вопрос педиатру онлайн</li>
        <li class="category-info__tab" data-tab="2">Специалисты</li>
      </ul>
      <div class="category-info__tab-content-list">
        <div class="category-info__tab-content category-info__tab-content--active" id="tab-1">
          <div class="category-info__form category-form">
            <div class="category-form__wrapper">
              <span class="category-form__title">Остались пожелания к заказу?</span>
              <form action="/" class="category-form__form">
                <textarea name="text" class="category-form__textarea"
                  placeholder="Важные детали для специалиста, о которых мы не спросили"></textarea>
                <input type="submit" value="Продолжить →" class="category-form__submit">
              </form>
            </div>
          </div>
        </div>
        <div class="category-info__tab-content" id="tab-2">
          <div class="category-info__category-card category-card">
            <div class="category-card__wrapper">
              <div class="category-card__left">
                <div class="category-card__header-info">
                  <a href="/" class="category-card__avatar-link">
                    <img src="https://cdn.profi.ru/xfiles/pfiles/97f2cee3f5fd4451b95d8990e39c73e5.jpg-profi_a34-180.jpg"
                      alt="" class="category-card__avatar">
                  </a>
                  <a href="/" class="category-card__fullname">Антон Шипаков</a>
                  <span class="category-card__online">Был в сети 16 минут назад </span>
                  <div class="category-card__icon-wrapper">
                    <div class="category-card__icon-img">
                      <svg width="1em" height="1em" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="ui_YpY4A">
                        <path
                          d="M13.039 2.63884C12.8853 2.1965 12.4683 1.9 12 1.9C11.5317 1.9 11.1147 2.1965 10.961 2.63884L8.97872 8.34156L2.94255 8.46457C2.47435 8.47411 2.06351 8.77904 1.9188 9.22442C1.77409 9.6698 1.92722 10.158 2.3004 10.4409L7.11146 14.0884L5.36317 19.8671C5.22756 20.3154 5.39061 20.8003 5.76948 21.0756C6.14834 21.3508 6.65994 21.3561 7.04434 21.0886L12 17.6401L16.9557 21.0886C17.3401 21.3561 17.8517 21.3508 18.2305 21.0756C18.6094 20.8003 18.7724 20.3154 18.6368 19.8671L16.8885 14.0884L21.6996 10.4409C22.0728 10.158 22.2259 9.6698 22.0812 9.22442C21.9365 8.77904 21.5257 8.47411 21.0574 8.46457L15.0213 8.34156L13.039 2.63884Z"
                          stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"></path>
                      </svg>
                    </div>
                    <span class="icon-text">5,0</span>
                  </div>
                  <div class="category-card__icon-wrapper">
                    <div class="category-card__icon-img">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="ui_YpY4A">
                        <path
                          d="M4 11.43H4.85L4.85 10.58H4V11.43ZM4 13.6358H3.15H4ZM5.70711 14.3429L6.30815 14.9439L5.70711 14.3429ZM8.62 11.43V10.58H8.26792L8.01896 10.8289L8.62 11.43ZM2.85 4.54999C2.85 3.91486 3.36487 3.39999 4 3.39999V1.69999C2.42599 1.69999 1.15 2.97597 1.15 4.54999H2.85ZM2.85 9.42999V4.54999H1.15V9.42999H2.85ZM4 10.58C3.36487 10.58 2.85 10.0651 2.85 9.42999H1.15C1.15 11.004 2.42599 12.28 4 12.28V10.58ZM4.85 13.6358L4.85 11.43H3.15L3.15 13.6358H4.85ZM5.10607 13.7418C5.07398 13.7739 5.04838 13.7827 5.02952 13.7859C5.00601 13.79 4.97511 13.7878 4.9426 13.7744C4.91008 13.7609 4.8867 13.7406 4.87296 13.7211C4.86193 13.7054 4.85 13.6811 4.85 13.6358H3.15C3.15 15.2839 5.14271 16.1094 6.30815 14.9439L5.10607 13.7418ZM8.01896 10.8289L5.10607 13.7418L6.30815 14.9439L9.22104 12.031L8.01896 10.8289ZM12 10.58H8.62V12.28H12V10.58ZM13.15 9.42999C13.15 10.0651 12.6351 10.58 12 10.58V12.28C13.574 12.28 14.85 11.004 14.85 9.42999H13.15ZM13.15 4.54999V9.42999H14.85V4.54999H13.15ZM12 3.39999C12.6351 3.39999 13.15 3.91486 13.15 4.54999H14.85C14.85 2.97598 13.574 1.69999 12 1.69999V3.39999ZM4 3.39999H12V1.69999H4V3.39999Z"
                          fill="currentColor"></path>
                      </svg>
                    </div>
                    <a href="/" class="icon-text">189 отзывов</a>
                  </div>
                </div>
                <div class="category-card__passport">
                  <div class="category-card__passport-img">
                    <svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13.9651 4.83824C13.739 4.17941 12.5549 3.98382 12.135 3.43824C11.7152 2.88235 11.8767 1.73971 11.3061 1.33824C10.7356 0.936765 9.65912 1.44118 8.97017 1.23529C8.29198 1.01912 7.7322 0 7.00019 0C6.26818 0 5.7084 1.01912 5.04098 1.23529C4.35203 1.44118 3.27554 0.936765 2.69424 1.33824C2.1237 1.73971 2.28517 2.88235 1.86534 3.43824C1.45627 3.98382 0.261371 4.17941 0.0353084 4.83824C-0.179989 5.47647 0.659672 6.3 0.659672 7C0.659672 7.7 -0.179989 8.52353 0.0353084 9.16177C0.261371 9.82059 1.44551 10.0162 1.86534 10.5618C2.28517 11.1176 2.1237 12.2603 2.69424 12.6618C3.26477 13.0632 4.34126 12.5588 5.03022 12.7647C5.7084 12.9809 6.26818 14 7.00019 14C7.7322 14 8.29198 12.9809 8.9594 12.775C9.64835 12.5588 10.7248 13.0632 11.2954 12.6721C11.8767 12.2706 11.7044 11.1279 12.1243 10.5721C12.5441 10.0265 13.7282 9.83088 13.9543 9.17206C14.1696 8.53382 13.3299 7.71029 13.3299 7.01029C13.3299 6.3103 14.1804 5.47647 13.9651 4.83824ZM10.7141 5.84706L5.9237 10.4279L3.2863 7.90588C2.98489 7.61765 2.98489 7.16471 3.2863 6.87647C3.58772 6.58824 4.06138 6.58824 4.36279 6.87647L5.9237 8.36912L9.63759 4.81765C9.939 4.52941 10.4127 4.52941 10.7141 4.81765C11.0155 5.10588 11.0155 5.55882 10.7141 5.84706Z"
                        fill="currentColor"></path>
                    </svg>
                  </div>
                  <span class="category-card__passport-text">Паспорт проверен</span>
                </div>
                <div class="category-card__text-wrapper">
                  <span class="category-card__text">На сервисе с ноября 2019 г. На сервисе с ноября 2019 г.</span>
                  <span class="category-card__text">На сервисе с ноября 2019 г. На сервисе с ноября 2019 г.</span>
                  <span class="category-card__text">На сервисе с ноября 2019 г. На сервисе с ноября 2019 г.</span>
                </div>
                <span class="category-card__small-title">Образование и опыт </span>
                <span class="category-card__text">Финансовая академия при Правительстве РФ, факультет бухгалтерского
                  учёта, анализа и аудита, специальность – экономист2003 г.
                </span>
                <span class="category-card__small-title">Услуги и цены </span>
                <div class="category-card__dotted-wrapper">
                  <div class="category-card__dotted-item">
                    <span class="category-card__dotted-text">Форма Р14001 </span>
                    <span class="category-card__dotted-text">от 1000 ₽/усл</span>
                  </div>
                  <div class="category-card__dotted-item">
                    <span class="category-card__dotted-text">Форма Р14001 </span>
                    <span class="category-card__dotted-text">от 1000 ₽/усл</span>
                  </div>
                  <div class="category-card__dotted-item">
                    <span class="category-card__dotted-text">Бухгалтеры </span>
                    <span class="category-card__dotted-text">по договорённости </span>
                  </div>
                </div>
              </div>
              <div class="category-card__right">
                <a href="/" class="category-card__msg">Написать сообщение</a>
                <span class="category-card__small-title--sidebar">Работает дистанционно </span>
                <span class="category-card__text">Специалист из Москвы </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="main__category-questions category-questions">
  <div class="category-questions__wrapper section-wrapper small-container">
    <div class="category-questions__header">
      <h2 class="category-questions__title">Популярные вопросы </h2>
      <a href="/consultation/comment" class="category-questions__ask-question">Задать вопрос →</a>
    </div>
    <ul class="category-questions__list">
      <li class="category-questions__item">
        @if ($category->subcategories->isNotEmpty())
        @foreach($category->subcategories as $subcategory)
        <a href="{{ $subcategory->short_title }}" class="category-questions__link">
          <span class="category-questions__item-title">{{ $subcategory->short_title }}</span>
          <span class="category-questions__item-views">Просмотры: 45939</span>
          <div class="category-questions__item-arrow">→</div>
        </a>
        @endforeach
        @endif
      </li>
    </ul>
  </div>
</section>

<section class="main__description description">
  <div class="description__wrapper section-wrapper small-container">
    <p>Аллергические реакции — это чрезмерно резкий ответ организма на контакт с минимальным количеством тех или иных
      веществ. По данным официальной статистики процент людей страдающих аллергией на территории постсоветских стран
      составляет около 30% населения. На самом же деле, аллергиков намного больше, так как далеко не все люди обращаются
      к врачу. У некоторых, симптомы достаточно быстро проходят сами, а некоторые, к сожалению, занимаются самолечением.
    </p>
    <p>Когда нужно обратиться к врачу? Если у вас или ваших близких наблюдаются слезотечение, покраснение конъюнктивы,
      светобоязнь, выделения из носа или ощущение заложенности носа, частое чихание, настойчивый кашель, проблемы с
      дыханием, появление зудящей сыпи, возвышающейся над кожей (крапивница), покраснение и шелушение кожи в связи с
      воздействием на нее некоторых факторов (например, холод, косметика и т. д.), отеки различных частей тела. Все
      вышеуказанное говорит о большой вероятности именно аллергического заболевания.
    </p>
    <p>Если вы не знаете, куда и к какому специалисту обратиться с подобными жалобами, если вы уже обследованы, но нужно
      помочь в трактовке анализов, если вам было назначено лечение, а вы хотите получить мнение еще одного врача — вы
      можете задать вопрос на нашем портале и наши специалисты в короткое время помогут вам. Аллерголог в онлайн режиме
      проведет консультацию и даст свои рекомендации.
    </p>
    <a href="/" class="description__link">Детский аллерголог </a>
  </div>
</section>

<section class="main__themes themes">
  <div class="themes__wrapper section-wrapper small-container">
    <h2 class="themes__title">Темы справочных материалов</h2>
    <ul class="themes__list">
      <li class="themes__item">
        <span class="themes__letter">А</span>
        <ul class="themes__sublist">
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит</a>
          </li>
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит </a>
          </li>
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит </a>
          </li>
        </ul>
      </li>
      <li class="themes__item">
        <span class="themes__letter">А</span>
        <ul class="themes__sublist">
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит</a>
          </li>
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит </a>
          </li>
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит </a>
          </li>
        </ul>
      </li>
      <li class="themes__item">
        <span class="themes__letter">А</span>
        <ul class="themes__sublist">
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит</a>
          </li>
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит Автокредит</a>
          </li>
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит Автокредит Автокредит</a>
          </li>
        </ul>
      </li>
      <li class="themes__item">
        <span class="themes__letter">А</span>
        <ul class="themes__sublist">
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит</a>
          </li>
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит Автокредит</a>
          </li>
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит Автокредит Автокредит</a>
          </li>
        </ul>
      </li>
      <li class="themes__item">
        <span class="themes__letter">А</span>
        <ul class="themes__sublist">
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит</a>
          </li>
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит Автокредит</a>
          </li>
          <li class="themes__subitem">
            <a href="/" class="themes__link">Автокредит Автокредит Автокредит</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</section>

@endsection