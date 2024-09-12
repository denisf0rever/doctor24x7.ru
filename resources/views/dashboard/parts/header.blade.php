<header class="header">
    <div class="header__wrapper container">
      <div class="header__left">
        <div class="header__menu-button">
          <img src="/images/public/common/logo-white.svg" alt="" class="header__menu-button-img">
        </div>
        <a href="/" class="header__logo-link" target="_blank">
          <div class="header__logo">
            <img src="/images/public/common/logo-white.svg" alt="" class="header__logo-img">
          </div>
        </a>
      </div>
      <div class="header__buttons">
        <div class="header__button-icon">
          <img src="/storage/avatar/webp/{{ Auth::user()->webp_avatar }}" alt="" class="header__button-img">
        </div>
        <div class="header__button"><a href="{{ route('logout') }}">{{ Auth::user()->name }} Выйти</a></div>
      </div>
    </div>
  </header>