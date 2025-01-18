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
                    <span class="info__text">Вопросов сегодня: <strong>{{ $consultationsCount }}</strong></span>
                  </div>
                  <div class="info__data">
                    <span class="info__text">Оплат сегодня: <strong>{{ $paidConsultationsCount }}</strong></span>
                  </div>
                </div>
              </div>
			  
			  <div class="info__element">
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text">Сумма платежей: <strong>{{ $totalPaymentsToday }} &#8381;</strong></span>
                  </div>
                  <div class="info__data">
                    <span class="info__text">Конверсия: <strong>{{ ($paidConsultationsCount * 100) / $consultationsCount }}</strong> %</span>
                  </div>
                </div>
              </div>
			  
			   
            </div>
            <div class="info__wrapper">
              <div class="info__element">
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text">Всего с фото сегодня: <strong>{{ $consultationsWithPhotos }}</strong> / Оплачено: <strong>{{ $consultationsWithPhotosPaid }}</strong></span>
                  </div>
                  <div class="info__data">
                    <span class="info__text">Всего с фото вчера: <strong>{{ $consultationsWithPhotosYesterday }}</strong> / Оплачено: <strong>{{ $consultationsWithPhotosYesterdayPaid }}</strong></span>
                  </div>
                </div>
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
                  @foreach ($payments as $payment)
					@php
						$date = \Carbon\Carbon::parse($payment->created_at);
						$paymentDate = $date->format('j ') . __('months.' . $date->format('F')) . ' ' . $date->format('Y');
					@endphp
                  <li class="pages__item">
                    <span class="pages__views-id">{{ $payment->id }}</span></a>
                    <a href="" target="_blank" class="pages__link">
                      <img src="{{ Storage::url('dashboard/link.svg') }}" alt="" class="pages__link-img">
                    </a>
                    <a class="pages__name" href=""
                      target="_blank"><span>{{ $payment->consultation_id }}</span></a>
                    <span class="pages__views-id">{{ $paymentDate }}</span>
                    <span class="pages__views-number">{{ $payment->amount }} &#8381;</span>
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
                  @endforeach
                </ul>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>