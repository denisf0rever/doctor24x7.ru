@extends('appsidebarfree')
@section('title', $category->title)
@section('description', $category->meta_description)
@section('keywords', $category->meta_keywords)
@section('canonical', 'consultation/'. $category->slug)

@section('content')

<section class="main__category-doctor category-doctor">
  <h2 class="category-doctor__title">Нужна помощь аллерголога? </h2>
  <span class="category-doctor__subtitle">Консультации оказываются онлайн в реальном времени</span>
  <div class="category-doctor__wrapper section-wrapper">
    <div class="category-doctor__doctor">
      <a href="/" class="category-doctor__img-link">
        <img src="/" alt="" class="category-doctor__img">
      </a>
      <a href="/" class="category-doctor__fullname">Марина Михайловна</a>
      <span class="category-doctor__specialization">Аллерголог</span>
      <span class="category-doctor__exp">18 лет </span>
      <span class="category-doctor__exp-text">Опыт </span>
    </div>
    <div class="category-doctor__text">
      Врач дерматовенеролог, аллерголог, руководитель Центра по изучению и терапии зуда. Закончила Московскую
      Медицинскую Академию им. И.М. Сеченова по специальности лечебное дело, ординатуру и аспирантуру на кафедре кожных
      болезней ММА им И.М. Сеченова, г. Москва. В 2006-2007гг прошла стадировку Philipps-Universität Marburg, Германия.
      В 2013г окончила образование по аллергологии в Институте Иммунофизиологии, кафедра аллергологии и иммунологии, г.
      Москва. В 2011г защитила диссертацию на тему способов лечения зуда при атопическом дерматите, экземе и других
      зудящих кожных заболеваниях. Диссертационная работа награждена медалью Российской Академии Медицинских наук
      (РАМН). Доктор проходила стажировку по аллергологии Medizinische Hochschule Hannover, Германия. Консультирую
      пациентов с 0мес.
    </div>
    <span class="category-doctor__list-title">По вопросам аллергологии:
    </span>
    <ul class="category-doctor__list">
      <li class="category-doctor__list-item">
        атопический дерматит/нейродермит;
      </li>
      <li class="category-doctor__list-item">
        экзема;
      </li>
      <li class="category-doctor__list-item">
        сезонная аллергия/поллиноз/аллергия на цветение;
      </li>
      <li class="category-doctor__list-item">
        пищевая аллергия и пищевая непереносимость;
      </li>
      <li class="category-doctor__list-item">
        хроническая крапивница - все типы;
      </li>
      <li class="category-doctor__list-item">
        мастоцитоз;
      </li>
      <li class="category-doctor__list-item">
        кожный зуд;
      </li>
      <li class="category-doctor__list-item">
        ксероз/сухость кожи;
      </li>
      <li class="category-doctor__list-item">
        пруриго (почесуха) и др.
      </li>
    </ul>
    <a href="" class="category-doctor__button">Обратиться →</a>
  </div>
</section>

<section class="main__category-questions category-questions">
  <div class="category-questions__wrapper section-wrapper small-container">
    <div class="category-questions__header">
      <h2 class="category-questions__title">Популярные вопросы </h2>
      <a href="/consultation/comment" class="category-questions__ask-question">Задать вопрос →</a>
    </div>
    <ul class="category-questions__list">
      <li class="category-questions__item">
        @if ($category->subcategories->isNotEmpty())
        @foreach($category->subcategories as $subcategory)
        <a href="{{ $subcategory->short_title }}" class="category-questions__link">
          <span class="category-questions__item-title">{{ $subcategory->short_title }}</span>
          <span class="category-questions__item-views">Просмотры: 45939</span>
          <div class="category-questions__item-arrow">→</div>
        </a>
        @endforeach
        @endif
      </li>
    </ul>
  </div>
</section>

<section class="main__description description">
  <div class="description__wrapper section-wrapper small-container">
    <p>Аллергические реакции — это чрезмерно резкий ответ организма на контакт с минимальным количеством тех или иных
      веществ. По данным официальной статистики процент людей страдающих аллергией на территории постсоветских стран
      составляет около 30% населения. На самом же деле, аллергиков намного больше, так как далеко не все люди обращаются
      к врачу. У некоторых, симптомы достаточно быстро проходят сами, а некоторые, к сожалению, занимаются самолечением.
    </p>
    <p>Когда нужно обратиться к врачу? Если у вас или ваших близких наблюдаются слезотечение, покраснение конъюнктивы,
      светобоязнь, выделения из носа или ощущение заложенности носа, частое чихание, настойчивый кашель, проблемы с
      дыханием, появление зудящей сыпи, возвышающейся над кожей (крапивница), покраснение и шелушение кожи в связи с
      воздействием на нее некоторых факторов (например, холод, косметика и т. д.), отеки различных частей тела. Все
      вышеуказанное говорит о большой вероятности именно аллергического заболевания.
    </p>
    <p>Если вы не знаете, куда и к какому специалисту обратиться с подобными жалобами, если вы уже обследованы, но нужно
      помочь в трактовке анализов, если вам было назначено лечение, а вы хотите получить мнение еще одного врача — вы
      можете задать вопрос на нашем портале и наши специалисты в короткое время помогут вам. Аллерголог в онлайн режиме
      проведет консультацию и даст свои рекомендации.
    </p>
    <a href="/" class="description__link">Детский аллерголог </a>
  </div>
</section>

@endsection