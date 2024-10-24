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
          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Тарифы</h2>
              <div class="pages__inner">
                <div class="pages__titles pages__titles-tariff">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-tariff-name">Название</span>
                  <span class="pages__title-tariff-name">Название</span>
                  <span class="pages__title-tariff-number">Количество ответов</span>
                  <span class="pages__title-tariff-number">Число</span>
                  <span class="pages__title-tariff-number">Число</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list pages__list">
                  <li class="pages__item pages__item-tariff">
                    <span class="pages__views-id">322322</span>
                    <a class="pages__tariff-name" href="/" target="_blank"><span>Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit.</span></a>
                    <a class="pages__tariff-name" href="/" target="_blank"><span>Lorem ipsum dolor </span></a>
                    <span class="pages__views-tariff-number">0</span>
                    <span class="pages__views-tariff-number">456789</span>
                    <span class="pages__views-tariff-number">123</span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="/" target="_blank">
                          <img src="/images/dashboard/edit.svg" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <a class="delete-link" href="/">
                          <img src="/images/dashboard/del.svg" alt="" class="pages__icon-img">
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </section>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.setting.user.update', auth()->user()->id) }}" method="post"
                class="form__inner-form" enctype="multipart/form-data">
                @csrf

                @foreach($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
                <div class="form__inner form__inner-small">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">

                      @foreach ($tariffs as $tariff)

                      <a href="{{ route('dashboard.tariff.edit', $tariff->id)}}">{{ $tariff->id }}</a>

                      @endforeach
                    </div>
                  </div>
                </div>
              </form>
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