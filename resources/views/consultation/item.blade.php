@extends('app')
@section('title', $consultation->title .' ответы на вопросы')
@section('description', 'Консультация врача, вопрос: ' . $consultation->title)
@section('keywords', '')
@section('canonical', route('consultation.item', $consultation->id))
@php
use App\Helpers\LinkHelper
@endphp

@section('content')
<div aria-hidden="true" class="svg-hide">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    style="position: absolute; width: 0; height: 0" id="__SVG_SPRITE_NODE__" xmlnsxlink="http://www.w3.org/1999/xlink">
    <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="like_3e48--react">
      <path fill="#000"
        d="M21.564 9.437c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393C9.482 6.711 7.918 11 6 11H2.5a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h13.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524M4 13h2v7H4zm16.148 6.15c-.617.618-1.588.816-4.148.85H8v-7.656c2.174-1.482 3.441-5.181 4.342-7.643.183-.495.342-.932.484-1.275.275-.662 1.18-.506 1.174.15v6.411l.986.013c1.082.014 4.37.056 5.162.85h.002c.618.618.816 1.591.85 4.138-.033 2.572-.231 3.544-.852 4.162">
      </path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="like_filled_2ff7--react">
      <path fill="#000"
        d="M2 11.5v10a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5m19.564-2.063c-.895-.896-2.489-1.31-5.564-1.414V3.594a2.56 2.56 0 0 0-.736-1.834A2.6 2.6 0 0 0 13.429 1c-1.069 0-2.03.651-2.448 1.658-.145.35-.309.79-.516 1.355l-.143.393c-.51 1.397-1.285 3.523-2.244 4.981A.47.47 0 0 0 8 9.648V21.5a.5.5 0 0 0 .5.5h7.525c2.818-.037 4.365-.261 5.536-1.434 1.177-1.175 1.401-2.727 1.438-5.605-.036-2.81-.261-4.353-1.435-5.524">
      </path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="dislike_5d1d--react">
      <path fill="#000"
        d="M2.436 14.563c.893.896 2.489 1.31 5.564 1.414v4.429a2.56 2.56 0 0 0 .736 1.834 2.6 2.6 0 0 0 1.834.76c1.069 0 2.03-.651 2.449-1.658.146-.35.308-.79.516-1.355l.143-.393C14.518 17.289 16.08 13 18 13h3.5a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H7.974c-2.817.037-4.364.261-5.536 1.434C1.261 4.609 1.036 6.161 1 9.039c.035 2.81.261 4.353 1.436 5.524M20 11h-2V4h2zM3.852 4.85C4.469 4.232 5.44 4.034 8 4h8v7.656c-2.174 1.482-3.441 5.181-4.343 7.643-.183.494-.343.933-.484 1.275-.275.662-1.179.506-1.173-.15v-6.411L9.013 14c-1.081-.014-4.37-.056-5.16-.85H3.85c-.619-.618-.816-1.591-.85-4.138.033-2.572.23-3.544.852-4.162">
      </path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="dislike_filled_56bd--react">
      <path fill="#000"
        d="M21.999 12.5v-10a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5M2.435 14.563c.895.896 2.489 1.31 5.564 1.414v4.429a2.56 2.56 0 0 0 .736 1.834 2.6 2.6 0 0 0 1.835.76c1.07 0 2.03-.651 2.448-1.658.145-.35.31-.79.516-1.355l.143-.393c.51-1.397 1.285-3.523 2.244-4.981a.47.47 0 0 0 .078-.261V2.5a.5.5 0 0 0-.5-.5H7.974c-2.818.037-4.365.261-5.536 1.434C1.261 4.609 1.037 6.161 1 9.039c.036 2.81.261 4.353 1.435 5.524">
      </path>
    </symbol>
  </svg>
</div>

