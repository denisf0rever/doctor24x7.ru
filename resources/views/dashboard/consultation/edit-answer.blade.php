<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Редактирование сообщения # {{ $comment->id }}</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')
	  
	  <main class="wrapper__main main">
        <div class="main__wrapper">
		<h1 class="main__title">Редактирование комментария №{{ $comment->id }}</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.consultation.update.answer', $comment->id) }}" method="post" class="form__inner-form">
                @csrf

                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                       <li class="form__input-wrapper">
                          <label class="form__label" for="description_short">Дательное описание</label>
                          <textarea class="form__input @error('description_short')input-error @enderror" type="text"
                            id="description" name="description">{{ $comment->description }}</textarea>
                        </li>
						<li class="form__input-wrapper">
                          <label class="form__label" for="name">Почта</label>
                          <input class="form__input @error('name')input-error @enderror" type="text" id="email"
                            name="email" value="{{ $comment->email }}">
                        </li>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <input class="form__submit red-button" type="submit" value="Сохранить"></input>
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