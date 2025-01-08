<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Добавление текста</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Добавление текста для категории</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.user.set-category-text') }}" method="post" class="form__inner-form">
                @csrf
								
                @foreach($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper">
                          <label class="form__label" for="name">ID Категории</label>
                          <input class="form__input @error('category_id')input-error @enderror" type="text" id="category_id"
                            name="category_id" value="">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="name">ID Врача</label>
                          <input class="form__input @error('user_id')input-error @enderror" type="text" id="user_id"
                            name="user_id" value="">
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Описание</div>
                  <textarea name="description" id=""
                    class="form__textarea @error('description')input-error @enderror" value="{{ old("description") }}">{{ old("description") }}</textarea>
                </div>
				
                <div class="form__textarea-wrapper">
                  <input class="form__submit red-button" type="submit" value="Сохранить"></input>
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