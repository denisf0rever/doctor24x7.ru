<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Добавить врача в категорию</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Добавить врача в категорию</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.consultation.categories.showcase') }}" method="post"
                class="form__inner-form">
                @csrf
                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper">
                          <label class="form__label" for="name">ID Категории</label>
                          <input class="form__input " type="text" id="category_id" name="category_id" value="">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="name">ID Врача</label>
                          <input class="form__input " type="text" id="user_id" name="user_id" value="">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="name">Позиция</label>
                          <input class="form__input" type="text" id="position" name="position" value="">
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <input class="form__submit red-button" type="submit" value="Сохранить">
                </div>
              </form>
            </div>
          </section>

          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Добавленные врачи</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-name">Название</span>
                  <span class="pages__title-name">Позиция</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list">
                  @foreach($showcase as $item)
                  <li class="pages__item">
                    <span class="pages__views-id">{{ $item->id }}</span>
                    <span class="pages__name">{{ $item->user_id }}</span>
                    <span class="pages__name">{{ $item->position }}</span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="" target="_blank">
                          <img src="{{ Storage::url('dashboard/edit.svg') }}" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <form id="delete-form-{{ $item->id }}" style="display: none;"
                          action="{{ route('dashboard.consultation.categories.showcase.destroy', $item->id) }}"
                          method="POST" onsubmit="return confirm('Вы уверены, что хотите удалить этот элемент?');">
                          @csrf
                          @method('DELETE')
                        </form>

                        <a href=""
                          onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">
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