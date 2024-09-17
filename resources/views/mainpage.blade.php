@extends('app')
@section('title', 'Консультация офтальмолога онлайн: круглосуточно по телефону и в чате')
@section('description', '')
@section('keywords', '')
@section('canonical', 'profile/'. '')

@section('content')


<main class="main">
  <div class="main__wrapper container">
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
    </div>
    <div class="main__sidebar">
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
    </div>
  </div>
</main>





</div>
</div>
@endsection