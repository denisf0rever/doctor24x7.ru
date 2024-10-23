<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Тарифы</title>
  @include('dashboard.settings')
</head>

<body>

  @include('dashboard.parts.header')
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Тарифы</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.setting.user.update', auth()->user()->id) }}" method="post"
                class="form__inner-form" enctype="multipart/form-data">
                @csrf

                @foreach($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
                <div class="form__inner form__inner-small">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                     
					 @foreach ($tariffs as $tariff)
						
						<a href="{{ route('dashboard.tariff.edit', $tariff->id)}}">{{ $tariff->id }}</a>
					 
					 @endforeach
                    </div>
                  </div>
                </div>
              </form>
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