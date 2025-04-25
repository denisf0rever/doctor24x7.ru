@extends('appwide')
@section('title', 'Оплата чат консультации')

@section('content')


<section class="main__receipt receipt">
  <div class="receipt__wrapper">
    <form action="" class="receipt__form">
      <input type="number" hidden class="receipt__total-price">
      <div class="receipt__main-field">
        <span class="receipt__title">Итого к оплате</span>
        <label for="price" class="receipt__label">
          <input type="number" class="receipt__price" id="price" name="price" value="1000"
            oninput="this.value = this.value.replace(/\D/g, '')">
          <span class="receipt__currency">₽</span>
          <span class="receipt__input-mirror"></span>
          <div class="receipt__custom-price">
            <span class="receipt__custom-price-btn">Ввести свою сумму</span>
          </div>
        </label>
      </div>
      <div class="receipt__checkboxes">
        <label for="checkbox_1" class="receipt__checkbox-wrapper">
          <input type="checkbox" id="checkbox_1" class="receipt__checkbox">
          <span class="receipt__checkbox-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
        </label>
        <label for="checkbox_2" class="receipt__checkbox-wrapper">
          <input type="checkbox" id="checkbox_2" class="receipt__checkbox">
          <span class="receipt__checkbox-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
        </label>
      </div>
      <div class="receipt__payment-method payment-method">
        <div class="payment-method__tabs">
          <input class="payment-method__radio-input" type="radio" id="payment_type_1" name="payment_type" value="t_bank"
            checked>
          <label class="payment-method__radio-label" for="payment_type_1">Т-банк</label>
          <input class="payment-method__radio-input" type="radio" id="payment_type_2" name="payment_type"
            value="u_kassa">
          <label class="payment-method__radio-label" for="payment_type_2">Юкасса</label>
        </div>
        <div class="payment-method__list" data-id="payment_type_1">
          <div class="payment-method__item">
            <input type="radio" name="paymentType" class="payment-method__input" value="any_card" id="any_card">
            <label for="any_card" class="payment-method__label payment-method__label--small">
              <div class="payment-method__icon">
                <img src="{{ Storage::url('payment/card.svg') }}">
              </div>
              <div class="payment-method__body">
                <span class="payment-method__text">Любой банк</span>
              </div>
            </label>
          </div>
          <div class="payment-method__item">
            <input type="radio" name="paymentType" class="payment-method__input" value="TPay" id="TPay">
            <label for="TPay" class="payment-method__label payment-method__label--small">
              <div class="payment-method__icon">
                <img src="{{ Storage::url('payment/TPay.svg') }}">
              </div>
              <div class="payment-method__body">
                <span class="payment-method__text">Оплата TPay</span>
              </div>
            </label>
          </div>
          <div class="payment-method__item">
            <input type="radio" name="paymentType" class="payment-method__input" value="SBPay" id="SBPay">
            <label for="SBPay" class="payment-method__label payment-method__label--small">
              <div class="payment-method__icon">
                <img src="{{ Storage::url('payment/SB.svg') }}">
              </div>
              <div class="payment-method__body">
                <span class="payment-method__text">Оплата SberPay</span>
              </div>
            </label>
          </div>
        </div>
        <div class="payment-method__list" data-id="payment_type_2">
          <div class="payment-method__item">
            <input type="radio" name="paymentType" class="payment-method__input" value="ac" id="ac">
            <label for="ac" class="payment-method__label payment-method__label--small">
              <div class="payment-method__icon">
                <img src="{{ Storage::url('payment/card.svg') }}">
              </div>
              <div class="payment-method__body">
                <span class="payment-method__text">Любой банк</span>
              </div>
            </label>
          </div>
          <div class="payment-method__item">
            <input type="radio" name="paymentType" class="payment-method__input" value="SB" id="SB">
            <label for="SB" class="payment-method__label payment-method__label--small">
              <div class="payment-method__icon">
                <img src="{{ Storage::url('payment/SB.svg') }}">
              </div>
              <div class="payment-method__body">
                <span class="payment-method__text">Оплата SberPay</span>
              </div>
            </label>
          </div>
        </div>
        <input type="submit" value="Оплатить консультацию" class="payment-method__submit">
      </div>
    </form>
  </div>
</section>

@endsection