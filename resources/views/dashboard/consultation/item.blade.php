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
          <h1 class="main__consultation-title">№{{ $consultation->id }}, {{ $consultation->created_at }}
            {{ $executionTime }}</h1>
          <section class="main__consultation consultation">
            <div class="consultation__wrapper white-block">
              <div class="small-menu small-menu__menu-btn custom-select" data-id="300330">
                <svg class="small-menu__menu-btn-svg">
                  <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
                </svg>
                <div class="custom-select__wrapper custom-select__hide small-menu__menu">
                  <ul class="small-menu__menu-list">
                    <li class="small-menu__menu-item"><a class="small-menu__menu-item-link"
                        href="{{ route('dashboard.consultation.edit', $consultation->id )}}">Редактировать</a>
                    </li>
                    <li class="small-menu__menu-item"><a class="small-menu__menu-item-link small-menu__link-doc"
                        href="{{ route('consultation.get-document', $consultation->id) }}">Запросить документы</a></li>
                    <li class="small-menu__menu-item"><a class="small-menu__menu-item-link" href="">Объединить с...</a>
                    </li>
                    <li class="small-menu__menu-item"><a class="small-menu__menu-item-link delete-link"
                        href="{{ route('dashboard.consultation.destroy', $consultation->id )}}">Удалить</a></li>
                  </ul>
                </div>
              </div>
              <h2 class="consultation__title">{{ $consultation->title }}</h2>
              <div class="consultation__inner">
                <div class="consultation__item">
                  <p>{{ $consultation->description }}</p>
                </div>
                <div class="consultation__item">
                  <p id="question-fullname">{{ $consultation->username }}</p>
                </div> 
				<div class="consultation__item">
                  <p id="question-email">{{ $consultation->email }}</p>
                </div> 
				<div class="consultation__item">
                  <p id="question-age">Возраст пациента: {{ $consultation->age/365 }}</p>
                </div> 
				<div class="consultation__item">
                  <p id="question-age">Телефон: {{ $consultation->phone ?? $consultation->phone }}</p>
                </div>

                <!-- ФОТКИ -->
                <div class="consultation__gallery">
                  @if ($photos->isNotEmpty())
                  <ul class="consultation__gallery-list">
                    @foreach ($photos as $photo)
                    <li class="consultation__gallery-item"><a class="consultation__gallery-link"
                        href="https://puzkarapuz.ru/{{ $photo->path }}" data-fancybox="gallery" target="_blank"><img
                          src="https://puzkarapuz.ru/{{ $photo->path }}" class="consultation__gallery-img"
                          alt="Фото консультации" width="450px"></a></li>
                    @endforeach
                  </ul>
                  @endif
                </div>
              </div>
            </div>
          </section>

          <section class="main__stats stats">
            <div class="stats__wrapper">
              <ul class="stats__list">
                <li class="stats__item">
                  <div class="stats__number">@if ($currentHour >= '20:00' || $currentHour < '07:00' )
                      {{ $consultation->tariff->night_fee * $coefficientLength * $coefficientCity }} @else
                      {{ $consultation->tariff->fee * $coefficientLength * $coefficientCity }} @endif &#8381;</div>
                      <div class="stats__text">Гонорар</div>
                </li>
                <li class="stats__item">
                  <div class="stats__number">{{ $consultation->payed_amount }} &#8381;</div>
                  <div class="stats__text">Оплачено</div>
                </li>
                <li class="stats__item">
                  <div class="stats__number">{{ $consultation->tariff->sum }} &#8381;</div>
                  <div class="stats__text">Тариф</div>
                </li>
                <li class="stats__item">
                  <div class="stats__number">{{ $consultation->tariff->title }}</div>
                  <div class="stats__text">Сценарий</div>
                </li>
                <li class="stats__item">
                  <div class="stats__number">{{ $consultation->bookings->count() }}</div>
                  <div class="stats__text">Взято</div>
                </li>
                <li class="stats__item">
                  <div class="stats__number">{{ $coefficientLength }}</div>
                  <div class="stats__text">Коэффициент</div>
                </li>
                </li>
                <li class="stats__item">
                  <div class="stats__number">Длина</div>
                  <div class="stats__text">{{ $lengthDescription }}</div>
                </li>
                <li class="stats__item">
                  <div class="stats__number">1</div>
                  <div class="stats__text">Чат</div>
                </li>

                <li class="stats__item">
                  <div class="stats__number">{{ $consultation->visit_count }}</div>
                  <div class="stats__text">Визитов</div>
                </li>
              </ul>
            </div>
          </section>

          @if ($canBooking && !$hasBooking)
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
          <section class="main__experts-list experts-list">
            <div class="experts-list__wrapper">
			@foreach($doctors as $doctor)
              <div class="experts-list__expert">
                <a href="#" class="experts-list__expert-link">
                  <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $doctor->avatar }}"
                    alt="" class="experts-list__expert-img">
                  <div class="experts-list__expert-fullname">{{ $doctor->first_name }}<br />{{ $doctor->last_name }}</div>
                </a>
              </div>
			  @endforeach
            </div>
          </section>

          <section class="main__consultation-textarea consultation-textarea">
            <h2>Форма для ответа</h2>
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
                <div class="consultation-textarea__bottom-buttons">
                  <div class="consultation-textarea__copy-btn copy-btn">
                    <img src="{{ Storage::url('dashboard/copy.svg') }}" alt="" class="copy-btn__img">
                  </div>
                  <input class="consultation-textarea__submit red-button" type="submit" value="Ответить">
                </div>
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
            <input type="hidden" name="author_email" id="author_email" value="" id="author_email">
            <input type="hidden" name="email" id="email" value="{{ auth()->user()->email }}">
            <input type="hidden" name="author_username" value="" id="author_username">
            <input type="hidden" name="username"
              value="{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}">
            <div class="consultation-textarea__bottom-buttons">
              <div class="consultation-textarea__copy-btn copy-btn">
                <img src="{{ Storage::url('dashboard/copy.svg') }}" alt="" class="copy-btn__img">
              </div>
              <input class="consultation-textarea__submit red-button" type="submit" value="Ответить">
            </div>
          </form>

          @foreach($consultation->comments as $comment)
          <div class="comment" answer-id="{{ $comment->id }}" answer-author_username="{{ $comment->username }}"
            answer-author_email="{{ $comment->email }}">
            <div class="comment__wrapper white-block">
              <div class="small-menu small-menu__menu-btn custom-select" data-id="{{ $comment->id }}">
                <svg class="small-menu__menu-btn-svg">
                  <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
                </svg>
                <div class="custom-select__wrapper custom-select__hide small-menu__menu">
                  <ul class="small-menu__menu-list">
                    <li class="small-menu__menu-item"><a class="small-menu__menu-item-link delete-link"
                        href="{{ route('dashboard.consultation.destroy-answer', $comment->id) }}">Удалить</a></li>
                    <li class="small-menu__menu-item"><a class="small-menu__menu-item-link"
                        href="{{ route('dashboard.consultation.edit-answer', $comment->id) }}">Редактировать</a></li>
                    <li class="small-menu__menu-item"><a class="small-menu__menu-item-link"
                        href="{{ route('dashboard.consultation.answer.block', $comment->id) }}">Заблокировать ответ</a>
                    </li>
                  </ul>
                </div>
              </div>
              <a href="{{ $comment->user ? '/profile/'.$comment->user->username.'' : '#' }}" class="comment__user-link">
                <img
                  src="{{ $comment->user ? 'https://puzkarapuz.ru/uploads/sfGuard/avatars/'.$comment->user->avatar.'' : Storage::url('dashboard/profile-default.svg') }}"
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
          </div>
          @include('dashboard.consultation.childcomment', ['comments' => $comment->children])

          @endforeach

        </div>
        @if (session('success'))
        <div class="toast" id="toast">
          <div class="toast__container">
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