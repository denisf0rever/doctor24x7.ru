<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Тарифы</title>
  @include('dashboard.settings')
</head>

<body>

  @include('dashboard.parts.header')
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')


      <main class="wrapper__main main">
        <div class="main__wrapper">
		<h1 class="main__title">Тарифы</h1>
          <section class="main__pages pages">
            <div class="pages__wrapper">
              <div class="pages__inner">
                <div class="pages__titles pages__titles-tariff">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-tariff-name">Название</span>
                  <span class="pages__title-tariff-name">На сайте</span>
                  <span class="pages__title-tariff-number">Ответов</span>
                  <span class="pages__title-tariff-number">База</span>
                  <span class="pages__title-tariff-number">Дневной</span>
                  <span class="pages__title-tariff-number">Ночной</span>
                  <span class="pages__title-tariff-number">Условия</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list pages__list">
				 @foreach ($tariffs as $tariff)
                  <li class="pages__item pages__item-tariff">
                    <span class="pages__views-id">{{ $tariff->id }}</span>
                    <a class="pages__tariff-name" href="{{ route('dashboard.tariff.edit', $tariff->id)}}" target="_blank"><span>{{ $tariff->name }}</span></a>
                    <a class="pages__tariff-name" href="{{ route('dashboard.tariff.edit', $tariff->id)}}" target="_blank"><span>{{ $tariff->title }}</span></a>
                    <span class="pages__views-tariff-number">{{ $tariff->answers_count }}</span>
                    <span class="pages__views-tariff-number">{{ $tariff->sum }} &#8381;</span>
                    <span class="pages__views-tariff-number">{{ $tariff->fee }} &#8381;</span>
                    <span class="pages__views-tariff-number">{{ $tariff->night_fee }} &#8381;</span>
                    <span class="pages__views-tariff-number">{{ $tariff->condition_id }}</span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.tariff.edit', $tariff->id)}}" target="_blank">
                          <img src="{{ Storage::url('dashboard/edit.svg') }}" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <a class="delete-link" href="#">
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
        <div class="toast">
          <div class="toast__container" id="toast">
            <div class="toast__item">
              {{ session('success') }}
            </div>
          </div>
        </div>
        @endif
      </main>
    </div>
  </div>