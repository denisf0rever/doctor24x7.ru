<header class="header">
  <div class="header__wrapper container">
    <div class="header__left">
      <div class="header__menu-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 24 24">
          <path fill-rule="evenodd"
            d="M21 18a1 1 0 00-1-1H4a1 1 0 100 2h16a1 1 0 001-1zm-7-6a1 1 0 00-1-1H4a1 1 0 100 2h9a1 1 0 001-1zm6-5H4a1 1 0 110-2h16a1 1 0 110 2z"
            clip-rule="evenodd"></path>
        </svg>
      </div>
      <a href="/" class="header__logo-link" target="_blank">
        <div class="header__logo">
          <img src="/images/public/common/logo-white.svg" alt="" class="header__logo-img">
        </div>
      </a>
    </div>
    <div class="header__avatar">
      <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/" alt="" class=" header__avatar-img">
      <div class="header__profile header-profile hide">
        <div class="header-profile__wrapper">
          <div class="header-profile__close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" class="loaded">
              <g fill="none" fill-rule="evenodd">
                <path fill="#515151" d="M.04 21.753L21.253.54l.707.707L.747 22.46z"></path>
                <path fill="#525252" d="M21.96 21.753L.747.54l-.707.707L21.253 22.46z"></path>
              </g>
            </svg>
          </div>
          <div class="header-profile__avatar">
            <img src="/" alt="" class="header-profile__avatar-img">
          </div>
          <div class="header-profile__fullname">Имя Фамилия</div>
          <div class="header-profile__subtitle">Текст</div>
          <ul class="header-profile__list">
            <li class="header-profile__item">
              <a href="/" class="header-profile__link">
                <img src="/" alt="" class="header-profile__link-img">
                <span class="header-profile__text">Настройки</span>
              </a>
            </li>
            <li class="header-profile__item">
              <a href="{{ route('logout') }}" class="header-profile__link">
                <img src="/" alt="" class="header-profile__link-img">
                <span class="header-profile__text">Выйти</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>