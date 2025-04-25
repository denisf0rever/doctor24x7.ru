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
		  
          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Заголовки страниц</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-name">Название</span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list">
                 
                  <li class="pages__item">
                    <span class="pages__views-id"> </span>
                    <a href=" " class="pages__name"
                      target="_blank"><span> </span></a>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href=" "
                          class="delete-link" target="_blank">
                          <img src="{{ Storage::url('dashboard/del.svg') }}" alt="" class="pages__icon-img">
                        </a>
                      </div>
                    </div>
                  </li>
                
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