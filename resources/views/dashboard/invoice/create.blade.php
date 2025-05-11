<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Создать счет</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Создать счет</h1>
		  
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.invoice.create') }}" method="post" class="form__inner-form"
                enctype="multipart/form-data">
                @csrf
				
				<input type="hidden" name="consultation_id" value="{{ $consultation->id }}">
				
                @foreach($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper">
                          <label class="form__label" for="cost">Стоимость</label>
                          <input class="form__input @error('cost')input-error @enderror" type="text" id="cost"
                            name="cost" value="{{ old("cost") }}">
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper"><input class="form__submit red-button" type="submit"></input></div>
              </form>
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