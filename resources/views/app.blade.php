<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>@yield('title')</title>

  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">

  <link rel="canonical" href="{{ config('app.url') }}@yield('canonical')">

  <meta name="description" content="@yield('description')">
  <meta name="title" content="@yield('title')">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta property="og:title" content="@yield('title')">
  <meta property="og:description" content="@yield('description')">
  <meta property="og:image" content="/images/logoimage.jpg">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ config('app.url') }}@yield('canonical')">
  <meta property="og:site_name"
    content="Онлайн сервис медицинских консультаций: педиатр и гинеколог, а также другие врачи">

  <meta name="theme-color" content="#fff">

  <link rel="image_src" href="/images/logoimage.jpg" />
  <link rel="icon" href="/images/favicon/favicon.svg" type="svg+xml">
  <link rel="manifest" href="/images/favicon/site.webmanifest">

  @vite(['resources/scss/style.scss', 'resources/js/main.min.js'])
  @yield('chat')
  @include('parts.header')

  <main class="main">
    <div class="main__wrapper-main container">
      @yield('content')
      @include('parts.sidebar')



      <div class="mobile-panel-top">
        <div class="mobile-panel-top__wrapper">
          <div class="mobile-panel-top__title-wrapper">
            <div class="mobile-panel-top__title">Меню</div>
            <div class="mobile-panel-top__close">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" class="loaded">
                <g fill="none" fill-rule="evenodd">
                  <path fill="#515151" d="M.04 21.753L21.253.54l.707.707L.747 22.46z"></path>
                  <path fill="#525252" d="M21.96 21.753L.747.54l-.707.707L21.253 22.46z"></path>
                </g>
              </svg>
            </div>
          </div>
          <div class="mobile-panel-top__tub-buttons">
            <div class="mobile-panel-top__tub-button mobile-panel-top__tub-button-active" data-tab="tab-1">Основное
            </div>
            <div class="mobile-panel-top__tub-button" data-tab="tab-2">Консультанты</div>
          </div>
          <div class="mobile-panel-top__tubs">
            <div class="mobile-panel-top__tub" data-tab="tab-1">
              <ul class="mobile-panel-top__list">
                <li class="mobile-panel-top__item">
                  <a href="/" class="mobile-panel-top__link">
                    <span class="mobile-panel-top__item-title">Главная</span>
                    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                      xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                      xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" height="200" width="200"
                      fill="#000000" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" class="loaded">
                      <g transform="translate(0,-952.36218)">
                        <path
                          d="m 80.750711,1001.6725 -16.00015,-17.00005 c -0.3873,-0.4042 -1.04921,-0.4071 -1.42211,-0.047 -0.379,0.3659 -0.4068,1.0376 -0.047,1.4221 l 14.40636,15.31255 -57.68765,0 c -0.5523,0 -1,0.4477 -1,1 0,0.5523 0.4477,1 1,1 l 57.68765,0 -14.40636,15.3125 c -0.3601,0.3845 -0.3379,1.0621 0.047,1.4221 0.3846,0.36 1.00351,0.3689 1.42211,-0.047 l 16.00015,-17 c 0.3803,-0.468 0.2803,-1.0416 0,-1.3752 z"
                          style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;"
                          fill="#a6abb6" fill-opacity="1" stroke="none" marker="none" visibility="visible"
                          display="inline" overflow="visible"></path>
                      </g>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <div class="mobile-panel-top__tub" data-tab="tab-2" style="display: none">
              <div class="employees">
                <div class="employees__item-back employees__hide">
                  <div class="employees__category">
                    <div class="employees__category-name">Назад</div>
                  </div>
                </div>
                <ul class="employees__list">

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mobile-panel-bottom">
        <div class="mobile-panel-bottom__wrapper">
          <ul class="mobile-panel-bottom__list">
            <li class="mobile-panel-bottom__item" id="doctors">
              <a href="/" class="mobile-panel-bottom__link">
                <img src="/" alt="" class="mobile-panel-bottom__img">
                <span class="mobile-panel-bottom__title">Врачи</span>
              </a>
            </li>
            <li class="mobile-panel-bottom__item" id="psychologists">
              <a href="/" class="mobile-panel-bottom__link">
                <img src="/" alt="" class="mobile-panel-bottom__img">
                <span class="mobile-panel-bottom__title">Психологи</span>
              </a>
            </li>
            <li class="mobile-panel-bottom__item mobile-panel-bottom__open">
              <a href="" class="mobile-panel-bottom__open-link">
                <i></i>
                <i></i>
                <i></i>
              </a>
            </li>
            <li class="mobile-panel-bottom__item">
              <a href="/" class="mobile-panel-bottom__link">
                <img src="/" alt="" class="mobile-panel-bottom__img">
                <span class="mobile-panel-bottom__title">Консультация</span>
              </a>
            </li>
            <li class="mobile-panel-bottom__item">
              <a href="/" class="mobile-panel-bottom__link">
                <img src="/" alt="" class="mobile-panel-bottom__img">
                <span class="mobile-panel-bottom__title">Активность</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </main>

  @include('parts.footer')

</html>