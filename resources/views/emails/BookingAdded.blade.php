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
              <h1 style="color:#fafafa; font-size: 25px; text-align: left; margin-bottom: 15px;">Здравствуйте,
                {{ $details['name'] }}</h1>
              <p style="color: #999; line-height: 1.6; font-size: 18px;">
                Врач получил ваш вопрос и принял его в работу. Ответ будет предоставлен согласно условиям оплаченного
                тарифа.
              </p>
              <p style="color: #999; line-height: 1.6; font-size: 18px;">
                Мы пришлем вам сообщение на почту, когда врач ответит вам.
              </p>
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