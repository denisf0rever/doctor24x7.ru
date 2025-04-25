<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Список консультаций</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Информация о консультациях</h1>
          <section class="main__info info">
            <div class="info__wrapper">
              <div class="info__element">
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text">Вопросов сегодня: <strong> </strong></span>
                  </div>
                  <div class="info__data">
                    <span class="info__text">Оплат сегодня: <strong> </strong></span>
                  </div>
                </div>
              </div>

              <div class="info__element">
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text">Сумма платежей: <strong>  &#8381;</strong></span>
                  </div>
                  <div class="info__data">
                    <span class="info__text">Конверсия:
                      <strong> </strong> %</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="info__wrapper">
              <div class="info__element">
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text">Всего с фото сегодня:
                      <strong> </strong> / Оплачено:
                      <strong> </strong></span>
                  </div>
                  <div class="info__data">
                    <span class="info__text">Всего с фото вчера:
                      <strong> </strong> / Оплачено:
                      <strong> </strong></span>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="main__pages pages">
            <div class="pages__wrapper">
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-small-name">ID</span>
                  <span class="pages__title-number-big">Оплат сегодня</span>
                  <span class="pages__title-number-big">Всего сегодня</span>
                  <span class="pages__title-number-big">Оплат вчера</span>
                  <span class="pages__title-number-big">Всего вчера</span>
                </div>
                <ul class="pages__list">
                  <li class="pages__item">
                    <span class="pages__small-name"><a href=" "> </a></span>
                    <span class="pages__views-number-big"> </span>
                    <span class="pages__views-number-big"> </span>
                    <span class="pages__views-number-big"> </span>
                    <span class="pages__views-number-big"> </span>
                  </li>
                </ul>
              </div>
            </div>
          </section>


          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Заголовки страниц</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-link">Ссылка</span>
                  <span class="pages__title-name">Консультация</span>
                  <span class="pages__title-number-left">Дата</span>
                  <span class="pages__title-number">Оплачено</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list">
                  
                  <li class="pages__item">
                    <span class="pages__views-id"> </span></a>
                    <a href="" target="_blank" class="pages__link">
                      <img src="{{ Storage::url('dashboard/link.svg') }}" alt="" class="pages__link-img">
                    </a>
                    <a class="pages__name" href="" target="_blank"><span> </span></a>
                    <span class="pages__views-id"> </span>
                    <span class="pages__views-number">  &#8381;</span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="" target="_blank">
                          <img src="" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <a href="">
                          <img src="" alt="" class="pages__icon-img">
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>