<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ $consultation->title }}</title>
  <meta name="user-id" content="{{ Auth::id() }}">
  <meta name="booking-url" content="{{ route('dashboard.consultation.booking', $consultation->id) }}">
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
                  <p>{{ $consultation->description }}</p>
                </div>
                <div class="consultation__item">
                  <p id="answer-fullname">{{ $consultation->username }}</p>,<p id="answer-email">
                    {{ $consultation->email }}</p>
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
              <div class=" booking__button red-button" id="makeBooking">Беру</div>
            </div>
          </section>
          @elseif ($hasBooking)
          <section class="main__booking booking">
            <div class="booking__wrapper white-block booking__is-free">
              <div class="booking__text">Вы взяли вопрос</div>
            </div>
          </section>
          @else
          <section class="main__booking booking">
            <div class="booking__wrapper white-block booking__is-taken">
              <div class="booking__text">К сожалению, данный вопрос в работе</div>
            </div>
          </section>
          @endif

          <section class="main__consultation-textarea consultation-textarea">
            <div class="consultation-textarea__wrapper white-block">
              <form action="{{ route('dashboard.consultation.create-answer') }}" method="POST">
                @csrf
                <textarea class="consultation-textarea__textarea ckeditor"
                  name="description">{{ old('description') }}</textarea>
                <input type="hidden" name="comment_id" value="{{ $consultation->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="author_email" value="{{ $consultation->email }}">
                <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                <input type="hidden" name="author_username" value="{{ $consultation->username }}">
                <input type="hidden" name="username"
                  value="{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}">
                <input class="consultation-textarea__submit red-button" type="submit" value="Ответить">
              </form>
            </div>
          </section>

          <form class="comment__migration-form hide" action="{{ route('dashboard.consultation.create-answer') }}"
            method="POST">
            @csrf
            <textarea class="consultation-textarea__textarea ckeditor"
              name="description">{{ old('description') }}</textarea>
            <input type="hidden" name="comment_id" value="{{ $consultation->id }}">
            <input type="hidden" name="to_answer_id" value="" id="to_answer_id">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="author_email" value="" id="author_email">
            <input type="hidden" name="email" id="author_email" value="{{ auth()->user()->email }}">
            <input type="hidden" name="author_username" value="" id="author_username">
            <input type="hidden" name="username"
              value="{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}">
            <input class="consultation-textarea__submit red-button" type="submit" value="Ответить">
          </form>

          @foreach($consultation->comments as $comment)
          @if($comment->user_id) @endif
          <div class="comment" answer-id="{{ $comment->id }}" answer-author_username="{{ $comment->username }}"
            answer-author_email="{{ $comment->email }}">
            <div class="comment__wrapper white-block">
              <div class="comment__menu-btn custom-select" data-id="300330">
                <svg class="comment__menu-btn-svg">
                  <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
                </svg>
                <div class="custom-select__wrapper custom-select__hide comment__menu">
                  <ul class="comment__menu-list">
                    <li class="comment__menu-item"><a class="comment__menu-item-link delete-link"
                        href="{{ route('dashboard.consultation.destroy-answer', $comment->id) }}">Удалить</a></li>
                    <li class="comment__menu-item"><a class="comment__menu-item-link"
                        href="{{ route('dashboard.consultation.edit-answer', $comment->id) }}">Редактировать</a></li>
                    <li class="comment__menu-item"><a class="comment__menu-item-link"
                        href="{{ route('dashboard.consultation.answer.block', $comment->id) }}">Заблокировать ответ</a>
                    </li>
                  </ul>
                </div>
              </div>
              <a href="{{ $comment->username }}" class="comment__user-link">
                <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $comment->user->avatar ?? null }}"
                  class="comment__avatar-main">
                <span class="comment__user-name">{{ $comment->username }}</span>
                <span class="comment__user-subtitle">{{ $comment->user->city ?? null }}</span>
              </a>
              <div class="comment__text">{{ $comment->description }}</div>
              <div class="comment__answ">

                @if ($hasAnswerForm)
                <a href="/" class="comment__to-answ">Ответить</a>
                @else
                <a href="{{ route('dashboard.consultation.answer', $comment->id)}}">Ответить</a>
                @endif


              </div>
            </div>
            @include('dashboard.consultation.childcomment', ['comments' => $comment->children])
          </div>


          @endforeach

        </div>
        @if (session('success'))
        <div class="toast">
          <div class="toast__container" id="toast">
            <div class="toast__item">
              {{ session('success') }}
            </div>
          </div>
        </div>
        @endif
      </main>
    </div>
  </div>
  <div class="dashboard-popup dashboard-popup__hide">
    <div class="dashboard-popup__wrapper">
      <div class="dashboard-popup__close">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" class="loaded">
          <g fill="none" fill-rule="evenodd">
            <path fill="#515151" d="M.04 21.753L21.253.54l.707.707L.747 22.46z"></path>
            <path fill="#525252" d="M21.96 21.753L.747.54l-.707.707L21.253 22.46z"></path>
          </g>
        </svg>
      </div>
      <div class="dashboard-popup__content">
        <div class="dashboard-popup__item" popup-action="resume">
          <span class="dashboard-popup__item-text"> Продолжить </span>
          <img src="/" alt="" class="dashboard-popup__item-img">
        </div>
        <div class="dashboard-popup__item" popup-action="cancel">
          <span class="dashboard-popup__item-text"> Отменить </span>
          <img src="/" alt="" class="dashboard-popup__item-img">
        </div>
      </div>
    </div>
  </div>