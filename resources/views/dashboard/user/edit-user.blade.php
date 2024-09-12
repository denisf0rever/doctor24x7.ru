<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Редактирование пользователя</title>
  @include('dashboard.settings')
</head>

<body>

  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Редактирование пользователя {{ $user->title }}</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.user.update', $user->id) }}" method="post" class="form__inner-form"
                enctype="multipart/form-data">
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
                          <label class="form__label" for="email">Почта</label>
                          <input class="form__input @error('email')input-error @enderror" type="text" id="email"
                            name="email" value="{{ $user->email }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="name">Логин</label>
                          <input class="form__input @error('username')input-error @enderror" type="text" id="username"
                            name="username" value="{{ $user->username }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="password">Пароль</label>
                          <input class="form__input @error('password')input-error @enderror" type="text" id="password"
                            name="password">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="name">Имя</label>
                          <input class="form__input @error('name')input-error @enderror" type="text" id="name"
                            name="name" value="{{ $user->name }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="last_name">Фамилия</label>
                          <input class="form__input @error('last_name')input-error @enderror" type="text" id="last_name"
                            name="last_name" value="{{ $user->last_name }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="middle_name">Отчество</label>
                          <input class="form__input @error('middle_name')input-error @enderror" type="text"
                            id="middle_name" name="middle_name" value="{{ $user->middle_name }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="city">Откуда вы?</label>
                          <input class="form__input @error('city')input-error @enderror" type="text" id="city"
                            name="city" value="{{ $user->city }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="phone">Телефон</label>
                          <input class="form__input @error('phone')input-error @enderror" type="text" id="phone"
                            name="phone" value="{{ $user->phone }}">
                        </li>
                      </ul>
                      <label class="form__label-photo">
                        <img src="/images/dashboard/photo-camera.svg" alt="" class="form__input-photo-img">
                        <span class="form__input-photo-text">Загрузить фото</span>
                        <input class="form__input-photo @error('images')input-error @enderror" type="file"
                          name="avatar">
                        {{ $user->avatar }}
                      </label>
                      <label class="form__label-photo">
                        <img src="/images/dashboard/photo-camera.svg" alt="" class="form__input-photo-img">
                        <span class="form__input-photo-text">Загрузить webp</span>
                        <input class="form__input-photo @error('webp')input-error @enderror" type="file"
                          name="avatar_webp">
                        {{ $user->webp_avatar }}
                      </label>
                    </div>
                    <div class="form__tab">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper">
                          <label class="form__label" for="is_priority">Получать уведомления о платных
                            консультациях</label>
                          <input type="hidden" name="is_priority" value="0">
                          @if ($user->is_priority)
                          <input class="form__input" type="checkbox" id="is_priority" name="is_priority" value="1"
                            checked>
                          @else
                          <input class="form__input" type="checkbox" id="is_priority" name="is_priority" value="1">
                          @endif
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="is_active">Активный</label>
                          <input type="hidden" name="is_active" value="0">
                          @if ($user->is_active)
                          <input class="form__input" type="checkbox" id="is_active" name="is_active" value="1" checked>
                          @else
                          <input class="form__input" type="checkbox" id="is_active" name="is_active" value="1">
                          @endif
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="form__status-wrapper">
                    <div class="form__select-wrapper">
                      <span class="form__status-title" for="status">Выберите категорию</span>
                      <img src="/images/dashboard/expand-more.svg" alt="" class="form__status-arrow">
                      <div class="form__status-current-text">Выберите категорию</div>
                      <input class="form__status-current @error('role')input-error @enderror" name="role" type="text"
                        value="{{ $user->role ? $user->role : 0 }}" readonly>
                      <ul id="status" class="form__status-select form__status-hide">
                        @foreach($roles as $role)
                        <li class="form__status-option" value="{{ $role->id }}">{{ $role->role_name }}</li>
                        @endforeach
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