</head>
<body>
  <header class="header">
    <div class="header__wrapper container">
      <div class="header__top">
        <a href="/" class="header__logo">
          <img src="{{ Storage::url('common/logo.svg') }}" alt="" class="header__logo-img">
          <h1 class="header__title">КОНСУЛЬТАЦИИ ВРАЧЕЙ</h1>
        </a>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item">
              <a href="/" class="header__nav-link">Консультации</a>
            </li>
          </ul>
        </nav>
        <a href="/" class="header__experts">
          <ul class="header__experts-imgs">
            <li class="header__expert">
              <img src="/" alt="" class="header__expert-img">
            </li>
            <li class="header__expert">
              <img src="/" alt="" class="header__expert-img">
            </li>
            <li class="header__expert">
              <img src="/" alt="" class="header__expert-img">
            </li>
            <li class="header__expert">
              <img src="/" alt="" class="header__expert-img">
            </li>
          </ul>
          <div class="header__experts-titles">
            <span class="header__experts-title">более 30 врачей</span>
            <span class="header__experts-subtitle">работает на сайте</span>
          </div>
        </a>
        <div class="header__burger">
          <img src="" alt="" class="header__burger-img">
        </div>
      </div>
      <div class="header__bottom">
        <nav class="header__bottom-nav">
          <ul class="header__bottom-nav-list">
            <li class="header__bottom-nav-item header__bottom-nav-item-active">
              <a href="{{ route('consult.form') }}" class="header__bottom-nav-item-link">Задать вопрос</a>
            </li>
            <li class="header__bottom-nav-item">
              <a href="/" class="header__bottom-nav-item-link">Завершенные консультации</a>
            </li>
            <li class="header__bottom-nav-item">
              <a href="/" class="header__bottom-nav-item-link">Врачи</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <div class="mobile-header-nav">
    <div class="mobile-header-nav__wrapper">
      <ul class="mobile-header-nav__list">
        <li class="mobile-header-nav__item">
          <a href="" class="mobile-header-nav__link">
            Консультации
          </a>
        </li>
      </ul>
    </div>
  </div>