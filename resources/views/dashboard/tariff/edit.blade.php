<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Редактирование тарифа #{{ $tariff->id }}</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
		<h1 class="main__title">Редактирование тарифа №{{ $tariff->id }}</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.tariff.update', $tariff->id) }}" method="post" class="form__inner-form" enctype="multipart/form-data">
                @csrf

                @foreach($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
				
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
                          <label class="form__label" for="title">На сайте</label>
                          <input class="form__input @error('title')input-error @enderror" type="text" id="title"
                            name="title" value="{{ $tariff->title }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="description">Описание</label>
                          <textarea class="form__input @error('description')input-error @enderror" type="text"
                            id="description" name="description">{{ $tariff->description }}</textarea>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="description_short">Дательное описание</label>
                          <textarea class="form__input @error('description_short')input-error @enderror" type="text"
                            id="description_short" name="description_short">{{ $tariff->description_short }}</textarea>
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
                          <label class="form__label" for="sum">Гонорар</label>
                          <input class="form__input @error('fee')input-error @enderror" type="text" id="fee" name="fee"
                            value="{{ $tariff->fee }}">
                        </li>
                        <li class="form__input-wrapper">
                          <span class="form__select-title" for="condition_id">Состояние</span>
                          <div class="form__select-wrapper form__select-wrapper-standart">
                            <img src="{{ Storage::url('dashboard/expand-more.svg') }}" alt="" class="form__status-arrow">
                            <div class="form__status-current-text normal-text">Выберите состояние</div>
                            <input class="form__status-current " name="condition_id" type="text"
                              value="{{ $tariff->condition_id ? $tariff->condition_id : '' }}" readonly>
                            <ul id="condition_id" class="form__status-select form__status-select form__status-hide">
								<li class="form__status-option">Без состояния</li>
							@foreach($conditions as $condition)
								<li class="form__status-option" value="{{ $condition->id }}">{{ $condition->name }}</li>
							@endforeach
                            </ul>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="position">Позиция</label>
                          <input class="form__input @error('position')input-error @enderror" type="text" id="position"
                            name="position" value="{{ $tariff->position }}">
                        </li>
                        <li class="form__input-wrapper">
                          <div class="form__input-wrapper-row">
							@if ($tariff->is_phone)
							<input class="form__input" type="checkbox" id="is_active" name="is_phone" value="1" checked>
							@else
							<input class="form__input" type="checkbox" id="is_active" name="is_phone" value="1">
							@endif
							<label class="form__label" for="is_phone">Телефон</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <div class="form__input-wrapper-row">
							@if ($tariff->is_free)
							<input class="form__input" type="checkbox" id="is_free" name="is_free" value="1" checked>
							@else
							<input class="form__input" type="checkbox" id="is_free" name="is_free" value="1">
							@endif
                            <label class="form__label" for="is_free">Свободен</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <div class="form__input-wrapper-row">
                            <input class="form__input" type="checkbox" id="condition_checked" name="condition_checked">
                            <label class="form__label" for="condition_checked">Проверено состояние</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <div class="form__input-wrapper-row">
							@if ($tariff->is_active)
							<input class="form__input" type="checkbox" id="is_active" name="is_active" value="1" checked>
							@else
							<input class="form__input" type="checkbox" id="is_active" name="is_active" value="1">
							@endif
                            <label class="form__label" for="condition_active">Активный</label>
                          </div>
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="class">Класс</label>
                          <input class="form__input @error('class')input-error @enderror" type="text" id="class"
                            name="class" value="{{ $tariff->class }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label">Список рубрик</label>
                          <div class="form__select-list">
                            <div class="custom-multiselect">
                              <div class="custom-multiselect__wrapper">
                                <ul class="custom-multiselect__list">
                                  <input type="hidden" id="rubrics_list" class="custom-multiselect__input"
                                    name="rubrics_list" value="{{ $tariff->consultation->rubric_id ? $tariff->consultation->rubric_id : '' }}">
								@foreach($rubrics as $rubric)
									<li class="custom-multiselect__option{{ $rubric->id == $tariff->consultation->rubric_id ? ' custom-multiselect__option-active' : '' }}" value="{{ $rubric->id }}">{{ $rubric->short_title }}</li>
								@endforeach
                                </ul>
                              </div>
                            </div>
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