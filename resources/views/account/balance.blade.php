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
        <span class="balance__subtitle">Свободных стредств</span>
        <span class="balance__amount">{{ $account->balance }} ₽</span>
        <form action="{{ route('payment.init') }}" class="balance__add-balance-form" method="post">
		@csrf
		
		@if ($errors->any())
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif
			<input type="hidden" name="payment_purpose" value="balance_account">
			<input type="hidden" name="OrderId" value="{{ auth()->id() }}">
          <div class="balance__add-balance-label">
            <span class="balance__amount-span">Сумма пополнения</span>
            <input type="text" name="Sum" class="balance__amount-input" placeholder="1 000 ₽" value="">
          </div>
          <!--<button type="submit" class="balance__add-balance-button new-red-button">Пополнить</button>-->
       
        <div class="balance__method payment-method">
          <h1 class="payment__normal-title">Способ оплаты</h1>
          <div class="payment-method__list">

            <div class="payment-method__item">
              <input type="radio" name="payment_method" class="payment-method__input" value="t_bank" id="payment_method" checked>
              <label for="payment_method" class="payment-method__label">
                <div class="payment-method__icon">
                  <img src="{{ Storage::url('payment/TPay.svg') }}">
                </div>
                <div class="payment-method__body">
                  <span class="payment-method__title">Т-банк касса</span>
                  <span class="payment-method__text">Карта любого банка, SBpay</span>
                </div>
              </label>
            </div>
          </div>
          <input type="submit" value="Пополнить баланс" class="payment-method__submit">
        </div>
		</form>
      </div>
    </div>
  </section>
</div>
@endsection