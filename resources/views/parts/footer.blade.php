<footer class="footer">
  <div class="footer__outer">
    <div class="footer__wrapper container">
      <div class="footer__left">
        <ul class="footer__links">
          <li class="footer__links-item">
            <a href="/" class="footer__link">О нас</a>
          </li>
		  Кто консультирует на сайте О нас Контакты Отзывы о нас Пользовательское соглашение Правила сайта 
		  <li class="footer__links-item">
            <a href="/page/sitemap" class="footer__link">Карта сайта</a>
          </li> Комментарии Форум Спросить юриста Архив
		  
          <li class="footer__links-item">
            <a href="{{ route('login') }}" class="footer__link">Войти</a>
          </li>
        </ul>
        <div class="footer__desc">
          <span class="footer__small-text">
            Телемедицина, детские и взрослые врачи. При использовании материалов гиперссылка на puzkarapuz.ru
            обязательна.
            Юридический адрес: г. Уфа, ул. Проспект Октября 132/2 офис. 54
          </span>
        </div>
      </div>
      <div class="footer__right">
        <a href="" class="footer__big-link">8 800 555-66-45
        </a>
        <a href="" class="footer__big-link">support@puzkarapuz.ru
        </a>
        <a href="{{ route('consult.form') }}" class="footer__online-consultation">Онлайн консультация </a>
        <div class="footer__social">
          <a href="/" class="footer__social-link">
            <img src="" alt="" class="footer__social-img">
          </a>
          <a href="/" class="footer__social-link">
            <img src="" alt="" class="footer__social-img">
          </a>
          <a href="/" class="footer__social-link">
            <img src="" alt="" class="footer__social-img">
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
@include('parts.metrika')

</body>