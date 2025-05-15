@extends('appsidebarfree')
@section('title', $user->full_name)
@section('description', '2')
@section('keywords', '3')
@section('canonical', 'profile/'. '4')

@section('chat')
@vite(['resources/views/user/profile/src/main.jsx'])
@endsection

@section('content')


<div>
  <section class="user-block main__user-block">
    <div class="section-wrapper user-block__wrapper">
      <div class="user-block__header-info">
        <div class="user-block__avatar-link">
          <picture>
            <source type="image/webp" srcset="/storage/avatar/webp/{{ $user->webp_avatar }}" class="user-block__avatar">
            <img src="/storage/avatar/{{ $user->avatar }}" alt="" class="user-block__avatar">
          </picture>
        </div>
        <h1 class="user-block__fullname">{{ $user->full_name }}</h1>
        <span class="user-block__online">{{ $user->city }} На сайте с <strong>{{ $date }}</strong></span>
        <div class="user-block__passports">
          <div class="user-block__passport">
            <div class="user-block__passport-img">
              <svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M13.9651 4.83824C13.739 4.17941 12.5549 3.98382 12.135 3.43824C11.7152 2.88235 11.8767 1.73971 11.3061 1.33824C10.7356 0.936765 9.65912 1.44118 8.97017 1.23529C8.29198 1.01912 7.7322 0 7.00019 0C6.26818 0 5.7084 1.01912 5.04098 1.23529C4.35203 1.44118 3.27554 0.936765 2.69424 1.33824C2.1237 1.73971 2.28517 2.88235 1.86534 3.43824C1.45627 3.98382 0.261371 4.17941 0.0353084 4.83824C-0.179989 5.47647 0.659672 6.3 0.659672 7C0.659672 7.7 -0.179989 8.52353 0.0353084 9.16177C0.261371 9.82059 1.44551 10.0162 1.86534 10.5618C2.28517 11.1176 2.1237 12.2603 2.69424 12.6618C3.26477 13.0632 4.34126 12.5588 5.03022 12.7647C5.7084 12.9809 6.26818 14 7.00019 14C7.7322 14 8.29198 12.9809 8.9594 12.775C9.64835 12.5588 10.7248 13.0632 11.2954 12.6721C11.8767 12.2706 11.7044 11.1279 12.1243 10.5721C12.5441 10.0265 13.7282 9.83088 13.9543 9.17206C14.1696 8.53382 13.3299 7.71029 13.3299 7.01029C13.3299 6.3103 14.1804 5.47647 13.9651 4.83824ZM10.7141 5.84706L5.9237 10.4279L3.2863 7.90588C2.98489 7.61765 2.98489 7.16471 3.2863 6.87647C3.58772 6.58824 4.06138 6.58824 4.36279 6.87647L5.9237 8.36912L9.63759 4.81765C9.939 4.52941 10.4127 4.52941 10.7141 4.81765C11.0155 5.10588 11.0155 5.55882 10.7141 5.84706Z"
                  fill="#18d15c"></path>
              </svg>
            </div>
            <span class="user-block__passport-text">Паспорт проверен</span>
          </div>
          <div class="user-block__passport">
            <div class="user-block__passport-img">
              <svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M13.9651 4.83824C13.739 4.17941 12.5549 3.98382 12.135 3.43824C11.7152 2.88235 11.8767 1.73971 11.3061 1.33824C10.7356 0.936765 9.65912 1.44118 8.97017 1.23529C8.29198 1.01912 7.7322 0 7.00019 0C6.26818 0 5.7084 1.01912 5.04098 1.23529C4.35203 1.44118 3.27554 0.936765 2.69424 1.33824C2.1237 1.73971 2.28517 2.88235 1.86534 3.43824C1.45627 3.98382 0.261371 4.17941 0.0353084 4.83824C-0.179989 5.47647 0.659672 6.3 0.659672 7C0.659672 7.7 -0.179989 8.52353 0.0353084 9.16177C0.261371 9.82059 1.44551 10.0162 1.86534 10.5618C2.28517 11.1176 2.1237 12.2603 2.69424 12.6618C3.26477 13.0632 4.34126 12.5588 5.03022 12.7647C5.7084 12.9809 6.26818 14 7.00019 14C7.7322 14 8.29198 12.9809 8.9594 12.775C9.64835 12.5588 10.7248 13.0632 11.2954 12.6721C11.8767 12.2706 11.7044 11.1279 12.1243 10.5721C12.5441 10.0265 13.7282 9.83088 13.9543 9.17206C14.1696 8.53382 13.3299 7.71029 13.3299 7.01029C13.3299 6.3103 14.1804 5.47647 13.9651 4.83824ZM10.7141 5.84706L5.9237 10.4279L3.2863 7.90588C2.98489 7.61765 2.98489 7.16471 3.2863 6.87647C3.58772 6.58824 4.06138 6.58824 4.36279 6.87647L5.9237 8.36912L9.63759 4.81765C9.939 4.52941 10.4127 4.52941 10.7141 4.81765C11.0155 5.10588 11.0155 5.55882 10.7141 5.84706Z"
                  fill="#18d15c"></path>
              </svg>
            </div>
            <span class="user-block__passport-text">Диплом проверен</span>
          </div>
        </div>
        <div class="user-block__icons">
          <div class="user-block__icon-wrapper">
            <div class="user-block__icon-img">
              <svg width="1em" height="1em" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="ui_YpY4A">
                <path
                  d="M13.039 2.63884C12.8853 2.1965 12.4683 1.9 12 1.9C11.5317 1.9 11.1147 2.1965 10.961 2.63884L8.97872 8.34156L2.94255 8.46457C2.47435 8.47411 2.06351 8.77904 1.9188 9.22442C1.77409 9.6698 1.92722 10.158 2.3004 10.4409L7.11146 14.0884L5.36317 19.8671C5.22756 20.3154 5.39061 20.8003 5.76948 21.0756C6.14834 21.3508 6.65994 21.3561 7.04434 21.0886L12 17.6401L16.9557 21.0886C17.3401 21.3561 17.8517 21.3508 18.2305 21.0756C18.6094 20.8003 18.7724 20.3154 18.6368 19.8671L16.8885 14.0884L21.6996 10.4409C22.0728 10.158 22.2259 9.6698 22.0812 9.22442C21.9365 8.77904 21.5257 8.47411 21.0574 8.46457L15.0213 8.34156L13.039 2.63884Z"
                  stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"></path>
              </svg>
            </div>
            <span class="icon-text">5,0</span>
          </div>
          <div class="user-block__icon-wrapper">
            <div class="user-block__icon-img">
              <svg width="1em" height="1em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="ui_YpY4A">
                <path
                  d="M4 11.43H4.85L4.85 10.58H4V11.43ZM4 13.6358H3.15H4ZM5.70711 14.3429L6.30815 14.9439L5.70711 14.3429ZM8.62 11.43V10.58H8.26792L8.01896 10.8289L8.62 11.43ZM2.85 4.54999C2.85 3.91486 3.36487 3.39999 4 3.39999V1.69999C2.42599 1.69999 1.15 2.97597 1.15 4.54999H2.85ZM2.85 9.42999V4.54999H1.15V9.42999H2.85ZM4 10.58C3.36487 10.58 2.85 10.0651 2.85 9.42999H1.15C1.15 11.004 2.42599 12.28 4 12.28V10.58ZM4.85 13.6358L4.85 11.43H3.15L3.15 13.6358H4.85ZM5.10607 13.7418C5.07398 13.7739 5.04838 13.7827 5.02952 13.7859C5.00601 13.79 4.97511 13.7878 4.9426 13.7744C4.91008 13.7609 4.8867 13.7406 4.87296 13.7211C4.86193 13.7054 4.85 13.6811 4.85 13.6358H3.15C3.15 15.2839 5.14271 16.1094 6.30815 14.9439L5.10607 13.7418ZM8.01896 10.8289L5.10607 13.7418L6.30815 14.9439L9.22104 12.031L8.01896 10.8289ZM12 10.58H8.62V12.28H12V10.58ZM13.15 9.42999C13.15 10.0651 12.6351 10.58 12 10.58V12.28C13.574 12.28 14.85 11.004 14.85 9.42999H13.15ZM13.15 4.54999V9.42999H14.85V4.54999H13.15ZM12 3.39999C12.6351 3.39999 13.15 3.91486 13.15 4.54999H14.85C14.85 2.97598 13.574 1.69999 12 1.69999V3.39999ZM4 3.39999H12V1.69999H4V3.39999Z"
                  fill="currentColor"></path>
              </svg>
            </div>
            <a href="#reviews" class="icon-text">Отзывы: 8</a>
          </div>
        </div>
      </div>
      <div class="profile-buttons">
        <div class="profile-buttons__wrapper">
          <div class="profile-buttons__button user-anchor-button js-button">Обратиться в чат</div>
          <a href="tel:89270625036" class="profile-buttons__button user-anchor-button">Позвонить</a>
        </div>
      </div>
      <div class="profile-stat">
        <ul class="profile-stat__list">
          <li class="profile-stat__item">
            <div class="profile-stat__title">Высокий рейтинг</div>
            <div class="profile-stat__text"> <span class="profile-stat__main-text">100</span> %</div>
            <div class="profile-stat__likes">
              <div class="profile-stat__likes-item">
                <div class="profile-stat__likes-img">
                  <svg viewBox="0 0 24 24" width="16" height="16" style="stroke: #81d3ac;">
                    <path fill="#000"
                      d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
                    </path>
                  </svg>
                </div>
                <div class="profile-stat__likes-text">8</div>
              </div>
              <div class="profile-stat__likes-item">
                <div class="profile-stat__likes-img profile-stat__dislike">
                  <svg viewBox="0 0 24 24" width="16" height="16" style="stroke: #f15c60;">
                    <path fill="#000"
                      d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
                    </path>
                  </svg>
                </div>
                <div class="profile-stat__likes-text">0</div>
              </div>
            </div>
          </li>
          <li class="profile-stat__item">
            <div class="profile-stat__title">Проведено консультаций: </div>
            <div class="profile-stat__text"><span class="profile-stat__main-text">2688</span></div>
          </li>
          <li class="profile-stat__item">
            <div class="profile-stat__title">На сайте с</div>
            <div class="profile-stat__text"> <span class="profile-stat__main-text">09 февраля 2022</span>
              г.</div>
          </li>
          <li class="profile-stat__item">
            <div class="profile-stat__title">ID:</div>
            <div class="profile-stat__text"> <span class="profile-stat__main-text">5191</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="user-description main__user-description">
    <div class="section-wrapper user-description__wrapper">
      <div class="user-description__header">
        <div class="user-description__header-item tab-header user-description__header-item--active" data-id="1">О
          специалисте
        </div>
        <div class="user-description__header-item tab-header" data-id="2">Отзывы</div>
        <div class="user-description__header-item tab-header" data-id="3">Консультации</div>
      </div>
      <div class="tabs-wrapper">
        <div class="user-description tab-content" content-id="1">
          <p>Врач-педиатр, к.м.н., соавтор научных статей и методических пособий. Стаж работы 12 лет. В работе опираюсь
            на
            российские клинические рекомендации. Ежедневно прослушиваю медицинские онлайн конференции. Считаю, что
            главное
            в профессии врача – слушать и слышать, смотреть и видеть, руководствоваться современными медицинскими
            знаниями
            в профилактике, диагностике и лечении. А ещё, принимая решения, давать рекомендации, помня простую истину –
            «поступай с другими так, как хочешь, чтобы поступали с тобой».</p>
          <p>С 2003 по 2009 год обучалась в ГОУ ВПО «Российский государственный медицинский университет Федерального
            агентства по здравоохранению и социальному развитию» в г. Москве по специальности педиатрия.</p>
          <p>С 2009 по 2014 год обучалась в ординатуре и аспирантуре в ГОУ ДПО «Российская медицинская академия
            последипломного образования Росздрава» в г. Москве по специальности педиатрия.</p>
          <p>С 2010 по 2014 год работала в медицинском пункте кадетского корпуса в должности врача - педиатра.</p>
          <p>В 2015 году защитила кандидатскую диссертацию на тему: «Обеспеченность витамином D девочек-подростков
            города
            Москвы в зимнее время года».</p>
          <p>С 2014 по 2022 год работала в частной поликлинике семейной медицины в должности врача - педиатра.</p>
          <p>Онлайн консультация, Расшифровка анализов, Оценка физического развития, Оценка группы риска по
            заболеваниям,
            Советы по профилактике и ЗОЖ, Помощь с вскармливанием грудничка, Помощь в составлении рациона питания
            ребенка,
            Подбор детской смеси, Помощь детям с избыточной массой тела, Составление графика вакцинопрофилактики</p>
          <p><b>Диплом</b></p>
          <p><a href="/uploads/sfGuard/doc/2022/doctorsvet/1.jpg"><img
                data-src="/uploads/sfGuard/doc/2022/doctorsvet/1.jpg" style="max-width:400px" alt="Диплом"
                class="lazyloaded" src="/uploads/sfGuard/doc/2022/doctorsvet/1.jpg"></a></p>

          <p><b>Сертификат</b></p>
          <p><a href="/uploads/sfGuard/doc/2022/doctorsvet/2.jpg"><img
                data-src="/uploads/sfGuard/doc/2022/doctorsvet/2.jpg" style="max-width:400px" alt="Сертификат"
                class="lazyloaded" src="/uploads/sfGuard/doc/2022/doctorsvet/2.jpg"></a></p>
        </div>
        <div class="user-description-reviews tab-content hide" content-id="2">
          <span class="user-description-reviews__text">Текущий высокий рейтинг 100%</span>
          <div class="user-description-reviews__stat">
            <div class="user-description-reviews__stat-item">Хорошо 8 </div>
            <div class="user-description-reviews__stat-item">Плохо 0</div>
          </div>

          <ul class="user-description-reviews__list">
            <li class="user-description-reviews__item">
              <img src="/images/svg/profile-comment.svg" alt="" class="user-description-reviews__avatar">
              <span class="user-description-reviews__name">Анна Б</span>
              <span class="user-description-reviews__date">2025-04-20 18:47:17</span>
              <div class="user-description-reviews__data">
                <div class="user-description-reviews__data-like">
                  <svg viewBox="0 0 24 24" width="16" height="16" style="stroke: #81d3ac;">
                    <path fill="#000"
                      d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
                    </path>
                  </svg>
                </div>
                <span class="user-description-reviews__data-text">Веселое, бодрое. Апетит хороший. Думаю что это пищевая
                  аллергия тк много было продуктов и сладкого последние дни. Интересен ответ как аллерголога - что
                  делать,
                  мазать что посоветуете.</span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <img src="/images/svg/profile-comment.svg" alt="" class="user-description-reviews__avatar">
              <span class="user-description-reviews__name">Елена</span>
              <span class="user-description-reviews__date">2024-01-06 19:33:27</span>
              <div class="user-description-reviews__data">
                <div class="user-description-reviews__data-like">
                  <svg viewBox="0 0 24 24" width="16" height="16" style="stroke: #81d3ac;">
                    <path fill="#000"
                      d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
                    </path>
                  </svg>
                </div>
                <span class="user-description-reviews__data-text">Спасибо за ответ, обязательно сдадим анализы</span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <img src="/images/svg/profile-comment.svg" alt="" class="user-description-reviews__avatar">
              <span class="user-description-reviews__name">Яна</span>
              <span class="user-description-reviews__date">2023-07-20 22:05:38</span>
              <div class="user-description-reviews__data">
                <div class="user-description-reviews__data-like">
                  <svg viewBox="0 0 24 24" width="16" height="16" style="stroke: #81d3ac;">
                    <path fill="#000"
                      d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
                    </path>
                  </svg>
                </div>
                <span class="user-description-reviews__data-text">Очень быстро ответили, успокоили, огромное спасибо!
                </span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <img src="/images/svg/profile-comment.svg" alt="" class="user-description-reviews__avatar">
              <span class="user-description-reviews__name">Юлия</span>
              <span class="user-description-reviews__date">2023-01-24 01:15:39</span>
              <div class="user-description-reviews__data">
                <div class="user-description-reviews__data-like">
                  <svg viewBox="0 0 24 24" width="16" height="16" style="stroke: #81d3ac;">
                    <path fill="#000"
                      d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
                    </path>
                  </svg>
                </div>
                <span class="user-description-reviews__data-text">Спасибо за ответ! Всё хорошо. </span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <img src="/images/svg/profile-comment.svg" alt="" class="user-description-reviews__avatar">
              <span class="user-description-reviews__name">Dokka</span>
              <span class="user-description-reviews__date">2023-01-01 16:44:44</span>
              <div class="user-description-reviews__data">
                <div class="user-description-reviews__data-like">
                  <svg viewBox="0 0 24 24" width="16" height="16" style="stroke: #81d3ac;">
                    <path fill="#000"
                      d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
                    </path>
                  </svg>
                </div>
                <span class="user-description-reviews__data-text">Большое спасибо!</span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <img src="/images/svg/profile-comment.svg" alt="" class="user-description-reviews__avatar">
              <span class="user-description-reviews__name">Наталья</span>
              <span class="user-description-reviews__date">2022-11-07 14:33:01</span>
              <div class="user-description-reviews__data">
                <div class="user-description-reviews__data-like">
                  <svg viewBox="0 0 24 24" width="16" height="16" style="stroke: #81d3ac;">
                    <path fill="#000"
                      d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
                    </path>
                  </svg>
                </div>
                <span class="user-description-reviews__data-text">Спасибо вам огромное </span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <img src="/images/svg/profile-comment.svg" alt="" class="user-description-reviews__avatar">
              <span class="user-description-reviews__name">Галина</span>
              <span class="user-description-reviews__date">2022-05-27 14:23:21</span>
              <div class="user-description-reviews__data">
                <div class="user-description-reviews__data-like">
                  <svg viewBox="0 0 24 24" width="16" height="16" style="stroke: #81d3ac;">
                    <path fill="#000"
                      d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
                    </path>
                  </svg>
                </div>
                <span class="user-description-reviews__data-text">Консультация дала много информации. Спасибо
                  огромное!!!!</span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <img src="/images/svg/profile-comment.svg" alt="" class="user-description-reviews__avatar">
              <span class="user-description-reviews__name">Римма</span>
              <span class="user-description-reviews__date">2022-05-09 07:30:32</span>
              <div class="user-description-reviews__data">
                <div class="user-description-reviews__data-like">
                  <svg viewBox="0 0 24 24" width="16" height="16" style="stroke: #81d3ac;">
                    <path fill="#000"
                      d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
                    </path>
                  </svg>
                </div>
                <span class="user-description-reviews__data-text">Светлана Васильевна, огромное Вам спасибо за
                  консультацию! Получила ценные рекомендации по обследованию ребёнка - теперь знаю какие анализы нужно
                  сдать, в каком направлении двигаться. Побольше бы таких внимательных и компетентных специалистов в
                  нашей
                  медицине! Здоровья Вам и благодарных пациентов!</span>
              </div>
            </li>
          </ul>
        </div>
        <div class="user-description-reviews tab-content hide" content-id="3">
          <span class="user-description-reviews__text">Проведенные консультации</span>
          <ul class="user-description-reviews__list">
            <li class="user-description-reviews__item">
              <div class="user-description-reviews__data">
                <span class="user-description-reviews__data-text"><a href="/consultation/detail/694108">Нужно залечить
                    трещины сосков, применять крем Пурелан и постараться наладить грудное вскармливание. Прикладывайте к
                    груди по требованию. Каждое кормление чередуйте груди. Сами много пейте жидкости, полноценно
                    питайтесь. Беспокоиться ребенок может по разным причинам: из-за голода, жажды, при опорожнении
                    кишки.
                    Между кормлениями предлагайте пить воду из бутылочки, следите за регулярностью стула, ежедневно
                    купайте и следите за состоянием пупочного остатка, после каждого кормления держите "столбиком". Очно
                    покажите педиатру при сохранении беспокойства и если отметите вялое сосание груди. Также исключите
                    проблемы с прикладыванием к груди. Получите очную консультацию по грудному вскармливанию, а также
                    осмотрите у стоматолога. Сейчас период привыкания и добывания молока из груди.</a></span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <div class="user-description-reviews__data">
                <span class="user-description-reviews__data-text"><a href="/consultation/detail/693724">Необходимо
                    обратиться в приемное отделение детской больницы для решения вопроса о проведении рентгена легких в
                    прямой проекции <br>
                    в связи с высокой лихорадкой и начале антибиотикотерапии. Важно также сдать общий анализ мочи. По
                    общему анализу крови не выявлено изменений, но это только дополнительный метод диагностики. Если в
                    риноцитограмме превышено число нейтрофилов, то есть подозрение на бактериальный характер
                    инфекции.</a></span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <div class="user-description-reviews__data">
                <span class="user-description-reviews__data-text"><a href="/consultation/detail/693406">Необходимо
                    дообследование: сделать УЗИ желудка с нагрузкой едой, сдать кал на копрограмму и углеводы, осмотреть
                    стул у врача на возможное наличие слизи. Возможны временная непереносимость цельного белка молока и
                    вторичная лактазная недостаточность. В качестве диетодиагностики на 4 недели переведите а
                    гидролизную
                    смесь, например, НАН антиаллергия. Эффект от смеси через 1-2 недели при пищевой непереносимости.
                    Переводите постепенно, следите, чтобы ребенок спал на боку, после каждого кормления держите
                    "столбиком". Применяйте газоотводные трубочки.</a></span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <div class="user-description-reviews__data">
                <span class="user-description-reviews__data-text"><a href="/consultation/detail/693186">По описываемым
                    симптомам, есть подозрение, что у ребенка присутствует пищевая непереносимость. Нутрилон комфорт -
                    смесь на основе частично-расщепленного белка. Нужна смесь на основе полностью расщепленного белка,
                    например Нутрилон пепти аллергия. Кормить ею нужно не менее 3 месяцев, на ней вводить прикорм с 5
                    месяцев. Эффект от смеси в плане нормализации стула ждите не ранее, чем через 2 недели. Начните
                    пробиотикаю на 10 дней, например, Нормобакт Л. Обсудите рекомендации с лечащим врачом на очном
                    осмотре. Сдайте копрограмму и получите консультацию гастроэнтеролога или аллерголога. Не забывайте о
                    даче витамина Л 1000 МЕ по утрам. И ставьте газоотводную трубочку для облегчения состояния, ребенок
                    к
                    ней не привыкнет, это миф. Смесь на основе козьего белка в вашем случае не рекомендую.</a></span>
              </div>
            </li>
            <li class="user-description-reviews__item">
              <div class="user-description-reviews__data">
                <span class="user-description-reviews__data-text"><a href="/consultation/detail/693099">Виброцил
                    разрешен
                    с 1 года жизни. Фенистил можно только коротким курсом. Получите консультацию гастроэнтеролога.
                    Возможно, что присутствует аллергический отек слизистой носа, либо как следствие аллергического
                    рефлюкса (заброса питания в нос). На каком вскармливании ребёнок? Есть ли срыгивания?</a></span>
              </div>
            </li>
          </ul>
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
@endsection