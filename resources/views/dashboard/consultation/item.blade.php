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
          <h1 class="main__title">Консультация №{{ $consultation->id }}</h1>

          <section class="main__consultation consultation">
            <div class="consultation__wrapper white-block">
              <h2 class="pages__title">{{ $consultation->title }}</h2>
              <div class="pages__inner">
                <div class="pages__item">
                  {{ $consultation->description }}
                </div>
                <span class="pages__views-id">{{ $consultation->created_at }}</span>
                <div class="pages__icons">
                  <div class="pages__icon">
                    <a href="{{ route('dashboard.consultation.edit', $consultation->id)}}" target="_blank">
                      <img src="/images/dashboard/edit.svg" alt="" class="pages__icon-img">
                    </a>
                  </div>
                  <div class="pages__icon">
                    <a href="{{ route('dashboard.consultation.destroy', $consultation->id) }}">
                      <img src="/images/dashboard/del.svg" alt="" class="pages__icon-img">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="main__booking booking">
            <div class="booking__wrapper white-block">
              <div class="booking__text">Чтобы ответить, нажмите взять вопрос</div>
              <div class=" booking__button" onclick="makeBooking()">Войти</div>
          </section>

          <section class="main__pages pages">
            <div class="pages__wrapper">
              <form action="" method="POST">

                @csrf
                <textarea style="width:100%;height:150px"></textarea>
                <input type="submit" value="Отправить">
              </form>
            </div>
          </section>
          <br /><br />

          @foreach($consultation->comments as $comment)
          <div style="display:flex;margin-bottom: 40px;padding:15px;border-radius: 8px;background:#fff">
            <div> {{ $comment->description }}</div>
            <div> Ответить</div>
            <div> Удалить</div>
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
          console.log(makeBooking);
          </script>



        </div>
      </main>
    </div>
  </div>