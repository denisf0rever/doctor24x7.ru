<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ $consultation->title }}</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Консультация №{{ $consultation->id }}</h1>

          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">{{ $consultation->title }}</h2>
              <div class="pages__inner">
                  <div class="pages__item">
					{{ $consultation->description }}
                  </div>
				  
				  <span class="pages__views-id">{{ $consultation->created_at }}</span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.consultation.edit', $consultation->id)}}" target="_blank">
                          <img src="/images/dashboard/edit.svg" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.consultation.destroy', $consultation->id) }}">
                          <img src="/images/dashboard/del.svg" alt="" class="pages__icon-img">
                        </a>
                      </div>
                    </div>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>