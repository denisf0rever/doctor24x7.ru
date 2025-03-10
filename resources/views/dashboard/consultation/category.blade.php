<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title> </title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
           <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Заголовки страниц</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-link">Ссылка</span>
                  <span class="pages__title-name">Название</span>
                  <span class="pages__title-number-left">Дата</span>
                  <span class="pages__title-number-left">Фото</span>
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
                     <span class="pages__views-number">
					 
					 @if($consultation->photos->isNotEmpty()){{ $consultation->photos->count() }}@endif
				</span>
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
        @if (session('success'))
        <div class="toast" id="toast">
          <div class="toast__container">
            <div class="toast__item">
              {{ session('success') }}
            </div>
          </div>
        </div>
        @endif
      </main>
    </div>
  </div>
  @include('dashboard.parts.dashboard-popup')