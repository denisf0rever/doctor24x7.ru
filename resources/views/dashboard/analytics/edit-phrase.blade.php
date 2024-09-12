<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Редактирование фраз</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Редактирование фразы для статьи {{ $article->short_title }}</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.analytics.phrase.update', $article->id) }}" method="post" class="form__inner-form">
                @csrf

                @foreach($errors->all() as $error)
                {{ $error }} <br />
                @endforeach

                <div class="form__tabs-buttons">
                  <div class="form__tab-button form__tab-button-active">Основные</div>
                </div>
                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper">
                          <label class="form__label" for="phrase">Ключевая фраза</label>
                          <input class="form__input @error('phrase')input-error @enderror" type="text" id="phrase"
                            name="phrase" value="{{ $phrase->key }}">
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <input class="form__submit" type="submit"></input>
                </div>
              </form>
            </div>
          </section>
        </div>
      </main>


      @if (session('success'))
      <div class="toast">
        <div class="toast__container" id="toast">
          <div class="toast__item">
            {{ session('success') }}
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>