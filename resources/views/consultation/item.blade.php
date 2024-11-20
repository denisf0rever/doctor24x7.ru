@extends('app')
@section('title', $consultation->title .' — консультируют врачи на форуме')
@section('description', 'Консультация врача, вопрос: ' . $consultation->title)
@section('keywords', '')
@section('canonical', 'consultation/detail/'. $consultation->id)

@section('content')
<div aria-hidden="true">
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

<div class="main__content">
  <section class="main__question question">
    <div class="question__wrapper section-wrapper">
      <h1 class="question__title">{{ $consultation->title }} {{ $executionTime }}</h1>
      @if ($discussion > 0)
      <ul class="question__discussion-list">
        <li class="question__discussion-item">
          <a href="{{ $consultation->discussion->subcategory->slug }}"
            class="question__discussion-link">{{ $consultation->discussion->subcategory->short_title }}</a>
        </li>
      </ul>
      @endif

      <div class="question__text">
        <p>{{ $consultation->description }}</p>
      </div>
      <div class="question__icons">
        <div class="question__icon">
          <img src="https://puzkarapuz.ru/images/svg/doc.svg" alt=""
            class="question__icon-img question__icon-small question__icon-doc-img">
          <div class="question__icon-value">{{ $consultation->answer_count }}</div>
        </div>
        <a href="" class="question__icon question__icon-big question__icon-link">
          <img src="https://puzkarapuz.ru/images/svg/calendar.svg" alt=""
            class="question__icon-img question__icon-calendar-img">
          <div class="question__icon-value">{{ $consultation->created_at }}</div>
        </a>
        <div class="question__icon question__icon-link question__icon-last custom-select">
          <img src="https://puzkarapuz.ru/images/svg/click.svg" alt=""
            class="question__icon-img question__icon-actions-img">
          <div class="question__icon-value">Действия</div>
          <div class="question__select-wrapper custom-select__wrapper custom-select__hide">
            <ul class="question__select-list">
              <li class="question__option">
                <a href="/" class="question__link">
                  Удалить
                </a>
              </li>
              <li class="question__option">
                <a href="{{ route('consultation.get-document', $consultation->id) }}"
                  class="question__link question__link-doc">
                  Запросить документы
                </a>
              </li>
              <li class="question__option">
                <a href="/" class="question__link">
                  Объединить с...
                </a>
              </li>
              <li class="question__option">
                <a href="/" class="question__link">
                  Оплата диалога
                </a>
              </li>
              <li class="question__option">
                <a href="/" class="question__link">
                  Редактировать
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="main__ask-question ask-question">
    <div class="ask-question__wrapper section-wrapper">
      <div class="ask-question__title">
        Спросите врача онлайн
        <br>
        в чате либо по телефону
      </div>
      <a href="{{ route('consult.form') }}" class="ask-question__button">
        Задать вопрос
      </a>
    </div>
  </section>

  @if ($consultation->content->count() > 0)
  <section class="contents">
    <div class="contents__wrapper section-wrapper">
      <div class="contents__title">Содержание консультации</div>
      <ul class="contents__list">
        @foreach ($consultation->content as $content)
        <li class="contents__item">
          <span class="contents__nubmer"></span>
          <a href="#answer{{ $content->answer_id }}" class="contents__text-link">
            <span class="contents__text">{{ $content->name }}</span></a>
          <a href="/" class="contents__delete">
            <img src="https://puzkarapuz.ru/images/svg/delete.svg" alt="" class="contents__img">
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </section>
  @endif

  <section class="main__experts-list experts-list">
    <h2 class="experts-list__title">Ответы врачей</h2>
    <div class="experts-list__wrapper section-wrapper">
      @if ($consultation->bookings->count() > 0)
      @foreach ($consultation->bookings as $booking)
      <div class="experts-list__expert-wrapper">
        <a href="/profile/{{ $booking->user->username }}" class="experts-list__expert">
          <img
            src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $booking->usermain ? $booking->usermain->avatar : '' }}"
            alt="" class="experts-list__expert-img">
          <div class="experts-list__expert-fullname">{{ $booking->user->full_name }}</div>
          <div class="experts-list__expert-status">Врач</div>
        </a>
        <a href="#{{ $booking->user->username }}" class="experts-list__anchor">
          <img src="" alt="" class="experts-list__anchor-img">
        </a>
      </div>
      @endforeach
      @else ($consultation->comments->count() > 0)
      @foreach ($consultation->comments as $comment)
      <div class="experts-list__expert-wrapper">
        <a href="/profile/" class="experts-list__expert">
          <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $comment->user ? $comment->user->avatar : '' }}"
            alt="" class="experts-list__expert-img">
          <div class="experts-list__expert-fullname"></div>
          <div class="experts-list__expert-status">Врач</div>
        </a>
        <a href="#" class="experts-list__anchor">
          <img src="" alt="" class="experts-list__anchor-img">
        </a>
      </div>
      @endforeach
      @endif
    </div>
  </section>

  <section class="main__comments comments">
    <div class="comment__menu comment-menu comment-menu__hide">
      <div class="comment-menu__wrapper">
        <div class="comment-menu__header">Меню</div>
        <img src="/images/svg/close.svg" class="comment-menu__hide-button">
        <div class="comment-menu__buttons">
          <a href="" data-id="" class="comment-menu__button comment-menu__button-delete answer-del">
            <img src="/images/svg/delete.svg" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Удалить ответ</span>
          </a>
          <a href="" data-id="" target="_blank" class="comment-menu__button comment-menu__button-edit">
            <img src="/images/svg/edit.svg" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Редактировать ответ</span>
          </a>
          <a href="" class="comment-menu__button comment-menu__button-add">
            <img src="/images/svg/content.svg" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Добавить в содержание</span>
          </a>
          <a href="" class="comment-menu__button comment-menu__button-up">
            <img src="/images/svg/top.svg" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Поднять в начало</span>
          </a>
          <a href="{{ route('consultation.block-answer', $comment->id) }}"
            class="comment-menu__button comment-menu__button-up comment-menu__button-block">
            <img src="/images/svg/top.svg" alt="" class="comment-menu__button-img">
            <span class="comment-menu__button-text">Заблокировать ответ</span>
          </a>

        </div>
        <ul class="comment-menu__contact-list">
          <li class="comment-menu__contact-item">
            <a href="/consultation/messenger" class="comment-menu__contact-link">
              <span class="comment-menu__contact-text">Whatsapp/Viber</span>
              <img src="/images/svg/messenger-icon.svg" alt="" class="comment-menu__contact-img">
            </a>
          </li>
          <li class="comment-menu__contact-item">
            <a href="/consultation/chat/dialog/300331/redirect"
              class="comment-menu__contact-link comment-menu__contact-list-last">
              <span class="comment-menu__contact-text">В чате</span>
              <img src="/images/svg/chat-icon.svg" alt="" class="comment-menu__contact-img">
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="comments__wrapper section-wrapper">
      <div class="comment__answer-field-fake">
        <div class="comments__form-fake">
          <textarea class="comments__textarea-fake hide" name="comment" placeholder="Написать сообщение"
            disabled=""></textarea>
          <div class="comments__full-form full-form">
            <form action="/consultation/detail/672684" method="post" class="comments__form">

              <div class="form-error-ajax"></div>
              <input type="hidden" name="sf_consultation_comment_answer[id]" id="sf_consultation_comment_answer_id">
              <input type="hidden" name="sf_consultation_comment_answer[user_id]"
                id="sf_consultation_comment_answer_user_id"> <input type="hidden"
                name="sf_consultation_comment_answer[comment_id]" value="672684"
                id="sf_consultation_comment_answer_comment_id"> <input type="hidden"
                name="sf_consultation_comment_answer[to_answer_id]" id="sf_consultation_comment_answer_to_answer_id">
              <input type="hidden" name="sf_consultation_comment_answer[id]"
                id="sf_consultation_comment_answer_id"><input type="hidden"
                name="sf_consultation_comment_answer[comment_id]" value="672684"
                id="sf_consultation_comment_answer_comment_id"><input type="hidden"
                name="sf_consultation_comment_answer[to_answer_id]"
                id="sf_consultation_comment_answer_to_answer_id"><input type="hidden"
                name="sf_consultation_comment_answer[user_id]" id="sf_consultation_comment_answer_user_id"><input
                type="hidden" name="sf_consultation_comment_answer[highlight]" value="1"
                id="sf_consultation_comment_answer_highlight"><input type="hidden"
                name="sf_consultation_comment_answer[title]" id="sf_consultation_comment_answer_title"><input
                type="hidden" name="sf_consultation_comment_answer[_csrf_token]"
                value="be077783e24fd80a43cb7d2878934bc4" id="sf_consultation_comment_answer__csrf_token"> <input
                type="hidden" class="hide" id="hidden_answer_id" name="hidden_answer_id" value="">
              <input type="text" id="a_phone" name="phone" value="">
              <!-- <input type='hidden' id='answer_form_sent' value="0"> -->
              <div class="full-form__first-screen">
                <textarea placeholder="Написать комментарий..." name="sf_consultation_comment_answer[description]"
                  id="sf_consultation_comment_answer_description" class="full-form__question-input"
                  style="height: 0px;"></textarea>
                <div class="full-form__progress" style="--pseudo-element-width: 0;"></div>
                <div class="full-form__fullscreen-btn">
                  <img src="/images/svg/forms/form-for-answers/zoom-arrows.svg" alt="" class="full-form__zoom-img">
                </div>
                <div class="full-form__zoom-text full-form__hide">В форму</div>
                <div class="full-form__next-btn full-form__next-btn-unactive">Далее</div>
                <input type="submit"
                  class="full-form__confirm-btn-authenticated full-form__confirm-btn-authenticated-unactive hide"
                  value="Отправить">
              </div>
              <div class="full-form__second-screen hide">
                <div class="full-form__input-wrapper full-form__input-wrapper-name">
                  <img src="/images/svg/forms/form-for-answers/user.svg" alt="" class="full-form__input-img">
                  <input type="name" name="sf_consultation_comment_answer[username]"
                    id="sf_consultation_comment_answer_username" class="full-form__name" placeholder="Ваше имя">
                </div>
                <div class="full-form__input-wrapper full-form__input-wrapper-email">
                  <img src="/images/svg/forms/form-for-answers/email.svg" alt="" class="full-form__input-img">
                  <input type="email" name="sf_consultation_comment_answer[email]"
                    id="sf_consultation_comment_answer_email" class="full-form__email" placeholder="Ваша почта">
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
        <li class="comments__item comment">
          <div class="comment__main-comment" id="answer{{ $comment->id }}">
            <a href="{{ $comment->user ? '/profile/' . $comment->user->username : '#answer' . $comment->id }}"
              class="comment__user-link">
              <img
                src="{{ $comment->user ? 'https://puzkarapuz.ru/uploads/sfGuard/avatars/'.$comment->user->avatar.'' : Storage::url('dashboard/profile-default.svg') }}"
                class="comment__avatar-main">
              <span class="comment__user-name">{{ $comment->username }}</span>
              <span class="comment__user-subtitle">{{ $comment->user ? $comment->user->city : '' }}</span>
            </a>
            <div class="comment__menu-btn" data-id="{{ $comment->id }}">
              <svg class="comment__menu-btn-svg">
                <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
              </svg>
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
          <div class="comment__sub-comments" id="answer{{ $comment->id }}">
            @include('consultation.childcomment', ['comments' => $comment->children])
          </div>
        </li>
        @endforeach
        <ul class="comments__list">
          @foreach ($consultation->comments as $comment)
          <li class="comments__item comment">
            <div class="comment__main-comment" id="answer{{ $comment->id }}">
              <a @if($comment->user) href="/profile/{{ $comment->user->username }}"
                id="{{ $comment->user->username }}"@else href="#answer{{ $comment->id }}"@endif
                class="comment__user-link">
                <img
                  src="{{ $comment->user ? 'https://puzkarapuz.ru/uploads/sfGuard/avatars/'.$comment->user->avatar.'' : Storage::url('dashboard/profile-default.svg') }}"
                  class="comment__avatar-main">
                <span class="comment__user-name">{{ $comment->username }}</span>
                <span class="comment__user-subtitle">{{ $comment->user ? $comment->user->city : '' }}</span>
              </a>
              <div class="comment__menu-btn" data-id="{{ $comment->id }}">
                <svg class="comment__menu-btn-svg">
                  <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                  <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
                </svg>
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
            <div class="comment__sub-comments" id="answer{{ $comment->id }}">
              @include('consultation.childcomment', ['comments' => $comment->children])
            </div>
          </li>
          @endforeach

          <div class="comment__paywall paywall">
            <div class="paywall__wrapper">
              <div class="paywall__title">Этот ответ недоступен</div>
              <div class="paywall__subtitle">Возможные причины:</div>
              <ul class="paywall__list">
                <li class="paywall__item">Не оплачена опция чат;</li>
                <li class="paywall__item">Новый вопрос, не относящийся к первоначальному запросу;</li>
                <li class="paywall__item">Ситуация затянулась либо превысила стандартное время консультации.</li>
              </ul>
              <a href="#" class="paywall__button">Разблокировать ответ</a>
            </div>
          </div>


        </ul>
    </div>
  </section>
  <section class="main__description description">
    <div class="description__wrapper section-wrapper">
      <p class="description__small">Консультация врача на форуме предоставляется практикующими экспертами.
        Медицинское образование проверено
        администрацией. Сервис несёт моральную и юридическую ответственность. Консультация дается в справочных
        целях, по итогам консультации, обратитесь к врачу очно, в том числе для выявления возможных
        противопоказаний. По возможности, будьте готовы ответить на дополнительные вопросы, в противном случае
        консультация будет дана на основе указанной информации и иметь предположительный характер. Не занимайтесь
        самолечением, консультация врача онлайн не заменяет очный осмотр.</p>
    </div>
  </section>
</div>
@endsection