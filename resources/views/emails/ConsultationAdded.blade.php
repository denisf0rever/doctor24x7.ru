<!DOCTYPE html>
<html>

<body
  style="background-color:#191a1c; color:#fafafa; font-family:'Helvetica Neue',Helvetica,Arial,sans-serif; margin:0; padding:0;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#191a1c; padding: 10px;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0"
          style="background-color:#242424; border-radius: 30px; padding: 10px;">
          <!-- Основной контент -->
          <tr>
            <td style="padding: 15px;">
              <h1 style="color:#fafafa; font-size: 20px; text-align: left; margin-bottom: 15px;">Здравствуйте, {{
                $details['name'] }}</h1>
              <p style="color: #999; line-height: 1.6; font-size: 15px">
                Вы задали вопрос на нашем сайте. Ответ предоставляют эксперты с большим опытом. <br><br>
                <b style="color:#ffffff;">Оплачивая консультацию, вы получаете:</b><br>
                &bull; гарантированный ответ<br>
                &bull; детальный ответ в течение часа<br>
                &bull; круглосуточную помощь<br>
                &bull; анонимную консультацию<br>
                &bull; расшифровку анализов<br><br>
                Подтверждением нашей компетенции являются <a
                  href="https://puzkarapuz.ru/consultation/testimonials?v=testimonials"
                  style="color:#4CAF50; text-decoration: none;">более 7000 отзывов</a>.
              </p>
            </td>
          </tr>
		  
		  <!-- Кнопка -->
          <tr>
            <td align="center" style="padding: 20px;">
              <a href="{{ $details['app_url'] }}payment/consultation/{{ $details['consultation_id'] }}"
                style="display: inline-block; padding: 15px 25px; background-color:#005ece; color: #ffffff; font-weight: bold; text-decoration: none; border-radius: 5px; cursor:pointer; font-size: 20px">
                Оплатить консультацию
              </a>
            </td>
          </tr>
		  
          <!-- Подпись -->
          <tr>
            <td style="padding: 20px; color: #999; font-size: 14px; text-align: center;">
              С уважением, команда сервиса <a href="{{ $details['app_url'] }}"
                style="color:#fff; text-decoration: none;">{{ $details['app_name'] }}</a><br>
              Техническая поддержка: <a href="tel:{{ $details['app_phone'] }}"
                style="color: #fff; text-decoration: none;">{{ $details['app_phone'] }}</a><br>
              {{ $details['app_support'] }}
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>