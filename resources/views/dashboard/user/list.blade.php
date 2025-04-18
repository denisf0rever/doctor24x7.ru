<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Список пользователей</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Список пользователей</h1>
		   <div class="main__blocks-wrapper">
            <ul class="main__blocks">
              <li class="main__block color-block">
                <a href="{{ route('dashboard.user.add-user') }}" class="color-block__wrapper" style="background-color: #ffe2e6">
                  <img src="{{ Storage::url('dashboard/add.svg') }}" alt="" class="color-block__img"
                    style="background-color: #f9597c">
                  <div class="color-block__big-text">Добавить врача</div>
                  <div class="color-block__title"></div>
                  <div class="color-block__small-text">Всего добавлено: </div>
                </a>
              </li>
              <li class="main__block color-block">
                <a href="{{ route('dashboard.user.index') }}" class="color-block__wrapper" style="background-color: #fff4de">
                  <img src="{{ Storage::url('dashboard/add.svg') }}" alt="" class="color-block__img"
                    style="background-color: #f9597c">
                  <div class="color-block__big-text">Витрина в категориях</div>
                  <div class="color-block__title"></div>
                  <div class="color-block__small-text"> </div>
                </a>
              </li>
              <li class="main__block color-block">
                <a href="{{ route('dashboard.user.finduser') }}" class="color-block__wrapper" style="background-color: #f7f7f7">
                  <img src="{{ Storage::url('dashboard/search.svg') }}" alt="" class="color-block__img"
                    style="background-color: #f9597c">
                  <div class="color-block__big-text">Поиск профиля</div>
                  <div class="color-block__title"></div>
                  <div class="color-block__small-text"> </div>
                </a>
              </li>
            </ul>
          </div>
          <section class="main__info info">
            <div class="info__wrapper">
              <div class="info__element">
                <h3 class="info__title">Информация о категориях</h3>
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text"><strong>{{ $totalUsers }} </strong> пользователей на сайте</span>
                  </div>
                  <div class="info__data">
                    <span class="info__text"><strong>52 768 </strong>дублирующихся description</span>
                  </div>
                </div>
              </div>
              <div class="info__element">
                <h3 class="info__title">Дубли заголовоков и описаний</h3>
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text"><strong>52 768 </strong>дублирующихся title</span>
                  </div>
                  <div class="info__data">
                    <span class="info__text"><strong>52 768 </strong>дублирующихся description</span>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Пользователи</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-login">Логин</span>
                  <span class="pages__title-fullname">ФИО</span>
                  <span class="pages__title-number">Просмотры</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list">
                  @foreach ($users as $user)
                  <li class="pages__item">
                    <span class="pages__views-id">{{ $user->id }}</span>
                    <span class="pages__login"><b>{{ $user->username }}</b></span>
                    <a class="pages__fullname" href="{{ route('profile.user.item', $user->id)}}"
                      target="_blank"><span>{{ $user->full_name }}</span></a>
                    <span class="pages__views-number">{{ $user->views }}</span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.user.edit', $user->id)}}" target="_blank"><img
                            src="/images/dashboard/edit.svg" alt="" class="pages__icon-img"></a>
                      </div>
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.user.destroy', $user->id) }}"><img src="/images/dashboard/del.svg"
                            alt="" class="pages__icon-img"></a>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
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