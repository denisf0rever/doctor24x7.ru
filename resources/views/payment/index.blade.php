@extends('app')
@section('title', $consultation->title)
@section('description', $consultation->metadescription)
@section('keywords', $consultation->metakey)
@section('canonical', 'consultation/'. $consultation->id)

@section('content')
<div class="main__wrapper">
  <section class="main__payment-form payment-form">
    <div class="container">
      <h1 class="payment-form__title">Оплата консультации</h1>
      <h2 class="payment-form__subtitle">Оплатите консультацию и получите гарантированный ответ</h2>
    </div>
    <div class="payment-form__wrapper">
      <form action="{{ route('payment.consultation.init') }}" method="POST" class="payment-form__form">
	   @csrf
	   <input type="hidden" name="OrderId" value="{{ $consultation->id }}">
	   
        <div class="big-container payment-form__big-container">
          <div class="container payment-form__container">
            <div class="payment-form__first-radio first-radio">
              <div class="first-radio__wrapper">
                <div class="first-radio__list">
                  <input checked class="first-radio__input" hidden id="first-calc" type="radio" name="calculate-field"
                    value="349">
                  <label for="first-calc" class="first-radio__item">
                    <span class="first-radio__item-title">С диалогами (чат)
                    </span>
                    <span class="first-radio__item-text">Возможность задавать уточняющие вопросы к вашей основной
                      консультации. Удобный чат-интерфейс для общения с консультантом.
                    </span>
                  </label>
                  <input class="first-radio__input" hidden id="second-calc" type="radio" name="calculate-field"
                    value="0">
                  <label for="second-calc" class="first-radio__item">
                    <span class="first-radio__item-title">Без диалогов
                    </span>
                    <span class="first-radio__item-text">Без возможности задавать дополнительные вопросы. Подходит для
                      однозначного (простого) вопроса.
                    </span>
                  </label>
                </div>
              </div>
            </div>
            <div class="payment-form__second second-radio">
              <div class="second-radio__wrapper">
                <span class="second-radio__title">Если нужно мнение фармацевта
                </span>
                <div class="second-radio__list">
                  <input checked class="second-radio__input" hidden id="contactChoice1" type="radio"
                    name="calculate-field-second" value="0">
                  <label for="contactChoice1" class="second-radio__item">
                    <div class="second-radio__img">
                      <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 48 48">
                        <title>Free Medical icons</title>
                        <path
                          d="M41.56,6.44a14.3,14.3,0,0,1,0,20.25l-7.43,7.44L13.88,13.87l7.43-7.43A14.32,14.32,0,0,1,41.56,6.44Z"
                          fill="#a6c7ff" />
                        <path
                          d="M16.57,47.74A16.31,16.31,0,0,1,5,19.9L19.89,5A16.32,16.32,0,1,1,43,28.1L28.11,43A16.29,16.29,0,0,1,16.57,47.74ZM31.43,4.25a12.3,12.3,0,0,0-8.72,3.6L7.85,22.72A12.32,12.32,0,1,0,25.28,40.14L40.14,25.28A12.31,12.31,0,0,0,31.43,4.25Z"
                          fill="#2161ff" />
                        <rect width="48" height="48" fill="none" />
                      </svg>
                    </div>
                    <div class="second-radio__checkmark">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px"
                        width="800px" version="1.1" id="Capa_1" viewBox="0 0 17.837 17.837" xml:space="preserve">
                        <g>
                          <path style="fill:#00bb6d;"
                            d="M16.145,2.571c-0.272-0.273-0.718-0.273-0.99,0L6.92,10.804l-4.241-4.27   c-0.272-0.274-0.715-0.274-0.989,0L0.204,8.019c-0.272,0.271-0.272,0.717,0,0.99l6.217,6.258c0.272,0.271,0.715,0.271,0.99,0   L17.63,5.047c0.276-0.273,0.276-0.72,0-0.994L16.145,2.571z" />
                        </g>
                      </svg>
                    </div>
                    <div class="second-radio__text-wrapper">
                      <span class="second-radio__item-title">Фармацевт не нужен
                      </span>
                      <span class="second-radio__item-text">Без дополнительной оплаты </span>
                    </div>
                  </label>
                  <input class="second-radio__input" hidden id="contactChoice2" type="radio"
                    name="calculate-field-second" value="249">
                  <label class="second-radio__item" for="contactChoice2">
                    <div class="second-radio__img">
                      <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 48 48">
                        <title>Free Medical icons</title>
                        <path
                          d="M41.56,6.44a14.3,14.3,0,0,1,0,20.25l-7.43,7.44L13.88,13.87l7.43-7.43A14.32,14.32,0,0,1,41.56,6.44Z"
                          fill="#a6c7ff" />
                        <path
                          d="M16.57,47.74A16.31,16.31,0,0,1,5,19.9L19.89,5A16.32,16.32,0,1,1,43,28.1L28.11,43A16.29,16.29,0,0,1,16.57,47.74ZM31.43,4.25a12.3,12.3,0,0,0-8.72,3.6L7.85,22.72A12.32,12.32,0,1,0,25.28,40.14L40.14,25.28A12.31,12.31,0,0,0,31.43,4.25Z"
                          fill="#2161ff" />
                        <rect width="48" height="48" fill="none" />
                      </svg>
                    </div>
                    <div class="second-radio__checkmark">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px"
                        width="800px" version="1.1" id="Capa_1" viewBox="0 0 17.837 17.837" xml:space="preserve">
                        <g>
                          <path style="fill:#00bb6d;"
                            d="M16.145,2.571c-0.272-0.273-0.718-0.273-0.99,0L6.92,10.804l-4.241-4.27   c-0.272-0.274-0.715-0.274-0.989,0L0.204,8.019c-0.272,0.271-0.272,0.717,0,0.99l6.217,6.258c0.272,0.271,0.715,0.271,0.99,0   L17.63,5.047c0.276-0.273,0.276-0.72,0-0.994L16.145,2.571z" />
                        </g>
                      </svg>
                    </div>
                    <div class="second-radio__text-wrapper">
                      <span class="second-radio__item-title">Пригласить фармацевта </span>
                      <span class="second-radio__item-text">+249 рублей к стоимости консультации </span>
                    </div>
                  </label>
                </div>
              </div>
            </div>
            <div class="payment-form__promo promo">
              <div class="promo__wrapper">
                <h2 class="promo__title">Выберите тариф</h2>
                <ul class="promo__list">
				@foreach($tariffs as $tariff)
					@include('payment.tariff', ['tariff'])
				@endforeach
				
                 <!-- <li class="promo__item">
                    <div class="promo__header">
                      <h3 class="promo__item-title">Документы 1 врач
                      </h3>
                      <span class="promo__subtitle">Изучение снимков и всех видов обследований
                      </span>
                    </div>
                    <ul class="promo__item-list">
                      <li class="promo__item-item">
                        Гарантированная консультация
                      </li>
                      <li class="promo__item-item">
                        Профессиональный ответ
                      </li>
                      <li class="promo__item-item">
                        Уведомление на почту бесплатно
                      </li>
                      <li class="promo__item-item">
                        Гарантированный ответ одного врача
                      </li>
                    </ul>
                    <div class="promo__bottom">
                      <span class="promo__price">
                        1540 &#8381;
                      </span>
                      <input type="radio" id="promo1700" name="Sum" stadart-price="1540" value="" hidden type="text"
                        class="promo__input-radio">
                      <label for="promo1700" class="promo__label">
                        Выбрать
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20"
                          style="margin-left: 8px;width: 20px;">
                          <path fill="#fff"
                            d="M9.457 14.531a.624.624 0 01-.442-1.067l3.308-3.308-3.308-3.308a.625.625 0 01.884-.884l3.75 3.75a.625.625 0 010 .884l-3.75 3.75a.623.623 0 01-.442.183z">
                          </path>
                        </svg>
                      </label>
                    </div>
                  </li>
                  <li class="promo__item">
                    <div class="promo__header">
                      <h3 class="promo__item-title">Видео-консультация
                      </h3>
                      <span class="promo__subtitle">Врач изучит ваш вопрос и перезвонит
                      </span>
                    </div>
                    <ul class="promo__item-list">
                      <li class="promo__item-item">
                        Видео-звонок по Skype или WhatsApp/Viber
                      </li>
                      <li class="promo__item-item">
                        Ожидание 20-30 минут
                      </li>
                    </ul>
                    <div class="promo__input-wrapper">
                      <input type="text" class="promo__input" name="promo-text" placeholder="Контакт">
                    </div>
                    <div class="promo__bottom">
                      <span class="promo__price">
                        3300 &#8381;
                      </span>
                      <input type="radio" id="promo3000" name="Sum" stadart-price="3300" hidden type="text"
                        class="promo__input-radio">
                      <label for="promo3000" class="promo__label">
                        Выбрать
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20"
                          style="margin-left: 8px;width: 20px;">
                          <path fill="#fff"
                            d="M9.457 14.531a.624.624 0 01-.442-1.067l3.308-3.308-3.308-3.308a.625.625 0 01.884-.884l3.75 3.75a.625.625 0 010 .884l-3.75 3.75a.623.623 0 01-.442.183z">
                          </path>
                        </svg>
                      </label>
                    </div>
                  </li>
                  <li class="promo__item">
                    <div class="promo__header">
                      <h3 class="promo__item-title">По телефону с гинекологом
                      </h3>
                      <span class="promo__subtitle">Ожидание звонка 15 - 30 минут
                      </span>
                    </div>
                    <ul class="promo__item-list">
                      <li class="promo__item-item">
                        Звонок по телефону
                      </li>
                      <li class="promo__item-item">
                        WhatsApp Viber
                      </li>
                    </ul>
                    <div class="promo__input-wrapper">
                      <input type="text" class="promo__input promo__input-phone" name="promo-text"
                        placeholder="+7-xxx-xxx-xx-xx">
                    </div>
                    <div class="promo__bottom">
                      <span class="promo__price">
                        990 &#8381;
                      </span>
                      <input type="radio" id="promo900" name="Sum" stadart-price="990" hidden type="text"
                        class="promo__input-radio">
                      <label for="promo900" class="promo__label">
                        Выбрать
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20"
                          style="margin-left: 8px;width: 20px;">
                          <path fill="#fff"
                            d="M9.457 14.531a.624.624 0 01-.442-1.067l3.308-3.308-3.308-3.308a.625.625 0 01.884-.884l3.75 3.75a.625.625 0 010 .884l-3.75 3.75a.623.623 0 01-.442.183z">
                          </path>
                        </svg>
                      </label>
                    </div>
                  </li>-->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="payment-form__payment-type payment-type">
          <div class="payment-type__wrapper container">
            <h2 class="payment-form__title">Выберите удобный способ оплаты
            </h2>
            <span class="payment-form__subtitle">Банковские карты, электронные деньги, баланс телефона, криптовалюта
            </span>
            <div class="payment-type__inner">
              <ul class="payment-type__list">
                <li class="payment-type__item">
                  <input type="radio" hidden name="paymentType" value="AC" id="ac" class="payment-type__input">
                  <label for="ac" class="payment-type__label">
                    <div class="payment-type__check-mark">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px"
                        width="800px" version="1.1" id="Capa_1" viewBox="0 0 17.837 17.837" xml:space="preserve">
                        <g>
                          <path style="fill:#00bb6d;"
                            d="M16.145,2.571c-0.272-0.273-0.718-0.273-0.99,0L6.92,10.804l-4.241-4.27   c-0.272-0.274-0.715-0.274-0.989,0L0.204,8.019c-0.272,0.271-0.272,0.717,0,0.99l6.217,6.258c0.272,0.271,0.715,0.271,0.99,0   L17.63,5.047c0.276-0.273,0.276-0.72,0-0.994L16.145,2.571z" />
                        </g>
                      </svg>
                    </div>
                    <div class="payment-type__label-image">
                      <img src="/" alt="" class="payment-type__label-img">
                    </div>
                    <div class="payment-type__label-text">
                      <span class="payment-type__label-title">Банковские карты</span>
                      <span class="payment-type__label-subtitle">Оплата банковской картой, SberPay</span>
                    </div>
                  </label>
                </li>
                <li class="payment-type__item">
                  <input type="radio" hidden name="paymentType" value="AC" id="MP" class="payment-type__input">
                  <label for="MP" class="payment-type__label">
                    <div class="payment-type__check-mark">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px"
                        width="800px" version="1.1" id="Capa_1" viewBox="0 0 17.837 17.837" xml:space="preserve">
                        <g>
                          <path style="fill:#00bb6d;"
                            d="M16.145,2.571c-0.272-0.273-0.718-0.273-0.99,0L6.92,10.804l-4.241-4.27   c-0.272-0.274-0.715-0.274-0.989,0L0.204,8.019c-0.272,0.271-0.272,0.717,0,0.99l6.217,6.258c0.272,0.271,0.715,0.271,0.99,0   L17.63,5.047c0.276-0.273,0.276-0.72,0-0.994L16.145,2.571z" />
                        </g>
                      </svg>
                    </div>
                    <div class="payment-type__label-image">
                      <img src="/" alt="" class="payment-type__label-img">
                    </div>
                    <div class="payment-type__label-text">
                      <span class="payment-type__label-title">MirPay</span>
                      <span class="payment-type__label-subtitle">Оплата Mir Pay</span>
                    </div>
                  </label>
                </li>
                <li class="payment-type__item">
                  <input type="radio" hidden name="paymentType" value="PC" id="pc" class="payment-type__input">
                  <label for="pc" class="payment-type__label">
                    <div class="payment-type__check-mark">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px"
                        width="800px" version="1.1" id="Capa_1" viewBox="0 0 17.837 17.837" xml:space="preserve">
                        <g>
                          <path style="fill:#00bb6d;"
                            d="M16.145,2.571c-0.272-0.273-0.718-0.273-0.99,0L6.92,10.804l-4.241-4.27   c-0.272-0.274-0.715-0.274-0.989,0L0.204,8.019c-0.272,0.271-0.272,0.717,0,0.99l6.217,6.258c0.272,0.271,0.715,0.271,0.99,0   L17.63,5.047c0.276-0.273,0.276-0.72,0-0.994L16.145,2.571z" />
                        </g>
                      </svg>
                    </div>
                    <div class="payment-type__label-image">
                      <img src="/" alt="" class="payment-type__label-img">
                    </div>
                    <div class="payment-type__label-text">
                      <span class="payment-type__label-title">ЮMoney</span>
                      <span class="payment-type__label-subtitle">Оплата из кошелька в ЮMoney</span>
                    </div>
                  </label>
                </li>
                <li class="payment-type__item">
                  <input type="radio" hidden name="paymentType" value="MC" id="mts" class="payment-type__input">
                  <label for="mts" class="payment-type__label">
                    <div class="payment-type__check-mark">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px"
                        width="800px" version="1.1" id="Capa_1" viewBox="0 0 17.837 17.837" xml:space="preserve">
                        <g>
                          <path style="fill:#00bb6d;"
                            d="M16.145,2.571c-0.272-0.273-0.718-0.273-0.99,0L6.92,10.804l-4.241-4.27   c-0.272-0.274-0.715-0.274-0.989,0L0.204,8.019c-0.272,0.271-0.272,0.717,0,0.99l6.217,6.258c0.272,0.271,0.715,0.271,0.99,0   L17.63,5.047c0.276-0.273,0.276-0.72,0-0.994L16.145,2.571z" />
                        </g>
                      </svg>
                    </div>
                    <div class="payment-type__label-image">
                      <img src="/" alt="" class="payment-type__label-img">
                    </div>
                    <div class="payment-type__label-text">
                      <span class="payment-type__label-title">МТС</span>
                      <span class="payment-type__label-subtitle">Оплата с баланса телефона</span>
                    </div>
                  </label>
                </li>
                <li class="payment-type__item">
                  <input type="radio" hidden name="paymentType" value="MC" id="beeline" class="payment-type__input">
                  <label for="beeline" class="payment-type__label">
                    <div class="payment-type__check-mark">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px"
                        width="800px" version="1.1" id="Capa_1" viewBox="0 0 17.837 17.837" xml:space="preserve">
                        <g>
                          <path style="fill:#00bb6d;"
                            d="M16.145,2.571c-0.272-0.273-0.718-0.273-0.99,0L6.92,10.804l-4.241-4.27   c-0.272-0.274-0.715-0.274-0.989,0L0.204,8.019c-0.272,0.271-0.272,0.717,0,0.99l6.217,6.258c0.272,0.271,0.715,0.271,0.99,0   L17.63,5.047c0.276-0.273,0.276-0.72,0-0.994L16.145,2.571z" />
                        </g>
                      </svg>
                    </div>
                    <div class="payment-type__label-image">
                      <img src="/" alt="" class="payment-type__label-img">
                    </div>
                    <div class="payment-type__label-text">
                      <span class="payment-type__label-title">Билайн</span>
                      <span class="payment-type__label-subtitle">Оплата с баланса телефона</span>
                    </div>
                  </label>
                </li>
              </ul>
              <ul class="payment-type__list">
                <li class="payment-type__item">
                  <div class="payment-type__label">
                    <div class="payment-type__check-mark">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px"
                        width="800px" version="1.1" id="Capa_1" viewBox="0 0 17.837 17.837" xml:space="preserve">
                        <g>
                          <path style="fill:#00bb6d;"
                            d="M16.145,2.571c-0.272-0.273-0.718-0.273-0.99,0L6.92,10.804l-4.241-4.27   c-0.272-0.274-0.715-0.274-0.989,0L0.204,8.019c-0.272,0.271-0.272,0.717,0,0.99l6.217,6.258c0.272,0.271,0.715,0.271,0.99,0   L17.63,5.047c0.276-0.273,0.276-0.72,0-0.994L16.145,2.571z" />
                        </g>
                      </svg>
                    </div>
                    <div class="payment-type__label-image">
                      <img src="/" alt="" class="payment-type__label-img">
                    </div>
                    <a href="https://t.me/infinity_operatorr" target="_blank" class="payment-type__label-text">
                      <span class="payment-type__label-title">Биткоин, Лайткоин</span>
                      <span class="payment-type__label-subtitle">Напишите нам в телеграм</span>
                    </a>
                  </div>
                </li>
                <li class="payment-type__item">
                  <div class="payment-type__label">
                    <div class="payment-type__check-mark">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px"
                        width="800px" version="1.1" id="Capa_1" viewBox="0 0 17.837 17.837" xml:space="preserve">
                        <g>
                          <path style="fill:#00bb6d;"
                            d="M16.145,2.571c-0.272-0.273-0.718-0.273-0.99,0L6.92,10.804l-4.241-4.27   c-0.272-0.274-0.715-0.274-0.989,0L0.204,8.019c-0.272,0.271-0.272,0.717,0,0.99l6.217,6.258c0.272,0.271,0.715,0.271,0.99,0   L17.63,5.047c0.276-0.273,0.276-0.72,0-0.994L16.145,2.571z" />
                        </g>
                      </svg>
                    </div>
                    <div class="payment-type__label-image">
                      <img src="/" alt="" class="payment-type__label-img">
                    </div>
                    <a href="https://t.me/infinity_operatorr" class="payment-type__label-text" target="_blank">
                      <span class="payment-type__label-title">Если вы из Казахстана</span>
                      <span class="payment-type__label-subtitle">Напишите нам в телеграм</span>
                    </a>
                  </div>
                </li>
              </ul>
              <input type="submit" class="payment-form__submit" value="Оплатить консультацию">
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>
<section class="main__payment-reviews payment-reviews">
  <div class="payment-reviews__wrapper">
    <div class="payment-reviews__title">Отзывы клиентов </div>
    <div class="payment-reviews__slider-container">
      <div class="payment-reviews__arrow payment-reviews__arrow-after">&gt;</div>
      <div class="payment-reviews__arrow payment-reviews__arrow-before">&lt;</div>
      <div class="payment-reviews__slider">
        <div class="payment-reviews__swiper-wrapper swiper-wrapper">
          <div class="payment-reviews__slide payment-reviews-slide swiper-slide">
            <div class="payment-reviews-slide__wrapper">
              <div class="payment-reviews-slide__header">
                <div class="payment-reviews-slide__avatar">
                  <img src="/" alt="" class="payment-reviews-slide__avatar-img">
                </div>
                <span class="payment-reviews-slide__name">Наталья Елизарова
                </span>
                <span class="payment-reviews-slide__status">Гинеколог</span>
                <div class="payment-reviews-slide__stars">
                  <svg class="payment-reviews-slide__star" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    width="492.892px" height="492.892px" viewBox="0 0 492.892 492.892"
                    style="enable-background:new 0 0 492.892 492.892;" xml:space="preserve" fill="#fc7700">
                    <g>
                      <g>
                        <path
                          d="M232.855,19.773c2.552-5.17,7.817-8.443,13.583-8.443c5.766-0.001,11.032,3.272,13.584,8.442l59.083,119.697    c5.556,11.255,16.294,19.058,28.716,20.862l132.1,19.203c5.706,0.83,10.446,4.826,12.229,10.31    c1.78,5.483,0.296,11.503-3.833,15.528l-95.581,93.181c-8.988,8.763-13.089,21.386-10.969,33.756l22.553,131.547    c0.974,5.683-1.362,11.426-6.027,14.812c-4.664,3.391-10.848,3.836-15.951,1.153l-118.156-62.106    c-11.11-5.84-24.383-5.84-35.495,0.002L110.546,479.82c-5.104,2.683-11.288,2.234-15.952-1.154c-4.665-3.389-7-9.133-6.026-14.814    l22.563-131.537c2.123-12.374-1.979-24.999-10.969-33.764L4.575,205.373c-4.128-4.025-5.615-10.045-3.833-15.528    c1.782-5.483,6.522-9.479,12.228-10.31l132.096-19.202c12.422-1.806,23.161-9.608,28.717-20.865L232.855,19.773z" />
                      </g>
                  </svg>
                </div>
              </div>
              <div class="payment-reviews-slide__text">
                <span class="payment-reviews-slide__text-top">
                  Спасибо большое. Вы мне все понятно разъяснили.
                </span>
                <div class="payment-reviews-slide__review">
                  Отзыв на консультацию:
                  <a href="/" class="payment-reviews-slide__review-link">Когда начнутся месячные при приеме
                    Циклодинона при задержке?</a>
                </div>
                <div class="payment-reviews-slide__user">
                  <div class="payment-reviews-slide__user-avatar">
                    <img src="/" alt="" class="payment-reviews-slide__user-avatar-img">
                  </div>
                  <div class="payment-reviews-slide__client">
                    <span class="payment-reviews-slide__client-name">Оксана
                    </span>
                    <span class="payment-reviews-slide__client-date">2024-05-20 15:58:56
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="payment-reviews__slide payment-reviews-slide swiper-slide">
            <div class="payment-reviews-slide__wrapper">
              <div class="payment-reviews-slide__header">
                <div class="payment-reviews-slide__avatar">
                  <img src="/" alt="" class="payment-reviews-slide__avatar-img">
                </div>
                <span class="payment-reviews-slide__name">Наталья Елизарова 2
                </span>
                <span class="payment-reviews-slide__status">Гинеколог</span>
                <div class="payment-reviews-slide__stars">
                  <svg class="payment-reviews-slide__star" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    width="492.892px" height="492.892px" viewBox="0 0 492.892 492.892"
                    style="enable-background:new 0 0 492.892 492.892;" xml:space="preserve" fill="#fc7700">
                    <g>
                      <g>
                        <path
                          d="M232.855,19.773c2.552-5.17,7.817-8.443,13.583-8.443c5.766-0.001,11.032,3.272,13.584,8.442l59.083,119.697    c5.556,11.255,16.294,19.058,28.716,20.862l132.1,19.203c5.706,0.83,10.446,4.826,12.229,10.31    c1.78,5.483,0.296,11.503-3.833,15.528l-95.581,93.181c-8.988,8.763-13.089,21.386-10.969,33.756l22.553,131.547    c0.974,5.683-1.362,11.426-6.027,14.812c-4.664,3.391-10.848,3.836-15.951,1.153l-118.156-62.106    c-11.11-5.84-24.383-5.84-35.495,0.002L110.546,479.82c-5.104,2.683-11.288,2.234-15.952-1.154c-4.665-3.389-7-9.133-6.026-14.814    l22.563-131.537c2.123-12.374-1.979-24.999-10.969-33.764L4.575,205.373c-4.128-4.025-5.615-10.045-3.833-15.528    c1.782-5.483,6.522-9.479,12.228-10.31l132.096-19.202c12.422-1.806,23.161-9.608,28.717-20.865L232.855,19.773z" />
                      </g>
                  </svg>
                </div>
              </div>
              <div class="payment-reviews-slide__text">
                <span class="payment-reviews-slide__text-top">
                  Спасибо большое. Вы мне все понятно разъяснили. Спасибо большое. Вы мне все понятно разъяснили.
                  Спасибо большое. Вы мне все понятно разъяснили.
                </span>
                <div class="payment-reviews-slide__review">
                  Отзыв на консультацию:
                  <a href="/" class="payment-reviews-slide__review-link">Когда начнутся месячные при приеме
                    Циклодинона при задержке?</a>
                </div>
                <div class="payment-reviews-slide__user">
                  <div class="payment-reviews-slide__user-avatar">
                    <img src="/" alt="" class="payment-reviews-slide__user-avatar-img">
                  </div>
                  <div class="payment-reviews-slide__client">
                    <span class="payment-reviews-slide__client-name">Оксана
                    </span>
                    <span class="payment-reviews-slide__client-date">2024-05-20 15:58:56
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="payment-reviews__slide payment-reviews-slide swiper-slide">
            <div class="payment-reviews-slide__wrapper">
              <div class="payment-reviews-slide__header">
                <div class="payment-reviews-slide__avatar">
                  <img src="/" alt="" class="payment-reviews-slide__avatar-img">
                </div>
                <span class="payment-reviews-slide__name">Наталья Елизарова 3
                </span>
                <span class="payment-reviews-slide__status">Гинеколог</span>
                <div class="payment-reviews-slide__stars">
                  <svg class="payment-reviews-slide__star" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    width="492.892px" height="492.892px" viewBox="0 0 492.892 492.892"
                    style="enable-background:new 0 0 492.892 492.892;" xml:space="preserve" fill="#fc7700">
                    <g>
                      <g>
                        <path
                          d="M232.855,19.773c2.552-5.17,7.817-8.443,13.583-8.443c5.766-0.001,11.032,3.272,13.584,8.442l59.083,119.697    c5.556,11.255,16.294,19.058,28.716,20.862l132.1,19.203c5.706,0.83,10.446,4.826,12.229,10.31    c1.78,5.483,0.296,11.503-3.833,15.528l-95.581,93.181c-8.988,8.763-13.089,21.386-10.969,33.756l22.553,131.547    c0.974,5.683-1.362,11.426-6.027,14.812c-4.664,3.391-10.848,3.836-15.951,1.153l-118.156-62.106    c-11.11-5.84-24.383-5.84-35.495,0.002L110.546,479.82c-5.104,2.683-11.288,2.234-15.952-1.154c-4.665-3.389-7-9.133-6.026-14.814    l22.563-131.537c2.123-12.374-1.979-24.999-10.969-33.764L4.575,205.373c-4.128-4.025-5.615-10.045-3.833-15.528    c1.782-5.483,6.522-9.479,12.228-10.31l132.096-19.202c12.422-1.806,23.161-9.608,28.717-20.865L232.855,19.773z" />
                      </g>
                  </svg>
                </div>
              </div>
              <div class="payment-reviews-slide__text">
                <span class="payment-reviews-slide__text-top">
                  Спасибо большое. Вы мне все понятно разъяснили. Спасибо большое. Вы мне все понятно разъяснили.
                  Спасибо большое. Вы мне все понятно разъяснили.
                </span>
                <div class="payment-reviews-slide__review">
                  Отзыв на консультацию:
                  <a href="/" class="payment-reviews-slide__review-link">Когда начнутся месячные при приеме
                    Циклодинона при задержке?</a>
                </div>
                <div class="payment-reviews-slide__user">
                  <div class="payment-reviews-slide__user-avatar">
                    <img src="/" alt="" class="payment-reviews-slide__user-avatar-img">
                  </div>
                  <div class="payment-reviews-slide__client">
                    <span class="payment-reviews-slide__client-name">Оксана
                    </span>
                    <span class="payment-reviews-slide__client-date">2024-05-20 15:58:56
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="payment-reviews__slide payment-reviews-slide swiper-slide">
            <div class="payment-reviews-slide__wrapper">
              <div class="payment-reviews-slide__header">
                <div class="payment-reviews-slide__avatar">
                  <img src="/" alt="" class="payment-reviews-slide__avatar-img">
                </div>
                <span class="payment-reviews-slide__name">Наталья Елизарова 4
                </span>
                <span class="payment-reviews-slide__status">Гинеколог</span>
                <div class="payment-reviews-slide__stars">
                  <svg class="payment-reviews-slide__star" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    width="492.892px" height="492.892px" viewBox="0 0 492.892 492.892"
                    style="enable-background:new 0 0 492.892 492.892;" xml:space="preserve" fill="#fc7700">
                    <g>
                      <g>
                        <path
                          d="M232.855,19.773c2.552-5.17,7.817-8.443,13.583-8.443c5.766-0.001,11.032,3.272,13.584,8.442l59.083,119.697    c5.556,11.255,16.294,19.058,28.716,20.862l132.1,19.203c5.706,0.83,10.446,4.826,12.229,10.31    c1.78,5.483,0.296,11.503-3.833,15.528l-95.581,93.181c-8.988,8.763-13.089,21.386-10.969,33.756l22.553,131.547    c0.974,5.683-1.362,11.426-6.027,14.812c-4.664,3.391-10.848,3.836-15.951,1.153l-118.156-62.106    c-11.11-5.84-24.383-5.84-35.495,0.002L110.546,479.82c-5.104,2.683-11.288,2.234-15.952-1.154c-4.665-3.389-7-9.133-6.026-14.814    l22.563-131.537c2.123-12.374-1.979-24.999-10.969-33.764L4.575,205.373c-4.128-4.025-5.615-10.045-3.833-15.528    c1.782-5.483,6.522-9.479,12.228-10.31l132.096-19.202c12.422-1.806,23.161-9.608,28.717-20.865L232.855,19.773z" />
                      </g>
                  </svg>
                </div>
              </div>
              <div class="payment-reviews-slide__text">
                <span class="payment-reviews-slide__text-top">
                  Спасибо большое. Вы мне все понятно разъяснили. Спасибо большое. Вы мне все понятно разъяснили.
                </span>
                <div class="payment-reviews-slide__review">
                  Отзыв на консультацию:
                  <a href="/" class="payment-reviews-slide__review-link">Когда начнутся месячные при приеме
                    Циклодинона при задержке?</a>
                </div>
                <div class="payment-reviews-slide__user">
                  <div class="payment-reviews-slide__user-avatar">
                    <img src="/" alt="" class="payment-reviews-slide__user-avatar-img">
                  </div>
                  <div class="payment-reviews-slide__client">
                    <span class="payment-reviews-slide__client-name">Оксана
                    </span>
                    <span class="payment-reviews-slide__client-date">2024-05-20 15:58:56
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="payment-reviews__slide payment-reviews-slide swiper-slide">
            <div class="payment-reviews-slide__wrapper">
              <div class="payment-reviews-slide__header">
                <div class="payment-reviews-slide__avatar">
                  <img src="/" alt="" class="payment-reviews-slide__avatar-img">
                </div>
                <span class="payment-reviews-slide__name">Наталья Елизарова 5
                </span>
                <span class="payment-reviews-slide__status">Гинеколог</span>
                <div class="payment-reviews-slide__stars">
                  <svg class="payment-reviews-slide__star" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    width="492.892px" height="492.892px" viewBox="0 0 492.892 492.892"
                    style="enable-background:new 0 0 492.892 492.892;" xml:space="preserve" fill="#fc7700">
                    <g>
                      <g>
                        <path
                          d="M232.855,19.773c2.552-5.17,7.817-8.443,13.583-8.443c5.766-0.001,11.032,3.272,13.584,8.442l59.083,119.697    c5.556,11.255,16.294,19.058,28.716,20.862l132.1,19.203c5.706,0.83,10.446,4.826,12.229,10.31    c1.78,5.483,0.296,11.503-3.833,15.528l-95.581,93.181c-8.988,8.763-13.089,21.386-10.969,33.756l22.553,131.547    c0.974,5.683-1.362,11.426-6.027,14.812c-4.664,3.391-10.848,3.836-15.951,1.153l-118.156-62.106    c-11.11-5.84-24.383-5.84-35.495,0.002L110.546,479.82c-5.104,2.683-11.288,2.234-15.952-1.154c-4.665-3.389-7-9.133-6.026-14.814    l22.563-131.537c2.123-12.374-1.979-24.999-10.969-33.764L4.575,205.373c-4.128-4.025-5.615-10.045-3.833-15.528    c1.782-5.483,6.522-9.479,12.228-10.31l132.096-19.202c12.422-1.806,23.161-9.608,28.717-20.865L232.855,19.773z" />
                      </g>
                  </svg>
                </div>
              </div>
              <div class="payment-reviews-slide__text">
                <span class="payment-reviews-slide__text-top">
                  Спасибо большое. Вы мне все понятно разъяснили.
                </span>
                <div class="payment-reviews-slide__review">
                  Отзыв на консультацию:
                  <a href="/" class="payment-reviews-slide__review-link">Когда начнутся месячные при приеме
                    Циклодинона при задержке?</a>
                </div>
                <div class="payment-reviews-slide__user">
                  <div class="payment-reviews-slide__user-avatar">
                    <img src="/" alt="" class="payment-reviews-slide__user-avatar-img">
                  </div>
                  <div class="payment-reviews-slide__client">
                    <span class="payment-reviews-slide__client-name">Оксана
                    </span>
                    <span class="payment-reviews-slide__client-date">2024-05-20 15:58:56
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="main__specialists specialists">
  <div class="specialists__wrapper">
    <h2 class="specialists__title">Кто предоставляет консультации </h2>
    <ul class="specialists__list">
      <li class="specialists__item specialist">
        <a href="/" class="specialist__link">
          <div class="specialist__img">
            <img src="" alt="" class="specialist__icon">
          </div>
          <div class="specialist__body">
            <span class="specialist__title">Жылдыз Жаныбековна</span>
            <span class="specialist__text">Инфекционист (детский, взрослый), гепатолог, паразитолог</span>
          </div>
        </a>
      </li>
      <li class="specialists__item specialist">
        <a href="/" class="specialist__link">
          <div class="specialist__img">
            <img src="" alt="" class="specialist__icon">
          </div>
          <div class="specialist__body">
            <span class="specialist__title">Жылдыз Жаныбековна</span>
            <span class="specialist__text">Инфекционист (детский, взрослый), гепатолог, паразитолог</span>
          </div>
        </a>
      </li>
      <li class="specialists__item specialist">
        <a href="/" class="specialist__link">
          <div class="specialist__img">
            <img src="" alt="" class="specialist__icon">
          </div>
          <div class="specialist__body">
            <span class="specialist__title">Жылдыз Жаныбековна</span>
            <span class="specialist__text">Инфекционист (детский, взрослый), гепатолог, паразитолог</span>
          </div>
        </a>
      </li>
      <li class="specialists__item specialist">
        <a href="/" class="specialist__link">
          <div class="specialist__img">
            <img src="" alt="" class="specialist__icon">
          </div>
          <div class="specialist__body">
            <span class="specialist__title">Жылдыз Жаныбековна</span>
            <span class="specialist__text">Инфекционист (детский, взрослый), гепатолог, паразитолог</span>
          </div>
        </a>
      </li>
      <li class="specialists__item specialist">
        <a href="/" class="specialist__link">
          <div class="specialist__img">
            <img src="" alt="" class="specialist__icon">
          </div>
          <div class="specialist__body">
            <span class="specialist__title">Жылдыз Жаныбековна</span>
            <span class="specialist__text">Инфекционист (детский, взрослый), гепатолог, паразитолог</span>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>
</div>
@endsection