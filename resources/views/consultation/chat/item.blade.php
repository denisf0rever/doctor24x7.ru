@extends('chat')
@section('title', $consultation->title .' — консультируют врачи на форуме')
@section('description', 'Консультация врача, вопрос: ' . $consultation->title)
@section('keywords', '')


@section('content')

<!-- {{ $consultation->description }} -->

<div class="full-chat">
  <div class="full-chat__wrapper">
    <div class="full-chat__chat-side-menu chat-side-menu">
      <div class="chat-side-menu__wrapper">
        <a href="/" class="chat-side-menu__logo">
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
          <li class="chat-side-menu__item">
            <img class="chat-side-menu__avatar-img" src="https://i.pravatar.cc/300">
          </li>
        </ul>
      </div>
    </div>
    <div class="full-chat__chat-sidebar chat-sidebar">
      <div class="chat-sidebar__wrapper">
        <div class="chat-sidebar__title">Chats</div>
        <ul class="chat-sidebar__list">
          <li class="chat-sidebar__item">
            <div class="chat-sidebar__avatar chat-sidebar__avatar--green">
              <img src="https://i.pravatar.cc/300" alt="" class="chat-sidebar__avatar-img">
            </div>
            <span class="chat-sidebar__fullname">Patrick Hendricks</span>
            <span class="chat-sidebar__last-message">hey! there I'm available</span>
            <span class="chat-sidebar__time">02:50 PM</span>
          </li>
          <li class="chat-sidebar__item">
            <div class="chat-sidebar__avatar chat-sidebar__avatar--yellow">
              <img src="https://i.pravatar.cc/300" alt="" class="chat-sidebar__avatar-img">
            </div>
            <span class="chat-sidebar__fullname">Patrick Hendricks</span>
            <span class="chat-sidebar__last-message">hey! there I'm available</span>
            <span class="chat-sidebar__time">02:50 PM</span>
          </li>
          <li class="chat-sidebar__item">
            <div class="chat-sidebar__avatar">
              <img src="https://i.pravatar.cc/300" alt="" class="chat-sidebar__avatar-img">
            </div>
            <span class="chat-sidebar__fullname">Patrick Hendricks</span>
            <span class="chat-sidebar__last-message">hey! there I'm available</span>
            <span class="chat-sidebar__time">02:50 PM</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="full-chat__chat-main">
      <div class="chat-main__wrapper">
        <div class="chat-main__header">
          <img src="" alt="" class="chat-main__avatar">
          <div class="chat-main__fullname"></div>
        </div>
        <div class="chat-main__chat-messages">
          <div class="chat-messages">
            <ul class="chat-messages__list">
              <li class="chat-messages__chat-message chat-messages__chat-message--own">
                <div class="chat-message__wrapper">
                  <div class="chat-message__avatar">
                    <img src="" alt="" class="chat-message__avatar-img">
                  </div>
                  <div class="chat-message__main">
                    <div class="chat-message__message-block chat-message__message-block--own">
                      <span class="chat-message__text"></span>
                      <span class="chat-message__time"></span>
                    </div>
                    <span class="chat-message__author"></span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="chat-main__chat-bottom">
          <div class="chat-bottom__wraper">
            <textarea name="" id="" class="chat-bottom__textarea"></textarea>
            <div class="chat-bottom__button"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection