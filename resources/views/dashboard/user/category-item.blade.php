<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Список добавленных текстов</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">{{ $category->h1 }}</h1>
          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Список текстов</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-name">Название</span>
                  <span class="pages__title-number">Кол-во текстов</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list">
                  @foreach ($texts as $text)
                  <li class="pages__item">
                    <span class="pages__views-id">{{ $text->id }}</span></a>
                    <span class="pages__views-id">{{ $text->user->first_name }}</span></a>
                    <a class="pages__name" href=""
                      target="_blank"><span>{{ $text->short_title }}</span></a>
                    <a class="pages__name" href=""
                      target="_blank"><span>{{ $text->text_for_category_count }}</span></a>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.user.edit-user-text', $text->id) }}" target="_blank">
                          <img src="{{ Storage::url('dashboard/edit.svg') }}" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.user.destroy-category-text', $text->id) }}">
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