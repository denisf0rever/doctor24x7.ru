<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Редактирование сообщения # {{ $consultation->id }}</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

	<main class="wrapper__main main">
        <div class="main__wrapper">
		<h1 class="main__title">Редактирование консультации №{{ $consultation->id }}</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.consultation.update.consultation', $consultation->id) }}" method="post" class="form__inner-form" enctype="multipart/form-data">
                @csrf

                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
						<li class="form__input-wrapper">
                          <label class="form__label" for="name">Заголовок</label>
                          <input class="form__input @error('name')input-error @enderror" type="text" id="title"
                            name="title" value="{{ $consultation->title }}">
                        </li>
                       <li class="form__input-wrapper">
                          <label class="form__label" for="description_short">Дательное описание</label>
                          <textarea class="form__input @error('description_short')input-error @enderror" type="text"
                            id="description" name="description">{{ $consultation->description }}</textarea>
                        </li>
						<li class="form__input-wrapper">
                          <label class="form__label" for="name">Название</label>
                          <input class="form__input @error('name')input-error @enderror" type="text" id="email"
                            name="email" value="{{ $consultation->email }}">
                        </li>
						
						<li class="form__input-wrapper">
                          <div class="form__input-wrapper-row">
							@if ($consultation->is_special)
							<input class="form__input" type="checkbox" id="is_active" name="is_special" value="1" checked>
							@else
							<input class="form__input" type="checkbox" id="is_active" name="is_special" value="1">
							@endif
							<label class="form__label" for="is_special">Отредактировано</label>
                          </div>
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