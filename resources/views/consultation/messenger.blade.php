@extends('appwide')
@section('title', 'Консультация с врачом в WhatsApp Telegram')
@section('description', 'Консультация с врачом в WhatsApp и Telegram: оперативная помощь, консультации по симптомам, подбор лечения и расписание онлайн-приема. Гарантируем конфиденциальность и доступность 24/7.')
@section('keywords', 'Консультация с врачом в WhatsApp Telegram')
@section('canonical', route('consultation.messenger'))

@section('content')
<section class="main__intro category-intro">
	<div class="category-intro__wrapper">
		<div class="category-intro__inner">
			<div class="category-intro__top">
				<h1 class="category-intro__title">Консультация с врачом в WhatsApp Telegram</h1>
					<div class="category-intro__text"><p>Консультация с врачом в WhatsApp и Telegram: оперативная помощь, консультации по симптомам, подбор лечения и расписание онлайн-приема. Гарантируем конфиденциальность и доступность 24/7.</p>
					
					<p><b>Стоимость текстовых консультаций:</b></p>
					<p>от: 1500 рублей</p>
					<p><b>Стоимость голосовых консультаций:</b></p>
					<p>от: 2000 рублей</p>
					<p><b>Консультация с изучением документов:</b></p>
					<p>+500 рублей</p>
					<p><b>Консультация с назначением лечения:</b></p>
					<p>Обсуждается индивидуально</p>
					<p><b>Стоимость видео-консультаций:</b></p>
					<p>от: 3000 рублей</p>
					</div>
					<div class="category-intro__consultation-buttons">
						<a href="//wa.me/79656570181?text=Я готов(а) оплатить консультацию или консультация уже оплачена. У меня вопрос:%20" class="category-intro__consultation-btn category-intro__consultation-btn--whatsapp" rel="nofollow" >WhatsApp</a>
						<a href="https://t.me/adamarxo?text=Я готов(а) оплатить консультацию или консультация уже оплачена. У меня вопрос:%20" class="category-intro__consultation-btn category-intro__consultation-btn--telegram" rel="nofollow" >Telegram</a>
					</div>
			</div>
		</div>
	</div>
</section>
@endsection