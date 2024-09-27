@extends('app')
@section('title', 'ПузКарапуз — журнал о материнстве, воспитание детей, беременность и роды. Сайт для родителей')
@section('description', 'Сайт посвящен волнующим вопросам, которые возникают у молодых родителей. Здесь каждый из Вас
найдет совет, благодаря которому Вы благополучно родите и воспитаете своего наследника')
@section('keywords', 'воспитание детей, сайт для родителей, советы родителям, портал для детей и родителей, карапуз,
беременность, роды')
@section('canonical', '')

@section('content')


<main class="main">
  <div class="main__wrapper-main container">
    <div class="main__content">
      <section class="main__description description">
        <div class="description__wrapper section-wrapper">
          <p><b>Миссия сайта</b>: мы берем на себя обязательство помогать таким слоям населения как: мамы и папы, дети и
            подростки, и всем желающим. Идеология сайта - это воспитание и развитие детей, здоровье детей и родителей.
            Мы уже помогли более 2000 человек, ответив на их вопросы в <a href="/consultation">консультациях</a>, а так
            же более 1500 подростков остались довольные, получив совет по переходному возрасту и косвенным темам.</p>
          <p>На сайте PuzKarapuz мы ведем деятельность по информированию пользователей о различных заболеваниях, а так
            же ведем бесплатные консультации и если у вас есть вопрос, вы можете <a href="/consultation/comment">задать
              вопрос врачу онлайн</a> в удобное для вас время, и получить ответ в течении некоторого времени.</p>
          <p>Так же, у нас есть <a href="/diary">дневники мам</a>, где мы общаемся и делимся на разные темы (необходимо
            иметь регистрацию на сайте), а если вас интересует <a href="/content/english_for_kids/">английский для
              детей</a>, то найдете у нас более 30 интересных уроков.</p>
          <p>Наш сайт развивается для пользователей, мы стараемся делать полезные сервисы, которые помогут облегчить
            жизнь - один из таких сервисов это <a href="/service/analiz_online">анализы онлайн</a>, тут вы можете
            расшифровать значения ваших анализов и получить рекомендации.</p>
          <p>Мы не стоим на месте и те пользователи, которые с нами читают наши статьи, задают вопросы врачам,
            комментируют и пишут в дневниках, вас ждут еще много интересного - добавляйтесь в группу Вконтакте и в
            закладки.</p>
        </div>
      </section>
      @include('mainpage.news.block')
      <section class="main__cards cards">
        <div class="cards__wrapper section-wrapper">
          <div class="cards__inner container">
            <div class="cards__header">
              <h2 class="cards__title">Выбирайте лучшее</h2>
              <div class="cards__toggle">
                <div class="cards__toggle-item cards__toggle-item-active" data-tab="tab-1" ->Для всех</div>
                <div class="cards__toggle-item" data-tab="tab-2">Малому бизнесу</div>
              </div>
            </div>
            <div class="cards__header-variant">
              <h2 class="cards__title-variant">Выбирайте лучшее</h2>
              <div class="cards__toggle-variant">
                <div class="cards__toggle-variant-wrapper">
                  <div class="cards__toggle-item-variant cards__toggle-item-variant-active" data-tab="tab-1">Для всех
                  </div>
                  <div class="cards__toggle-item-variant" data-tab="tab-2">Для молодежи</div>
                  <div class="cards__toggle-item-variant" data-tab="tab-1">Для семьи</div>
                  <div class="cards__toggle-item-variant" data-tab="tab-2">Пенсионерам</div>
                  <div class="cards__toggle-item-variant" data-tab="tab-1">Премиум</div>
                </div>
              </div>
            </div>

            <div class="cards__enter">
              <div class="cards__enter-wrapper">
                <img src="images/placeholder.png" alt="" class="cards__enter-img">
                <div class="cards__enter-title">Войти в мобильный банк</div>
                <div class="cards__enter-subtitle">Для андроид</div>
                <img src="images/expand-more.svg" alt="" class="cards__enter-arrow">
              </div>
            </div>

            <ul class="cards__list" id="tab-1">
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Дебетовые карты</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Дебетовые карты</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Дебетовые карты</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Дебетовые карты</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Дебетовые карты</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Дебетовые карты</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Дебетовые карты</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Дебетовые карты</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
            </ul>
            <ul class="cards__list cards__hide" id="tab-2">
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Второй таб</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Второй таб</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Второй таб</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Второй таб</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Второй таб</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Второй таб</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Второй таб</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
              <li class="cards__card card">
                <div class="card__wrapper">
                  <span class="card__title">Второй таб</span>
                  <div class="card__subtitle">Суперкэшбэк до 100%</div>
                  <img src="images/placeholder.png" alt="" class="card__img">
                </div>
              </li>
            </ul>
          </div>
        </div>

      </section>
    </div>
    <aside class="main__sidebar">
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


<div class="mobile-panel-top">
  <div class="mobile-panel-top__wrapper">
    <div class="mobile-panel-top__title-wrapper">
      <div class="mobile-panel-top__title">Меню</div>
      <div class="mobile-panel-top__close">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" class="loaded">
          <g fill="none" fill-rule="evenodd">
            <path fill="#515151" d="M.04 21.753L21.253.54l.707.707L.747 22.46z"></path>
            <path fill="#525252" d="M21.96 21.753L.747.54l-.707.707L21.253 22.46z"></path>
          </g>
        </svg>
      </div>
    </div>
    <div class="mobile-panel-top__tub-buttons">
      <div class="mobile-panel-top__tub-button mobile-panel-top__tub-button-active" data-tab="tab-1">Основное</div>
      <div class="mobile-panel-top__tub-button" data-tab="tab-2">Консультанты</div>
    </div>
    <div class="mobile-panel-top__tubs">
      <div class="mobile-panel-top__tub" data-tab="tab-1">
        <ul class="mobile-panel-top__list">
          <li class="mobile-panel-top__item">
            <a href="/" class="mobile-panel-top__link">
              <span class="mobile-panel-top__item-title">Главная</span>
              <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"
                xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" height="200" width="200" fill="#000000"
                version="1.1" x="0px" y="0px" viewBox="0 0 100 100" class="loaded">
                <g transform="translate(0,-952.36218)">
                  <path
                    d="m 80.750711,1001.6725 -16.00015,-17.00005 c -0.3873,-0.4042 -1.04921,-0.4071 -1.42211,-0.047 -0.379,0.3659 -0.4068,1.0376 -0.047,1.4221 l 14.40636,15.31255 -57.68765,0 c -0.5523,0 -1,0.4477 -1,1 0,0.5523 0.4477,1 1,1 l 57.68765,0 -14.40636,15.3125 c -0.3601,0.3845 -0.3379,1.0621 0.047,1.4221 0.3846,0.36 1.00351,0.3689 1.42211,-0.047 l 16.00015,-17 c 0.3803,-0.468 0.2803,-1.0416 0,-1.3752 z"
                    style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;"
                    fill="#a6abb6" fill-opacity="1" stroke="none" marker="none" visibility="visible" display="inline"
                    overflow="visible"></path>
                </g>
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <div class="mobile-panel-top__tub" data-tab="tab-2" style="display: none">
        <div class="employees">
          <div class="employees__item-back employees__hide">
            <div class="employees__category">
              <div class="employees__category-name">Назад</div>
            </div>
          </div>
          <ul class="employees__list">

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-panel-bottom">
  <div class="mobile-panel-bottom__wrapper">
    <ul class="mobile-panel-bottom__list">
      <li class="mobile-panel-bottom__item" id="doctors">
        <a href="/" class="mobile-panel-bottom__link">
          <img src="/" alt="" class="mobile-panel-bottom__img">
          <span class="mobile-panel-bottom__title">Врачи</span>
        </a>
      </li>
      <li class="mobile-panel-bottom__item" id="psychologists">
        <a href="/" class="mobile-panel-bottom__link">
          <img src="/" alt="" class="mobile-panel-bottom__img">
          <span class="mobile-panel-bottom__title">Психологи</span>
        </a>
      </li>
      <li class="mobile-panel-bottom__item mobile-panel-bottom__open">
        <a href="" class="mobile-panel-bottom__open-link">
          <i></i>
          <i></i>
          <i></i>
        </a>
      </li>
      <li class="mobile-panel-bottom__item">
        <a href="/" class="mobile-panel-bottom__link">
          <img src="/" alt="" class="mobile-panel-bottom__img">
          <span class="mobile-panel-bottom__title">Консультация</span>
        </a>
      </li>
      <li class="mobile-panel-bottom__item">
        <a href="/" class="mobile-panel-bottom__link">
          <img src="/" alt="" class="mobile-panel-bottom__img">
          <span class="mobile-panel-bottom__title">Активность</span>
        </a>
      </li>
    </ul>
  </div>
</div>


</div>
</div>
@endsection