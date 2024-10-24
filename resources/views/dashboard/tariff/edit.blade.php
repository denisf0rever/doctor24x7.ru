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
                          <div class="form__input-wrapper-row">
                            <input class="form__input" type="checkbox" id="name[is_empty]" name="name[is_empty]">
                            <label class="form__label" for="name[is_empty]">Пустой</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="title">Название</label>
                          <input class="form__input @error('title')input-error @enderror" type="text" id="title"
                            name="title" value="{{ $tariff->title }}">
                          <div class="form__input-wrapper-row">
                            <input class="form__input" type="checkbox" id="title[is_empty]" name="title[is_empty]">
                            <label class="form__label" for="title[is_empty]">Пустой</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="description">Описание</label>
                          <input class="form__input @error('description')input-error @enderror" type="text"
                            id="description" name="description" value="{{ $tariff->description }}">
                          <div class="form__input-wrapper-row">
                            <input class="form__input" type="checkbox" id="description[is_empty]"
                              name="description[is_empty]">
                            <label class="form__label" for="description[is_empty]">Пустой</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="description_short">Краткое описание</label>
                          <input class="form__input @error('description_short')input-error @enderror" type="text"
                            id="description_short" name="description_short" value="{{ $tariff->description_short }}">
                          <div class="form__input-wrapper-row">
                            <input class="form__input" type="checkbox" id="description_short[is_empty]"
                              name="description_short[is_empty]">
                            <label class="form__label" for="description_short[is_empty]">Пустой</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="answers_count">Количество ответов</label>
                          <input class="form__input @error('answers_count')input-error @enderror" type="text"
                            id="answers_count" name="answers_count" value="{{ $tariff->answers_count }}">
                          <div class="form__input-wrapper-row">
                            <input class="form__input" type="checkbox" id="answers_count[is_empty]"
                              name="answers_count[is_empty]">
                            <label class="form__label" for="answers_count[is_empty]">Пустой</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="sum">Сумма</label>
                          <input class="form__input @error('sum')input-error @enderror" type="text" id="sum" name="sum"
                            value="{{ $tariff->sum }}">
                          <div class="form__input-wrapper-row">
                            <input class="form__input" type="checkbox" id="sum[is_empty]" name="sum[is_empty]">
                            <label class="form__label" for="sum[is_empty]">Пустой</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <span class="form__select-title" for="condition_id">Состояние</span>
                          <div class="form__select-wrapper form__select-wrapper-standart">
                            <img src="/images/dashboard/expand-more.svg" alt="" class="form__status-arrow">
                            <div class="form__status-current-text normal-text">Выберите состояние</div>
                            <input class="form__status-current " name="condition_id" type="text"
                              value="{{ $tariff->condition_id }}" readonly>
                            <ul id="condition_id" class="form__status-select form__status-select form__status-hide">
                              <li class="form__status-option" value="1">
                                Показать, если короткий текст и нет вложений
                              </li>
                              <li class="form__status-option" value="2">
                                Показать, если короткий текст
                              </li>
                              <li class="form__status-option" value="4">
                                Скрыть, если короткий текст
                              </li>
                              <li class="form__status-option" value="5">
                                Показать, если нет вложений
                              </li>
                              <li class="form__status-option" value="6">
                                Показать, если есть вложения
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="position">Позиция</label>
                          <input class="form__input @error('position')input-error @enderror" type="text" id="position"
                            name="position" value="{{ $tariff->position }}">
                          <div class="form__input-wrapper-row">
                            <input class="form__input" type="checkbox" id="position[is_empty]"
                              name="position[is_empty]">
                            <label class="form__label" for="position[is_empty]">Пустой</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <span class="form__select-title" for="is_phone">Телефон</span>
                          <div class="form__select-wrapper form__select-wrapper-standart">
                            <img src="/images/dashboard/expand-more.svg" alt="" class="form__status-arrow">
                            <div class="form__status-current-text normal-text">Выберите состояние</div>
                            <input class="form__status-current " name="is_phone" type="text"
                              value="{{ $tariff->is_phone }}" readonly>
                            <ul id="is_phone"
                              class="form__status-select form__status-select-standart  form__status-hide">
                              <li class="form__status-option" value="">
                                Да или нет
                              </li>
                              <li class="form__status-option" value="1">
                                Да
                              </li>
                              <li class="form__status-option" value="2">
                                Нет
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <span class="form__select-title" for="is_free">Свободен</span>
                          <div class="form__select-wrapper form__select-wrapper-standart">
                            <img src="/images/dashboard/expand-more.svg" alt="" class="form__status-arrow">
                            <div class="form__status-current-text normal-text">Выберите состояние</div>
                            <input class="form__status-current " name="is_free" type="text"
                              value="{{ $tariff->is_free }}" readonly>
                            <ul id="is_free"
                              class="form__status-select form__status-select-standart  form__status-hide">
                              <li class="form__status-option" value="">
                                Да или нет
                              </li>
                              <li class="form__status-option" value="1">
                                Да
                              </li>
                              <li class="form__status-option" value="2">
                                Нет
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <span class="form__select-title" for="condition_checked">Проверено состояние</span>
                          <div class="form__select-wrapper form__select-wrapper-standart">
                            <img src="/images/dashboard/expand-more.svg" alt="" class="form__status-arrow">
                            <div class="form__status-current-text normal-text">Выберите состояние</div>
                            <input class="form__status-current " name="condition_checked" type="text"
                              value="{{ $tariff->condition_checked }}" readonly>
                            <ul id="condition_checked"
                              class="form__status-select form__status-select-standart  form__status-hide">
                              <li class="form__status-option" value="">
                                Да или нет
                              </li>
                              <li class="form__status-option" value="1">
                                Да
                              </li>
                              <li class="form__status-option" value="2">
                                Нет
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <span class="form__select-title" for="condition_active">Активний</span>
                          <div class="form__select-wrapper form__select-wrapper-standart">
                            <img src="/images/dashboard/expand-more.svg" alt="" class="form__status-arrow">
                            <div class="form__status-current-text normal-text">Выберите состояние</div>
                            <input class="form__status-current " name="condition_active" type="text"
                              value="{{ $tariff->condition_active }}" readonly>
                            <ul id="condition_active"
                              class="form__status-select form__status-select-standart  form__status-hide">
                              <li class="form__status-option" value="">
                                Да или нет
                              </li>
                              <li class="form__status-option" value="1">
                                Да
                              </li>
                              <li class="form__status-option" value="2">
                                Нет
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="class">Класс</label>
                          <input class="form__input @error('class')input-error @enderror" type="text" id="class"
                            name="class" value="{{ $tariff->class }}">
                          <div class="form__input-wrapper-row">
                            <input class="form__input" type="checkbox" id="class[is_empty]" name="class[is_empty]">
                            <label class="form__label" for="class[is_empty]">Пустой</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label">Список рубрик</label>
                          <div class="form__select-list">
                            <div class="custom-multiselect">
                              <div class="custom-multiselect__wrapper">
                                <ul class="custom-multiselect__list">
                                  <input type="hidden" id="rubrics_list" class="custom-multiselect__input"
                                    name="rubrics_list" value="">
                                  <li class="custom-multiselect__option" value="2">Консультация аллерголога онлайн —
                                    задать
                                    вопрос врачу</li>
                                  <li class="custom-multiselect__option" value="4">Консультация андролога онлайн —
                                    задать
                                    вопрос врачу</li>
                                  <li class="custom-multiselect__option" value="5">Консультация гастроэнтеролога онлайн
                                    —
                                    задать вопрос врачу</li>
                                  <li class="custom-multiselect__option" value="6">Консультация гинеколога онлайн —
                                    задать
                                    вопрос врачу</li>
                                  <li class="custom-multiselect__option" value="7">Консультация дерматолога онлайн —
                                    задать вопрос врачу</li>
                                  <li class="custom-multiselect__option" value="8">Консультация диетолога онлайн —
                                    задать вопрос врачу</li>
                                  <li class="custom-multiselect__option" value="9">Консультация инфекциониста онлайн —
                                    задать вопрос врачу</li>
                                  <li class="custom-multiselect__option" value="10">Консультация кардиолога онлайн —
                                    задать вопрос врачу</li>
                                </ul>
                              </div>
                            </div>
                          </div>
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