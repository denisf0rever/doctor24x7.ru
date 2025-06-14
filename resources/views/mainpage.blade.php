@extends('app')
@section('title', 'ПузКарапуз — журнал о материнстве, воспитание детей, беременность и роды. Сайт для родителей')
@section('description', 'Сайт посвящен волнующим вопросам, которые возникают у молодых родителей. Здесь каждый из Вас
найдет совет, благодаря которому Вы благополучно родите и воспитаете своего наследника')
@section('keywords', 'воспитание детей, сайт для родителей, советы родителям, портал для детей и родителей, карапуз,
беременность, роды')
@section('canonical', '/')

@section('content')
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
@endsection