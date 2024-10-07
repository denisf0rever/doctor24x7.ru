<!DOCTYPE html>
<html>
<body>
    <h1>Здравствуйте, {{ $details['name'] }}</h1>
    <p>Врач ответил на ваш вопрос.</p>
	<p>Посмотреть ответ <a href="https://puzkarapuz.ru/consultation/detail/{{ $details['consultation_id'] }}">здесь</a>.</p>
<p>___________</p>
<p>С уважением, команда сервиса <a href="{{ $details['app_url'] }}">{{ $details['app_name'] }}</a></p>
<p>Техническая поддержка: <a href="tel:{{ $details['app_phone'] }}">{{ $details['app_phone'] }}</a></p>
<p>{{ $details['app_support'] }}</p>
</body>
</html>