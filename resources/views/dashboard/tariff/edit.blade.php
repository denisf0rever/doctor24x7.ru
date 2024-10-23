<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Редактирование сообщения # {{ $tariff->id }}</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__consultation-title">№{{ $tariff->id }}</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="/" method="post" class="form__inner-form" enctype="multipart/form-data">
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
                          <label class="form__label" for="name">Название</label>
                          <input class="form__input @error('name')input-error @enderror" type="text" id="name"
                            name="name" value="{{ $tariff->name }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="title">Название</label>
                          <input class="form__input @error('title')input-error @enderror" type="text" id="title"
                            name="title" value="{{ $tariff->title }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="description">Описание</label>
                          <input class="form__input @error('description')input-error @enderror" type="text"
                            id="description" name="description" value="{{ $tariff->description }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="description_short">Краткое описание</label>
                          <input class="form__input @error('description_short')input-error @enderror" type="text"
                            id="description_short" name="description_short" value="{{ $tariff->description_short }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="answers_count">Количество ответов</label>
                          <input class="form__input @error('answers_count')input-error @enderror" type="text"
                            id="answers_count" name="answers_count" value="{{ $tariff->answers_count }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="sum">Сумма</label>
                          <input class="form__input @error('sum')input-error @enderror" type="text" id="sum" name="sum"
                            value="{{ $tariff->sum }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="sum">Сумма</label>
                          <input class="form__input @error('sum')input-error @enderror" type="text" id="sum" name="sum"
                            value="{{ $tariff->sum }}">
                        </li>
                        <li class="form__input-wrapper">
                          condition_id
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="position">Позиция</label>
                          <input class="form__input @error('position')input-error @enderror" type="text" id="position"
                            name="position" value="{{ $tariff->position }}">
                        </li>
                        <li class="form__input-wrapper">
                          is_phone
                          is_phone </li>
                        <li class="form__input-wrapper">
                          is_free
                        </li>
                        <li class="form__input-wrapper">
                          condition_checked
                        </li>
                        <li class="form__input-wrapper">
                          condition_active
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="class">Класс</label>
                          <input class="form__input @error('class')input-error @enderror" type="text" id="class"
                            name="class" value="{{ $tariff->class }}">
                        </li>
                        <li class="form__input-wrapper">
                          rubrics list
                        </li>




                        <!-- 
                        
                {{ $tariff->name }}<br />
                {{ $tariff->title }}<br />
                {{ $tariff->description }}<br />
                {{ $tariff->description_short }}<br />
                {{ $tariff->answers_count }}<br />
                {{ $tariff->sum }}<br />
                {{ $tariff->condition_id }}<br />
                {{ $tariff->position }}<br />
                {{ $tariff->is_phone }}<br />
                {{ $tariff->is_free }}<br />
                {{ $tariff->is_checked }}<br />
                {{ $tariff->class }}<br />
                {{ $tariff->is_active }}<br />
-->

                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <input class="form__submit" type="submit"> </input>
                </div>
              </form>
            </div>
          </section>

          <!-- <section class="main__consultation-textarea consultation-textarea">
            <div class="consultation-textarea__wrapper white-block">
              <h2 class="consultation__title">Редактирование тарифа {{ $tariff->name }}</h2>
              <div class="consultation__inner">
                <div class="consultation__item">
                  {{ $tariff->description }}
                </div>

                {{ $tariff->name }}<br />
                {{ $tariff->title }}<br />
                {{ $tariff->description }}<br />
                {{ $tariff->description_short }}<br />
                {{ $tariff->answers_count }}<br />
                {{ $tariff->sum }}<br />
                {{ $tariff->condition_id }}<br />
                {{ $tariff->position }}<br />
                {{ $tariff->is_phone }}<br />
                {{ $tariff->is_free }}<br />
                {{ $tariff->is_checked }}<br />
                {{ $tariff->class }}<br />
                {{ $tariff->is_active }}<br />

              </div>


            </div>
          </section> -->

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