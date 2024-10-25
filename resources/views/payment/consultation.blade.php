@extends('app')
@section('title', $consultation->title)
@section('description', $consultation->metadescription)
@section('keywords', $consultation->metakey)
@section('canonical', 'consultation/'. $consultation->id)

@section('content')

<main class="main">
  <div class="main__wrapper container">
    <h1 class="main__title">Оплата консультации </h1>
    <h2 class="main__subtitle">Гарантированный ответ предоставляется после оплаты услуг </h2>
    <section class="main__payment-form payment-form">
      <div class="payment-form__wrapper">
        <form action="/" class="payment-form__form">
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
                <input class="first-radio__input" hidden id="second-calc" type="radio" name="calculate-field" value="0">
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
                  <img src="/" alt="" class="second-radio__img">
                  <span class="second-radio__item-title">Фармацевт не нужен
                  </span>
                  <span class="second-radio__item-text">Без дополнительной оплаты </span>
                </label>
                <input class="second-radio__input" hidden id="contactChoice2" type="radio" name="calculate-field-second"
                  value="249">
                <label for="contactChoice1" class="second-radio__item">
                  <img src="/" alt="" class="second-radio__img">
                  <span class="second-radio__item-title">Пригласить фармацевта </span>
                  <span class="second-radio__item-text">+249 рублей к стоимости консультации </span>
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <section class="main__payment-reviews payment-reviews">
      <div class="payment-reviews__wrapper">
        <div class="payment-reviews__title">
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
</main>

@endsection