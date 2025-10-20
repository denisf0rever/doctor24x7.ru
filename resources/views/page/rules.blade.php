@extends('appwide')
@section('title', 'Правила сайта')
@section('description', 'Правила сайта')
@section('keywords', 'Правила сайта')
@section('canonical', route('page.rules'))

@section('content')
<section class="main__questions questions">
  <div class="questions__wrapper">
    <div class="questions__inner container">
      <ul class="questions__list">
        <li class="questions__item question">
          <div class="question__wrapper">
            <div class="question__inner">
              <span class="question__title">Виды консультации</span>
              <div class="question__button">
                <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                  class="Accordion__icon">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                    fill="#000"></path>
                </svg>
              </div>
            </div>
            <div class="question__answer-wrapper" style="max-height: 0px; padding-top: 0px;">
              <span class="question__answer-text">Мы оказываем платные консультации. Бесплатные консультации отнимают
                время, в современном мире время - ценный ресурс, поэтому тратить время можем только продуктивно.</span>
            </div>
          </div>
        </li>
        <li class="questions__item question">
          <div class="question__wrapper">
            <div class="question__inner">
              <span class="question__title">Возврат средств</span>
              <div class="question__button">
                <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                  class="Accordion__icon">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                    fill="#000"></path>
                </svg>
              </div>
            </div>
            <div class="question__answer-wrapper" style="max-height: 0px; padding-top: 0px;">
              <span class="question__answer-text">В случае, если Клиента не устроило качество консультации, то
                Администрация сайта, гарантирует возврат средств в течение 1 недели. На практике, мы делаем возврат в
                течение 3х часов.</span>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
@endsection