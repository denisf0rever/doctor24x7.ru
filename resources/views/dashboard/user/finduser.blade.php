<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Поиск пользователя</title>
  @include('dashboard.settings')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Поиск пользователя</h1>
          <section class="main__form form">
            <div class="form__wrapper">
                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
					
					 <form id="consultationForm">
        <label for="user_id">Введите ID пользователя:</label>
        <input type="number" id="user_id" name="user_id" required>
        <button type="submit" class="form__submit red-button">Отправить</button>
    </form>

    <script>
        $(document).ready(function() {
            $('#consultationForm').on('submit', function(e) {
                e.preventDefault(); // Предотвращаем отправку формы

                var userId = $('#user_id').val();

                $.ajax({
                    url: '{{ route("dashboard.user.finduser.get") }}', // Укажите маршрут
                    type: 'POST',
                    data: {
                        user_id: userId,
                        _token: '{{ csrf_token() }}' // Защита от CSRF
                    },
                    success: function(data) {
                        $('#result').html('<h3>ID консультаций:</h3>' + data.join(', '));
                    },
                    error: function(xhr) {
                        $('#result').html('<h3>Произошла ошибка!</h3>');
                    }
                });
            });
        });
    </script>
                     
                    </div>
                  </div>
                 
                </div>
              </form>
            </div>
          </section>
		  
		  <section class="main__pages pages">
            <div class="pages__wrapper">
              <div class="pages__inner">
                <ul class="pages__list">
				  
				  
    <div id="result"></div>
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