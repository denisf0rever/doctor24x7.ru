@extends('app')
@section('title', 'Консультация офтальмолога онлайн: круглосуточно по телефону и в чате')
@section('description', '')
@section('keywords', '')
@section('canonical', 'profile/'. '')
	
	@section('content')
    @include('parts.sidebar__mainpage')
        <div class="main__field">
          <section class="main__banner banner">
            <div class="banner__wrapper">
              <div class="banner__titles">
                <h1 class="banner__title">Консультация офтальмолога онлайн</h1>
                <span class="banner__subtitle">детский, взрослый офтальмолог</span>
                <span class="banner__subtitle">круглосуточно в чате либо телефону</span>
              </div>
              <div class="banner__buttons">
                <div class="banner__join-btn banner__btn">Задать вопрос</div>
                <div class="banner__enter-btn banner__btn">Войти</div>
              </div>
              <img src="images/placeholder.png" alt="" class="banner__img">
              <div class="banner__sponsors">
                <span class="banner__sponsors-title">Врачи офтальмологи</span>
                <div class="banner__sponsors-list">
                  <a href="#" class="banner__sponsor-link">
                    <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
                  </a>
                  <a href="#" class="banner__sponsor-link">
                    <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
                  </a>
                  <a href="#" class="banner__sponsor-link">
                    <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
                  </a>
                  <a href="#" class="banner__sponsor-link">
                    <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
                  </a>
                  <a href="#" class="banner__sponsor-link">
                    <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
                  </a>
                  <a href="#" class="banner__sponsor-link">
                    <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
                  </a>
                  <a href="#" class="banner__sponsor-link">
                    <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
                  </a>
                </div>
              </div>
            </div>
          </section>
          
		  
		@include('mainpage.stories.block')
		@include('mainpage.news.block')		  
         <section class="main__companies companies">
            <div class="companies__wrapper">
              <h2 class="companies__title">Компании</h2>
              <span class="companies__number">40</span>
              <ul class="companies__list">
                <li class="companies__item">
                  <a href="#" class="companies__link">
                    <img src="images/placeholder.png" alt="" class="companies__img">
                    <span class="companies__name">Тинькофф</span>
                  </a>
                </li>
                <li class="companies__item">
                  <a href="#" class="companies__link">
                    <img src="images/placeholder.png" alt="" class="companies__img">
                    <span class="companies__name">Авито </span>
                  </a>
                </li>
                <li class="companies__item">
                  <a href="#" class="companies__link">
                    <img src="images/placeholder.png" alt="" class="companies__img">
                    <span class="companies__name">Тинькофф</span>
                  </a>
                </li>
                <li class="companies__item">
                  <a href="#" class="companies__link">
                    <img src="images/placeholder.png" alt="" class="companies__img">
                    <span class="companies__name">Авито </span>
                  </a>
                </li>
                <li class="companies__item">
                  <a href="#" class="companies__link">
                    <img src="images/placeholder.png" alt="" class="companies__img">
                    <span class="companies__name">Тинькофф</span>
                  </a>
                </li>
                <li class="companies__item">
                  <a href="#" class="companies__link">
                    <img src="images/placeholder.png" alt="" class="companies__img">
                    <span class="companies__name">Авито </span>
                  </a>
                </li>
                <li class="companies__item">
                  <a href="#" class="companies__link">
                    <img src="images/placeholder.png" alt="" class="companies__img">
                    <span class="companies__name">Тинькофф</span>
                  </a>
                </li>
                <li class="companies__item">
                  <a href="#" class="companies__link">
                    <img src="images/placeholder.png" alt="" class="companies__img">
                    <span class="companies__name">Авито </span>
                  </a>
                </li>
                <li class="companies__item">
                  <a href="#" class="companies__link">
                    <img src="images/placeholder.png" alt="" class="companies__img">
                    <span class="companies__name">Тинькофф</span>
                  </a>
                </li>
                <li class="companies__item">
                  <a href="#" class="companies__link">
                    <img src="images/placeholder.png" alt="" class="companies__img">
                    <span class="companies__name">Авито </span>
                  </a>
                </li>
              </ul>
              <span class="companies__show-all">Показать все</span>
            </div>
          </section>
		  
		  
        </div>
        <section class="main__community community">
          <h2 class="community__title">Окулисты</h2>
          <div class="community__text"></div>
          <ul class="community__list">
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
            <li class="community__item">
              <a href="" class="community__link">
                <img src="images/avatar.jpg" alt="" class="community__avatar">
              </a>
            </li>
          </ul>
        </section>
        
		@include('parts.reviews')
		
		
  
  
  
  
Обратиться к офтальмологу онлайн возможно в следующих случаях:
1. Консультация по неотложным ситуациям при появлении жалоб (покраснение глаз, слезотечение, нарушение зрения, боли в глазах и т.д.), если нет возможности показаться врачу. Врач офтальмолог подскажет, определит необходимые действия и назначит лечение.
2. Интерпретация результатов обследований, раннее выданных заключений.
3. Получение второго мнения по волнующим вопросам по лечению и прогнозу.
4. Проконсультироваться с офтальмологом можно и по телефону. В этом случае можно задать все интересующие вопросы и получить ответы врача.
Консультация опытного офтальмолога онлайн - это удобный способ быстро получить квалифицированную консультацию, когда нет возможности посетить врача.
       
      </div>
    </div>
@endsection
  