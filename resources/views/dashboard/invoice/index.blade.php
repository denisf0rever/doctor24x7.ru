<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Информация о счетах</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Информация о счетах</h1>
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
                    <span class="info__text">Сумма платежей: {{ $invoices->count() }}<strong>  &#8381;</strong></span>
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
                  <span class="pages__title-number-big">Оплат вчера</span>
                </div>
                <ul class="pages__list">
				@foreach ($invoices as $invoice)
                  <li class="pages__item">
                    <a href="" class="pages__views-id"><span>{{ $invoice->id }}</span></a> 
					<span class="pages__small-name">{{ $invoice->comment_id }}</span>
                    <span class="pages__views-number-big">{{ $invoice->cost }}</span>
                  </li>
				 @endforeach
                </ul>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>