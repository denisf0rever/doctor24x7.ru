@extends('content')
@section('title', 'Создать новый чат')

@section('content')
<section class="main__receipt receipt">
  <div class="receipt__wrapper">
    <form action="{{ route('chat.create') }}" method="post" class="receipt__form">
      @csrf
      <img src="https://img.freepik.com/free-vector/hand-drawn-clothes-person_79603-614.jpg?semt=ais_hybrid&w=740"
        alt="" class="payment-method__avatar">
      <span class="payment-method__big-name">ИМЯ</span>
      <div class="payment-method__table">
        <div class="payment-method__table-row">
          <span class="payment-method__table-cell">Вариант ответа</span>
          <span class="payment-method__table-cell">Вариант ответа</span>
        </div>
        <div class="payment-method__table-row">
          <span class="payment-method__table-cell">Вариант ответа</span>
          <span class="payment-method__table-cell">123</span>
        </div>
        <div class="payment-method__table-row">
          <span class="payment-method__table-cell">Lorem ipsum, dolor sit amet consectetur</span>
          <span class="payment-method__table-cell">123</span>
        </div>
      </div>
      <div class="payment-method__email-input-wrapper">
        <input type="hidden" name="consultant_id" value="{{ $user->id }}">
        <input type="email" name="email" class="payment-method__email-input" placeholder="Введите свою почту" value="">
      </div>
      <div class="payment-method__submit-wrapper">
        <span class="payment-method__submit-text">Далее будет создан чат для консультации</span>
        <input type="submit" value="Начать чат" class="payment-method__submit">
      </div>
    </form>
  </div>
</section>

@endsection