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
                            name="email" value="{{ $user->email_address }}">
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
                          <input class="form__input @error('first_name')input-error @enderror" type="text" id="first_name"
                            name="name" value="{{ $user->first_name }}">
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
                        <li class="form__input-wrapper">
                          <label class="form__label" for="gender">Женщина?</label>
                          <input class="form__input @error('gender')input-error @enderror" type="text" id="gender"
                            name="gender" value="{{ $user->gender }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="experience">Начало практики</label>
                          <input class="form__input @error('experience')input-error @enderror" type="text" id="experience"
                            name="experience" value="{{ $user->experience }}">
                        </li>
						
						<li class="form__input-wrapper">
                          <label class="form__label" for="experience">Образование</label>
						<textarea name="work_place" id="work_place"
								class="form__textarea @error('work_place')input-error @enderror">{{ $user->work_place }}</textarea>
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