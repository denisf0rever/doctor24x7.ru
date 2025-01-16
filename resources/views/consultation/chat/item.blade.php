@extends('appwide')
@section('title', $consultation->title .' — консультируют врачи на форуме')
@section('description', 'Консультация врача, вопрос: ' . $consultation->title)
@section('keywords', '')


@section('content')

{{ $consultation->description }}

<div class="full-chat">
  <div class="full-chat__wrapper">
    <div class="full-chat__chat-side-menu">
      <div class="chat-side-menu__logo">
        <img src="" alt="" class="chat-side-menu__logo-img">
      </div>
      <ul class="chat-side-menu__tablist">
        <li class="chat-side-menu__item chat-side-menu__item--active">
          <img src="" alt="" class="chat-side-menu__item-img">
        </li>
      </ul>
      <div class="chat-side-menu__theme">
        <img class="chat-side-menu__theme-img"></img>
      </div>
    </div>
    <div class="full-chat__chat-sidebar">
      <div class="chat-sidebar__wrapper">
        <div class="chat-sidebar__title">Chats</div>
        <ul class="chat-sidebar__list">
          <li class="chat-sidebar__item">
            <div class="chat-sidebar__avatar">
              <img src="" alt="" class="chat-sidebar__avatar-img">
            </div>
            <span class="chat-sidebar__fullname"></span>
            <span class="chat-sidebar__last-message"></span>
            <span class="chat-sidebar__time"></span>
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