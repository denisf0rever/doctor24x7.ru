<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Добавить ответ {{ $comment->id }}</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__consultation-title">№{{ $comment->id }}, {{ $comment->created_at }}</h1>
          <section class="main__consultation consultation">
            <div class="consultation__wrapper white-block">
              <h2 class="consultation__title">Ответить на сообщение # {{ $comment->id }}</h2>
              <div class="consultation__inner">
                <div class="consultation__item">
                  {{ $comment->description }}
                </div>
                <div class="consultation__icons">
                  <div class="consultation__icon">
                    <a href="{{ route('dashboard.consultation.edit-answer', $comment->id)}}" target="_blank">
                      <img src="/images/dashboard/edit.svg" alt="" class="consultation__icon-img">
                    </a>
                  </div>
                  <div class="consultation__icon">
                    <a href="{{ route('dashboard.consultation.destroy-answer', $comment->id) }}">
                      <img src="/images/dashboard/del.svg" alt="" class="consultation__icon-img">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>		  
		  
		<section class="main__consultation-textarea consultation-textarea">
            <div class="consultation-textarea__wrapper white-block">
              <form action="{{ route('dashboard.consultation.create-answer') }}" method="POST">
                @csrf
                <textarea class="consultation-textarea__textarea" name="description">{{ old('description') }}</textarea>
                <input type="hidden" name="comment_id" value="{{ $comment->consultation->id }}">
                <input type="hidden" name="to_answer_id" value="{{ $comment->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                <input type="hidden" name="username" value="{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}">
                <input class="consultation-textarea__submit red-button" type="submit" value="Ответить">
              </form>
            </div>
          </section>
         
        </div>
      </main>
    </div>
  </div>