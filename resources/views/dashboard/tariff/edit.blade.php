<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Редактирование сообщения # {{ $tariff->id }}</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__consultation-title">№{{ $tariff->id }}</h1>

          <section class="main__consultation-textarea consultation-textarea">
            <div class="consultation-textarea__wrapper white-block">
              <h2 class="consultation__title">Редактирование тарифа {{ $tariff->name }}</h2>
			    <div class="consultation__inner">
					<div class="consultation__item">
						{{ $tariff->description }}
					</div>
					
					{{ $tariff->name }}<br />
					{{ $tariff->title }}<br />
					{{ $tariff->description }}<br />
					{{ $tariff->description_short }}<br />
					{{ $tariff->answers_count }}<br />
					{{ $tariff->sum }}<br />
					{{ $tariff->condition_id }}<br />
					{{ $tariff->position }}<br />
					{{ $tariff->is_phone }}<br />
					{{ $tariff->is_free }}<br />
					{{ $tariff->is_checked }}<br />
					{{ $tariff->class }}<br />
					{{ $tariff->is_active }}<br />
					
				</div>
			  
             
            </div>
          </section>
		  
        </div>
        @if (session('success'))
        <div class="toast">
          <div class="toast__container" id="toast">
            <div class="toast__item">
              {{ session('success') }}
            </div>
          </div>
        </div>
        @endif
      </main>
    </div>
  </div>