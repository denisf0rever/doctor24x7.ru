@extends('app')
@section('title', 'Консультация врача онлайн — задать вопрос и получить ответ в течение часа')
@section('description', 'Консультируют практикующие врачи, документы об образовании проверены администрацией сайта')
@section('keywords', 'Задать вопрос врачу онлайну, консультация врача онлайн')
@section('canonical', 'consultation/create')

@section('content')

<div class="main__content">
  <div class="main__online-waiting online-waiting">
    <div class="online-waiting__wrapper">
      <div class="online-waiting__number">25</div>
      <div class="online-waiting__top">Ожидание 2 минуты - 2 ответа</div>
      <div class="online-waiting__bottom">Минут</div>
    </div>
  </div>
  <section class="main__online-list online-list">
    <div class="online-list__wrapper">
      <ul class="online-list__list">
	  @foreach ($consultations as $consultation)
	  
	   <li class="online-list__item ">
          <div class="online-list__header">
            <div class="online-list__header-links">
              <a href="{{ route('consultation.category', $consultation->category->slug) }}" class="online-list__header-link">{{ $consultation->category->short_title }}</a>
              <div class="online-list__header-arrow">
                <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                  xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"
                  xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                  xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" height="200" width="200" fill="#000000"
                  version="1.1" x="0px" y="0px" viewBox="0 0 100 100">
                  <g transform="translate(0,-952.36218)">
                    <path
                      d="m 80.750711,1001.6725 -16.00015,-17.00005 c -0.3873,-0.4042 -1.04921,-0.4071 -1.42211,-0.047 -0.379,0.3659 -0.4068,1.0376 -0.047,1.4221 l 14.40636,15.31255 -57.68765,0 c -0.5523,0 -1,0.4477 -1,1 0,0.5523 0.4477,1 1,1 l 57.68765,0 -14.40636,15.3125 c -0.3601,0.3845 -0.3379,1.0621 0.047,1.4221 0.3846,0.36 1.00351,0.3689 1.42211,-0.047 l 16.00015,-17 c 0.3803,-0.468 0.2803,-1.0416 0,-1.3752 z"
                      style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;"
                      fill="#a6abb6" fill-opacity="1" stroke="none" marker="none" visibility="visible" display="inline"
                      overflow="visible" />
                  </g>
                </svg>
              </div>
              <span class="online-list__header-link">{{ $consultation->title }}</span>
            </div>
            <a href="{{ route('consultation.item', $consultation->slug) }}" class="online-list__header-button">Посмотреть ответ</a>
          </div>
          <div class="online-list__text">{{ $consultation->description }}</div>
          <span class="online-list__time">
            <div class="online-list__time-img">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="200"
                width="200" fill="#a6abb6" version="1.1" x="0px" y="0px" viewBox="0 0 20 20"
                style="enable-background:new 0 0 20 20;" xml:space="preserve">
                <g>
                  <path
                    d="M10,0C4.5,0,0,4.5,0,10c0,5.5,4.5,10,10,10s10-4.5,10-10C20,4.5,15.5,0,10,0z M10,18c-4.4,0-8-3.6-8-8c0-4.4,3.6-8,8-8   s8,3.6,8,8C18,14.4,14.4,18,10,18z" />
                  <path
                    d="M11,9.5V5c0-0.6-0.4-1-1-1C9.4,4,9,4.4,9,5v4.9c0,0.3,0.1,0.5,0.3,0.7l2.6,2.6c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4   L11,9.5z" />
                </g>
              </svg>
            </div>
            <!--Ответ 42 минуты назад-->
          </span>
        </li>
		
		
	  @endforeach
      </ul>
    </div>
  </section>
</div>

@endsection