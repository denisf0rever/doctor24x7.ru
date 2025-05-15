@extends('content')
@section('title', 'Создать новый чат')

@section('content')
<section class="main__receipt receipt">
  <div class="receipt__wrapper">
    <form action="{{ route('chat.create') }}" method="post" class="receipt__form">
      <img src="https://img.freepik.com/free-vector/hand-drawn-clothes-person_79603-614.jpg?semt=ais_hybrid&w=740"
        alt="" class="payment-method__avatar">
      <span class="payment-method__big-name">ИМЯ</span>
      <span class="payment-method__subtitle">Подзаголовок</span>
      <div class="payment-method__submit-wrapper">
        <span class="payment-method__submit-text">Мы гарантируем безопасность и сохранность ваших данных </span>
        <input type="submit" value="Оплатить консультацию" class="payment-method__submit">
      </div>
    </form>
  </div>
</section>

@endsection