<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Добавление пользователя</title>
  @include('dashboard.settings')
</head>

<body>

  @include('dashboard.parts.header')
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Настройки</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.setting.user.create') }}" method="post" class="form__inner-form"
                enctype="multipart/form-data">
                @csrf

                @foreach($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
                <div class="form__tabs-buttons">
                  <div class="form__tab-button form__tab-button-active">Основные</div>
                </div>
                <div class="form__inner form__inner-small">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper-row">
                          <label class="form__label-column" for="answer_form">
                            <span class="form__label-title">Предпочительнее отвечать</span>
                            <div class="form__label-text">Включите опцию, если вам удобно отвечать под текстом пользователя, либо выключите чтобы отвечать на отдельной странице в отдельной форме.</div>
                          </label>
                          <label class="form__switch form-switch">
                            <input type="checkbox" id="answer_form" class="form-switch__checkbox" name="answer_form">
                            <span class="form-switch__slider">
							@if ($settings->answer_form)
								<span class="form-switch__on-text">Вкл</span>
							@else
								<span class="form-switch__off-text">Выкл</span>
							@endif
                            </span>
                          </label>
                        </li>
                      </ul>
                      <input class="form__submit" type="submit"> </input>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>