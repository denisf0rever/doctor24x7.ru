<aside class="main__sidebar">
  <a href="{{ route('consult.form') }}" class="main__ask-question-sidebar">
    Задать вопрос врачу
  </a>
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
      <a href="{{ route('consultation.online') }}" class="consultation-sidebar__button">Все консультации</a>
    </div>
  </section>
  <section class="form-select">
    <div class="form-select__select-wrapper custom-select section-wrapper">
      <span class="form-select__status-title" for="status">Выбрать врача</span>
      <img src="/images/svg/elements/selector/expand-more.svg" alt=""
        class="form-select__status-arrow custom-select__arrow">
      <div class="form-select__status-select-wrapper custom-select__wrapper custom-select__hide">
        <ul id="status" class="form-select__status-select">
		
		@foreach($categories as $category)
           <li class="form-select__status-option" value="{{ $category->slug }}"><a href="{{ route('consultation.category', $category->slug) }}"
              class="form-select__link">{{ $category->short_title }}</a></li>
        @endforeach
		
         
         
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