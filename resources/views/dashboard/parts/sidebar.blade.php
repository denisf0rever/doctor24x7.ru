 <nav class="wrapper__menu menu">
        <div class="menu__wrapper">
          <ul class="menu__list">
            <li class="menu__item">
              <a href="{{ route('dashboard.article') }}" class="menu__link">Статьи</a>
            </li>
			<li class="menu__item">
              <a href="{{ route('dashboard.user') }}" class="menu__link">Пользователи</a>
            </li>
			<li class="menu__item">
              <a href="{{ route('dashboard.consultation') }}" class="menu__link">Консультации</a>
            </li>
			<li class="menu__item">
              <a href="{{ route('dashboard.consultation.discussion') }}" class="menu__link">Дискуссии</a>
            </li>
			<li class="menu__item">
              <a href="{{ route('dashboard.tariff.index') }}" class="menu__link">Тарифы</a>
            </li>
			<li class="menu__item">
              <a href="{{ route('dashboard.payment.index') }}" class="menu__link">Платежи</a>
            </li>
			<li class="menu__item">
              <a href="{{ route('dashboard.invoice.index') }}" class="menu__link">Счета</a>
            </li>
          </ul>
        </div>
      </nav>
      <nav class="wrapper__menu-mobile menu-mobile">
        <div class="menu-mobile__wrapper menu-mobile__hide">
          <ul class="menu-mobile__list">
            <li class="menu-mobile__item">
              <a href="{{ route('dashboard.article') }}" class="menu-mobile__link">Статьи</a>
            </li>
			<li class="menu-mobile__item">
              <a href="{{ route('dashboard.user') }}" class="menu-mobile__link">Пользователи</a>
            </li>
			<li class="menu-mobile__item">
              <a href="{{ route('dashboard.consultation') }}" class="menu-mobile__link">Консультации</a>
            </li>
			<li class="menu-mobile__item">
              <a href="{{ route('dashboard.consultation.discussion') }}" class="menu-mobile__link">Дискуссии</a>
            </li>
			<li class="menu-mobile__item">
             <a href="{{ route('dashboard.tariff.index') }}" class="menu-mobile__link">Тарифы</a>
            </li>
			<li class="menu-mobile__item">
             <a href="{{ route('dashboard.payment.index') }}" class="menu-mobile__link">Платежи</a>
            </li>
			<li class="menu-mobile__item">
             <a href="{{ route('dashboard.invoice.index') }}" class="menu-mobile__link">Счета</a>
            </li>
          </ul>
        </div>
      </nav>
