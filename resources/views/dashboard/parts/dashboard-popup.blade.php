  <div class="dashboard-popup dashboard-popup__hide">
    <div class="dashboard-popup__wrapper">
      <div class="dashboard-popup__close">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" class="loaded">
          <g fill="none" fill-rule="evenodd">
            <path fill="#515151" d="M.04 21.753L21.253.54l.707.707L.747 22.46z"></path>
            <path fill="#525252" d="M21.96 21.753L.747.54l-.707.707L21.253 22.46z"></path>
          </g>
        </svg>
      </div>
      <div class="dashboard-popup__content">
        <div class="dashboard-popup__item" popup-action="resume">
          <span class="dashboard-popup__item-text"> Продолжить </span>
          <img src="{{ Storage::url('dashboard/del-white.svg') }}" alt="" class="dashboard-popup__item-img">
        </div>
        <div class="dashboard-popup__item" popup-action="cancel">
          <span class="dashboard-popup__item-text"> Отменить </span>
          <img src="{{ Storage::url('dashboard/cancel-white.svg') }}" alt="" class="dashboard-popup__item-img">
        </div>
      </div>
    </div>
  </div>