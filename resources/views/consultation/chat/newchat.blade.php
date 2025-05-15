@extends('content')
@section('title', 'Создать новый чат')

@section('content')
<section class="main__receipt receipt">
  <div class="receipt__wrapper">
    <form action="{{ route('chat.create') }}" method="post" class="receipt__form">
	@csrf
      <input type="hidden" name="user_id" id="payment_purpose" value="{{ $user->id }}">
      <div class="receipt__main-field">
        <span class="receipt__title">Итого к оплате</span>
        <label for="price" class="receipt__label">
          <input type="number" class="receipt__price" readonly id="price" name="price" value=" "
            oninput="this.value = this.value.replace(/\D/g, '')">
          <span class="receipt__currency">₽</span>
          <span class="receipt__input-mirror"></span>
          <div class="receipt__custom-price">
            <span class="receipt__custom-price-btn">Ввести свою сумму</span>
          </div>
        </label>
      </div>
      <div class="receipt__payment-method payment-method">
        <input type="submit" value="Перейти в чат" class="payment-method__submit">
      </div>
    </form>
  </div>
</section>

@endsection