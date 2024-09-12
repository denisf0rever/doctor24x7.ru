<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Добавление категории</title>
  @include('dashboard.settings')
</head>

<body>

  @include('dashboard.parts.header')
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Добавить категорию</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.article.create-category') }}" method="post" class="form__inner-form">
                @csrf
				
				@foreach($errors->all() as $error)
				{{ $error }} <br />
				@endforeach
                <div class="form__tabs-buttons">
                  <div class="form__tab-button form__tab-button-active">Основные</div>
                  <div class="form__tab-button">Дополнительные</div>
                </div>
                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper">
                          <label class="form__label" for="title">Заголовок документа (title)</label>
                          <input class="form__input @error('title')input-error @enderror" type="text" id="title" name="title" value="{{ old("title") }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="title">Заголовок категории (h1)</label>
                          <input class="form__input @error('h1')input-error @enderror" type="text" id="h1" name="h1" value="{{ old("h1") }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="subtitle">Короткое название</label>
                          <input class="form__input @error('short_title')input-error @enderror" type="text" id="short_title" name="short_title" value="{{ old("short_title") }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="Meta-description">Метаописание</label>
                          <input class="form__input @error('metadescription')input-error @enderror" type="text" id="metadescription" name="metadescription" value="{{ old("metadescription") }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="Metakeys">Метаключи</label>
                          <input class="form__input @error('metakey')input-error @enderror" type="text" id="metakey" name="metakey" value="{{ old("metakey") }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="slug">Slug</label>
                          <input class="form__input @error('slug')input-error @enderror" type="text" id="slug" name="slug" value="{{ old("slug") }}">
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Описание</div>
                  <textarea name="description" id="description" class="form__textarea @error('description')input-error @enderror" value="{{ old("description") }}">{{ old("description") }}</textarea>
                  <input class="form__submit" type="submit"> </input>
                </div>
              </form>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>