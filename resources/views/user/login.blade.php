<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Авторизация</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <label class="popup-form__label" for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" class="popup-form__input">
        <label class="popup-form__label" for="password">Пароль от личного кабинета:</label>
        <div class="popup-form__input-wrapper">
          <input type="password" id="password" name="password" class="popup-form__input popup-form__password">
          <img src="images/eye-password-hide-svgrepo-com.svg" alt="" class="popup-form__password-img">
        </div>
        <input type="submit" class="popup-form__submit popup-form__submit-disabled" <?/*disabled*/?> value="Далее">
      </form>
    </div>
  </div>

</body>

</html>