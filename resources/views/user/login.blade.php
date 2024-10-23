<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Авторизация</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  @include('parts.settings')
</head>

<body>

  <div class="popup-form">
    <div class="popup-form__wrapper">
      <h2 class="popup-form__title">Войти</h2>
      <span class="popup-form__subtitle">Введите данные для авторизации</span>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      <form action="{{ route('authenticate') }}" method="post" class="popup-form__form">
        @csrf
        <label class="popup-form__input-wrapper" for="username">
          <input type="text" id="username" name="username" class="popup-form__input" placeholder=" ">
          <span class="popup-form__label">Имя пользователя:</span>
        </label>
        <label class="popup-form__input-wrapper" for="password">
          <input type="password" id="password" name="password" class="popup-form__input" placeholder=" ">
          <span class="popup-form__label">Пароль:</span>
		  <svg role="img" focusable="false" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="popup-form__password-img"><path d="M20.944 14.702a.197.197 0 00.293-.014C21.886 13.89 22.564 12.93 23 12c-1.914-4.089-6.19-7.01-11-7.01-.164 0-.326.003-.489.01-.17.007-.246.022-.125.143l9.558 9.559z"></path><path d="M5.5 2L22 18.5 20.5 20l-2.44-2.527C16.28 18.561 14.21 19 12 19c-4.81 0-9.086-2.911-11-7 1.155-2.468 3.252-4.633 5.69-5.896L4 3.5 5.5 2zm8.177 11.09l1.571 1.573a4.2 4.2 0 11-5.91-5.911l1.571 1.571a2 2 0 102.767 2.767z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        </label>
        <!-- <label class="popup-form__label" for="password">Пароль от личного кабинета:</label>
        <div class="popup-form__input-wrapper">
          <input type="password" id="password" name="password" class="popup-form__input popup-form__password">
          <img src="images/eye-password-hide-svgrepo-com.svg" alt="" class="popup-form__password-img">
        </div>
        -->
        <input type="submit" class="popup-form__submit popup-form__submit-disabled" disabled value="Далее">
      </form>
    </div>
  </div>

</body>

</html>