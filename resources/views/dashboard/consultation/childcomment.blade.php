@foreach($comments as $comment)
@if ($comment->children)
<div class="comment">
  <div class="comment__wrapper comment__children  white-block">
    <div class="comment__menu-btn custom-select" data-id="300330">
      <svg class="comment__menu-btn-svg">
        <circle r="2" fill="#000" cx="50%" cy="50%"></circle>
        <circle r="2" fill="#000" cx="50%" cy="25%"></circle>
        <circle r="2" fill="#000" cx="50%" cy="75%"></circle>
      </svg>
      <div class="custom-select__wrapper custom-select__hide comment__menu">
        <ul class="comment__menu-list">
          <li class="comment__menu-item comment__menu-item-active">Лучшие</li>
          <li class="comment__menu-item">Последние</li>
        </ul>
      </div>
    </div>
    <a href="/profile/elenamihailovna" class="comment__user-link" id="elenamihailovna">
      <img src="/uploads/sfGuard/avatars/ebe21773a3e3b955b3d43312bf5f41298e000639.jpg" class="comment__avatar-main">
      <span class="comment__user-name">Войцехович&nbsp;Елена&nbsp;Михайловна</span>
      <span class="comment__user-subtitle">Республика Беларусь</span>
    </a>
    <div class="comment__text"> {{ $comment->description }}</div>
    <div class="comment__ansv">Ответить</div>
  </div>
  <!-- <div> Ответить</div>
            <div> Удалить</div> -->
</div>
@include('dashboard.consultation.childcomment', ['comments' => $comment->children])
@endif
@endforeach