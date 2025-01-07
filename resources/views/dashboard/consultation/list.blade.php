<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Список консультаций</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Консультации</h1>
		  <div class="main__blocks-wrapper">
            <ul class="main__blocks">
              <li class="main__block color-block">
                <a href="{{ route('dashboard.consultation.categories'); }}" class="color-block__wrapper"
                  style="background-color: #ffe2e6">
                  <img src="{{ Storage::url('dashboard/category.svg') }}" alt="" class="color-block__img"
                    style="background-color: #f9597c">
                  <div class="color-block__big-text">Категории</div>
                  <div class="color-block__title"></div>
                  <div class="color-block__small-text">Всего добавлено:  </div>
                </a>
              </li>
              <li class="main__block color-block">
                <a href="" class="color-block__wrapper"
                  style="background-color: #fff4de">
                  <img src="/images/dashboard/analytics-article.svg" alt="" class="color-block__img"
                    style="background-color: #fe947a">
                  <div class="color-block__big-text">Аналитика статей</div>
                  <div class="color-block__title"> </div>
                  <div class="color-block__small-text">Раз в неделю</div>
                </a>
              </li>
            </ul>
          </div>
          <section class="main__info info">
            <div class="info__wrapper">
              <div class="info__element">
                <h3 class="info__title">Информация о консультациях</h3>
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text"></span>
                  </div>
                  <div class="info__data">
                    <span class="info__text"><strong>{{ $totalConsultations }}</strong> всего консультаций</span>
                  </div>
                  <div class="info__data">
                    <span class="info__text"><strong>{{ $totalAnswers }}</strong> всего ответов</span>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Заголовки страниц</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-link">Ссылка</span>
                  <span class="pages__title-name">Название</span>
                  <span class="pages__title-number-left">Дата</span>
                  <span class="pages__title-number">Визиты</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list">
                  @foreach ($consultations as $consultation)
                  <li class="pages__item">
                    <span class="pages__views-id">{{ $consultation->id }}</span></a>
                    <a href="{{ route('consultation.item', $consultation->id) }}" target="_blank" class="pages__link">
                      <img src="{{ Storage::url('dashboard/link.svg') }}" alt="" class="pages__link-img">
                    </a>
                    <a class="pages__name" href="{{ route('dashboard.consultation.item', $consultation->id)}}"
                      target="_blank"><span>{{ $consultation->title }}</span></a>
                    <span class="pages__views-id">{{ $consultation->created_at }}</span>
                    <span class="pages__views-number">{{ $consultation->visit_count }}</span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.booking.list', $consultation->id)}}" target="_blank">
                          <img src="{{ Storage::url('dashboard/booking.svg') }}" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.consultation.edit', $consultation->id)}}" target="_blank">
                          <img src="{{ Storage::url('dashboard/edit.svg') }}" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.consultation.destroy', $consultation->id) }}">
                          <img src="{{ Storage::url('dashboard/del.svg') }}" alt="" class="pages__icon-img">
                        </a>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>