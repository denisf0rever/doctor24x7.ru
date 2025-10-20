@extends('appwide')
@section('title', 'Консультация '.$category->name_v.' в ' .$city->name_p .' — 68 врачей задать вопрос онлайн')
@section('description', 'Круглосуточная консультация по медицинским вопросам в ' .$city->name_p .' онлайн и по телефону,
гарантия ответа в течение часа')
@section('keywords', 'Консультация врача в ' .$city->name_p .', задать вопрос врачу в ' .$city->name_p)
@section('canonical', 'consultation/city/'. $city->slug)

@section('content')
<section class="main__intro category-intro">
<div class="category-intro__wrapper">
  <div class="category-intro__inner">
	<div class="category-intro__top">
	  <h1 class="category-intro__title">Консультация {{ $category->name_v }} в {{ $city->name_p }}</h1>
	  <div class="category-intro__description">Онлайн консультация в чате с быстрым ответом</div>
	  <div class="category-intro__text">
		<p class="category-intro__p">Сервис онлайн-консультаций предлагает профессиональную помощь в диагностике и
		  лечении заболеваний. На сайте консультируют {{ $category->amount_doctors }} @if($category->amount_doctors
		  ==
		  1)
		  {{ Str::lcfirst($category->font_color) }}.
		  @elseif($category->amount_doctors >= 2 && $category->amount_doctors <= 4)
			{{ Str::lcfirst($category->name_v) }}. @else {{ Str::lcfirst($category->name_v_m) }}.@endif Мы понимаем,
			как важно быстро и точно получить ответ на вопросы, касающиеся здоровья, поэтому наши специалисты всегда
			готовы предоставить вам квалифицированные рекомендации, основанные на актуальных данных и индивидуальных
			особенностях вашего состояния. Процесс консультации прост и удобен: вы можете задать вопросы, обсудить
			симптомы и получить советы по выбору лечения, не выходя из дома. Мы гарантируем полную
			конфиденциальность и безопасность ваших данных, а также оперативность в ответах. Заботьтесь о своем
			здоровье вместе с нашим сервисом.</p>
	  </div>
	</div>
  </div>
</div>
</section>
<section class="main__ask-question-form ask-question-form">
<div class="ask-question-form__wrapper">
  <div class="ask-question-form__inner">
	<h2 class="ask-question-form__title">Как это работает</h2>
	<ul class="ask-question-form__blocks">
	  <li class="ask-question-form__block">
		<div class="ask-question-form__text-wrapper">
		  <span class="ask-question-form__block-title">Опишите ситуацию</span>
		  <span class="ask-question-form__block-text">Заполните простую форму, опишите вашу проблему и добавьте при необходимости файлы</span>
		</div>
	  </li>
	  <li class="ask-question-form__block">
		<div class="ask-question-form__text-wrapper">
		  <span class="ask-question-form__block-title">Выберите консультанта</span>
		  <span class="ask-question-form__block-text">Подберем специалистов под вашу задачу. Вы можете выбрать сами или довериться системе</span>
		</div>
	  </li>
	  <li class="ask-question-form__block">
		<div class="ask-question-form__text-wrapper">
		  <span class="ask-question-form__block-title">Оплата консультации</span>
		  <span class="ask-question-form__block-text">Оплатите удобным способом. Возврат при некачественной услуге</span>
		</div>
	  </li>
	  <li class="ask-question-form__block">
		<div class="ask-question-form__text-wrapper">
		  <span class="ask-question-form__block-title">Получите решение</span>
		  <span class="ask-question-form__block-text">Общайтесь в чате, по телефону или видео. Получите план действий и необходимые документы</span>
		</div>
	  </li>
	</ul>
	<a href="{{ route('consult.form') }}" class="ask-question-form__submit new-red-button">Начать консультацию</a>
  </div>
</div>
</section>

<section class="main__description description">
  <div class="description__wrapper container">
   <ul class="questions__list">
    <li class="questions__item question">
      <div class="question__wrapper">
        <div class="question__inner">
          <span class="question__title">Чем занимается наш сервис?</span>
          <div class="question__button">
            <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg" class="Accordion__icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z" fill="currentColor"></path>
            </svg>
          </div>
        </div>
        <div class="question__answer-wrapper">
          <span class="question__answer-text">Наш сервис позволяет пациентам спросить {{ $category->name_v }} онлайн и получить медицинскую помощь, не выходя из дома. Врачи разных специальностей консультируют по видео, аудио или в чате, помогают с расшифровкой анализов, назначением лечения и вторым мнением. Это удобно для занятых людей, жителей удалённых регионов и тех, кому нужна срочная консультация. Доступ к квалифицированной медицине становится проще и быстрее.</span>
        </div>
      </div>
    </li>
	<li class="questions__item question">
      <div class="question__wrapper">
        <div class="question__inner">
          <span class="question__title">Чем мы можем быть полезны</span>
          <div class="question__button">
            <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg" class="Accordion__icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z" fill="currentColor"></path>
            </svg>
          </div>
        </div>
        <div class="question__answer-wrapper">
          <span class="question__answer-text">Сервис онлайн-консультаций предлагает профессиональную медицинскую помощь в диагностике и лечении заболеваний. Мы гарантируем полную конфиденциальность и безопасность ваших данных, а также оперативность в ответах. Заботьтесь о своем здоровье вместе с нашим сервисом.</span>
        </div>
      </div>
    </li>
	<li class="questions__item question">
      <div class="question__wrapper">
        <div class="question__inner">
          <span class="question__title">Консультация в {{ $city->name_p }}?</span>
          <div class="question__button">
            <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg" class="Accordion__icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z" fill="currentColor"></path>
            </svg>
          </div>
        </div>
        <div class="question__answer-wrapper">
          <span class="question__answer-text">Мы сотрудничаем с врачами различных специализаций из России, Казахстана и Беларуси. Если на момент подачи вашего вопроса врач в <?=$city['name_p']?> будет свободен, он ответит вам. В противном случае ответит первый свободный специалист, который компетентен в данном вопросе.</span>
        </div>
      </div>
    </li>
  </ul>
  </div>
</section>
@endsection