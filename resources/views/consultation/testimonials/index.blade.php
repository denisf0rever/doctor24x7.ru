@extends('appwide')
@section('title', 'Отзывы')
@section('description', 'Отзывы')
@section('keywords', 'Отзывы')
@section('canonical', 'consultation/testimonials')

@section('content')

<div class="new-section-wrapper">
  <section class="main__testimonials-grid testimonials-grid container">
    <h3 class="testimonials-grid__title">Нам доверяют, и это подтверждено рейтингом</h3>
    <div class="testimonials-grid__wrapper">
      <div class="testimonials-grid__first-item testimonials-grid__item">
        <span class="testimonials-grid__item-title">1 место</span>
        <span class="testimonials-grid__item-subtitle">В народном рейтинге Банки.ру </span>
        <img src="https://placehold.co/600x400" alt="" class="testimonials-grid__item-img--first" />
      </div>
      <div class="testimonials-grid__second-item testimonials-grid__item">
        <span class="testimonials-grid__item-title">1 место</span>
        <span class="testimonials-grid__item-subtitle">В народном рейтинге Банки.ру </span>
        <img src="https://placehold.co/600x400" alt="" class="testimonials-grid__item-img--second" />
      </div>
      <div class="testimonials-grid__third-item testimonials-grid__item">
        <div class="testimonials-grid__item-title-wrapper">
          <span class="testimonials-grid__item-title">1 место</span>
          <span class="r-star"></span>
        </div>
        <span class="testimonials-grid__item-subtitle">В народном рейтинге Банки.ру </span>
      </div>
      <div class="testimonials-grid__fourth-item testimonials-grid__item">
        <div class="testimonials-grid__item-title-wrapper">
          <span class="testimonials-grid__item-title">1 место</span>
          <span class="r-star"></span>
        </div>
        <span class="testimonials-grid__item-subtitle">В народном рейтинге Банки.ру </span>
      </div>
    </div>
  </section>
  <section class="main__reviews-header reviews-header container">
    <div class="reviews-header__wrapper">
      <h3 class="reviews-header__title">Отзывы клиентов</h3>
      <ul class="reviews-header__tabs">
        <li class="reviews-header__tab reviews-header__tab--active" data-value="All">Все</li>
        <li class="reviews-header__tab" data-value="test1">Инвестиции</li>
        <li class="reviews-header__tab" data-value="test2">Дебетовые карты</li>
        <li class="reviews-header__tab" data-value="test3">Кредитные карты</li>
        <li class="reviews-header__tab">Все</li>
        <li class="reviews-header__tab">Инвестиции</li>
        <li class="reviews-header__tab">Дебетовые карты</li>
        <li class="reviews-header__tab">Кредитные карты</li>
        <li class="reviews-header__tab">Все</li>
      </ul>
      <div class="reviews-header__header">
        <div class="reviews-header__radios">
          <label for="5_star_radio" class="reviews-header__label">
            <input type="radio" hidden class="reviews-header__input" value="5" name="review-stars" id="5_star_radio" />
            <div class="reviews-header__radio">
              <svg class="reviews-header__radio-svg" fill="none" height="10" width="10"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4.066 6.333L1.5 3.908l-.825.742 3.391 3.392 5.259-5.267-.892-.817-4.367 4.375z" fill="#fff">
                </path>
              </svg>
            </div>
            <div class="reviews-header__stars">
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
            </div>
            <div class="reviews-header__line">
              <span class="reviews-header__line-value" style="width: 100%"></span>
            </div>
            <span class="reviews-header__value">761</span>
          </label>
          <label for="4_star_radio" class="reviews-header__label">
            <input type="radio" hidden class="reviews-header__input" value="4" name="review-stars" id="4_star_radio" />
            <div class="reviews-header__radio">
              <svg class="reviews-header__radio-svg" fill="none" height="10" width="10"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4.066 6.333L1.5 3.908l-.825.742 3.391 3.392 5.259-5.267-.892-.817-4.367 4.375z" fill="#fff">
                </path>
              </svg>
            </div>
            <div class="reviews-header__stars">
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star-hollow"></span>
            </div>
            <div class="reviews-header__line">
              <span class="reviews-header__line-value" style="width: 50%"></span>
            </div>
            <span class="reviews-header__value">761</span>
          </label>
          <label for="3_star_radio" class="reviews-header__label">
            <input type="radio" hidden class="reviews-header__input" value="3" name="review-stars" id="3_star_radio" />
            <div class="reviews-header__radio">
              <svg class="reviews-header__radio-svg" fill="none" height="10" width="10"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4.066 6.333L1.5 3.908l-.825.742 3.391 3.392 5.259-5.267-.892-.817-4.367 4.375z" fill="#fff">
                </path>
              </svg>
            </div>
            <div class="reviews-header__stars">
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star-hollow"></span>
              <span class="r-star-hollow"></span>
            </div>
            <div class="reviews-header__line">
              <span class="reviews-header__line-value" style="width: 20%"></span>
            </div>
            <span class="reviews-header__value">761</span>
          </label>
          <label for="2_star_radio" class="reviews-header__label">
            <input type="radio" hidden class="reviews-header__input" value="2" name="review-stars" id="2_star_radio" />
            <div class="reviews-header__radio">
              <svg class="reviews-header__radio-svg" fill="none" height="10" width="10"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4.066 6.333L1.5 3.908l-.825.742 3.391 3.392 5.259-5.267-.892-.817-4.367 4.375z" fill="#fff">
                </path>
              </svg>
            </div>
            <div class="reviews-header__stars">
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star-hollow"></span>
              <span class="r-star-hollow"></span>
              <span class="r-star-hollow"></span>
            </div>
            <div class="reviews-header__line">
              <span class="reviews-header__line-value" style="width: 10%"></span>
            </div>
            <span class="reviews-header__value">761</span>
          </label>
          <label for="1_star_radio" class="reviews-header__label">
            <input type="radio" hidden class="reviews-header__input" value="1" name="review-stars" id="1_star_radio" />
            <div class="reviews-header__radio">
              <svg class="reviews-header__radio-svg" fill="none" height="10" width="10"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4.066 6.333L1.5 3.908l-.825.742 3.391 3.392 5.259-5.267-.892-.817-4.367 4.375z" fill="#fff">
                </path>
              </svg>
            </div>
            <div class="reviews-header__stars">
              <span class="r-star"></span>
              <span class="r-star-hollow"></span>
              <span class="r-star-hollow"></span>
              <span class="r-star-hollow"></span>
              <span class="r-star-hollow"></span>
            </div>
            <div class="reviews-header__line">
              <span class="reviews-header__line-value" style="width: 5%"></span>
            </div>
            <span class="reviews-header__value">761</span>
          </label>
        </div>
        <div class="reviews-header__total">
          <div class="reviews-header__total-wrapper">
            <span class="reviews-header__total-value">4.8 </span>
            <span class="r-star"></span>
          </div>
          <span class="reviews-header__total-text">на основании 847 оценок </span>
        </div>
      </div>
    </div>
  </section>
  <section class="main__new-reviews new-reviews container">
    <div class="new-reviews__wrapper">
      <ul class="new-reviews__list">
        <li class="new-reviews__item" data-stars="1" data-category="test1">
          <div class="new-reviews__left">
            <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/ebe21773a3e3b955b3d43312bf5f41298e000639.jpg" alt=""
              class="new-reviews__avatar" />
            <span class="new-reviews__fullname">Елена Войцехович 1</span>
            <span class="new-reviews__status">Инфекционист</span>
          </div>
          <div class="new-reviews__right">
            <span class="new-reviews__author-fullname">Антон</span>
            <div class="new-reviews__stars">
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
            </div>
            <span class="new-reviews__text">Спасибо большое за полный и содержательный ответ! </span>
            <span class="new-reviews__info">Отзыв на консультацию: <a class="new-reviews__link"
                href="/consultation/detail/691860">Таблетки при спаечной болезни</a></span>
            <span class="new-reviews__date">2025-04-11 22:10:45 </span>
          </div>
        </li>
        <li class="new-reviews__item" data-stars="3" data-category="test2">
          <div class="new-reviews__left">
            <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/ebe21773a3e3b955b3d43312bf5f41298e000639.jpg" alt=""
              class="new-reviews__avatar" />
            <span class="new-reviews__fullname">Елена Войцехович 2</span>
            <span class="new-reviews__status">Инфекционист</span>
          </div>
          <div class="new-reviews__right">
            <span class="new-reviews__author-fullname">Антон</span>
            <div class="new-reviews__stars">
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
            </div>
            <span class="new-reviews__text">Спасибо большое за полный и содержательный ответ! </span>
            <span class="new-reviews__info">Отзыв на консультацию: <a class="new-reviews__link"
                href="/consultation/detail/691860">Таблетки при спаечной болезни</a></span>
            <span class="new-reviews__date">2025-04-11 22:10:45 </span>
          </div>
        </li>
        <li class="new-reviews__item" data-stars="5" data-category="test3">
          <div class="new-reviews__left">
            <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/ebe21773a3e3b955b3d43312bf5f41298e000639.jpg" alt=""
              class="new-reviews__avatar" />
            <span class="new-reviews__fullname">Елена Войцехович 3</span>
            <span class="new-reviews__status">Инфекционист</span>
          </div>
          <div class="new-reviews__right">
            <span class="new-reviews__author-fullname">Антон</span>
            <div class="new-reviews__stars">
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
              <span class="r-star"></span>
            </div>
            <span class="new-reviews__text">Спасибо большое за полный и содержательный ответ! </span>
            <span class="new-reviews__info">Отзыв на консультацию: <a class="new-reviews__link"
                href="/consultation/detail/691860">Таблетки при спаечной болезни</a></span>
            <span class="new-reviews__date">2025-04-11 22:10:45 </span>
          </div>
        </li>
      </ul>
    </div>
  </section>
</div>


@endsection