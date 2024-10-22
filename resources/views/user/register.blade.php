<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Регистрация</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  @include('parts.settings')
</head>

<body>

  <div class="popup-form">
    <div class="popup-form__wrapper">
      <h2 class="popup-form__title">Регистрация</h2>
      <span class="popup-form__subtitle">Введите данные для регистрации</span>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      <form action="{{ route('register.post') }}" method="post" class="popup-form__form">
        @csrf
        <label for="username" class="popup-form__label">Логин:</label>
        <input type="text" id="username" name="username" class="popup-form__input">
        <label for="name" class="popup-form__label">Имя:</label>
        <input type="text" id="name" name="name" class="popup-form__input">
        <label for="last_name" class="popup-form__label">Фамилия:</label>
        <input type="text" id="last_name" name="last_name" class="popup-form__input">
        <label for="middle_name" class="popup-form__label">Отчество:</label>
        <input type="text" id="middle_name" name="middle_name" class="popup-form__input">
        <label for="email" class="popup-form__label">Ваша почта:</label>
        <input type="text" id="email" name="email" class="popup-form__input">
        <label for="city" class="popup-form__label">Откуда вы?</label>
        <input type="text" id="city" name="city" class="popup-form__input" value="Россия, г. ">
        <label for="city" class="popup-form__label">Номер телефона</label>
        <input type="text" id="phone" name="phone" class="popup-form__input" value="+7">
        <label for="password" class="popup-form__label">Пароль от личного кабинета:</label>
        <div class="popup-form__input-wrapper">
          <input type="password" id="password" name="password" class="popup-form__input popup-form__password">
          <img src="images/eye-password-hide-svgrepo-com.svg" alt="" class="popup-form__password-img">
        </div>

        <input type="submit" class="popup-form__submit popup-form__submit-disabled" disabled value="Зарегистрироваться">
      </form>
    </div>
  </div>

</body>

</html>