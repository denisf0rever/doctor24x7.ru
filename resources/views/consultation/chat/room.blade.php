@extends('chat')
@section('title', 'Чат')
@section('description', 'Консультация врача')

@section('content')
<div class="full-chat">
  <div class="full-chat__wrapper">
    <div class="full-chat__chat-side-menu chat-side-menu">
      <div class="chat-side-menu__wrapper">
        <a href="#" class="chat-side-menu__logo">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="120" height="120">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M4.929 19.071A9.969 9.969 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10H2l2.929-2.929zM11 6v12h2V6h-2zM7 9v6h2V9H7zm8 0v6h2V9h-2z"
              fill="rgba(114,105,239,1)" />
          </svg>
        </a>
        <ul class="chat-side-menu__tablist">
          <li class="chat-side-menu__item chat-side-menu__item--active">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M2 8.99374C2 5.68349 4.67654 3 8.00066 3H15.9993C19.3134 3 22 5.69478 22 8.99374V21H8.00066C4.68659 21 2 18.3052 2 15.0063V8.99374ZM20 19V8.99374C20 6.79539 18.2049 5 15.9993 5H8.00066C5.78458 5 4 6.78458 4 8.99374V15.0063C4 17.2046 5.79512 19 8.00066 19H20ZM14 11H16V13H14V11ZM8 11H10V13H8V11Z">
              </path>
            </svg>
          </li>
        </ul>
        <ul class="chat-side-menu__bottom">
          <li class="chat-side-menu__item" id="theme">
            <div class="chat-side-menu__light-theme" id="theme-light">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M10 7C10 10.866 13.134 14 17 14C18.9584 14 20.729 13.1957 21.9995 11.8995C22 11.933 22 11.9665 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C12.0335 2 12.067 2 12.1005 2.00049C10.8043 3.27098 10 5.04157 10 7ZM4 12C4 16.4183 7.58172 20 12 20C15.0583 20 17.7158 18.2839 19.062 15.7621C18.3945 15.9187 17.7035 16 17 16C12.0294 16 8 11.9706 8 7C8 6.29648 8.08133 5.60547 8.2379 4.938C5.71611 6.28423 4 8.9417 4 12Z">
                </path>
              </svg>
            </div>
            <div class="chat-side-menu__dark-theme hide" id="theme-dark">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 15.3137 15.3137 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16ZM11 1H13V4H11V1ZM11 20H13V23H11V20ZM3.51472 4.92893L4.92893 3.51472L7.05025 5.63604L5.63604 7.05025L3.51472 4.92893ZM16.9497 18.364L18.364 16.9497L20.4853 19.0711L19.0711 20.4853L16.9497 18.364ZM19.0711 3.51472L20.4853 4.92893L18.364 7.05025L16.9497 5.63604L19.0711 3.51472ZM5.63604 16.9497L7.05025 18.364L4.92893 20.4853L3.51472 19.0711L5.63604 16.9497ZM23 11V13H20V11H23ZM4 11V13H1V11H4Z">
                </path>
              </svg>
            </div>
          </li>
          <li class="chat-side-menu__item chat-side-menu__item-avatar">
            <img class="chat-side-menu__avatar-img"
              src="https://puzkarapuz.ru/uploads/sfGuard/avatars/8cca0ee9479ddb6e2395ba50364815d4f789d42e.jpg">
          </li>
          <li class="chat-side-menu__item chat-side-menu__item-wallet">
            <a href="/" class="chat-side-menu__wallet wallet">
              <div class="wallet__wrapper">
                <svg class="wallet__icon" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                  viewBox="0 0 24 24" fill="none">
                  <path
                    d="M16.5008 14.1502H16.5098M19 4.00098H6.2C5.0799 4.00098 4.51984 4.00098 4.09202 4.21896C3.71569 4.41071 3.40973 4.71667 3.21799 5.093C3 5.52082 3 6.08087 3 7.20098V16.801C3 17.9211 3 18.4811 3.21799 18.909C3.40973 19.2853 3.71569 19.5912 4.09202 19.783C4.51984 20.001 5.07989 20.001 6.2 20.001H17.8C18.9201 20.001 19.4802 20.001 19.908 19.783C20.2843 19.5912 20.5903 19.2853 20.782 18.909C21 18.4811 21 17.9211 21 16.801V11.201C21 10.0809 21 9.52082 20.782 9.093C20.5903 8.71667 20.2843 8.41071 19.908 8.21896C19.4802 8.00098 18.9201 8.00098 17.8 8.00098H7M16.9508 14.1502C16.9508 14.3987 16.7493 14.6002 16.5008 14.6002C16.2523 14.6002 16.0508 14.3987 16.0508 14.1502C16.0508 13.9017 16.2523 13.7002 16.5008 13.7002C16.7493 13.7002 16.9508 13.9017 16.9508 14.1502Z"
                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="wallet__amount">0 ₽</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="full-chat__chat-sidebar chat-sidebar">
      <div class="chat-sidebar__wrapper">
        <div class="chat-sidebar__title">Чаты</div>
        <ul class="chat-sidebar__list">
          <li class="chat-sidebar__item">
            <div class="chat-sidebar__avatar chat-sidebar__avatar--green">
              <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $consultant->avatar }}" alt=""
                class="chat-sidebar__avatar-img">
            </div>
            <span class="chat-sidebar__fullname">{{ $consultant->first_name .' '. $consultant->middle_name }}</span>
            <span class="chat-sidebar__last-message">Перейти к чату</span>
            <span class="chat-sidebar__time"> </span>
          </li>
          @foreach ($chats as $chat)

          @endforeach
        </ul>
      </div>
    </div>
    <div class="full-chat__main">
      <div class="full-chat__main-wrapper">
        <div class="full-chat__chat-header chat-header">
          <div class="chat-header__wrapper">
            <div class="chat-header__back-btn">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z">
                </path>
              </svg>
            </div>
            <div class="chat-header__avatar">
              <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $consultant->avatar }}" alt=""
                class="chat-header__avatar-img">
            </div>
            <div class="chat-header__fullname-wrapper">
              <span class="chat-header__fullname">{{ $consultant->first_name .' '. $consultant->middle_name }}</span>
            </div>
            <div class="chat-header__right">
              <a href="/" class="chat-header__wallet wallet">
                <div class="wallet__wrapper">
                  <svg class="wallet__icon" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                    viewBox="0 0 24 24" fill="none">
                    <path
                      d="M16.5008 14.1502H16.5098M19 4.00098H6.2C5.0799 4.00098 4.51984 4.00098 4.09202 4.21896C3.71569 4.41071 3.40973 4.71667 3.21799 5.093C3 5.52082 3 6.08087 3 7.20098V16.801C3 17.9211 3 18.4811 3.21799 18.909C3.40973 19.2853 3.71569 19.5912 4.09202 19.783C4.51984 20.001 5.07989 20.001 6.2 20.001H17.8C18.9201 20.001 19.4802 20.001 19.908 19.783C20.2843 19.5912 20.5903 19.2853 20.782 18.909C21 18.4811 21 17.9211 21 16.801V11.201C21 10.0809 21 9.52082 20.782 9.093C20.5903 8.71667 20.2843 8.41071 19.908 8.21896C19.4802 8.00098 18.9201 8.00098 17.8 8.00098H7M16.9508 14.1502C16.9508 14.3987 16.7493 14.6002 16.5008 14.6002C16.2523 14.6002 16.0508 14.3987 16.0508 14.1502C16.0508 13.9017 16.2523 13.7002 16.5008 13.7002C16.7493 13.7002 16.9508 13.9017 16.9508 14.1502Z"
                      stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="wallet__amount">0 ₽</span>
                </div>
              </a>
              <div class="small-menu small-menu__menu-btn custom-select" data-id="300330">
                <svg class="small-menu__menu-btn-svg">
                  <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
                </svg>
                <div class="custom-select__wrapper custom-select__hide small-menu__menu">
                  <ul class="small-menu__menu-list">
                    <li class="small-menu__menu-item"><a class="small-menu__menu-item-link close-chat-link"
                        href="/">Закрыть
                        чат</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="full-chat__chat-messages chat-messages">
          <div class="chat-messages__wrapper">
            <div class="chat-messages__scroll-button">
              <div class="chat-messages__scroll-button-counter"></div>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                height="17.5px" viewBox="0 0 960 560" enable-background="new 0 0 960 560" xml:space="preserve">
                <g>
                  <path
                    d="M480,344.181L268.869,131.889c-15.756-15.859-41.3-15.859-57.054,0c-15.754,15.857-15.754,41.57,0,57.431l237.632,238.937   c8.395,8.451,19.562,12.254,30.553,11.698c10.993,0.556,22.159-3.247,30.555-11.698l237.631-238.937   c15.756-15.86,15.756-41.571,0-57.431s-41.299-15.859-57.051,0L480,344.181z" />
                </g>
              </svg>
            </div>
            <ul class="chat-messages__list">

              <!-- <li class="chat-messages__low-balance low-balance">
                <div class="low-balance__wrapper">
                  <span class="low-balance__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut eum,
                    suscipit accusamus ad minus nisi ipsam possimus dicta praesentium dignissimos</span>
                  <div class="low-balance__buttons">
                    <a href="/" target="_blank" class="low-balance__button low-balance__button--first">Тест 1</a>
                    <a href="/" target="_blank" class="low-balance__button low-balance__button--second">Тест 2</a>
                  </div>
                </div>
              </li> -->

              {{--
			@foreach ($messages as $message)
				@if ($message->user_id === $user_id)
				<li class="chat-messages__chat-message chat-message">
                <div class="chat-message__wrapper">
                  <div class="chat-message__main">
                    <div class="chat-message__message-block">
                      <span class="chat-message__text">{{ $message->message }}
              <!--<a href="/" class="chat-message__link">Ссылка</a>-->
              </span>
              <!-- <span class="chat-message__time">
                        <div class="chat-message__time-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                              d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z">
                            </path>
                          </svg>
                        </div>
                        <!--<div class="chat-message__time-text">{{ $message->created_at }}</div>
                      </span>-->
          </div>
          <!--<span class="chat-message__author"> </span>-->
        </div>
      </div>
      </li>
      @else
      <li class="chat-messages__chat-message chat-message">
        <div class="chat-message__wrapper chat-message--own">
          <div class="chat-message__main">
            <div class="chat-message__message-block">
              <span class="chat-message__text">{{ $message->message }}

                <!--<a href="/" class="chat-message__link">Ссылка</a>-->
              </span>
              <!--<span class="chat-message__time">
                        <div class="chat-message__time-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                              d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z">
                            </path>
                          </svg>
                        </div>
                        <div class="chat-message__time-text">{{ $message->created_at }}</div>
                      </span>-->
            </div>
            <!--<span class="chat-message__author"> </span>-->
          </div>
        </div>
      </li>
      @endif
      @endforeach
      --}}
      </ul>
    </div>
  </div>
  <div class="full-chat__chat-bottom chat-bottom">
    <form action="{{ route('chat.message.create') }}" method="POST" class="chat-bottom__wrapper">
      @csrf
      <input type="hidden" name="chat_id" value="{{ $chat->id }}">
      <input type="hidden" name="user_id" value="{{ $user_id }}">
      <textarea name="message" id="message" class="chat-bottom__textarea" required
        placeholder="Введите сообщение..."></textarea>
      <button type="submit" class="chat-bottom__button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff">
          <path
            d="M3 12.9999H9V10.9999H3V1.84558C3 1.56944 3.22386 1.34558 3.5 1.34558C3.58425 1.34558 3.66714 1.36687 3.74096 1.40747L22.2034 11.5618C22.4454 11.6949 22.5337 11.9989 22.4006 12.2409C22.3549 12.324 22.2865 12.3924 22.2034 12.4381L3.74096 22.5924C3.499 22.7255 3.19497 22.6372 3.06189 22.3953C3.02129 22.3214 3 22.2386 3 22.1543V12.9999Z">
          </path>
        </svg>
      </button>
    </form>
  </div>
</div>
</div>
</div>
</div>
@endsection