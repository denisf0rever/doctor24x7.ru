@foreach($comments as $comment)
@if ($comment->children)
@if($comment->user_id)
<div class="comment" answer-id="{{ $comment->id }}">
  <div class="comment__wrapper comment__children  white-block">
    <div class="comment__paid-answer">
      <svg class="comment__paid-answer-svg">
        <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
        <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
        <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
      </svg>
    </div>
    <div class="comment__menu-btn custom-select" data-id="300330">
      <svg class="comment__menu-btn-svg">
        <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
        <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
        <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
      </svg>
      <div class="custom-select__wrapper custom-select__hide comment__menu">
        <ul class="comment__menu-list">
			<li class="comment__menu-item"><a class="comment__menu-item-link delete-link"
				href="{{ route('dashboard.consultation.destroy-answer', $comment->id) }}">Удалить</a></li>
			<li class="comment__menu-item"><a class="comment__menu-item-link"
				href="{{ route('dashboard.consultation.edit-answer', $comment->id) }}">Редактировать</a></li>
			<li class="comment__menu-item"><a class="comment__menu-item-link"
				href="{{ route('dashboard.consultation.answer.block', $comment->id) }}">Заблокировать ответ</a></li>
        </ul>
      </div>
    </div>
    <a href="/profile/elenamihailovna" class="comment__user-link" id="elenamihailovna">
      <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $comment->user->avatar ? $comment->user->avatar : d}}"
        class="comment__avatar-main">
      <span class="comment__user-name">{{ $comment->username }}</span>
      <span class="comment__user-subtitle">{{ $comment->user->city }}</span>
    </a>
    <div class="comment__text"> {{ $comment->description }}</div>
    <div class="comment__ansv comment__to-answ">Ответить</div>
  </div>
</div>
@else
<div class="comment" answer-id="{{ $comment->id }}">
  <div class="comment__wrapper comment__children  white-block">
    <div class="comment__menu-btn custom-select" data-id="300330">
      <svg class="comment__menu-btn-svg">
        <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
        <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
        <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
      </svg>
      <div class="custom-select__wrapper custom-select__hide comment__menu">
        <ul class="comment__menu-list">
			<li class="comment__menu-item"><a class="comment__menu-item-link delete-link"
				href="{{ route('dashboard.consultation.destroy-answer', $comment->id) }}">Удалить</a></li>
			<li class="comment__menu-item"><a class="comment__menu-item-link"
				href="{{ route('dashboard.consultation.edit-answer', $comment->id) }}">Редактировать</a></li>
			<li class="comment__menu-item"><a class="comment__menu-item-link"
				href="{{ route('dashboard.consultation.answer.block', $comment->id) }}">Заблокировать ответ</a></li>
        </ul>
      </div>
    </div>
    <a href="/profile/elenamihailovna" class="comment__user-link" id="elenamihailovna">
      <img src="/uploads/sfGuard/avatars/ebe21773a3e3b955b3d43312bf5f41298e000639.jpg" class="comment__avatar-main">
      <span class="comment__user-name">{{ $comment->username }}</span>
      <span class="comment__user-subtitle"></span>
    </a>
    <div class="comment__text"> {{ $comment->description }}</div>
    <div class="comment__ansv comment__to-answ">Ответить</div>
  </div>
</div>

@endif
@include('dashboard.consultation.childcomment', ['comments' => $comment->children])
@endif
@endforeach