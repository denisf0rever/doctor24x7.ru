@extends('appwide')
@section('title', 'Форум врачей')
@section('description', 'Форум')
@section('keywords', 'Медицинский форум создан для обсуждения медицинских вопросов в формате онлайн консультации,
связанных со здоровьем, расшифровкой анализа, медицинских документов')
@section('canonical', 'forum')

@section('content')

<div class="forum">
  <div class="forum__wrapper section-wrapper">
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
    <div class="forum__main">
      <div class="forum__news-catalog forum-news-catalog">
        <div class="forum-news-catalog__wrapper section-wrapper">
          <ul class="forum-news-catalog__list">
            <li class="forum-news-catalog__item">
              <span class="forum-news-catalog__link">
                <a href="#" class="forum-news-catalog__text">Lorem ipsum dolor sit amet consectetur adipisicing
                  elit. Lorem ipsum dolor sit amet consectetur adipisicing
                  elit.Lorem ipsum dolor sit amet consectetur adipisicing
                  elit. Lorem ipsum dolor sit amet consec</a>
                <a href="#" class="forum-news-catalog__comments">
                  <div class="forum-news-catalog__icon">
                    <svg class="icon icon--comment" viewBox="0 0 24 24" width="16" height="16">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M20.979 11.736c0-5.4-4.383-8.736-9.244-8.736C6.883 3 2.518 6.323 2.5 11.703c-.018 5.38 4.269 8.768 9.236 8.768 1.306 0 2.353-.066 3.619-.57.191-.076.507-.082.81.02l3.044 1.013c.718.216 1.363-.124 1.723-.48.375-.372.707-1.018.511-1.742l-.007-.028-.998-2.992c-.1-.39-.1-.84-.017-1.07l.055-.155c.277-.768.503-1.393.503-2.731ZM11.735 5C7.754 5 4.5 7.653 4.5 11.736s3.254 6.735 7.236 6.735c1.22 0 1.966-.064 2.88-.428.73-.29 1.547-.232 2.184-.02l2.596.866-.875-2.622-.007-.029c-.168-.622-.246-1.535.024-2.29l.06-.168c.246-.682.38-1.054.38-2.044 0-4.082-3.26-6.736-7.243-6.736Z"
                        fill="currentColor"></path>
                    </svg>
                  </div>
                  <span class="forum-news-catalog__comment-number">6</span>
                </a>
              </span>
            </li>
            <li class="forum-news-catalog__item">
              <span class="forum-news-catalog__link">
                <a href="#" class="forum-news-catalog__text">Lorem ipsum dolor sit amet consectetur adipisicing
                  elit. Lorem ipsum dolor sit amet consectetur adipisicing
                  elit.Lorem ipsum dolor sit amet consectetur adipisicing
                  elit. Lorem ipsum dolor sit amet consec</a>
                <a href="#" class="forum-news-catalog__comments">
                  <div class="forum-news-catalog__icon">
                    <svg class="icon icon--comment" viewBox="0 0 24 24" width="16" height="16">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M20.979 11.736c0-5.4-4.383-8.736-9.244-8.736C6.883 3 2.518 6.323 2.5 11.703c-.018 5.38 4.269 8.768 9.236 8.768 1.306 0 2.353-.066 3.619-.57.191-.076.507-.082.81.02l3.044 1.013c.718.216 1.363-.124 1.723-.48.375-.372.707-1.018.511-1.742l-.007-.028-.998-2.992c-.1-.39-.1-.84-.017-1.07l.055-.155c.277-.768.503-1.393.503-2.731ZM11.735 5C7.754 5 4.5 7.653 4.5 11.736s3.254 6.735 7.236 6.735c1.22 0 1.966-.064 2.88-.428.73-.29 1.547-.232 2.184-.02l2.596.866-.875-2.622-.007-.029c-.168-.622-.246-1.535.024-2.29l.06-.168c.246-.682.38-1.054.38-2.044 0-4.082-3.26-6.736-7.243-6.736Z"
                        fill="currentColor"></path>
                    </svg>
                  </div>
                  <span class="forum-news-catalog__comment-number">6</span>
                </a>
              </span>
            </li>
            <li class="forum-news-catalog__item">
              <span class="forum-news-catalog__link">
                <a href="#" class="forum-news-catalog__text">Lorem ipsum dolor sit amet consectetur adipisicing
                  elit. Lorem ip</a>
                <a href="#" class="forum-news-catalog__comments">
                  <div class="forum-news-catalog__icon">
                    <svg class="icon icon--comment" viewBox="0 0 24 24" width="16" height="16">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M20.979 11.736c0-5.4-4.383-8.736-9.244-8.736C6.883 3 2.518 6.323 2.5 11.703c-.018 5.38 4.269 8.768 9.236 8.768 1.306 0 2.353-.066 3.619-.57.191-.076.507-.082.81.02l3.044 1.013c.718.216 1.363-.124 1.723-.48.375-.372.707-1.018.511-1.742l-.007-.028-.998-2.992c-.1-.39-.1-.84-.017-1.07l.055-.155c.277-.768.503-1.393.503-2.731ZM11.735 5C7.754 5 4.5 7.653 4.5 11.736s3.254 6.735 7.236 6.735c1.22 0 1.966-.064 2.88-.428.73-.29 1.547-.232 2.184-.02l2.596.866-.875-2.622-.007-.029c-.168-.622-.246-1.535.024-2.29l.06-.168c.246-.682.38-1.054.38-2.044 0-4.082-3.26-6.736-7.243-6.736Z"
                        fill="currentColor"></path>
                    </svg>
                  </div>
                  <span class="forum-news-catalog__comment-number">6</span>
                </a>
              </span>
            </li>
          </ul>
          <div class="forum-news-catalog__show-more">
            <span class="forum-news-catalog__show-more-text">Показать еще</span>
            <div class="forum-news-catalog__show-more-icon">
              <svg class="icon" width="20" height="20">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17.707 8.793a1 1 0 0 1 0 1.414l-5 5a1 1 0 0 1-1.414 0l-5-5a1 1 0 1 1 1.414-1.414L12 13.086l4.293-4.293a1 1 0 0 1 1.414 0Z"
                  fill="currentColor"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="forum__topics forum-topics">
        <div class="forum-topics__wrapper section-wrapper">
          <div class="forum-topics__header">
            <h3 class="forum-topics__title">Топ блогов</h3>
          </div>
          <ul class="forum-topics__list">
            <li class="forum-topics__item">
              <span class="forum-topics__number">1</span>
              <div class="forum-topics__small-blog small-blog">
                <a href="" class="small-blog__wrapper">
                  <img
                    src="https://leonardo.osnova.io/77b81b4d-da8b-5bf8-b53a-8747d5290785/-/scale_crop/72x72/-/format/webp/"
                    alt="" class="small-blog__img">
                  <span class="small-blog__title">Lorem ipsum</span>
                  <span class="small-blog__subs">202 подписчика</span>
                </a>
              </div>
              <a href="#" class="forum-topics__button">Подписаться</a>
            </li>
            <li class="forum-topics__item">
              <span class="forum-topics__number">1</span>
              <div class="forum-topics__small-blog small-blog">
                <a href="" class="small-blog__wrapper">
                  <img
                    src="https://leonardo.osnova.io/77b81b4d-da8b-5bf8-b53a-8747d5290785/-/scale_crop/72x72/-/format/webp/"
                    alt="" class="small-blog__img">
                  <span class="small-blog__title">Lorem ipsum</span>
                  <span class="small-blog__subs">202 подписчика</span>
                </a>
              </div>
              <a href="#" class="forum-topics__button">Подписаться</a>
            </li>
            <li class="forum-topics__item">
              <span class="forum-topics__number">1</span>
              <div class="forum-topics__small-blog small-blog">
                <a href="" class="small-blog__wrapper">
                  <img
                    src="https://leonardo.osnova.io/77b81b4d-da8b-5bf8-b53a-8747d5290785/-/scale_crop/72x72/-/format/webp/"
                    alt="" class="small-blog__img">
                  <span class="small-blog__title">Lorem ipsum</span>
                  <span class="small-blog__subs">202 подписчика</span>
                </a>
              </div>
              <a href="#" class="forum-topics__button">Подписаться</a>
            </li>
            <li class="forum-topics__item">
              <span class="forum-topics__number">1</span>
              <div class="forum-topics__small-blog small-blog">
                <a href="" class="small-blog__wrapper">
                  <img
                    src="https://leonardo.osnova.io/77b81b4d-da8b-5bf8-b53a-8747d5290785/-/scale_crop/72x72/-/format/webp/"
                    alt="" class="small-blog__img">
                  <span class="small-blog__title">Lorem ipsum</span>
                  <span class="small-blog__subs">202 подписчика</span>
                </a>
              </div>
              <a href="#" class="forum-topics__button">Подписаться</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="forum__right-sidebar">
      <div class="forum__sidebar-top-blogs sidebar-top-blogs">
        <div class="sidebar-top-blogs__wrapper">
          <span class="sidebar-top-blogs__title">Топ блогов</span>
          <ul class="sidebar-top-blogs__list">
            <li class="sidebar-top-blogs__item">
              <a href="#" class="sidebar-top-blogs__link">
                <span class="sidebar-top-blogs__number">1</span>
                <div class="sidebar-top-blogs__small-blog small-blog">
                  <div class="small-blog__wrapper">
                    <img
                      src="https://leonardo.osnova.io/77b81b4d-da8b-5bf8-b53a-8747d5290785/-/scale_crop/72x72/-/format/webp/"
                      alt="" class="small-blog__img">
                    <span class="small-blog__title">Lorem ipsum</span>
                    <span class="small-blog__subs">202 подписчика</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="sidebar-top-blogs__item">
              <a href="#" class="sidebar-top-blogs__link">
                <span class="sidebar-top-blogs__number">1</span>
                <div class="sidebar-top-blogs__small-blog small-blog">
                  <div class="small-blog__wrapper">
                    <img
                      src="https://leonardo.osnova.io/77b81b4d-da8b-5bf8-b53a-8747d5290785/-/scale_crop/72x72/-/format/webp/"
                      alt="" class="small-blog__img">
                    <span class="small-blog__title">Lorem ipsum</span>
                    <span class="small-blog__subs">202 подписчика</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="sidebar-top-blogs__item">
              <a href="#" class="sidebar-top-blogs__link">
                <span class="sidebar-top-blogs__number">1</span>
                <div class="sidebar-top-blogs__small-blog small-blog">
                  <div class="small-blog__wrapper">
                    <img
                      src="https://leonardo.osnova.io/77b81b4d-da8b-5bf8-b53a-8747d5290785/-/scale_crop/72x72/-/format/webp/"
                      alt="" class="small-blog__img">
                    <span class="small-blog__title">Lorem ipsum</span>
                    <span class="small-blog__subs">202 подписчика</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <a href="#" class="sidebar-top-blogs__show-more">Посмотреть весь топ</a>
        </div>
      </div>
      <div class="forum__sidebar-popular-comments sidebar-popular-comments">
        <div class="sidebar-popular-comments__wrapper">
          <span class="sidebar-popular-comments__title">Популярные комментарии</span>
          <ul class="sidebar-popular-comments__list">
            <li class="sidebar-popular-comments__item">
              <div class="sidebar-popular-comments__header">
                <img
                  src="https://leonardo.osnova.io/77b81b4d-da8b-5bf8-b53a-8747d5290785/-/scale_crop/72x72/-/format/webp/"
                  alt="" class="sidebar-popular-comments__img">
                <span class="sidebar-popular-comments__fullname">
                  Александр <span class="sidebar-popular-comments__pale-text">в посте</span>
                </span>
                <span class="sidebar-popular-comments__news-title">Lorem, ipsum dolor sit amet consect Lorem, ipsum
                  dolor sit amet consect </span>
              </div>
              <div class="sidebar-popular-comments__content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </div>
              <div class="sidebar-popular-comments__reaction">
                <span class="sidebar-popular-comments__reaction-content">12 реакций</span>
              </div>
            </li>
            <li class="sidebar-popular-comments__item">
              <div class="sidebar-popular-comments__header">
                <img
                  src="https://leonardo.osnova.io/77b81b4d-da8b-5bf8-b53a-8747d5290785/-/scale_crop/72x72/-/format/webp/"
                  alt="" class="sidebar-popular-comments__img">
                <span class="sidebar-popular-comments__fullname">
                  Александр <span class="sidebar-popular-comments__pale-text">в посте</span>
                </span>
                <span class="sidebar-popular-comments__news-title">Lorem, ipsum dolor sit amet consect Lorem, ipsum
                  dolor sit amet consect </span>
              </div>
              <div class="sidebar-popular-comments__content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </div>
              <div class="sidebar-popular-comments__reaction">
                <span class="sidebar-popular-comments__reaction-content">12 реакций</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection