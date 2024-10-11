<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Редактирование сообщения # {{ $comment->id }}</title>
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

          <section class="main__consultation-textarea consultation-textarea">
            <div class="consultation-textarea__wrapper white-block">
              <h2 class="consultation__title">Редактирование сообщения # {{ $comment->id }}</h2>
			    <div class="consultation__inner">
					<div class="consultation__item">
						{{ $comment->description }}
					</div>
					
					<div class="consultation__item">
						 <form action="{{ route('dashboard.consultation.update.answer', $comment->id) }}" method="POST">
                @csrf
                <textarea class="consultation-textarea__textarea ckeditor" name="description">{{ $comment->description }}</textarea>
                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                <input type="hidden" name="username"
                  value="{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}">
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