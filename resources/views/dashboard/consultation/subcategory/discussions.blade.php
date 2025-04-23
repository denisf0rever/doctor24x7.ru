<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Список дискуссий</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Дискуссии #{{ $subcategory->id }} - {{ $subcategory->title }}</h1>
          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Заголовки страниц</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-name">Название</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list">
                  @foreach ($discussions as $discussion)
                  <li class="pages__item">
                    <span class="pages__views-id">{{ $discussion->id }}</span>
                    <a href="{{ route('consultation.item', $discussion->comment_id) }}" class="pages__name"
                      target="_blank"><span>{{ $discussion->title }}</span></a>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.consultation.discussion.destroy', $discussion->id)}}"
                          class="delete-link" target="_blank">
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
  <div class="dashboard-popup dashboard-popup__hide">
    <div class="dashboard-popup__wrapper">
      <div class="dashboard-popup__close">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" class="loaded">
          <g fill="none" fill-rule="evenodd">
            <path fill="#515151" d="M.04 21.753L21.253.54l.707.707L.747 22.46z"></path>
            <path fill="#525252" d="M21.96 21.753L.747.54l-.707.707L21.253 22.46z"></path>
          </g>
        </svg>
      </div>
      <div class="dashboard-popup__content">
        <div class="dashboard-popup__item" popup-action="resume">
          <span class="dashboard-popup__item-text"> Продолжить </span>
          <img src="/" alt="" class="dashboard-popup__item-img">
        </div>
        <div class="dashboard-popup__item" popup-action="cancel">
          <span class="dashboard-popup__item-text"> Отменить </span>
          <img src="/" alt="" class="dashboard-popup__item-img">
        </div>
      </div>
    </div>
  </div>