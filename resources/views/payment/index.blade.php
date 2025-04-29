@extends('appwide')
@section('title', 'Оплата консультации')

@section('content')
<section class="main__payment-form payment-form big-container new-section-wrapper">
  <div class="payment-form__inner container">
    <div class="payment-form__wrapper">
      <form action="{{ route('payment.consultation.init') }}" method="POST" class="payment-form__form">
        @csrf
        <input type="hidden" name="OrderId" value="{{ $consultation->id }}">
        <input type="hidden" id="tariff_id" name="tariff_id" value="14">
        <input type="hidden" name="Sum" id="total_price" value="500">
        <input type="hidden" name="payment_purpose" id="payment_purpose" value="consultation">

        <div class="payment__wrapper container-p">
          <span class="payment__title">Оплата консультации</span>
          <span class="payment__small-title">Количество консультантов</span>
          <div class="payment__amount-list">

@if ($errors->any())
	<ul>
@foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
</ul>
@endif

            @foreach($tariffArray as $key => $tariff)
            <label class="payment__amount-item" for="amount_{{ $key + 1 }}">
              <input class="payment__amount-input" hidden type="radio" name="amount" value="{{ $tariff->sum }}"
                id="amount_{{ $key + 1 }}" data-id="{{ $tariff->id }}" @if ($key==0) checked @endif>
              <span class="payment__amount-radio">{{ $key + 1 }}</span>
            </label>
            @endforeach
          </div>

          <span class="payment__small-title">Стоимость консультации</span>

          <div class="payment__urgency-list">
            <label class="payment__urgency-item" for="urgency_1">
              <input class="payment__urgency-input" hidden="" type="radio" name="urgency" value="0" id="urgency_1">
              <div class="payment__urgency-radio">
                <img src="{{ Storage::url('payment/turtle.svg') }}" alt="" class="payment__urgency-img">
                <div class="payment__urgency-title">500 ₽</div>
                <div class="payment__urgency-subtitle">Могу подождать</div>
                <div class="payment__urgency-text">Ожидание ~2-5ч</div>
              </div>
            </label>
            <label class="payment__urgency-item" for="urgency_2">
              <input class="payment__urgency-input" hidden="" type="radio" name="urgency" value="200" id="urgency_2">
              <div class="payment__urgency-radio">
                <img src="{{ Storage::url('payment/scooter.svg') }}" alt="" class="payment__urgency-img">
                <div class="payment__urgency-title">700 ₽</div>
                <div class="payment__urgency-subtitle">Что-то среднее</div>
                <div class="payment__urgency-text">Ожидание ~1-2ч</div>
              </div>
            </label>
            <label class="payment__urgency-item" for="urgency_3">
              <input class="payment__urgency-input" checked="" hidden="" type="radio" name="urgency" value="300"
                id="urgency_3">
              <div class="payment__urgency-radio">
                <img src="{{ Storage::url('payment/rocket.svg') }}" alt="" class="payment__urgency-img">
                <div class="payment__urgency-title">800 ₽</div>
                <div class="payment__urgency-subtitle">Срочно</div>
                <div class="payment__urgency-text">Ожидание ~25м</div>
              </div>
            </label>
          </div>
          <span class="payment__normal-title">Дополнительные опции</span>
          <div class="payment__bottom">
            <ul class="payment__checkboxes">
              <li class="payment__checkbox payment-checkbox">
                <div class="payment-checkbox__wrapper">
                  <div class="payment-checkbox__inner">
                    <img src="{{ Storage::url('payment/chat.svg') }}" alt="" class="payment-checkbox__img">
                    <div class="payment-checkbox__text-block">
                      <div class="payment-checkbox__title">Диалоги с врачом (чат)
                        <span class="payment-checkbox__grey-text"></span>
                      </div>
                      <div class="payment-checkbox__text">Написать уточнение, дополнить вопрос</div>
                    </div>
                    <div class="payment-checkbox__right">
                      <div class="payment-checkbox__price">349 ₽</div>
                      <label class="payment-checkbox__switch form-switch">
                        <input type="checkbox" class="form-switch__checkbox" name="chat" value="349" checked>
                        <span class="form-switch__slider"> </span>
                      </label>
                    </div>
                  </div>
                </div>
              </li>
              <li class="payment__checkbox payment-checkbox">
                <div class="payment-checkbox__wrapper">
                  <div class="payment-checkbox__inner">
                    <img src="{{ Storage::url('payment/pill.svg') }}" alt="" class="payment-checkbox__img">
                    <div class="payment-checkbox__text-block">
                      <div class="payment-checkbox__title">
                        Фармацевт
                        <span class="payment-checkbox__grey-text"></span>
                      </div>
                      <div class="payment-checkbox__text">
                        Дополнительно ответит фармацевт
                      </div>
                    </div>
                    <div class="payment-checkbox__right">
                      <div class="payment-checkbox__price">249 ₽</div>
                      <label class="payment-checkbox__switch form-switch">
                        <input type="checkbox" class="form-switch__checkbox" name="pharma" value="249">
                        <span class="form-switch__slider"> </span>
                      </label>
                    </div>
                  </div>
                </div>
              </li>
              <li class="payment__checkbox payment-checkbox">
                <div class="payment-checkbox__wrapper">
                  <div class="payment-checkbox__inner">
                    <img src="{{ Storage::url('payment/phone.svg') }}" alt="" class="payment-checkbox__img">
                    <div class="payment-checkbox__text-block">
                      <div class="payment-checkbox__title">
                        Консультация по телефону
                        <span class="payment-checkbox__grey-text"></span>
                      </div>
                      <div class="payment-checkbox__text">
                        Удобным для вас способом
                      </div>
                    </div>
                    <div class="payment-checkbox__right">
                      <div class="payment-checkbox__price">1500 ₽</div>
                      <label class="payment-checkbox__switch payment-checkbox__switch-connect form-switch"
                        id="phone-switch">
                        <input type="checkbox" class="form-switch__checkbox form-switch__checkbox-connect"
                          name="phone_consultation" value="1500">
                        <span class="form-switch__slider"> </span>
                      </label>
                    </div>
                  </div>
                  <div class="payment-checkbox__additional-input-wrapper payment-checkbox__hidden">
                    <input type="text" disabled="" required="" class="payment-checkbox__additional-input"
                      id="phone-input" placeholder="+7-xxx-xxx-xx-xx" name="option_phone">
                  </div>
                </div>
              </li>
              <li class="payment__checkbox payment-checkbox">
                <div class="payment-checkbox__wrapper">
                  <div class="payment-checkbox__inner">
                    <img src="{{ Storage::url('payment/video-call.svg') }}" alt="" class="payment-checkbox__img">
                    <div class="payment-checkbox__text-block">
                      <div class="payment-checkbox__title">
                        Видео-консультация
                        <span class="payment-checkbox__grey-text"></span>
                      </div>
                      <div class="payment-checkbox__text">
                        Удобным для вас способом
                      </div>
                    </div>
                    <div class="payment-checkbox__right">
                      <div class="payment-checkbox__price">2500 ₽</div>
                      <label class="payment-checkbox__switch payment-checkbox__switch-connect form-switch"
                        id="contact-switch">
                        <input type="checkbox" class="form-switch__checkbox form-switch__checkbox-connect"
                          name="video_consultation" value="2500">
                        <span class="form-switch__slider"> </span>
                      </label>
                    </div>
                  </div>
                  <div class="payment-checkbox__additional-input-wrapper payment-checkbox__hidden">
                    <input type="text" required="" disabled="" class="payment-checkbox__additional-input"
                      id="contact-input" placeholder="Контакт" name="video_consultation">
                  </div>
                </div>
              </li>
            </ul>
            <div class="payment__result">
              <!--<img src="images/images.png" alt="" class="payment__result-img" />-->
              <div class="payment__result-title">Итого к оплате</div>
              <div class="payment__result-price">800 ₽</div>
            </div>
          </div>
        </div>

        <section class="payment__method payment-method">
          <div>
            <h1 class="payment__normal-title">Выберите способ оплаты</h1>
          </div>
          <div class="payment-method__tabs">
            <input class="payment-method__radio-input" type="radio" id="payment_type_1" name="payment_method"
              value="t_bank" checked>
            <label class="payment-method__radio-label" for="payment_type_1">Т-банк</label>

            <input class="payment-method__radio-input" type="radio" id="payment_type_2" name="payment_method"
              value="u_kassa">
            <label class="payment-method__radio-label" for="payment_type_2">Юкасса</label>
          </div>
          <div class="payment-method__list" data-id="payment_type_1">

            <div class="payment-method__item">
              <input type="radio" name="paymentType" class="payment-method__input" value="any_card" id="any_card">
              <label for="any_card" class="payment-method__label">
                <div class="payment-method__icon">
                  <img src="{{ Storage::url('payment/card.svg') }}">
                </div>
                <div class="payment-method__body">
                  <span class="payment-method__title">Банковская карта</span>
                  <span class="payment-method__text">Любой банк</span>
                </div>
              </label>
            </div>
            <div class="payment-method__item">
              <input type="radio" name="paymentType" class="payment-method__input" value="TPay" id="TPay">
              <label for="TPay" class="payment-method__label">
                <div class="payment-method__icon">
                  <img src="{{ Storage::url('payment/TPay.svg') }}">
                </div>
                <div class="payment-method__body">
                  <span class="payment-method__title">TPay</span>
                  <span class="payment-method__text">Оплата TPay</span>
                </div>
              </label>
            </div>
            <div class="payment-method__item">
              <input type="radio" name="paymentType" class="payment-method__input" value="SBPay" id="SBPay">
              <label for="SBPay" class="payment-method__label">
                <div class="payment-method__icon">
                  <img src="{{ Storage::url('payment/SB.svg') }}">
                </div>
                <div class="payment-method__body">
                  <span class="payment-method__title">SberPay</span>
                  <span class="payment-method__text">Оплата SberPay</span>
                </div>
              </label>
            </div>
          </div>
          <div class="payment-method__list" data-id="payment_type_2">
            <div class="payment-method__item">
              <input type="radio" name="paymentType" class="payment-method__input" value="ac" id="ac">
              <label for="ac" class="payment-method__label">
                <div class="payment-method__icon">
                  <img src="{{ Storage::url('payment/card.svg') }}">
                </div>
                <div class="payment-method__body">
                  <span class="payment-method__title">Банковская карта</span>
                  <span class="payment-method__text">Любой банк</span>
                </div>
              </label>
            </div>

            <div class="payment-method__item">
              <input type="radio" name="paymentType" class="payment-method__input" value="SB" id="SB">
              <label for="SB" class="payment-method__label">
                <div class="payment-method__icon">
                  <img src="{{ Storage::url('payment/SB.svg') }}">
                </div>
                <div class="payment-method__body">
                  <span class="payment-method__title">SberPay</span>
                  <span class="payment-method__text">Оплата SberPay</span>
                </div>
              </label>
            </div>

            <div class="payment-method__item">
              <input type="radio" name="paymentType" class="payment-method__input" value="PC" id="pc">
              <label for="pc" class="payment-method__label">
                <div class="payment-method__icon">
                  <img src="{{ Storage::url('payment/yad.svg') }}">
                </div>
                <div class="payment-method__body">
                  <span class="payment-method__title">ЮMoney</span>
                  <span class="payment-method__text">Оплата из кошелька в ЮMoney</span>
                </div>
              </label>
            </div>
            <div class="payment-method__item">
              <input type="radio" name="paymentType" class="payment-method__input" value="MC" id="mts">
              <label for="mts" class="payment-method__label">
                <div class="payment-method__icon">
                  <img src="{{ Storage::url('payment/mts.svg') }}">
                </div>
                <div class="payment-method__body">
                  <span class="payment-method__title">МТС</span>
                  <span class="payment-method__text">Оплата с баланса телефона</span>
                </div>
              </label>
            </div>

            <div class="payment-method__item">
              <input type="radio" name="paymentType" class="payment-method__input" value="MC" id="beeline">
              <label for="beeline" class="payment-method__label">
                <div class="payment-method__icon">
                  <img src="{{ Storage::url('payment/beeline.svg') }}">
                </div>
                <div class="payment-method__body">
                  <span class="payment-method__title">Билайн</span>
                  <span class="payment-method__text">Оплата с баланса телефона</span>
                </div>
              </label>
            </div>


          </div>
          <div class="payment-method__foreign-pay">
            <span class="payment-method__foreign-pay-text">Нет возможности оплатить картами РФ?
              <a href="https://t.me/infinity_operatorr" class="payment-method__foreign-pay-link"
                target="_blank">Свяжитесь с нами в Telegram</a>
            </span>
          </div>
          <input type="submit" value="Оплатить консультацию" class="payment-method__submit">
    </div>
</section>


</form>
</div>
</div>
</section>
</div>
@endsection