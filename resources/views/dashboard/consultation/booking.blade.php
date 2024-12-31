<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Список бронирований</title>
  @include('dashboard.settings')
</head>
<body>
  @include('dashboard.parts.header')
@php
use App\Models\UserMain;
@endphp
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Бронирования</h1>
          <section class="main__pages pages">
            <div class="pages__wrapper">
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-name">Пользователь</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list">
                  @foreach ($bookings as $booking)
				  
                  <li class="pages__item">
                    <span class="pages__views-id">{{ $booking->id }}</span></a>
                    <span class="pages__name"><span>{{ UserMain::find($booking->user_id)->username }} {{ $booking->user_id }}</span></span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.booking.destroy', $booking->id) }}">
                          <img src="{{ Storage::url('dashboard/del.svg') }}" alt="" class="pages__icon-img">
                        </a>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </section>
        </div>
		@if (session('success'))
        <div class="toast" id="toast">
          <div class="toast__container">
            <div class="toast__item">
              {{ session('success') }}
            </div>
          </div>
        </div>
        @endif
      </main>
    </div>
  </div>