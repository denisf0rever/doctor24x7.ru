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
                На ваш вопрос поступило сообщение.<br><br>
              </p>
            </td>
          </tr>
		  
          <tr>
            <td align="center" style="padding: 20px;">
              <a href="https://doctor24x7.ru/chat/{{ $details['consultation_id'] }}"
                style="display: inline-block; padding: 15px 25px; background-color:#005ece; color: #ffffff; font-weight: bold; text-decoration: none; border-radius: 5px; cursor:pointer; font-size: 20px">Перейти в чат</a>
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