<!DOCTYPE html>
<html>
<body>
    <h1>Здравствуйте, {{ $details['name'] }}</h1>
    <p>Вы задали вопрос на нашем сайте. Ответ предоставляют эксперты с большим опытом.</p>
	<p><b>Оплачивая консультацию, вы получаете:</b>
	<ul>
		<li>гарантированный ответ,</li>
		<li>детальный ответ в течение часа, с возможностью диалога,</li>
		<li>круглосуточную помощь без выходных и праздников,</li>
		<li>анонимную консультацию,</li>
		<li>расшифровка анализов.</li>
	</ul>
<p>Квалификацию и компетентность подтверждают <a href="https://puzkarapuz.ru/consultation/testimonials?v=testimonials">более 7000 отзывов</a>.</p>
<p>Вы можете <a href="{{ $details['app_url'] }}payment/consultation/{{ $details['consultation_id'] }}">оплатить консультацию</a> и получить ответ.</p>
<p>___________</p>
<p>С уважением, команда сервиса <a href="{{ $details['app_url'] }}">{{ $details['app_name'] }}</a></p>
<p>Техническая поддержка: <a href="tel:{{ $details['app_phone'] }}">{{ $details['app_phone'] }}</a></p>
<p>{{ $details['app_support'] }}</p>
</body>
</html>