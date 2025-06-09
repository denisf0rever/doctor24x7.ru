@extends('content')
@section('title', 'Создать новый чат')

@section('content')
<section class="main__receipt receipt">
  <div class="receipt__wrapper">
    <form action="{{ route('chat.create') }}" method="post" class="receipt__form">
      @csrf
      <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $consultant->avatar }}"
        alt="" class="payment-method__avatar">
      <span class="payment-method__big-name">{{ $consultant->first_name .' '. $consultant->middle_name }}</span>
      <div class="payment-method__table">
        <div class="payment-method__table-row">
          <span class="payment-method__table-cell">Тип консультации</span>
          <span class="payment-method__table-cell">Стоимость</span>
        </div>
        <div class="payment-method__table-row">
          <span class="payment-method__table-cell">Консультация</span>
          <span class="payment-method__table-cell">от 1000</span>
        </div>
        <div class="payment-method__table-row">
          <span class="payment-method__table-cell">Консультация + анализы</span>
          <span class="payment-method__table-cell">от 2000</span>
        </div>
      </div>
      <div class="payment-method__email-input-wrapper">
        <input type="hidden" name="consultant_id" value="{{ $consultant->id }}">
        <input type="email" name="email" class="payment-method__email-input" placeholder="Введите свою почту" value="">
      </div>
      <div class="payment-method__submit-wrapper">
        <span class="payment-method__submit-text">Далее будет создан чат для консультации</span>
        <input type="submit" value="Начать чат" class="payment-method__submit">
      </div>
    </form>
  </div>
</section>
@include('parts.metrika')
@endsection