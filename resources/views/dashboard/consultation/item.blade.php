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
          <h1 class="main__consultation-title">№{{ $consultation->id }}, {{ $consultation->created_at }}</h1>
          <section class="main__consultation consultation">
            <div class="consultation__wrapper white-block">
              <h2 class="consultation__title">{{ $consultation->title }}</h2>
              <div class="consultation__inner">
                <div class="consultation__item">
                  {{ $consultation->description }}
                </div>
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
                  <div class="stats__number">{{ $consultation->payed_amount }} &#8381;</div>
                  <div class="stats__text">Оплачено</div>
                </li>
				<li class="stats__item">
                  <div class="stats__number">{{ $consultation->tariff->sum }} &#8381;</div>
                  <div class="stats__text">По тарифу</div>
                </li>
                <li class="stats__item">
                  <div class="stats__number">{{ $consultation->tariff->answers_count }}</div>
                  <div class="stats__text">Ответов</div>
                </li>
                <li class="stats__item">
                  <div class="stats__number">{{ $consultation->bookings->count() }}</div>
                  <div class="stats__text">Взято</div>
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

		@if ($canBooking)
		<section class="main__booking booking">
            <div class="booking__wrapper white-block">
             <div class="booking__text">Чтобы ответить, нажмите беру</div>
             <div class=" booking__button red-button" onclick="makeBooking()">Беру</div>
          </section>
		@elseif ($hasBooking)
		<section class="main__booking booking">
			<div class="booking__wrapper white-block booking__is-free">
			<div class="booking__text">Вы взяли вопрос</div>
		</section>
		@else
		<section class="main__booking booking">
            <div class="booking__wrapper white-block booking__is-taken">
             <div class="booking__text">К сожалению, данный вопрос в работе</div>
          </section>
		@endif
		
		<section class="main__consultation-textarea consultation-textarea">
            <div class="consultation-textarea__wrapper white-block">
              <form action="{{ route('dashboard.consultation.create-answer') }}" method="POST">
                @csrf
                <textarea class="consultation-textarea__textarea" name="description">{{ old('description') }}</textarea>
                <input type="hidden" name="comment_id" value="{{ $consultation->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                <input type="hidden" name="username" value="{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}">
                <input class="consultation-textarea__submit red-button" type="submit" value="Ответить">
              </form>
            </div>
          </section>

          @foreach($consultation->comments as $comment)
			@if($comment->user_id)
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
                    <li class="comment__menu-item"><a href="{{ route('dashboard.consultation.destroy-answer', $comment->id) }}">Удалить</a></li>
                    <li class="comment__menu-item">Редактировать</li>
                  </ul>
                </div>
              </div>
              <a href="{{ $comment->username }}" class="comment__user-link">
                <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $comment->user->avatar ? $comment->user->avatar : d}}"
                  class="comment__avatar-main">
                <span class="comment__user-name">{{ $comment->username }}</span>
                <span class="comment__user-subtitle">{{ $comment->user->city ? $comment->user->city : null }}</span>
              </a>
              <div class="comment__text">{{ $comment->description }}</div>
              <div class="comment__ansv"><a href="{{ route('dashboard.consultation.answer', $comment->id)}}">Ответить</div>
            </div>
          </div>
          @include('dashboard.consultation.childcomment', ['comments' => $comment->children])
			@endif
          @endforeach

          <script>
          const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

          const url = window.location.href; // Получаем полный URL
          const segments = url.split('/'); // Разбиваем строку URL по символу '/'
          const consultationId = segments[segments.length - 1]; // Получаем последний сегмент (ID)
          const userId = {{ Auth::id() }}; // Получаем последний сегмент (ID)


          async function makeBooking() {
            try {
              const response = await fetch(`{{ route('dashboard.consultation.booking', $consultation->id) }}`, {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                  'consultation_id': +consultationId,
                  'user_id': +userId
                })
              });


              // Проверка успешности ответа
              if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
              }

              // Получение данных из ответа (в формате JSON)
              const data = await response.json();

              if (data.message) {
                document.querySelector('.booking__text').innerHTML = data.message;
              } else {
                document.querySelector('.booking__text').innerHTML = 'Произошла ошибка';
              }
              document.querySelector('.booking__button').style.display = 'none';

              if (!data.success) {
                document.querySelector('.booking__wrapper').classList.add('booking__is-taken');
              } else {
                document.querySelector('.booking__wrapper').classList.add('booking__is-free');
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