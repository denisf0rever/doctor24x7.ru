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
                <a href="{{ route('dashboard.consultation.categories.doctors') }}" class="color-block__wrapper"
                  style="background-color: #ffe2e6">
                  <img src="{{ Storage::url('dashboard/network.svg') }}" alt="" class="color-block__img"
                    style="background-color: #f9597c">
                  <div class="color-block__big-text">Врачи</div>
                  <div class="color-block__title"></div>
                  <div class="color-block__small-text">Всего добавлено:  </div>
                </a>
              </li>
            </ul>
          </div>
         
          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Заголовки страниц</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-link">Ссылка</span>
                  <span class="pages__title-name">Название</span>
                  <span class="pages__title-number-left">Дата</span>
                  <span class="pages__title-number">Визиты</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list">
                  @foreach ($categories as $category)
                  <li class="pages__item">
                    <span class="pages__views-id">{{ $category->id }}</span></a>
                    <a href="" target="_blank" class="pages__link">
                      <img src="{{ Storage::url('dashboard/link.svg') }}" alt="" class="pages__link-img">
                    </a>
                    <a class="pages__name" href=""
                      target="_blank"><span>{{ $category->title }}</span></a>
                    <span class="pages__views-id">{{ $category->created_at }}</span>
                    <span class="pages__views-number">{{ $category->visit_count }}</span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="" target="_blank">
                          <img src="{{ Storage::url('dashboard/booking.svg') }}" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <a href="" target="_blank">
                          <img src="{{ Storage::url('dashboard/edit.svg') }}" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <a href="">
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
      </main>
    </div>
  </div>