<div class="main__content section-wrapper">
  <section class="main__question consultation-question">
    <div class="consultation-question__wrapper">
      <h1 class="consultation-question__title">{{ $consultation->title }} {{ $executionTime }}</h1>
      @if ($discussion > 0)
      <ul class="consultation-question__discussion-list">
        <li class="consultation-question__discussion-item">
          <a href="{{ route('consultation.subrubric', ['categorySlug' => $consultation->discussion->subcategory->category->slug, 
		  'subcategorySlug' => $consultation->discussion->subcategory->slug]) }}"
            class="consultation-question__discussion-link">{{ $consultation->discussion->subcategory->short_title }}</a>
        </li>
      </ul>
      @endif

      <div class="consultation-question__text">
        <p>{{ $consultation->description }}</p>
        <p>{{ $consultation->created_at }}</p>
        @if ($photos->isNotEmpty())
        <div class="consultation__item">
          <p id="consultation-question-age">Фото: {{ $photos->count() }} шт</p>
        </div>
        <div class="consultation__gallery">
          <ul class="consultation__gallery-list">
            @foreach ($photos as $photo)
            <li class="consultation__gallery-item"><a class="consultation__gallery-link"
                href="https://puzkarapuz.ru/{{ $photo->path }}" data-fancybox="gallery" target="_blank"><img
                  src="https://puzkarapuz.ru/{{ $photo->path }}" class="consultation__gallery-img"
                  alt="Фото консультации" width="450px"></a></li>
            @endforeach
          </ul>
        </div>@endif
        <p>Ответов: {{ $consultation->answer_count }}</p>
      </div>

      <div class="consultation-question__icons">
        @if(Auth::check())
        <div
          class="consultation-question__icon consultation-question__icon-link consultation-question__icon-last custom-select">
          <img src="{{ Storage::url('common/consultation-question/click.svg') }}" alt=""
            class="consultation-question__icon-img consultation-question__icon-actions-img">
          <div class="consultation-question__icon-value">Действия</div>
          <div class="consultation-question__select-wrapper custom-select__wrapper custom-select__hide">
            <ul class="consultation-question__select-list">
              <li class="consultation-question__option">
                <a href="{{ route('dashboard.consultation.item', $consultation->id) }}"
                  class="consultation-question__link">
                  В панель
                </a>
              </li>
            </ul>
          </div>
        </div>@endif
      </div>
    </div>
  </section>

  <section class="main__ask-question ask-question">
    <div class="ask-question__wrapper">
      <div class="ask-question__title">
        Спросите врача онлайн
        <br>
        в чате или по телефону
      </div>
      <a href="{{ route('consult.form') }}" class="ask-question__button">
        Задать вопрос
      </a>
    </div>
  </section>

  @if ($consultation->content->count() > 0)
  <section class="contents">
    <div class="contents__wrapper">
      <div class="contents__title">Содержание консультации</div>
      <ul class="contents__list">
        @foreach ($consultation->content as $content)
        <li class="contents__item">
          <span class="contents__nubmer"></span>
          <a href="#answer{{ $content->answer_id }}" class="contents__text-link">
            <span class="contents__text">{{ $content->name }}</span></a>
          @if(Auth::check())
          <a href="{{ route('consultation.destroy-content', $content->id) }}" class="contents__delete">
            <img src="{{ Storage::url('common/question/delete.svg') }}" alt="" class="contents__img">
          </a>
          @endif
        </li>
        @endforeach
      </ul>
    </div>
  </section>
  @endif

  @if ($consultantsArray->isNotEmpty())
  <section class="main__experts-list experts-list">
    <h2 class="experts-list__title">Ответы врачей</h2>
    <div class="experts-list__wrapper">
      <div class="experts-list__slider-button experts-list__slider-button--prev"><span>‹</span></div>
      <div class="experts-list__slider-button experts-list__slider-button--next"><span>›</span></div>
      @foreach ($consultantsArray as $user)
      @include('consultation.user.userlist', ['user' => $user])
      @endforeach
    </div>
  </section>
  @endif

  <section class="main__comments comments">
    <div class="comment__menu comment-menu comment-menu__hide">
      <div class="comment-menu__wrapper">
        <div class="comment-menu__header">Меню</div>
        <div class="comment-menu__hide-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23">
            <g fill="none" fill-rule="evenodd">
              <path fill="#515151" d="M.04 21.753L21.253.54l.707.707L.747 22.46z" />
              <path fill="#525252" d="M21.96 21.753L.747.54l-.707.707L21.253 22.46z" />
            </g>
          </svg>
        </div>
        @if(Auth::check())
        <div class="comment-menu__buttons">
          <a href="{{ route('consultation.destroy-answer') }}"
            class="comment-menu__button comment-menu__button-delete answer-del">
            <img src="{{ Storage::url('common/question/delete.svg') }}" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Удалить ответ</span>
          </a>
          <a href="" target="_blank" class="comment-menu__button comment-menu__button-edit">
            <img src="{{ Storage::url('common/question/edit.svg') }}" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Редактировать ответ</span>
          </a>
          <a href="{{ route('consultation.add-content') }}" class="comment-menu__button comment-menu__button-add">
            <img src="{{ Storage::url('common/question/content.svg') }}" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Добавить в содержание</span>
          </a>
          <a href="{{ route('consultation.top-answer') }}" class="comment-menu__button comment-menu__button-up">
            <img src="{{ Storage::url('common/question/top.svg') }}" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Поднять в начало</span>
          </a>
          <a href="{{ route('consultation.block-answer') }}"
            class="comment-menu__button comment-menu__button-up comment-menu__button-block">
            <img src="{{ Storage::url('common/question/lock.svg') }}" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Заблокировать ответ</span>
          </a>
          <a href="{{ route('consultation.unlock-answer') }}"
            class="comment-menu__button comment-menu__button-up comment-menu__button-unlock">
            <img src="{{ Storage::url('common/question/unlock.svg') }}" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Разблокировать ответ</span>
          </a>
        </div>
        @endif
        <ul class="comment-menu__contact-list">
          <li class="comment-menu__contact-item">
            <a href="/consultation/messenger" class="comment-menu__contact-link">
              <span class="comment-menu__contact-text">Whatsapp/Viber</span>
              <img src="{{ Storage::url('common/question/messenger.svg') }}" alt="" class="comment-menu__contact-img">
            </a>
          </li>
          <li class="comment-menu__contact-item comment-menu__contact-item-chat">
            <a href="/chat/consultant/" target="_blank"
              class="comment-menu__contact-link comment-menu__contact-list-last">
              <span class="comment-menu__contact-text">В чате</span>
              <img src="{{ Storage::url('common/question/chat.svg') }}" alt="" class="comment-menu__contact-img">
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="comments__wrapper">
      <div class="comment__answer-field-fake">
        <div class="comments__form-fake">
          <textarea class="comments__textarea-fake hide" name="description" placeholder="Написать сообщение"
            disabled=""></textarea>
          <div class="comments__full-form full-form">
            <form action="{{ route('consultation.answer') }}" method="post" class="comments__form">
              @csrf
              <input type="hidden" name="comment_id" value="{{ $consultation->id }}">
              <input type="hidden" disabled name="to_answer_id" id="to_answer_id" value="">

              <div class="full-form__first-screen">
                <textarea placeholder="Написать комментарий..." name="description" id="description"
                  class="full-form__question-input" style="height: 0px;"></textarea>
                <div class="full-form__progress" style="--pseudo-element-width: 0;"></div>

                <div class="full-form__zoom-text full-form__hide">В форму</div>
                <div class="full-form__next-btn full-form__next-btn-unactive">Далее</div>
                <input type="submit"
                  class="full-form__confirm-btn-authenticated full-form__confirm-btn-authenticated-unactive hide"
                  value="Отправить">
              </div>
              <div class="full-form__second-screen hide">
                <div class="full-form__input-wrapper full-form__input-wrapper-name">
                  <img src="{{ Storage::url('common/question/user.svg') }}" alt="" class="full-form__input-img">
                  <input type="name" name="username" id="username" class="full-form__name" placeholder="Ваше имя">
                </div>
                <div class="full-form__input-wrapper full-form__input-wrapper-email">
                  <img src="{{ Storage::url('common/question/email.svg') }}" alt="" class="full-form__input-img">
                  <input type="email" name="email" id="email" class="full-form__email" placeholder="Ваша почта">
                </div>
                <div class="full-form__buttons">
                  <input type="submit" class="full-form__confirm-btn full-form__confirm-btn-unactive" value="Отправить">
                  <div class="full-form__back-btn">Назад</div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <ul class="comments__list">
        @foreach ($consultation->comments as $comment)
        @if ($comment->is_block == 1 && !Auth::check())
        <div class="comment__paywall paywall">
          <div class="paywall__wrapper">
            <div class="paywall__title">Этот ответ недоступен</div>
            <div class="paywall__subtitle">Возможные причины:</div>
            <ul class="paywall__list">
              <li class="paywall__item">Не оплачена опция чат;</li>
              <li class="paywall__item">Новый вопрос, не относящийся к первоначальному;</li>
              <li class="paywall__item">Ситуация затянулась или превысила стандартное время консультации.</li>
            </ul>
            <a href="#" class="paywall__button">Разблокировать ответ</a>
          </div>
        </div>
        @else
        <li class="comments__item comment">
          <div class="comment__main-comment" id="answer{{ $comment->id }}" @if($comment->user)
            user-id="{{ $comment->user->id }}"@endif>
            <div class="comment__user-link-wrapper">
              <a @if($comment->user) href="/profile/{{ $comment->user->username }}"
                id="{{ $comment->user->username }}"@else href="#answer{{ $comment->id }}"@endif
                class="comment__user-link">
                {!! $comment->user && $comment->user->avatar ?
                '<img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/'.$comment->user->avatar.'"
                  class="comment__avatar-main">' :
                '<div class="comment__avatar-main">' . Str::substr($comment->username, 0, 1) . '</div>'
                !!}
                <span class="comment__user-name">{{ $comment->username }}</span>
                <span
                  class="comment__user-subtitle">{{ $comment->user ? $comment->user->city : $comment->created_at }}</span>
              </a>
              <div class="comment__menu-btn" data-id="{{ $comment->id }}">
                <svg class="comment__menu-btn-svg">
                  <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
                </svg>
              </div>
            </div>
            <span class="comment__text" itemprop="suggestedAnswer" itemscope="" itemtype="http://schema.org/Answer">
              <p itemprop="text">{{ $comment->description }}</p>
            </span>
            <div class="comment__answer-field-fake">
              <div class="comments__form-fake" data-id="{{ $comment->id }}">
                <span class="comment__answ">Ответить</span>
                <div class="comment__likes-wrapper">
                  <a href="{{ route('consultation.like', $comment->id) }}" class="comment__like-link">
                    <div class="comment__like-img">
                      <svg viewBox="0 0 24 24" width="16" height="16">
                        @if ($comment->like->isNotEmpty())
                        <use xlink:href="#like_filled_2ff7--react"></use>
                        @else
                        <use xlink:href="#like_3e48--react"></use>
                        @endif
                      </svg>
                    </div>
                  </a>
                  <div class="comment__like-amount">{{ $comment->like_count > 0 ? $comment->like_count : '' }}</div>
                  <a href="{{ route('consultation.dislike', $comment->id) }}" class="comment__dislike-link">
                    <div class="comment__dislike-img">
                      <svg viewBox="0 0 24 24" width="16" height="16">
                        <use xlink:href="#dislike_5d1d--react"></use>
                      </svg>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          @if ($comment->children)
          <div class="comment__sub-comments" id="answer{{ $comment->id }}">
            @include('consultation.childcomment', ['comments' => $comment->children])
          </div>
          @endif
        </li>
        @endif
        @endforeach


      </ul>
    </div>
  </section>

</div>

@if (session('success'))
<div class="toast">
  <div class="toast__container" id="toast">
    <div class="toast__item">{{ session('success') }}</div>
  </div>
</div>
@endif
@endsection