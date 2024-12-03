<div class="experts-list__expert-wrapper">
        <a href="/profile/{{ $user->username }}" class="experts-list__expert">
          <img
            src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $user->avatar }}"
            alt="" class="experts-list__expert-img">
          <div class="experts-list__expert-fullname">{{ $user->last_name .' '. $user->first_name .' '. $user->middle_name }}</div>
          <div class="experts-list__expert-status">Врач</div>
        </a>
        <a href="#{{ $user->username }}" class="experts-list__anchor">
          <img src="" alt="" class="experts-list__anchor-img">
        </a>
      </div>