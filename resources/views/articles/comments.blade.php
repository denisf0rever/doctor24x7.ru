{{--
@if($article->comments->isNotEmpty())
<div class="main__comments comments">
  <div class="article-comments__wrapper">
    <span class="article-comments__amount">{{ $article->comments->count() }} комментариев</span>
<form action="" class="article-comments__form">
  <textarea class="article-comments__textarea" name="comment" placeholder="Написать комментарий..."></textarea>
  <button class="article-comments__button">Отправить</button>
</form>
<ul class="article-comments__list">
  @foreach($article->comments as $comment)
  <li class="article-comments__item comment">
    <div class="article-comment__main-comment">
      <a href="" class="article-comment__user-link">
        <img src="images/avatar.jpg" alt="" class="article-comment__avatar">
        <span class="article-comment__user-name">{{ Str::substr($comment->name, 0, 1) }} {{ $comment->name }}</span>
        <span class="article-comment__time">7 м</span>
      </a>
      <span class="article-comment__text">@parseLinks({{ $comment->comment }})</span>
      <div class="article-comment__sub-section">
        <a href="" class="article-comment__ansver">Ответить</a>
        <img class="article-comment__likes" src="images/like.svg" alt="">
        <span class="article-comment__likes-amount">97</span>
        <img class="article-comment__dislikes" src="images/like.svg" alt="">
      </div>
    </div>

    <!--if ($comment->children)
						include('articles.subcomments', ['comments' => $comment->children])
						endif -->
  </li>
  @endforeach
</ul>
</div>
</div>
@endif
--}}
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
        <a href="/chat/consultant/" target="_blank" class="comment-menu__contact-link comment-menu__contact-list-last">
          <span class="comment-menu__contact-text">В чате</span>
          <img src="{{ Storage::url('common/question/chat.svg') }}" alt="" class="comment-menu__contact-img">
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="comments article-comments__wrapper">
  <div class="comments__wrapper">
    <div class="comment__answer-field-fake">
      <div class="comments__form-fake">
        <textarea class="comments__textarea-fake hide" name="description" placeholder="Написать сообщение"
          disabled=""></textarea>
        <div class="comments__full-form full-form">
          <form action="{{ route('consultation.answer') }}" method="post" class="comments__form">
            @csrf
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
      @foreach($article->comments as $comment)
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
              '<div class="comment__avatar-main">' . e(Str::substr($comment->name, 0, 1)) . '</div>'
              !!}
              <span class="comment__user-name"> {{ $comment->name }}</span>
              <span class="comment__user-subtitle">7м</span>
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
            <p itemprop="text">@parseLinks($comment->comment)</p>
          </span>
          <div class="comment__answer-field-fake">
            <div class="comments__form-fake" data-id="{{ $comment->id }}">
              <span class="comment__answ">Ответить</span>
              <div class="comment__likes-wrapper">
                <a href="{{ route('consultation.like', $comment->id) }}" class="comment__like-link">
                  <div class="comment__like-img">
                    <svg viewBox="0 0 24 24" width="16" height="16">
                      <use xlink:href="#like_filled_2ff7--react"></use>
                    </svg>
                  </div>
                </a>
                <div class="comment__like-amount">{{ $comment->likes_count }}</div>
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
      </li>
      @endforeach


    </ul>
  </div>
</div>