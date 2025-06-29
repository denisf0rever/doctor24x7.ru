@foreach($comments as $comment)
<div class="comment__sub-comment" id="answer{{ $comment->id }}"@if($comment->user) user-id="{{ $comment->user->id }}"@endif>
  <div class="comment__user-link-wrapper comment__user-link-wrapper--child">
    <a @if($comment->user) href="/profile/{{ $comment->user->username }}" id="{{ $comment->user->username }}"@else
      href="#answer{{ $comment->id }}"@endif class="comment__user-link">
      {!! $comment->user && $comment->user->avatar ?
      '<img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/'.$comment->user->avatar.'" class="comment__avatar-sub">'
      :
      '<div class="comment__avatar-sub">' . Str::substr($comment->username, 0, 1) . '</div>'
      !!}
      <span
        class="comment__user-name">{{ $comment->user ? $comment->user->first_name .' '. $comment->user->middle_name : $comment->username }}</span>
      <span class="comment__user-subtitle">{{ $comment->user?->city ?? $comment->created_at }}</span>
    </a>
    <div class="comment__menu-btn" data-id="{{ $comment->id }}">
      <svg class="comment__menu-btn-svg">
        <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
        <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
        <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
      </svg>
    </div>
  </div>
  <span class="comment__text">
    <p>@if ($comment->to_answer_id)<a href="#answer{{ $comment->to_answer_id }}">
        {{ trim($comment->parentComment->username) }}</a>, @endif{{ $comment->description }}
    </p>
  </span>

  <div class="comment__answer-field-fake">
    <div class="comments__form-fake" data-id="{{ $comment->id }}">
      <span class="comment__answ">Ответить</span>
      <div class="comment__likes-wrapper">
        <a href="{{ route('consultation.like', $comment->id) }}" class="comment__like-link">
          <div class="comment__like-img">
            <svg viewBox="0 0 24 24" width="16" height="16">
              @if ($comment->like->isNotEmpty())
              <use xlink:href="#like_filled_2ff7--react"></use>
              @else
              <use xlink:href="#like_3e48--react"></use>
              @endif
            </svg>
          </div>
        </a>
        <div class="comment__like-amount">{{ $comment->like_count > 0 ? $comment->like_count : '' }}</div>
        <a href="{{ route('consultation.dislike', $comment->id) }}" class="comment__dislike-link">
          <div class="comment__dislike-img">
            <svg viewBox="0 0 24 24" width="16" height="16">
              <use xlink:href="#dislike_5d1d--react"></use>
            </svg>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
@include('consultation.childcomment', ['comments' => $comment->children])
@endforeach