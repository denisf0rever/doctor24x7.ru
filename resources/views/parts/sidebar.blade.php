<aside class="main__sidebar">
  <a href="{{ route('consult.form') }}" class="main__ask-question-sidebar">
    Задать вопрос врачу
  </a>
  <section class="main__consultation-sidebar consultation-sidebar">
    <div class="consultation-sidebar__wrapper section-wrapper">
      <div class="consultation-sidebar__top">
        <div class="consultation-sidebar__title">Консультации</div>
        <div class="consultation-sidebar__img"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M9 1.41v-.07c.05-.3-.33-.47-.53-.22L2.11 9.2a.5.5 0 00.39.8H7v4.68c-.03.3.36.44.54.2l6.37-8.1A.5.5 0 0013.5 6H9V1.41z"></path></svg></div>
      </div>
      <ul class="consultation-sidebar__list">
	  @foreach($consultations as $consultation)
         <li class="consultation-sidebar__item">
          <a href="{{ route('consultation.item', $consultation->slug) }}" class="consultation-sidebar__problem-title">{{ $consultation->title }}</a>
          <span class="consultation-sidebar__problem-info">Ожидание 22 минуты - 5 ответов
          </span>
        </li>
        @endforeach
      </ul>
      <a href="{{ route('consultation.online') }}" class="consultation-sidebar__button">Все консультации</a>
    </div>
  </section>
  <section class="form-select">
    <div class="form-select__select-wrapper custom-select section-wrapper">
      <span class="form-select__status-title" for="status">Выбрать врача</span>
      <img src="{{ Storage::url('common/expand-more.svg') }}" alt=""
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