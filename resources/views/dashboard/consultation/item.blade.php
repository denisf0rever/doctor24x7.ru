<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ $consultation->title }}</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__consultation-title">№{{ $consultation->id }}</h1>
          <section class="main__consultation consultation">
            <div class="consultation__wrapper white-block">
              <h2 class="consultation__title">{{ $consultation->title }}</h2>
              <div class="consultation__inner">
                <div class="consultation__item">
                  {{ $consultation->description }}
                </div>
                <span class="consultation__views-id">{{ $consultation->created_at }}</span>
                <div class="consultation__icons">
                  <div class="consultation__icon">
                    <a href="{{ route('dashboard.consultation.edit', $consultation->id)}}" target="_blank">
                      <img src="/images/dashboard/edit.svg" alt="" class="consultation__icon-img">
                    </a>
                  </div>
                  <div class="consultation__icon">
                    <a href="{{ route('dashboard.consultation.destroy', $consultation->id) }}">
                      <img src="/images/dashboard/del.svg" alt="" class="consultation__icon-img">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="main__stats stats">
            <div class="stats__wrapper">
              <ul class="stats__list">
                <li class="stats__item">
                  <div class="stats__number">{{ $consultation->payed_amount }} Р.</div>
                  <div class="stats__text">Оплачено</div>
                </li>
                <li class="stats__item">
                  <div class="stats__number">1</div>
                  <div class="stats__text">Тариф</div>
                </li>
				<li class="stats__item">
                  <div class="stats__number">1</div>
                  <div class="stats__text">Чат</div>
                </li>
				 <li class="stats__item">
                  <div class="stats__number">1</div>
                  <div class="stats__text">Коэффицент</div>
                </li>
				<li class="stats__item">
                  <div class="stats__number">1</div>
                  <div class="stats__text">Гонорар</div>
                </li>
              </ul>
            </div>
          </section>

          <section class="main__booking booking">
            <div class="booking__wrapper white-block">
              <div class="booking__text">Чтобы ответить, нажмите взять вопрос</div>
              <div class=" booking__button red-button" onclick="makeBooking()">Войти</div>
          </section>

          <section class="main__consultation-textarea consultation-textarea">
            <div class="consultation-textarea__wrapper white-block">
              <form action="" method="POST">
                @csrf
                <textarea class="consultation-textarea__textarea"></textarea>
                <input class="consultation-textarea__submit red-button" type="submit" value="Войти">
              </form>
            </div>
          </section>

          @foreach($consultation->comments as $comment)
          <div class="comment">
            <div class="comment__wrapper white-block">
              <div class="comment__menu-btn custom-select" data-id="300330">
                <svg class="comment__menu-btn-svg">
                  <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
                </svg>
                <div class="custom-select__wrapper custom-select__hide comment__menu">
                  <ul class="comment__menu-list">
                    <li class="comment__menu-item">Лучшие</li>
                    <li class="comment__menu-item">Последние</li>
                  </ul>
                </div>
              </div>
              <a href="/profile/elenamihailovna" class="comment__user-link" id="elenamihailovna">
                <img src="/uploads/sfGuard/avatars/ebe21773a3e3b955b3d43312bf5f41298e000639.jpg"
                  class="comment__avatar-main">
                <span class="comment__user-name">Войцехович&nbsp;Елена&nbsp;Михайловна</span>
                <span class="comment__user-subtitle">Республика Беларусь</span>
              </a>
              <div class="comment__text"> {{ $comment->description }}</div>
              <div class="comment__ansv">Ответить</div>
            </div>
            <!-- <div> Ответить</div>
            <div> Удалить</div> -->
          </div>
          @include('dashboard.consultation.childcomment', ['comments' => $comment->children])
          @endforeach

          <script>
          const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

          const url = window.location.href; // Получаем полный URL
          const segments = url.split('/'); // Разбиваем строку URL по символу '/'
          const consultationId = segments[segments.length - 1]; // Получаем последний сегмент (ID)
          async function makeBooking() {


            try {
              const response = await fetch(`{{ route('dashboard.consultation.booking', $consultation->id) }}`, {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                  'consultation_id': consultationId,
                  'user_id': 1
                })
              });


              // Проверка успешности ответа
              if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
              }

              // Получение данных из ответа (в формате JSON)
              const data = await response.json();

              // Предполагаем, что мы ожидаем, что объект данных будет содержать поле 'success'
              if (data.success) {
                console.log(data.message);
                if (data.message) {
                  document.querySelector('.booking__text').innerHTML = data.message;
                } else {
                  document.querySelector('.booking__text').innerHTML = 'Произошла ошибка';
                }
                document.querySelector('.booking__button').style.display = 'none';
              } else {
                console.log("Запрос выполнен, но не success.");
              }
            } catch (error) {
              console.error("Ошибка при выполнении запрос: ", error);
            }
          }
          </script>



        </div>
      </main>
    </div>
  </div>