<!DOCTYPE html>
<html>

<body
  style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif; margin:0; padding:0;">
  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center">
        <table width="100%" cellpadding="0" cellspacing="0"
          style="background-color:#242424; border-radius: 30px; padding: 10px;">
          <!-- Основной контент -->
          <tr>
            <td style="padding: 15px;">
              <h1 style="color:#fafafa; font-size: 20px; text-align: left; margin-bottom: 15px;">Поступил платный вопрос</h1>
              <p style="color: #fff; line-height: 1.6; font-size: 18px">
				Тариф: {{ $details['tariff'] }}<br />
				Оплачено: {{ $details['price'] }} <br />
				
				{{ $details['consultation_id'] }}
				
				Текст вопроса: {{ $details['description'] }}<br />
				
              </p>
            </td>
          </tr>
		  
		  <!-- Кнопка -->
          <tr>
            <td align="center" style="padding: 20px;">
              <a href="payment/consultation/{{ $details['consultation_id'] }}"
                style="display: inline-block; padding: 15px 25px; background-color:#005ece; color: #ffffff; font-weight: bold; text-decoration: none; border-radius: 5px; cursor:pointer; font-size: 20px">Перейти к ответу</a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>