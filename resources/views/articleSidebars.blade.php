<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>@yield('title')</title>

  <meta name="title" content="@yield('title')">
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">

  <link rel="canonical" href="@yield('canonical')">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta property="og:title" content="@yield('title')">
  <meta property="og:description" content="@yield('description')">
  <meta property="og:image" content="{{ Storage::url('common/logoimage.jpg') }}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="@yield('canonical')">
  <meta property="og:site_name" content="Телемедицина. Платформа медицинских консультаций онлайн">

  <meta name="theme-color" content="#fff">
  <meta name="robots" content="noindex, nofollow" />

  <link rel="image_src" href="{{ Storage::url('common/logoimage.jpg') }}" />
  <link rel="icon" href="{{ Storage::url('common/favicon.svg') }}" type="svg+xml">
  <link rel="manifest" href="{{ Storage::url('common/favicon/site.webmanifest') }}">

  @vite(['resources/scss/style.scss', 'resources/js/main.min.js'])
  @include('parts.header')

  <main class="main">
    <div class="main__wrapper-main container">
      <section class="forum">
        <div class="forum__wrapper">
          <div class="forum__inner">
            <div class="forum__left-sidebar">
              <div class="forum__menu forum-menu">
                <ul class="forum-menu__list">
                  <li class="forum-menu__item forum-menu__item--active">
                    <a href="#" class="forum-menu__link">
                      <div class="forum-menu__icon"><svg width="24" height="24">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.36 2.22a1 1 0 0 1 1.33.07c.932.925 1.885 1.573 2.85 2.21l.186.122c.89.586 1.824 1.2 2.637 2.013A8.975 8.975 0 0 1 21 13a8.975 8.975 0 0 1-2.636 6.364m0 0A9.002 9.002 0 0 1 3 13c0-2.455 1.16-4.574 2.793-6.207a1 1 0 0 1 1.658.395 3.135 3.135 0 0 0 .349.587c.09.12.2.251.333.388.287-1.942 1.118-4.246 3.226-5.942M6.361 9.179C5.5 10.326 5 11.618 5 13a7 7 0 0 0 11.95 4.95l.001-.001a6.975 6.975 0 0 0 2.05-4.948V13a6.975 6.975 0 0 0-2.05-4.948h-.002c-.663-.664-1.438-1.175-2.37-1.79l-.14-.092c-.765-.505-1.607-1.07-2.457-1.809C10.38 6.051 10 8.321 10 10a1 1 0 0 1-1.447.894c-1.028-.514-1.728-1.15-2.192-1.715Z">
                          </path>
                        </svg>
                      </div>
                      <span class="forum-menu__text">
                        Популярное
                      </span>
                    </a>
                  </li>
                  <li class="forum-menu__item forum-menu__item--new">
                    <a href="#" class="forum-menu__link">
                      <div class="forum-menu__icon">
                        <svg width="24" height="24">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 3.998a8.002 8.002 0 1 0 0 16.004 8.002 8.002 0 0 0 0-16.005ZM2.002 12c0-5.521 4.477-9.998 9.998-9.998 5.521 0 9.997 4.477 9.997 9.998 0 5.521-4.476 9.997-9.997 9.997S2.002 17.521 2.002 12ZM12 6.003c.55 0 .998.447.998.997v4.297l2.837 1.014a.998.998 0 0 1-.67 1.879l-3.5-1.25a.998.998 0 0 1-.662-.94V7c0-.55.446-.997.997-.997Z">
                          </path>
                        </svg>
                      </div>
                      <span class="forum-menu__text">
                        Свежее
                      </span>
                    </a>
                  </li>
                  <li class="forum-menu__item">
                    <a href="#" class="forum-menu__link">
                      <div class="forum-menu__icon">
                        <svg width="24" height="24">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 3.998a8.002 8.002 0 1 0 0 16.004 8.002 8.002 0 0 0 0-16.005ZM2.002 12c0-5.521 4.477-9.998 9.998-9.998 5.521 0 9.997 4.477 9.997 9.998 0 5.521-4.476 9.997-9.997 9.997S2.002 17.521 2.002 12ZM12 6.003c.55 0 .998.447.998.997v4.297l2.837 1.014a.998.998 0 0 1-.67 1.879l-3.5-1.25a.998.998 0 0 1-.662-.94V7c0-.55.446-.997.997-.997Z">
                          </path>
                        </svg>
                      </div>
                      <span class="forum-menu__text">
                        Свежее
                      </span>
                    </a>
                  </li>
                  <li class="forum-menu__item">
                    <a href="#" class="forum-menu__link">
                      <div class="forum-menu__icon">
                        <svg width="24" height="24">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 3.998a8.002 8.002 0 1 0 0 16.004 8.002 8.002 0 0 0 0-16.005ZM2.002 12c0-5.521 4.477-9.998 9.998-9.998 5.521 0 9.997 4.477 9.997 9.998 0 5.521-4.476 9.997-9.997 9.997S2.002 17.521 2.002 12ZM12 6.003c.55 0 .998.447.998.997v4.297l2.837 1.014a.998.998 0 0 1-.67 1.879l-3.5-1.25a.998.998 0 0 1-.662-.94V7c0-.55.446-.997.997-.997Z">
                          </path>
                        </svg>
                      </div>
                      <span class="forum-menu__text">
                        Свежее
                      </span>
                    </a>
                  </li>
                  <li class="forum-menu__item">
                    <a href="#" class="forum-menu__link">
                      <div class="forum-menu__icon">
                        <svg width="24" height="24">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 3.998a8.002 8.002 0 1 0 0 16.004 8.002 8.002 0 0 0 0-16.005ZM2.002 12c0-5.521 4.477-9.998 9.998-9.998 5.521 0 9.997 4.477 9.997 9.998 0 5.521-4.476 9.997-9.997 9.997S2.002 17.521 2.002 12ZM12 6.003c.55 0 .998.447.998.997v4.297l2.837 1.014a.998.998 0 0 1-.67 1.879l-3.5-1.25a.998.998 0 0 1-.662-.94V7c0-.55.446-.997.997-.997Z">
                          </path>
                        </svg>
                      </div>
                      <span class="forum-menu__text">
                        Свежее
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="forum__themes-sidebar forum-themes-sidebar">
                <div class="forum-themes-sidebar__wrapper">
                  <span class="forum-themes-sidebar__title">Темы</span>
                  <ul class="forum-themes-sidebar__list">
                    <li class="forum-themes-sidebar__item">
                      <a href="#" class="forum-themes-sidebar__link">
                        <div class="forum-themes-sidebar__img-wrapper">
                          <img
                            src="https://leonardo.osnova.io/d66009fe-9bf0-52da-bdbf-4c758eba39e7/-/scale_crop/72x72/-/format/webp/"
                            alt="" class="forum-themes-sidebar__img">
                        </div>
                        <span class="forum-themes-sidebar__text">Маркетинг</span>
                      </a>
                    </li>
                    <li class="forum-themes-sidebar__item">
                      <a href="#" class="forum-themes-sidebar__link">
                        <div class="forum-themes-sidebar__img-wrapper">
                          <img
                            src="https://leonardo.osnova.io/d66009fe-9bf0-52da-bdbf-4c758eba39e7/-/scale_crop/72x72/-/format/webp/"
                            alt="" class="forum-themes-sidebar__img">
                        </div>
                        <span class="forum-themes-sidebar__text">Маркетинг</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="forum__main section-wrapper">
              <div class="main__content-block forum__content-block content-block">
                @yield('content')
              </div>
            </div>
            <div class="forum__right-sidebar">
              @include('parts.sidebar')
            </div>
          </div>
        </div>
      </section>
      @include('parts.menu')
    </div>
  </main>

  @include('parts.footer')

</html>