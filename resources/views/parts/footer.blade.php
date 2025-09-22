<footer class="footer">
  <div class="footer__outer">
    <div class="footer__wrapper container">

      <ul class="footer__links">
        <li class="footer__links-item"><a href="{{ route('page.team') }}" class="footer__link">Врачи</a></li>
        <li class="footer__links-item"><a href="{{ route('page.about-us') }}" class="footer__link">О нас</a></li>
        <li class="footer__links-item"><a href="{{ route('page.contact') }}" class="footer__link">Контакты</a></li>
        <li class="footer__links-item"><a href="{{ route('consultation.testimonials') }}" class="footer__link">Отзывы о
            нас</a></li>
        <li class="footer__links-item"><a href="{{ route('page.terms-of-use') }}" class="footer__link">Пользовательское
            соглашение</a></li>
        <li class="footer__links-item"><a href="{{ route('page.rules') }}" class="footer__link">Правила сайта</a></li>

        <li class="footer__links-item"><a href="{{ route('page.sitemap') }}" class="footer__link">Карта сайта</a></li>
        <li class="footer__links-item"><a href="{{ route('forum.index') }}" class="footer__link">Форум</a></li>
        <li class="footer__links-item"><a href="{{ route('articles.list.items') }}" class="footer__link">Блог</a></li>
        <li class="footer__links-item"><a href="https://consjurist.ru/" class="footer__link" target="_blank">Спросить
            юриста</a></li>
        <li class="footer__links-item"><a href="{{ route('consultation.archive') }}" class="footer__link">Архив</a></li>
        <li class="footer__links-item"><a href="{{ route('login') }}" class="footer__link">Войти</a></li>
      </ul>
      <iframe class="footer__rating" src="https://yandex.ru/sprav/widget/rating-badge/240239415319?type=rating"
        width="150" height="50" frameborder="0"></iframe>
      <div class="footer__desc">
        <span class="footer__small-text">
          Сервис медицинских консультаций. При копировании ссылка на puzkarapuz.ru обязательна.
        </span>
      </div>
    </div>

  </div>
</footer>
@include('parts.metrika')

</body>