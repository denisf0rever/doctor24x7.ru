@extends('appwide')
@section('title', 'Баланс')
@section('description', 'Баланс')
@section('keywords', 'Баланс')
@section('canonical', route('account.balance'))

@section('content')

<div class="new-section-wrapper">
  <section class="balance">
    <div class="balance__wrapper">
      <div class="balance__inner">
        <h1 class="balance__title">Финансы</h1>
        <span class="balance__subtitle">Сводобдных стредств</span>
        <span class="balance__amount">0 $</span>
        <form action="/" class="balance__add-balance-form">
          <div class="balance__add-balance-label">
            <span class="balance__amount-span">Сумма пополнения</span>
            <input type="text" name="amount" class="balance__amount-input" placeholder="1 000 ₽" inputmode="numeric">
          </div>
          <button type="submit" class="balance__add-balance-button new-red-button">Пополнить</button>
        </form>
        <div class="balance__method payment-method">
          <h1 class="payment__normal-title">Выберите способ оплаты</h1>
          <div class="payment-method__list">

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
          <input type="submit" value="Оплатить консультацию" class="payment-method__submit">
        </div>
      </div>
    </div>
  </section>

</div>

@endsection