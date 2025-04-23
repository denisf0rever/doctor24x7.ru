<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Список подкатегорий</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Подкатегории</h1>
          <div class="main__blocks-wrapper">
            <ul class="main__blocks">
              <li class="main__block color-block">
                <a href="" class="color-block__wrapper" style="background-color: #ffe2e6">
                  <img src="/storage/dashboard/add.svg" alt="" class="color-block__img"
                    style="background-color: #f9597c">
                  <div class="color-block__big-text">Добавить</div>
                  <div class="color-block__title"></div>
                  <div class="color-block__small-text"> </div>
                </a>
              </li>
            </ul>
          </div>
          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Заголовки страниц</h2>

              <div class="pages__filter">
                <input type="text" class="pages__filter-input">
                <div class="pages__filter-clear">Очистить</div>
              </div>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-name">Название</span>
                  <span class="pages__title-name">Title</span>
                  <span class="pages__title-name">h1</span>
                  <span class="pages__title-name">WordStat</span>
                </div>
                <ul class="pages__list">
                  @foreach ($subcategories as $category)
                  <li class="pages__item" @if ($category->is_edited) style="background-color:red;" @endif>
                    <a href="{{ route('consultation.subrubric', ['categorySlug' => $category->category->slug, 
		  'subcategorySlug' => $category->slug]) }}" class="pages__views-id"
                      target="_blank"><span>{{ $category->id }}</span></a>
                    <a class="pages__name"
                      href="{{ route('dashboard.consultation.subcategories.slug', $category->slug) }}"
                      target="_blank"><span>{{ $category->short_title }}</span></a>
                    <a class="pages__name"
                      href="{{ route('dashboard.consultation.subcategories.discussions', $category->slug) }}"
                      target="_blank"><span>{{ $category->short_title }}</span></a>
                    <span class="pages__name">{{ $category->h1 }}</span>
                    <a class="pages__name"
                      href="https://wordstat.yandex.ru/?region=all&view=table&words={{ $category->short_title }}"
                      target="_blank"><span>{{ $category->short_title }}</span></a>
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