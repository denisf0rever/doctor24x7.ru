<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Редактирование сообщения # {{ $consultation->id }}</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__consultation-title">№{{ $consultation->id }}, {{ $consultation->created_at }}</h1>

          <section class="main__consultation-textarea consultation-textarea">
            <div class="consultation-textarea__wrapper white-block">
              <h2 class="consultation__title">Редактирование сообщения # {{ $consultation->id }}</h2>
              <div class="consultation__inner">
                <div class="consultation__item">
                  {{ $consultation->description }}
                </div>

                <div class="consultation__item">
                  <form action="{{ route('dashboard.consultation.update.consultation', $consultation->id) }}"
                    class="consultation__form" method="POST">
                    @csrf
                    <textarea class="consultation-textarea__textarea ckeditor"
                      name="description">{{ $consultation->description }}</textarea>
                    <input class="consultation-textarea__submit red-button" type="submit" value="Редактировать">
                  </form>
                </div>
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