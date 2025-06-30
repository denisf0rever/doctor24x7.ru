@extends('appwide')
@section('title', $category->title)
@section('description', $category->metadesc)
@section('keywords', $category->metakey)
@section('canonical', 'forum/' . $category->slug)

@section('content')
<section class="forum">
  <div class="forum__wrapper">
    <div class="forum__inner">
      <div class="forum__left-sidebar">
		@include('forum.menu')
      </div>
      <div class="forum__main">
        <div class="forum__news-catalog forum-news-catalog">
          <div class="forum-news-catalog__wrapper section-wrapper">
            <ul class="forum-news-catalog__list">
				@foreach($consultations as $consultation)
              <li class="forum-news-catalog__item">
                <span class="forum-news-catalog__link">
                 <a href="{{ route('consultation.item', $consultation->id) }}" class="forum-news-catalog__text">{{ $consultation->title }}</a>
                  <a href="#" class="forum-news-catalog__comments">
                    <div class="forum-news-catalog__icon">
                      <svg class="icon icon--comment" viewBox="0 0 24 24" width="16" height="16">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M20.979 11.736c0-5.4-4.383-8.736-9.244-8.736C6.883 3 2.518 6.323 2.5 11.703c-.018 5.38 4.269 8.768 9.236 8.768 1.306 0 2.353-.066 3.619-.57.191-.076.507-.082.81.02l3.044 1.013c.718.216 1.363-.124 1.723-.48.375-.372.707-1.018.511-1.742l-.007-.028-.998-2.992c-.1-.39-.1-.84-.017-1.07l.055-.155c.277-.768.503-1.393.503-2.731ZM11.735 5C7.754 5 4.5 7.653 4.5 11.736s3.254 6.735 7.236 6.735c1.22 0 1.966-.064 2.88-.428.73-.29 1.547-.232 2.184-.02l2.596.866-.875-2.622-.007-.029c-.168-.622-.246-1.535.024-2.29l.06-.168c.246-.682.38-1.054.38-2.044 0-4.082-3.26-6.736-7.243-6.736Z"
                          fill="currentColor"></path>
                      </svg>
                    </div>
                    <span class="forum-news-catalog__comment-number">{{ $consultation->answer_count }}</span>
                  </a>
                </span>
              </li>
			  @endforeach
            </ul>
          </div>
        </div>
      </div>
       <div class="forum__right-sidebar">
      @include('forum.sidebar')
      </div>
    </div>
  </div>
</section>
@endsection