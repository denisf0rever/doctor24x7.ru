@extends('app')
@section('title', $consultation->title .' — консультируют врачи на форуме')
@section('description', 'Консультация врача, вопрос: ' . $consultation->title)
@section('keywords', '')
@section('canonical', 'consultation/detail/'. $consultation->id)

@section('content')
</title>
<meta name="description" content="Консультация врача, вопрос: Гормональные таблетки">
<meta name="keywords" content="Вопрос гинекологу">


<main class="main">
  <div class="main__wrapper-main container">
    <div class="main__content">
      <section class="main__question question">
        <div class="question__wrapper section-wrapper">
          <h2 class="question__title">Возможно ли ? </h2>
          <ul class="question__discussion-list">
            <li class="question__discussion-item">
              <a href="/" class="question__discussion-link">Сперма</a>
            </li>
          </ul>
          <div class="question__text">
            <p>
              Возможно ли заразиться? если я мыла раковину и кран без перчаток мылом без губки руками .
            </p>
            <p>
              Раковина была вся в мыле от того , что я часто мою руки я стала раздражаться и помыла. Живу с папой.
              Скорее всего с ним все хорошо и он здоров. У меня окр фобия.
            </p>
            <p>
              Возможно ли таким образом заразиться? Вич , гепатитами если у меня ранки на руках бывают от частого мытья
              до крови?
            </p>
            <p>
              Ведь папа чистит зубы в раковине вдруг у него кровоточат десна и какие то частички крови попадают на
              раковину. Я так мыла уже несколько раз теперь сильно переживаю
            </p>
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
        <!-- <script language="javascript">
        $(document).ready(function() {
          $('.captcha_copy').attr('src', $('#captcha_img').attr('src'));
          $('.captcha_copy + a').click(function(e) {
            $('.captcha_copy').attr('src', $('#captcha_img').attr('src'));
          });
        });
        </script> -->

        <!---->


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



            <li class="comments__item comment">
              <div class="comment__main-comment" id="answer300328">
                <a href="/profile/elenamihailovna" class="comment__user-link" id="elenamihailovna">
                  <img src="/uploads/sfGuard/avatars/ebe21773a3e3b955b3d43312bf5f41298e000639.jpg"
                    class="comment__avatar-main">
                  <span class="comment__user-name">Войцехович&nbsp;Елена&nbsp;Михайловна</span>
                  <span class="comment__user-subtitle">Республика Беларусь</span>
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
                  <p itemprop="text">В описанной Вами ситуации заражение полностью исключено.</p>

                </span>
                <div class="comment__answer-field-fake">
                  <div class="comments__form-fake" data-id="300328">
                    <span class="comment__answ">Ответить</span>
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
                    <div class="paywall__title">
                      Этот материал входит в подписку с доступом к разделу «Основной»
                    </div>
                    <div class="paywall__subtitle">Прочитайте этот материал, чтобы узнать:</div>
                    <ul class="paywall__list">
                      <li class="paywall__item">можно ли привлечь к ответственности маркетплейс за продажу контрафакта;
                      </li>
                      <li class="paywall__item">как взыскать убытки с торговой площадки, если она не выполняет свои
                        обязанности по сохранности товара;</li>
                      <li class="paywall__item">как суды относятся к возможности взыскания упущенной выгоды.</li>
                    </ul>
                    <a href="#" class="paywall__button">Оформить подписку</a>
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