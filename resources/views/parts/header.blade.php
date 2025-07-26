</head>
<body>
  <header class="header">
    <div class="header__wrapper container">
      <a href="/" class="header__logo">
        <img src="{{ Storage::url('common/logo.svg') }}" alt="" class="header__logo-img">
      </a>
      <div class="header__speedbar">
        <a href="/" class="header__speedbar-item header__speedbar-item--main">Главная</a>
        @if (isset($breadcrumbs))
		@foreach ($breadcrumbs as $crumb)
			@if ($crumb['url'])
				<a href="{{ $crumb['url'] }}" class="header__speedbar-item header__speedbar-item--page">{{ $crumb['title'] }}</a>
			@else
				{{ $crumb['title'] }}
			@endif
		@endforeach
		@endif
      </div>
      <a href="{{ route('consult.form') }}" class="header__ask-doctor" target="_blank">
        <svg class="header__pencil-img" width="20px" height="20px" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <g>
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M15.728 9.686l-1.414-1.414L5 17.586V19h1.414l9.314-9.314zm1.414-1.414l1.414-1.414-1.414-1.414-1.414 1.414 1.414 1.414zM7.242 21H3v-4.243L16.435 3.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L7.243 21z" />
          </g>
        </svg>
        <span class="header__ask-doctor-text">Спросить врача</span>
      </a>
      <div class="header__burger">
        <svg class="header__burger-img" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
          viewBox="0 0 24 24" fill="none">
          <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round" />
          <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round" />
          <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round" />
        </svg>
      </div>
    </div>
    <div class="header__mobile-menu header-mobile-menu">
      <div class="header-mobile-menu__wrapper">
        <div class="header-mobile-menu__inner">
          <div class="header-mobile-menu__close">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" class="loaded">
              <g fill="none" fill-rule="evenodd">
                <path fill="#515151" d="M.04 21.753L21.253.54l.707.707L.747 22.46z"></path>
                <path fill="#525252" d="M21.96 21.753L.747.54l-.707.707L21.253 22.46z"></path>
              </g>
            </svg>
          </div>
          <div class="header__speedbar-wrapper">
            <div class="header__speedbar header__speedbar--mobile">
              <a href="/" class="header__speedbar-item header__speedbar-item--main">ПузКарапуз</a>
              <a href="/" class="header__speedbar-item header__speedbar-item--page">puzkarapuz.ru/</a>
            </div>
          </div>
          <ul class="header-mobile-menu__list">
            <li class="header-mobile-menu__item">
              <a href="/" class="header-mobile-menu__link">Главная</a>
            </li>
          </ul>
          <a href="/" class="header__ask-doctor header__ask-doctor--mobile" target="_blank">
            <svg class="header__pencil-img" width="20px" height="20px" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <g>
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path
                  d="M15.728 9.686l-1.414-1.414L5 17.586V19h1.414l9.314-9.314zm1.414-1.414l1.414-1.414-1.414-1.414-1.414 1.414 1.414 1.414zM7.242 21H3v-4.243L16.435 3.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L7.243 21z">
                </path>
              </g>
            </svg>
            <span class="header__ask-doctor-text">Спросить врача</span>
          </a>
        </div>
      </div>
    </div>
  </header>