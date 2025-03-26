@extends('appwide')
@section('title', $consultation->title)
@section('description', $consultation->metadescription)
@section('keywords', $consultation->metakey)
@section('canonical', 'consultation/'. $consultation->id)

@section('content')
  <section class="main__payment-form payment-form big-container section-wrapper">
    <div class="payment-form__inner container">
    <h1 class="payment-form__title">Оплата консультации</h1>
      <h2 class="payment-form__subtitle">Оплатите консультацию и получите гарантированный ответ</h2>
    <div class="payment-form__wrapper">
      <form action="{{ route('payment.consultation.init') }}" method="POST" class="payment-form__form">
        @csrf
        <input type="hidden" name="OrderId" value="{{ $consultation->id }}">
        <input type="hidden" id="tariff_id" name="tariff_id" value="14">
        <input type="hidden" name="Sum" id="total_price" value="500">

        <div class="payment__wrapper container-p">
    <span class="payment__title">Оплата консультации</span>
    <span class="payment__sub-title"></span>
    <span class="payment__small-title">Количество консультантов</span>
    <div class="payment__amount-list">
	
	
        
    		
		<label class="payment__amount-item" for="amount_1">
			<input class="payment__amount-input" hidden="" checked="" type="radio" name="Sum" value="500" id="amount_1" data-id="14">
			<span class="payment__amount-radio">1</span>
		</label>
	  

    
    		
		<label class="payment__amount-item" for="amount_2">
			<input class="payment__amount-input" hidden="" type="radio" name="Sum" value="1200" id="amount_2" data-id="19">
			<span class="payment__amount-radio">2</span>
		</label>
	  

    
    		
		<label class="payment__amount-item" for="amount_3">
			<input class="payment__amount-input" hidden="" type="radio" name="Sum" value="2400" id="amount_3" data-id="1">
			<span class="payment__amount-radio">3</span>
		</label>
	  

    
    		
		<label class="payment__amount-item" for="amount_4">
			<input class="payment__amount-input" hidden="" type="radio" name="Sum" value="2500" id="amount_4" data-id="4">
			<span class="payment__amount-radio">4</span>
		</label>
	  

            </div>
    <span class="payment__small-title">Стоимость консультации</span>

    <div class="payment__urgency-list">
      <label class="payment__urgency-item" for="urgency_1">
        <input class="payment__urgency-input" checked="" hidden="" type="radio" name="urgency" value="300" id="urgency_1">
        <div class="payment__urgency-radio">
          <img src="https://consjurist.ru/images/svg/payment/rocket.svg" alt="" class="payment__urgency-img">
          <div class="payment__urgency-title">800 ₽</div>
          <div class="payment__urgency-subtitle">В течение часа</div>
          <div class="payment__urgency-text">Ожидание ~25м</div>
        </div>
      </label>
      <label class="payment__urgency-item" for="urgency_2">
        <input class="payment__urgency-input" hidden="" type="radio" name="urgency" value="0" id="urgency_2">
        <div class="payment__urgency-radio">
          <img src="https://consjurist.ru/images/svg/payment/turtle.svg" alt="" class="payment__urgency-img">
          <div class="payment__urgency-title">500 ₽</div>
          <div class="payment__urgency-subtitle">Не срочно</div>
          <div class="payment__urgency-text">Ожидание ~2-5ч</div>
        </div>
      </label>
      <label class="payment__urgency-item" for="urgency_3">
        <input class="payment__urgency-input" hidden="" type="radio" name="urgency" value="200" id="urgency_3">
        <div class="payment__urgency-radio">
          <img src="https://consjurist.ru/images/svg/payment/scooter.svg" alt="" class="payment__urgency-img">
          <div class="payment__urgency-title">700 ₽</div>
          <div class="payment__urgency-subtitle">В течение пары часов</div>
          <div class="payment__urgency-text">Ожидание ~1-2ч</div>
        </div>
      </label>
    </div>
    <span class="payment__normal-title">Дополнительные опции</span>
    <div class="payment__bottom">
      <ul class="payment__checkboxes">
        <li class="payment__checkbox payment-checkbox">
          <div class="payment-checkbox__wrapper">
            <div class="payment-checkbox__inner">
              <img src="https://consjurist.ru/images/svg/payment/chat.svg" alt="" class="payment-checkbox__img">
              <div class="payment-checkbox__text-block">
                <div class="payment-checkbox__title">
                  Диалоги в консультации
                  <span class="payment-checkbox__grey-text"></span>
                </div>
                <div class="payment-checkbox__text">
                  Чтобы написать уточнение, дополнить свой вопрос
                </div>
              </div>
              <div class="payment-checkbox__right">
                <div class="payment-checkbox__price">349 ₽</div>
                <label class="payment-checkbox__switch form-switch">
                  <input type="checkbox" class="form-switch__checkbox" name="option_1" value="349">
                  <span class="form-switch__slider"> </span>
                </label>
              </div>
            </div>
          </div>
        </li>
        <li class="payment__checkbox payment-checkbox">
          <div class="payment-checkbox__wrapper">
            <div class="payment-checkbox__inner">
              <img src="https://consjurist.ru/images/svg/payment/private.svg" alt="" class="payment-checkbox__img">
              <div class="payment-checkbox__text-block">
                <div class="payment-checkbox__title">
                  Анонимный вопрос
                  <span class="payment-checkbox__grey-text"></span>
                </div>
                <div class="payment-checkbox__text">
                  Видит только врач
                </div>
              </div>
              <div class="payment-checkbox__right">
                <div class="payment-checkbox__price">99 ₽</div>
                <label class="payment-checkbox__switch form-switch">
                  <input type="checkbox" class="form-switch__checkbox" name="option_2" value="99">
                  <span class="form-switch__slider"> </span>
                </label>
              </div>
            </div>
          </div>
        </li>
        <li class="payment__checkbox payment-checkbox">
          <div class="payment-checkbox__wrapper">
            <div class="payment-checkbox__inner">
              <img src="/images/svg/form-add/pill.svg" alt="" class="payment-checkbox__img">
              <div class="payment-checkbox__text-block">
                <div class="payment-checkbox__title">
                  Фармацевт
                  <span class="payment-checkbox__grey-text"></span>
                </div>
                <div class="payment-checkbox__text">
                  Дополнительно ответит фармацевт
                </div>
              </div>
              <div class="payment-checkbox__right">
                <div class="payment-checkbox__price">249 ₽</div>
                <label class="payment-checkbox__switch form-switch">
                  <input type="checkbox" class="form-switch__checkbox" name="option_2" value="249">
                  <span class="form-switch__slider"> </span>
                </label>
              </div>
            </div>
          </div>
        </li>
        <li class="payment__checkbox payment-checkbox">
          <div class="payment-checkbox__wrapper">
            <div class="payment-checkbox__inner">
              <img src="https://consjurist.ru/images/svg/payment/phone.svg" alt="" class="payment-checkbox__img">
              <div class="payment-checkbox__text-block">
                <div class="payment-checkbox__title">
                  Консультация по телефону
                  <span class="payment-checkbox__grey-text"></span>
                </div>
                <div class="payment-checkbox__text">
                  Удобным для вас способом
                </div>
              </div>
              <div class="payment-checkbox__right">
                <div class="payment-checkbox__price">1500 ₽</div>
                <label class="payment-checkbox__switch payment-checkbox__switch-connect form-switch" id="phone-switch">

                  <input type="checkbox" class="form-switch__checkbox form-switch__checkbox-connect" name="option_2" value="1500">
                  <span class="form-switch__slider"> </span>
                </label>
              </div>
            </div>
            <div class="payment-checkbox__additional-input-wrapper payment-checkbox__hidden">
              <input type="text" disabled="" required="" class="payment-checkbox__additional-input" id="phone-input" placeholder="+7-xxx-xxx-xx-xx" name="option_phone">
            </div>
          </div>
        </li>
        <li class="payment__checkbox payment-checkbox">
          <div class="payment-checkbox__wrapper">
            <div class="payment-checkbox__inner">
              <img src="https://consjurist.ru/images/svg/payment/video-call.svg" alt="" class="payment-checkbox__img">
              <div class="payment-checkbox__text-block">
                <div class="payment-checkbox__title">
                  Видео-консультация
                  <span class="payment-checkbox__grey-text"></span>
                </div>
                <div class="payment-checkbox__text">
                  Удобным для вас способом
                </div>
              </div>
              <div class="payment-checkbox__right">
                <div class="payment-checkbox__price">2500 ₽</div>
                <label class="payment-checkbox__switch payment-checkbox__switch-connect form-switch" id="contact-switch">
                  <input type="checkbox" class="form-switch__checkbox form-switch__checkbox-connect" name="option_video" value="2500">
                  <span class="form-switch__slider"> </span>
                </label>
              </div>
            </div>
            <div class="payment-checkbox__additional-input-wrapper payment-checkbox__hidden">
              <input type="text" required="" disabled="" class="payment-checkbox__additional-input" id="contact-input" placeholder="Контакт" name="phone">
            </div>
          </div>
        </li>
      </ul>
      <div class="payment__result">
        <!--<img src="images/images.png" alt="" class="payment__result-img" />-->
        <div class="payment__result-title">Итого к оплате</div>
        <div class="payment__result-price">800 ₽</div>
      </div>
    </div>
  </div>

  <section class="container-p" style="background: #fff;">
    <div id="payment-options-anchor"><h1 class="payment__normal-title" style="margin-bottom: 0">Выберите способ оплаты</h1></div>	   
    
    <div class=" payment-options payment-options-pay" style="overflow: hidden;">
    
      <div class="block-border-inside payments-pay payment-options-pay">	
      <div class="b-payment">
      <input type="radio" name="paymentType" value="AC" id="ac">
      <label for="ac" class="b-payment__click-block">
        <span class="b-payment__icon"><span class="group-pay-icons"><img src="https://consjurist.ru/images/svg/payment/card.svg"></span></span><span class="b-payment__body"><span class="b-payment__title">Банковская карта</span><span class="b-payment__text">Любой банк</span></span></label>
        </div>	
		
      <div class="b-payment">
      <input type="radio" name="paymentType" value="SB" id="SB">
      <label for="SB" class="b-payment__click-block">
        <span class="b-payment__icon"><span class="group-pay-icons"><img src="https://consjurist.ru/images/svg/payment/SB.svg"></span></span><span class="b-payment__body"><span class="b-payment__title">SberPay</span><span class="b-payment__text">Оплата SberPay</span></span></label>
        </div>
      
      <div class="b-payment">
      <input type="radio" name="paymentType" value="PC" id="pc">
      <label for="pc" class="b-payment__click-block">
        <span class="b-payment__icon"><span class="group-pay-icons"><img src="/images/svg/payment/yad.svg"></span></span><span class="b-payment__body"><span class="b-payment__title">ЮMoney</span><span class="b-payment__text">Оплата из кошелька в ЮMoney</span></span></label>
        </div>
      
      <div class="b-payment">
      <input type="radio" name="paymentType" value="MC" id="mts">
      <label for="mts" class="b-payment__click-block">
        <span class="b-payment__icon"><span class="group-pay-icons"><img src="/images/svg/payment/mts.svg"></span></span><span class="b-payment__body"><span class="b-payment__title">МТС</span><span class="b-payment__text">Оплата с баланса телефона</span></span></label>
        </div>
		
		<div class="b-payment">
      <input type="radio" name="paymentType" value="MC" id="mts">
      <label for="mts" class="b-payment__click-block">
        <span class="b-payment__icon"><span class="group-pay-icons"><img src="/images/svg/payment/beeline.svg"></span></span><span class="b-payment__body"><span class="b-payment__title">Билайн</span><span class="b-payment__text">Оплата с баланса телефона</span></span></label>
        </div>
          
    </div> 
	<div class="foreign-pay"><span>Нет возможности оплатить картами РФ? <a href="https://t.me/infinity_operatorr" target="_blank">Свяжитесь с нами в Telegram</a></span></div>
    <div class="payment-options-pay" id="payment-options-button_pay"><input type="submit" value="Оплатить консультацию" class="button-payment"></div>
     </div>
</section>

       
      </form>
    </div>
    </div>
  </section>
</div>
@endsection