<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Список категорий</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Категории</h1>
		  <div class="main__blocks-wrapper">
           
			<ul class="main__blocks">
              <li class="main__block color-block">
                <a href="{{ route('dashboard.user.add-text-category') }}" class="color-block__wrapper"
                  style="background-color: #ffe2e6">
                  <img src="{{ Storage::url('dashboard/network.svg') }}" alt="" class="color-block__img"
                    style="background-color: #f9597c">
                  <div class="color-block__big-text">Добавить связь</div>
                  <div class="color-block__title"></div>
                </a>
              </li>
            </ul>
          </div>
          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Список категорий</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-name">Название</span>
                  <span class="pages__title-number">Кол-во текстов</span>
                </div>
                <ul class="pages__list">
                  @foreach ($categories as $category)
                  <li class="pages__item">
                    <span class="pages__views-id">{{ $category->id }}</span></a>
                    <a class="pages__name" href="{{ route('dashboard.user.item', $category->id) }}"
                      target="_blank"><span>{{ $category->short_title }}</span></a>
                    <a class="pages__name" href=""
                      target="_blank"><span>{{ $category->text_for_category_count }}</span></a>
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