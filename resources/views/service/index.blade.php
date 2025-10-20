@extends('appsidebarfree')
@section('title', 'Контакты')
@section('description', 'Контакты')
@section('keywords', 'Контакты')
@section('canonical', route('page.faq'))

@section('content')

<section class="main__services services">
  <div class="services__wrapper">
    <div class="services__inner container">
      <h1 class="services__title">Наши сервисы </h1>
      <ul class="services__list">
        <li class="services__item">
          <a href="/" class="services__link">
            <div class="services__number">17</div>
            <div class="services__text">Биохимический анализ крови расшифровать онлайн</div>
            <div class="services__button"></div>
          </a>
        </li>
        <li class="services__item">
          <a href="/" class="services__link">
            <div class="services__number">17</div>
            <div class="services__text">Биохимический анализ крови расшифровать онлайн</div>
            <div class="services__button"></div>
          </a>
        </li>
        <li class="services__item">
          <a href="/" class="services__link">
            <div class="services__number">17</div>
            <div class="services__text">Биохимический анализ крови расшифровать онлайн</div>
            <div class="services__button"></div>
          </a>
        </li>
        <li class="services__item">
          <a href="/" class="services__link">
            <div class="services__number">17</div>
            <div class="services__text">Биохимический анализ крови расшифровать онлайн</div>
            <div class="services__button"></div>
          </a>
        </li>

      </ul>
      <div class="services__pagination-list">
        <a href="/" class="services__pagination-bullet services__pagination-bullet--prev">
          <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000">
            <g id="SVGRepo_iconCarrier">
              <polyline points="244 400 100 256 244 112"
                style="fill:#b7c0c6;stroke:#b7c0c6;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px">
              </polyline>
              <line x1="120" y1="256" x2="412" y2="256"
                style="fill:#b7c0c6;stroke:#b7c0c6;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></line>
            </g>
          </svg>
          Сюда
        </a>
        <a href="/" class="services__pagination-bullet">1</a>
        <a href="/" class="services__pagination-bullet">2</a>
        <a href="/" class="services__pagination-bullet">3</a>
        <a href="/" class="services__pagination-bullet services__pagination-bullet--next">
          Туда
          <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000">
            <g id="SVGRepo_iconCarrier">
              <polyline points="244 400 100 256 244 112"
                style="fill:#b7c0c6;stroke:#b7c0c6;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px">
              </polyline>
              <line x1="120" y1="256" x2="412" y2="256"
                style="fill:#b7c0c6;stroke:#b7c0c6;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></line>
            </g>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection