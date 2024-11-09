@extends('app')
@section('title', $consultation->title .' — консультируют врачи на форуме')
@section('description', 'Консультация врача, вопрос: ' . $consultation->title)
@section('keywords', '')
@section('canonical', 'consultation/detail/'. $consultation->id)

@section('content')
<main class="main">
  <div class="main__wrapper-main container">
    <div class="main__content">
      <section class="main__question question">
        <div class="question__wrapper section-wrapper">
          <h1 class="question__title">{{ $consultation->title }}</h1>
          <ul class="question__discussion-list">
            <li class="question__discussion-item">
              <a href="/" class="question__discussion-link">Сперма</a>
            </li>
          </ul>
          <div class="question__text">
            <p>{{ $consultation->description }}</p>
          </div>
          <div class="question__icons">
            <div class="question__icon">
              <img src="/" alt="" class="question__icon-img question__icon-small question__icon-doc-img">
              <div class="question__icon-value">4</div>
            </div>
            <a href="" class="question__icon question__icon-big question__icon-link">
              <img src="/" alt="" class="question__icon-img question__icon-calendar-img">
              <div class="question__icon-value">29.09.2024 20:20</div>
            </a>
            <div class="question__icon question__icon-link question__icon-last custom-select">
              <img src="/" alt="" class="question__icon-img question__icon-actions-img">
              <div class="question__icon-value">Действия</div>
              <div class="question__select-wrapper custom-select__wrapper custom-select__hide">
                <ul class="question__select-list">
                  <li class="question__option">
                    <a href="/" class="question__link">
                      Удалить
                    </a>
                  </li>
                  <li class="question__option">
                    <a href="/" class="question__link">
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
          <a href="/" class="ask-question__button">
            Задать вопрос
          </a>
        </div>
      </section>

      <section class="contents">
        <div class="contents__wrapper section-wrapper">
          <div class="contents__title">Содержание консультации</div>
          <ul class="contents__list">
            <li class="contents__item">
              <span class="contents__nubmer">1.</span>
              <a href="/" class="contents__text-link">
                <span class="contents__text">Есть вторичные половые признаки, но нет спермы в 14 лет</span></a>
              <a href="/" class="contents__delete">
                <img src="/" alt="" class="contents__img">
              </a>
            </li>
            <li class="contents__item">
              <span class="contents__nubmer">1.</span>
              <a href="/" class="contents__text-link">
                <span class="contents__text">Есть вторичные половые признаки, но нет спермы в 14 лет</span></a>
              <a href="/" class="contents__delete">
                <img src="/" alt="" class="contents__img">
              </a>
            </li>
            <li class="contents__item">
              <span class="contents__nubmer">1.</span>
              <a href="/" class="contents__text-link">
                <span class="contents__text">Есть вторичные половые признаки, но нет спермы в 14 лет</span></a>
              <a href="/" class="contents__delete">
                <img src="/" alt="" class="contents__img">
              </a>
            </li>
            <li class="contents__item">
              <span class="contents__nubmer">1.</span>
              <a href="/" class="contents__text-link">
                <span class="contents__text">Есть вторичные половые признаки, но нет спермы в 14 лет</span></a>
              <a href="/" class="contents__delete">
                <img src="/" alt="" class="contents__img">
              </a>
            </li>
            <li class="contents__item">
              <span class="contents__nubmer">1.</span>
              <a href="/" class="contents__text-link">
                <span class="contents__text">Есть вторичные половые признаки, но нет спермы в 14 лет</span></a>
              <a href="/" class="contents__delete">
                <img src="/" alt="" class="contents__img">
              </a>
            </li>
          </ul>
        </div>
      </section>

      <div class="booking-fail">
        <div class="booking-fail__wrapper">
          <span class="booking-fail__text">
            К сожалению, на этот вопрос уже готовятся ответы. Ваш ответ будет тарифицироваться согласно договоренности.
          </span>
        </div>
      </div>

      <section class="main__experts-list experts-list">
        <h2 class="experts-list__title">Ответы врачей</h2>
        <div class="experts-list__wrapper section-wrapper">
          <a href="/profile/elenamihailovna" class="experts-list__expert">
            <img src="" alt="" class="experts-list__expert-img">
            <div class="experts-list__expert-fullname">Войцехович Елена Михайловна</div>
            <div class="experts-list__expert-status">Врач</div>
          </a>
          <a href="#elenamihailovna" class="experts-list__anchor">
            <img src="" alt="" class="experts-list__anchor-img">
          </a>
        </div>
      </section>

      <section class="main__comments comments">
        <div class="comment__menu comment-menu comment-menu__hide">
          <div class="comment-menu__wrapper">
            <div class="comment-menu__header">Меню</div>
            <img src="/images/svg/close.svg" class="comment-menu__hide-button">
            <div class="comment-menu__buttons">

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
                    name="sf_consultation_comment_answer[to_answer_id]"
                    id="sf_consultation_comment_answer_to_answer_id"> <input type="hidden"
                    name="sf_consultation_comment_answer[id]" id="sf_consultation_comment_answer_id"><input
                    type="hidden" name="sf_consultation_comment_answer[comment_id]" value="672684"
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
                      <input type="submit" class="full-form__confirm-btn full-form__confirm-btn-unactive"
                        value="Отправить">
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
              <div class="comment__main-comment" id="answer300328">
                <a href="/profile/elenamihailovna" class="comment__user-link" id="elenamihailovna">
                  <img src="//puzkarapuz.ru/uploads/sfGuard/avatars/{{ $comment->user->avatar }}"
                    class="comment__avatar-main">
                  <span class="comment__user-name">{{ $comment->username }}</span>
                  <span class="comment__user-subtitle">{{ $comment->user->city }}</span>
                </a>
                <div class="comment__menu-btn" data-id="300328">
                  <svg class="comment__menu-btn-svg">
                    <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                    <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                    <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
                  </svg>
                </div>

                <span class="comment__text" itemprop="suggestedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                  <p>Здравствуйте, Арина </p>
                  <p itemprop="text">{{ $comment->description }}</p>

                </span>
                <div class="comment__answer-field-fake">
                  <div class="comments__form-fake" data-id="{{ $comment->id }}">
                    <span class="comment__answ">Ответить</span>
                    <div class="comment__likes-wrapper">
                      <a href="{{ route('consultation.like', $comment->id) }}" class="comment__like-link">
                        <div class="comment__like-img">
                          <!-- <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                              <path d="M498.323,297.032c0-7.992-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-27.037-21.996-49.032-49.032-49.032H330.206c11.434-29.24,17.665-64.728,17.665-101.419c0-23.266-18.928-42.194-42.194-42.194
                                  s-42.193,18.928-42.193,42.194c0,83.161-58.012,145.389-144.355,154.844c-0.592,0.065-1.159,0.197-1.7,0.38
                                  C111.752,235.129,104.235,232,96,232H32c-17.645,0-32,14.355-32,32v152c0,17.645,14.355,32,32,32h64
                                  c9.763,0,18.513-4.4,24.388-11.315c20.473,2.987,33.744,9.534,46.568,15.882c16.484,8.158,33.53,16.595,63.496,16.595h191.484
                                  c27.037,0,49.032-21.996,49.032-49.032c0-7.991-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-7.991-1.901-15.683-5.553-22.635C491.126,326.766,498.323,312.507,498.323,297.032z M465.561,325.727H452c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h11.958c3.061,5.1,4.687,10.847,4.687,16.854c0,12.106-6.56,23.096-17.163,28.919h-14.548c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h13.481c2.973,5.044,4.553,10.71,4.553,16.629c0,18.214-14.818,33.032-33.032,33.032H230.452
                                  c-26.223,0-40.207-6.921-56.398-14.935c-12.358-6.117-26.235-12.961-46.56-16.594c0.326-1.83,0.506-3.71,0.506-5.632V295
                                  c0-4.418-3.582-8-8-8s-8,3.582-8,8v121c0,8.822-7.178,16-16,16H32c-8.822,0-16-7.178-16-16V264c0-8.822,7.178-16,16-16h64
                                  c8.822,0,16,7.178,16,16c0,4.418,3.582,8,8,8s8-3.582,8-8c0-3.105-0.453-6.105-1.282-8.947
                                  c44.778-6.106,82.817-25.325,110.284-55.813c27.395-30.408,42.481-70.967,42.481-114.208c0-14.443,11.75-26.194,26.193-26.194
                                  c14.443,0,26.194,11.75,26.194,26.194c0,39.305-7.464,76.964-21.018,106.04c-1.867,4.004-0.134,8.764,3.871,10.631
                                  c1.304,0.608,2.687,0.828,4.025,0.719c0.201,0.015,0.401,0.031,0.605,0.031h143.613c18.214,0,33.032,14.818,33.032,33.032
                                  c0,11.798-6.228,22.539-16.359,28.469h-14.975c-4.418,0-8,3.582-8,8s3.582,8,8,8h12.835c3.149,5.155,4.822,10.984,4.822,17.079
                                  C482.323,308.985,475.927,319.848,465.561,325.727z" />
                              <path
                                d="M422.384,325.727h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S426.802,325.727,422.384,325.727z" />
                              <path
                                d="M436.934,263.953h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S441.352,263.953,436.934,263.953z" />
                              <path
                                d="M407.833,387.5h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S412.252,387.5,407.833,387.5z" />
                              <path
                                d="M80,264c-8.822,0-16,7.178-16,16s7.178,16,16,16s16-7.178,16-16S88.822,264,80,264z" />
                            </g>
                          </svg> -->
                        </div>
                      </a>
                      <div class="comment__like-amount">{{ $comment->like->likes ? $comment->like->likes : '' }}</div>
                      <a href="{{ route('consultation.dislike', $comment->id) }}" class="comment__dislike-link">
                        <div class="comment__dislike-img">
                          <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                              <path d="M498.323,297.032c0-7.992-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-27.037-21.996-49.032-49.032-49.032H330.206c11.434-29.24,17.665-64.728,17.665-101.419c0-23.266-18.928-42.194-42.194-42.194
                                  s-42.193,18.928-42.193,42.194c0,83.161-58.012,145.389-144.355,154.844c-0.592,0.065-1.159,0.197-1.7,0.38
                                  C111.752,235.129,104.235,232,96,232H32c-17.645,0-32,14.355-32,32v152c0,17.645,14.355,32,32,32h64
                                  c9.763,0,18.513-4.4,24.388-11.315c20.473,2.987,33.744,9.534,46.568,15.882c16.484,8.158,33.53,16.595,63.496,16.595h191.484
                                  c27.037,0,49.032-21.996,49.032-49.032c0-7.991-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-7.991-1.901-15.683-5.553-22.635C491.126,326.766,498.323,312.507,498.323,297.032z M465.561,325.727H452c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h11.958c3.061,5.1,4.687,10.847,4.687,16.854c0,12.106-6.56,23.096-17.163,28.919h-14.548c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h13.481c2.973,5.044,4.553,10.71,4.553,16.629c0,18.214-14.818,33.032-33.032,33.032H230.452
                                  c-26.223,0-40.207-6.921-56.398-14.935c-12.358-6.117-26.235-12.961-46.56-16.594c0.326-1.83,0.506-3.71,0.506-5.632V295
                                  c0-4.418-3.582-8-8-8s-8,3.582-8,8v121c0,8.822-7.178,16-16,16H32c-8.822,0-16-7.178-16-16V264c0-8.822,7.178-16,16-16h64
                                  c8.822,0,16,7.178,16,16c0,4.418,3.582,8,8,8s8-3.582,8-8c0-3.105-0.453-6.105-1.282-8.947
                                  c44.778-6.106,82.817-25.325,110.284-55.813c27.395-30.408,42.481-70.967,42.481-114.208c0-14.443,11.75-26.194,26.193-26.194
                                  c14.443,0,26.194,11.75,26.194,26.194c0,39.305-7.464,76.964-21.018,106.04c-1.867,4.004-0.134,8.764,3.871,10.631
                                  c1.304,0.608,2.687,0.828,4.025,0.719c0.201,0.015,0.401,0.031,0.605,0.031h143.613c18.214,0,33.032,14.818,33.032,33.032
                                  c0,11.798-6.228,22.539-16.359,28.469h-14.975c-4.418,0-8,3.582-8,8s3.582,8,8,8h12.835c3.149,5.155,4.822,10.984,4.822,17.079
                                  C482.323,308.985,475.927,319.848,465.561,325.727z" />
                              <path
                                d="M422.384,325.727h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S426.802,325.727,422.384,325.727z" />
                              <path
                                d="M436.934,263.953h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S441.352,263.953,436.934,263.953z" />
                              <path
                                d="M407.833,387.5h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S412.252,387.5,407.833,387.5z" />
                              <path
                                d="M80,264c-8.822,0-16,7.178-16,16s7.178,16,16,16s16-7.178,16-16S88.822,264,80,264z" />
                            </g>
                          </svg>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

              </div>


              <div class="comment__sub-comments" id="answer300330">
                <div class="comment__sub-comment" id="answer300330">
                  <a href="#" class="comment__user-link">
                    <img src="/images/svg/profile-comment.svg" alt="" class="comment__avatar-sub">
                    <span class="comment__user-name">Арина </span>
                    <span class="comment__user-subtitle">2024-09-29 20:26:14</span>
                  </a>
                  <span class="comment__text">
                    <p><a href="#answer300328">Елена Войцехович</a>, Гепатитами б с Тоже ?</p>
                  </span>

                  <div class="comment__answer-field-fake">
                    <div class="comments__form-fake" data-id="300330">
                      <span class="comment__answ">Ответить</span>
                      <div class="comment__likes-wrapper">
                        <a href="{{ route('consultation.like', $comment->id) }}" class="comment__like-link">
                          <div class="comment__like-img">
                            <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1"
                              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              viewBox="0 0 512 512" xml:space="preserve">
                              <g>
                                <path d="M498.323,297.032c0-7.992-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-27.037-21.996-49.032-49.032-49.032H330.206c11.434-29.24,17.665-64.728,17.665-101.419c0-23.266-18.928-42.194-42.194-42.194
                                  s-42.193,18.928-42.193,42.194c0,83.161-58.012,145.389-144.355,154.844c-0.592,0.065-1.159,0.197-1.7,0.38
                                  C111.752,235.129,104.235,232,96,232H32c-17.645,0-32,14.355-32,32v152c0,17.645,14.355,32,32,32h64
                                  c9.763,0,18.513-4.4,24.388-11.315c20.473,2.987,33.744,9.534,46.568,15.882c16.484,8.158,33.53,16.595,63.496,16.595h191.484
                                  c27.037,0,49.032-21.996,49.032-49.032c0-7.991-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-7.991-1.901-15.683-5.553-22.635C491.126,326.766,498.323,312.507,498.323,297.032z M465.561,325.727H452c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h11.958c3.061,5.1,4.687,10.847,4.687,16.854c0,12.106-6.56,23.096-17.163,28.919h-14.548c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h13.481c2.973,5.044,4.553,10.71,4.553,16.629c0,18.214-14.818,33.032-33.032,33.032H230.452
                                  c-26.223,0-40.207-6.921-56.398-14.935c-12.358-6.117-26.235-12.961-46.56-16.594c0.326-1.83,0.506-3.71,0.506-5.632V295
                                  c0-4.418-3.582-8-8-8s-8,3.582-8,8v121c0,8.822-7.178,16-16,16H32c-8.822,0-16-7.178-16-16V264c0-8.822,7.178-16,16-16h64
                                  c8.822,0,16,7.178,16,16c0,4.418,3.582,8,8,8s8-3.582,8-8c0-3.105-0.453-6.105-1.282-8.947
                                  c44.778-6.106,82.817-25.325,110.284-55.813c27.395-30.408,42.481-70.967,42.481-114.208c0-14.443,11.75-26.194,26.193-26.194
                                  c14.443,0,26.194,11.75,26.194,26.194c0,39.305-7.464,76.964-21.018,106.04c-1.867,4.004-0.134,8.764,3.871,10.631
                                  c1.304,0.608,2.687,0.828,4.025,0.719c0.201,0.015,0.401,0.031,0.605,0.031h143.613c18.214,0,33.032,14.818,33.032,33.032
                                  c0,11.798-6.228,22.539-16.359,28.469h-14.975c-4.418,0-8,3.582-8,8s3.582,8,8,8h12.835c3.149,5.155,4.822,10.984,4.822,17.079
                                  C482.323,308.985,475.927,319.848,465.561,325.727z" />
                                <path
                                  d="M422.384,325.727h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S426.802,325.727,422.384,325.727z" />
                                <path
                                  d="M436.934,263.953h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S441.352,263.953,436.934,263.953z" />
                                <path
                                  d="M407.833,387.5h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S412.252,387.5,407.833,387.5z" />
                                <path
                                  d="M80,264c-8.822,0-16,7.178-16,16s7.178,16,16,16s16-7.178,16-16S88.822,264,80,264z" />
                              </g>
                            </svg>
                          </div>
                        </a>
                        <div class="comment__like-amount">10</div>
                        <a href="/" class="comment__dislike-link">
                          <div class="comment__dislike-img">
                            <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1"
                              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              viewBox="0 0 512 512" xml:space="preserve">
                              <g>
                                <path d="M498.323,297.032c0-7.992-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-27.037-21.996-49.032-49.032-49.032H330.206c11.434-29.24,17.665-64.728,17.665-101.419c0-23.266-18.928-42.194-42.194-42.194
                                  s-42.193,18.928-42.193,42.194c0,83.161-58.012,145.389-144.355,154.844c-0.592,0.065-1.159,0.197-1.7,0.38
                                  C111.752,235.129,104.235,232,96,232H32c-17.645,0-32,14.355-32,32v152c0,17.645,14.355,32,32,32h64
                                  c9.763,0,18.513-4.4,24.388-11.315c20.473,2.987,33.744,9.534,46.568,15.882c16.484,8.158,33.53,16.595,63.496,16.595h191.484
                                  c27.037,0,49.032-21.996,49.032-49.032c0-7.991-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-7.991-1.901-15.683-5.553-22.635C491.126,326.766,498.323,312.507,498.323,297.032z M465.561,325.727H452c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h11.958c3.061,5.1,4.687,10.847,4.687,16.854c0,12.106-6.56,23.096-17.163,28.919h-14.548c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h13.481c2.973,5.044,4.553,10.71,4.553,16.629c0,18.214-14.818,33.032-33.032,33.032H230.452
                                  c-26.223,0-40.207-6.921-56.398-14.935c-12.358-6.117-26.235-12.961-46.56-16.594c0.326-1.83,0.506-3.71,0.506-5.632V295
                                  c0-4.418-3.582-8-8-8s-8,3.582-8,8v121c0,8.822-7.178,16-16,16H32c-8.822,0-16-7.178-16-16V264c0-8.822,7.178-16,16-16h64
                                  c8.822,0,16,7.178,16,16c0,4.418,3.582,8,8,8s8-3.582,8-8c0-3.105-0.453-6.105-1.282-8.947
                                  c44.778-6.106,82.817-25.325,110.284-55.813c27.395-30.408,42.481-70.967,42.481-114.208c0-14.443,11.75-26.194,26.193-26.194
                                  c14.443,0,26.194,11.75,26.194,26.194c0,39.305-7.464,76.964-21.018,106.04c-1.867,4.004-0.134,8.764,3.871,10.631
                                  c1.304,0.608,2.687,0.828,4.025,0.719c0.201,0.015,0.401,0.031,0.605,0.031h143.613c18.214,0,33.032,14.818,33.032,33.032
                                  c0,11.798-6.228,22.539-16.359,28.469h-14.975c-4.418,0-8,3.582-8,8s3.582,8,8,8h12.835c3.149,5.155,4.822,10.984,4.822,17.079
                                  C482.323,308.985,475.927,319.848,465.561,325.727z" />
                                <path
                                  d="M422.384,325.727h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S426.802,325.727,422.384,325.727z" />
                                <path
                                  d="M436.934,263.953h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S441.352,263.953,436.934,263.953z" />
                                <path
                                  d="M407.833,387.5h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S412.252,387.5,407.833,387.5z" />
                                <path
                                  d="M80,264c-8.822,0-16,7.178-16,16s7.178,16,16,16s16-7.178,16-16S88.822,264,80,264z" />
                              </g>
                            </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="comment__menu-btn" data-id="300330">
                    <svg class="comment__menu-btn-svg">
                      <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                      <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                      <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
                    </svg>
                  </div>

                </div>



              </div>

            </li>
            @endforeach

            <li class="comments__item comment">

              <div class="comment__main-comment" id="answer300329">
                <a href="#" class="comment__user-link">
                  <img src="/images/svg/profile-comment.svg" alt="" class="comment__avatar-sub">
                  <span class="comment__user-name">Арина </span>
                  <span class="comment__user-subtitle">2024-09-29 20:22:23</span>
                </a>
                <span class="comment__text">
                  <p>Если бы с папой было бы что то не впорядке я возможно ли таким образом? </p>
                </span>

                <div class="comment__answer-field-fake">
                  <div class="comments__form-fake" data-id="300329">
                    <span class="comment__answ">Ответить</span>
                    <div class="comment__likes-wrapper">
                      <a href="{{ route('consultation.like', $comment->id) }}" class="comment__like-link">
                        <div class="comment__like-img">
                          <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                              <path d="M498.323,297.032c0-7.992-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-27.037-21.996-49.032-49.032-49.032H330.206c11.434-29.24,17.665-64.728,17.665-101.419c0-23.266-18.928-42.194-42.194-42.194
                                  s-42.193,18.928-42.193,42.194c0,83.161-58.012,145.389-144.355,154.844c-0.592,0.065-1.159,0.197-1.7,0.38
                                  C111.752,235.129,104.235,232,96,232H32c-17.645,0-32,14.355-32,32v152c0,17.645,14.355,32,32,32h64
                                  c9.763,0,18.513-4.4,24.388-11.315c20.473,2.987,33.744,9.534,46.568,15.882c16.484,8.158,33.53,16.595,63.496,16.595h191.484
                                  c27.037,0,49.032-21.996,49.032-49.032c0-7.991-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-7.991-1.901-15.683-5.553-22.635C491.126,326.766,498.323,312.507,498.323,297.032z M465.561,325.727H452c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h11.958c3.061,5.1,4.687,10.847,4.687,16.854c0,12.106-6.56,23.096-17.163,28.919h-14.548c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h13.481c2.973,5.044,4.553,10.71,4.553,16.629c0,18.214-14.818,33.032-33.032,33.032H230.452
                                  c-26.223,0-40.207-6.921-56.398-14.935c-12.358-6.117-26.235-12.961-46.56-16.594c0.326-1.83,0.506-3.71,0.506-5.632V295
                                  c0-4.418-3.582-8-8-8s-8,3.582-8,8v121c0,8.822-7.178,16-16,16H32c-8.822,0-16-7.178-16-16V264c0-8.822,7.178-16,16-16h64
                                  c8.822,0,16,7.178,16,16c0,4.418,3.582,8,8,8s8-3.582,8-8c0-3.105-0.453-6.105-1.282-8.947
                                  c44.778-6.106,82.817-25.325,110.284-55.813c27.395-30.408,42.481-70.967,42.481-114.208c0-14.443,11.75-26.194,26.193-26.194
                                  c14.443,0,26.194,11.75,26.194,26.194c0,39.305-7.464,76.964-21.018,106.04c-1.867,4.004-0.134,8.764,3.871,10.631
                                  c1.304,0.608,2.687,0.828,4.025,0.719c0.201,0.015,0.401,0.031,0.605,0.031h143.613c18.214,0,33.032,14.818,33.032,33.032
                                  c0,11.798-6.228,22.539-16.359,28.469h-14.975c-4.418,0-8,3.582-8,8s3.582,8,8,8h12.835c3.149,5.155,4.822,10.984,4.822,17.079
                                  C482.323,308.985,475.927,319.848,465.561,325.727z" />
                              <path
                                d="M422.384,325.727h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S426.802,325.727,422.384,325.727z" />
                              <path
                                d="M436.934,263.953h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S441.352,263.953,436.934,263.953z" />
                              <path
                                d="M407.833,387.5h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S412.252,387.5,407.833,387.5z" />
                              <path
                                d="M80,264c-8.822,0-16,7.178-16,16s7.178,16,16,16s16-7.178,16-16S88.822,264,80,264z" />
                            </g>
                          </svg>
                        </div>
                      </a>
                      <div class="comment__like-amount">{{ $comment->like }}</div>
                      <a href="/" class="comment__dislike-link">
                        <div class="comment__dislike-img">
                          <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                              <path d="M498.323,297.032c0-7.992-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-27.037-21.996-49.032-49.032-49.032H330.206c11.434-29.24,17.665-64.728,17.665-101.419c0-23.266-18.928-42.194-42.194-42.194
                                  s-42.193,18.928-42.193,42.194c0,83.161-58.012,145.389-144.355,154.844c-0.592,0.065-1.159,0.197-1.7,0.38
                                  C111.752,235.129,104.235,232,96,232H32c-17.645,0-32,14.355-32,32v152c0,17.645,14.355,32,32,32h64
                                  c9.763,0,18.513-4.4,24.388-11.315c20.473,2.987,33.744,9.534,46.568,15.882c16.484,8.158,33.53,16.595,63.496,16.595h191.484
                                  c27.037,0,49.032-21.996,49.032-49.032c0-7.991-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
                                  c0-7.991-1.901-15.683-5.553-22.635C491.126,326.766,498.323,312.507,498.323,297.032z M465.561,325.727H452c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h11.958c3.061,5.1,4.687,10.847,4.687,16.854c0,12.106-6.56,23.096-17.163,28.919h-14.548c-4.418,0-8,3.582-8,8
                                  s3.582,8,8,8h13.481c2.973,5.044,4.553,10.71,4.553,16.629c0,18.214-14.818,33.032-33.032,33.032H230.452
                                  c-26.223,0-40.207-6.921-56.398-14.935c-12.358-6.117-26.235-12.961-46.56-16.594c0.326-1.83,0.506-3.71,0.506-5.632V295
                                  c0-4.418-3.582-8-8-8s-8,3.582-8,8v121c0,8.822-7.178,16-16,16H32c-8.822,0-16-7.178-16-16V264c0-8.822,7.178-16,16-16h64
                                  c8.822,0,16,7.178,16,16c0,4.418,3.582,8,8,8s8-3.582,8-8c0-3.105-0.453-6.105-1.282-8.947
                                  c44.778-6.106,82.817-25.325,110.284-55.813c27.395-30.408,42.481-70.967,42.481-114.208c0-14.443,11.75-26.194,26.193-26.194
                                  c14.443,0,26.194,11.75,26.194,26.194c0,39.305-7.464,76.964-21.018,106.04c-1.867,4.004-0.134,8.764,3.871,10.631
                                  c1.304,0.608,2.687,0.828,4.025,0.719c0.201,0.015,0.401,0.031,0.605,0.031h143.613c18.214,0,33.032,14.818,33.032,33.032
                                  c0,11.798-6.228,22.539-16.359,28.469h-14.975c-4.418,0-8,3.582-8,8s3.582,8,8,8h12.835c3.149,5.155,4.822,10.984,4.822,17.079
                                  C482.323,308.985,475.927,319.848,465.561,325.727z" />
                              <path
                                d="M422.384,325.727h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S426.802,325.727,422.384,325.727z" />
                              <path
                                d="M436.934,263.953h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S441.352,263.953,436.934,263.953z" />
                              <path
                                d="M407.833,387.5h-8.525c-4.418,0-8,3.582-8,8s3.582,8,8,8h8.525c4.418,0,8-3.582,8-8S412.252,387.5,407.833,387.5z" />
                              <path
                                d="M80,264c-8.822,0-16,7.178-16,16s7.178,16,16,16s16-7.178,16-16S88.822,264,80,264z" />
                            </g>
                          </svg>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="comment__menu-btn" data-id="300329">
                  <svg class="comment__menu-btn-svg">
                    <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
                    <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
                    <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
                  </svg>
                </div>

              </div>

              <div class="comment__sub-comments" id="answer300331">
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
              </div>


            </li>


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
    <aside class="main__sidebar">
      <section class="admin-control main__admin-control">
        <div class="admin-control__wrapper section-wrapper">
          <ul class="admin-control__list">
            <li class="admin-control__item">
              <a href="/" class="admin-control__link">Требует вашего внимания: (1)</a>
            </li>
            <li class="admin-control__item">
              <a href="/" class="admin-control__link"><b>Архив консультаций</b></a>
            </li>
            <li class="admin-control__item">
              <a href="/" class="admin-control__link">Неотвеченые вопросы (2093) </a>
            </li>
            <li class="admin-control__item">
              <a href="/" class="admin-control__link">Панель </a>
            </li>
            <li class="admin-control__item">
              <a href="/" class="admin-control__link">Сбросить кеш </a>
            </li>
            <li class="admin-control__item">
              <a href="/" class="admin-control__link">Выйти </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="main__consultation-sidebar consultation-sidebar">
        <div class="consultation-sidebar__wrapper section-wrapper">
          <div class="consultation-sidebar__top">
            <div class="consultation-sidebar__title">Консультации</div>
            <img src="/" alt="" class="consultation-sidebar__img">
          </div>
          <ul class="consultation-sidebar__list">
            <li class="consultation-sidebar__item">
              <a href="" class="consultation-sidebar__problem-title">Сильное переедание</a>
              <span class="consultation-sidebar__problem-info">Ожидание 22 минуты - 5 ответов
              </span>
            </li>
            <li class="consultation-sidebar__item">
              <a href="" class="consultation-sidebar__problem-title">Сильное переедание</a>
              <span class="consultation-sidebar__problem-info">Ожидание 22 минуты - 5 ответов
              </span>
            </li>
            <li class="consultation-sidebar__item">
              <a href="" class="consultation-sidebar__problem-title">Сильное переедание</a>
              <span class="consultation-sidebar__problem-info">Ожидание 22 минуты - 5 ответов
              </span>
            </li>
            <li class="consultation-sidebar__item">
              <a href="" class="consultation-sidebar__problem-title">Здравствуйте, у ребёнка пищевая аллергия на
                пшеничную муку и рис. Нам нужно составить меню для питания в школе. Ребёнку 9 лет.</a>
              <span class="consultation-sidebar__problem-info">Ожидание 22 минуты - 5 ответов
              </span>
            </li>
            <li class="consultation-sidebar__item">
              <a href="" class="consultation-sidebar__problem-title">Сильное переедание</a>
              <span class="consultation-sidebar__problem-info">Ожидание 22 минуты - 5 ответов
              </span>
            </li>
            <li class="consultation-sidebar__item">
              <a href="" class="consultation-sidebar__problem-title">Сильное переедание</a>
              <span class="consultation-sidebar__problem-info">Ожидание 22 минуты - 5 ответов
              </span>
            </li>
            <li class="consultation-sidebar__item">
              <a href="" class="consultation-sidebar__problem-title">Сильное переедание</a>
              <span class="consultation-sidebar__problem-info">Ожидание 22 минуты - 5 ответов
              </span>
            </li>
          </ul>
        </div>
      </section>
      <section class="form-select">
        <div class="form-select__select-wrapper custom-select section-wrapper">
          <span class="form-select__status-title" for="status">Специализации</span>
          <img src="/images/svg/elements/selector/expand-more.svg" alt=""
            class="form-select__status-arrow custom-select__arrow">
          <div class="form-select__status-select-wrapper custom-select__wrapper custom-select__hide">
            <ul id="status" class="form-select__status-select">
              <li class="form-select__status-option" value="allergology"><a href="/consultation/allergology/"
                  class="form-select__link">Аллерголог</a></li>
              <li class="form-select__status-option" value="andrology"><a href="/consultation/andrology/"
                  class="form-select__link">Андролог</a></li>
              <li class="form-select__status-option" value="vaccination"><a href="/consultation/vaccination/"
                  class="form-select__link">Вакцинолог</a></li>
              <li class="form-select__status-option" value="venereologist"><a href="/consultation/venereologist/"
                  class="form-select__link">Венеролог</a></li>
              <li class="form-select__status-option" value="gastro"><a href="/consultation/gastro/"
                  class="form-select__link">Гастроэнтеролог</a></li>
              <li class="form-select__status-option" value="hematologist"><a href="/consultation/hematologist/"
                  class="form-select__link">Гематолог</a></li>
              <li class="form-select__status-option" value="hemostasis"><a href="/consultation/hemostasis/"
                  class="form-select__link">Гемостазиолог</a></li>
              <li class="form-select__status-option" value="geneticist"><a href="/consultation/geneticist/"
                  class="form-select__link">Генетик</a></li>
              <li class="form-select__status-option" value="gynaecology"><a href="/consultation/gynaecology/"
                  class="form-select__link">Гинеколог</a></li>
              <li class="form-select__status-option" value="gv"><a href="/consultation/gv/"
                  class="form-select__link">Грудное вскармливание</a></li>
              <li class="form-select__status-option" value="defectolog"><a href="/consultation/defectolog/"
                  class="form-select__link">Дефектолог</a></li>
              <li class="form-select__status-option" value="iv"><a href="/consultation/iv/"
                  class="form-select__link">Искусственное вскармливание</a></li>
              <li class="form-select__status-option" value="dermatology"><a href="/consultation/dermatology/"
                  class="form-select__link">Дерматолог</a></li>
              <li class="form-select__status-option" value="cosmetolog"><a href="/consultation/cosmetolog/"
                  class="form-select__link">Косметолог</a></li>
              <li class="form-select__status-option" value="dietology"><a href="/consultation/dietology/"
                  class="form-select__link">Диетолог</a></li>
              <li class="form-select__status-option" value="immunolog"><a href="/consultation/immunolog/"
                  class="form-select__link">Иммунолог</a></li>
              <li class="form-select__status-option" value="infection"><a href="/consultation/infection/"
                  class="form-select__link">Инфекционист</a></li>
              <li class="form-select__status-option" value="cardiology"><a href="/consultation/cardiology/"
                  class="form-select__link">Кардиолог</a></li>
              <li class="form-select__status-option" value="kinesiologist"><a href="/consultation/kinesiologist/"
                  class="form-select__link">Кинезиолог</a></li>
              <li class="form-select__status-option" value="logopaedics"><a href="/consultation/logopaedics/"
                  class="form-select__link">Логопед</a></li>
              <li class="form-select__status-option" value="mammology"><a href="/consultation/mammology/"
                  class="form-select__link">Маммолог</a></li>
              <li class="form-select__status-option" value="narcology"><a href="/consultation/narcology/"
                  class="form-select__link">Нарколог</a></li>
              <li class="form-select__status-option" value="neurology"><a href="/consultation/neurology/"
                  class="form-select__link">Невролог</a></li>
              <li class="form-select__status-option" value="neurosurgeon"><a href="/consultation/neurosurgeon/"
                  class="form-select__link">Нейрохирург</a></li>
              <li class="form-select__status-option" value="nutritionist"><a href="/consultation/nutritionist/"
                  class="form-select__link">Нутрициолог</a></li>
              <li class="form-select__status-option" value="nephrologist"><a href="/consultation/nephrologist/"
                  class="form-select__link">Нефролог</a></li>
              <li class="form-select__status-option" value="orthopedist"><a href="/consultation/orthopedist/"
                  class="form-select__link">Ортопед</a></li>
              <li class="form-select__status-option" value="onkology"><a href="/consultation/onkology/"
                  class="form-select__link">Онколог</a></li>
              <li class="form-select__status-option" value="otolaryngology"><a href="/consultation/otolaryngology/"
                  class="form-select__link">Отоларинголог</a></li>
              <li class="form-select__status-option" value="oftalmology"><a href="/consultation/oftalmology/"
                  class="form-select__link">Офтальмолог</a></li>
              <li class="form-select__status-option" value="pediatrics"><a href="/consultation/pediatrics/"
                  class="form-select__link">Педиатр</a></li>
              <li class="form-select__status-option" value="proctology"><a href="/consultation/proctology/"
                  class="form-select__link">Проктолог</a></li>
              <li class="form-select__status-option" value="psychiatry"><a href="/consultation/psychiatry/"
                  class="form-select__link">Психиатр</a></li>
              <li class="form-select__status-option" value="psiholog"><a href="/consultation/psiholog/"
                  class="form-select__link">Психолог</a></li>
              <li class="form-select__status-option" value="pulmonology"><a href="/consultation/pulmonology/"
                  class="form-select__link">Пульмонолог</a></li>
              <li class="form-select__status-option" value="decrypt_analiz"><a href="/consultation/decrypt_analiz/"
                  class="form-select__link">Расшифровать анализ</a></li>
              <li class="form-select__status-option" value="reabilitation"><a href="/consultation/reabilitation/"
                  class="form-select__link">Реабилитация и лечение</a></li>
              <li class="form-select__status-option" value="reproductologist"><a href="/consultation/reproductologist/"
                  class="form-select__link">Репродуктолог</a></li>
              <li class="form-select__status-option" value="rheumatologists"><a href="/consultation/rheumatologists/"
                  class="form-select__link">Ревматолог</a></li>
              <li class="form-select__status-option" value="heart-surgeon"><a href="/consultation/heart-surgeon/"
                  class="form-select__link">Сердечно-сосудистый хирург</a></li>
              <li class="form-select__status-option" value="sexology"><a href="/consultation/sexology/"
                  class="form-select__link">Сексолог</a></li>
              <li class="form-select__status-option" value="stomatology"><a href="/consultation/stomatology/"
                  class="form-select__link">Стоматолог</a></li>
              <li class="form-select__status-option" value="terapevt"><a href="/consultation/terapevt/"
                  class="form-select__link">Терапевт</a></li>
              <li class="form-select__status-option" value="trichologist"><a href="/consultation/trichologist/"
                  class="form-select__link">Трихолог</a></li>
              <li class="form-select__status-option" value="urologist"><a href="/consultation/urologist/"
                  class="form-select__link">Уролог</a></li>
              <li class="form-select__status-option" value="pharmacy"><a href="/consultation/pharmacy/"
                  class="form-select__link">Фармацевт</a></li>
              <li class="form-select__status-option" value="physical-therapist"><a
                  href="/consultation/physical-therapist/" class="form-select__link">Физиотерапевт</a></li>
              <li class="form-select__status-option" value="phthisiatrician"><a href="/consultation/phthisiatrician/"
                  class="form-select__link">Фтизиатр</a></li>
              <li class="form-select__status-option" value="hirurg"><a href="/consultation/hirurg/"
                  class="form-select__link">Хирург</a></li>
              <li class="form-select__status-option" value="embriolog"><a href="/consultation/embriolog/"
                  class="form-select__link">Эмбриолог</a></li>
              <li class="form-select__status-option" value="endocrinologist"><a href="/consultation/endocrinologist/"
                  class="form-select__link">Эндокринолог</a></li>
              <li class="form-select__status-option" value="jurist"><a href="/consultation/jurist/"
                  class="form-select__link">Юрист по семейным делам</a></li>
            </ul>
          </div>
        </div>
      </section>
      <section class="main__blog-sidebar blog-sidebar">
        <div class="blog-sidebar__wrapper section-wrapper">
          <a href="" class="blog-sidebar__title">Блог</a>
          <ul class="blog-sidebar__list">
            <li class="blog-sidebar__item">
              <a href="/" class="blog-sidebar__link">
                <img src="/" alt="" class="blog-sidebar__img">
                <span class="blog-sidebar__item-title">Угроза прерывания беременности</span>
              </a>
            </li>
            <li class="blog-sidebar__item">
              <a href="/" class="blog-sidebar__link">
                <img src="/" alt="" class="blog-sidebar__img">
                <span class="blog-sidebar__item-title">Угроза прерывания беременности</span>
              </a>
            </li>
            <li class="blog-sidebar__item">
              <a href="/" class="blog-sidebar__link">
                <img src="/" alt="" class="blog-sidebar__img">
                <span class="blog-sidebar__item-title">Угроза прерывания беременности</span>
              </a>
            </li>
            <li class="blog-sidebar__item">
              <a href="/" class="blog-sidebar__link">
                <img src="/" alt="" class="blog-sidebar__img">
                <span class="blog-sidebar__item-title">Угроза прерывания беременности</span>
              </a>
            </li>
            <li class="blog-sidebar__item">
              <a href="/" class="blog-sidebar__link">
                <img src="/" alt="" class="blog-sidebar__img">
                <span class="blog-sidebar__item-title">Угроза прерывания беременности</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </aside>
  </div>
</main>

<!-- <section class="main__content-block content-block">
  <div class="content-block__wrapper">
    <h1 class="content-block__header">{{ $consultation->h1 }}</h1>
    <img src="{{ Storage::url($consultation->thumb) }}" alt="" class="content-block__img">
    <div class="content-block__subtitle-wrapper">
      <span class="content-block__subtitle">{{ $consultation->subtitle }}</span>
    </div>
    <span class="content-block__content-header">Содержание статьи:</span>
    {!! $consultation->content !!}
    <div class="content-block__main-text">
      <span class="content-block__main-text-header">Время прочтения: {{ $consultation->reading_time }}</span>
      {!! $consultation->full_text !!}

      <p> Views: {{ $consultation->views }}</p>

      <p>{{ $consultation->created_at }}</p>

    </div>
  </div>
</section> -->
@endsection