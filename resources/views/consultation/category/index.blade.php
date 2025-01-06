@extends('appwide')
@section('title', $category->title)
@section('description', $category->meta_description)
@section('keywords', $category->meta_keywords)
@section('canonical', 'consultation/'. $category->slug)

@section('content')

<section class="main__intro category-intro">
  <div class="category-intro__wrapper section-wrapper">
    <div class="category-intro__inner">
      <div class="category-intro__top">
        <h2 class="category-intro__title">Консультация аллерголога онлайн </h2>
        <div class="category-intro__text">
          <p class="category-intro__p">
            Работаем круглосуточно. Практикующие врачи и психологи. Консультацию аллерголога можно получить через разные
            способы коммуникации. В онлайн чате вы можете быстро задать вопрос и получить ответ в режиме реального
            времени, а по телефону — обсудить свои проблемы более подробно.
          </p>
          <p class="category-intro__p">
            Видеоконсультация позволяет врачам видеть пациента и проводить более полное обследование, в то время как
            мессенджеры обеспечивают удобство общения в любое время, позволяя делиться медицинскими документами и фото.
          </p>
        </div>
      </div>
      <div class="category-intro__button-block">
        <a href="/consultation/comment?rubric_id=2" class="category-intro__button-link">Онлайн консультация</a>
        <div class="category-intro__button-text">Предоставим ответ в течение 25 минут</div>
      </div>
    </div>
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