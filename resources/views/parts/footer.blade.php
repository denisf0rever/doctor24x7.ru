<footer class="footer">
  <div class="footer__wrapper container-small">
    <div class="footer__title">OkuOku</div>
    <div class="footer__lists">
      <ul class="footer__list footer__list-login">
        <li class="footer__list-item"><a href="#" class="footer__list-link">@if (Route::has('login'))
            @auth
				<a href="{{ url('/home') }}" target="_blank">Панель</a>
				@else
				<a href="{{ route('login') }}">Войти</a>

				@if (Route::has('register'))
				<a href="{{ route('register') }}">Регистрация</a>
				@endif
				@endauth
            @endif</a></li>
      </ul>
      <ul class="footer__list footer__list-second">
        <li class="footer__list-item"><a href="{{ route('articles.list') }}" class="footer__list-link footer__bold">Статьи</a></li>
      </ul>
      <ul class="footer__list footer__list-third">
        <li class="footer__list-item"><a href="#" class="footer__list-link">О компаниии</a></li>
      </ul>
      <ul class="footer__list footer__list-contacts">
        <li class="footer__list-item">
          <span class="footer__text">Служба поддержки:</span>
          <a href="tel:+88003334545" class="footer__text footer__bold">8 800 555 66 45</a>
        </li>
        <li class="footer__list-item">
          <span class="footer__text">Будни: с 6 до 22</span>
          <span class="footer__text">Выходные: с 8 до 22</span>
        </li>
      </ul>
    </div>
    <div class="footer__information">
      <img src="/images/public/pegi.jpg" alt="" class="footer__img">
      <span class="footer__information-text">Информация, опубликованная на данном сайте, предназначена для любой аудитории, если иное не указано дополнительно в отношении отдельных материалов.</span>
    </div>
    <div class="footer__copyright">OKUOKU.RU, 2024 г.</div>
    <div class="footer__information">
      <span class="footer__information-text">Консультация офтальмолога. Сервис работает круглосуточно. Онлайн чат. Телефон.<!--<span class="footer__bold">a</span> .--></span>
    </div>
  </div>
</footer>
</body>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(97323142, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/97323142" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->