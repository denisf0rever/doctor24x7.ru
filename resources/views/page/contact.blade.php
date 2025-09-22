@extends('appsidebarfree')
@section('title', 'Контакты')
@section('description', 'Контакты')
@section('keywords', 'Контакты')
@section('canonical', route('page.contact'))

@section('content')
<section class="main__info-section info-section">
  <div class="info-section__wrapper section-wrapper">
    <h1 class="info-section__title">Контакты</h1>
    <div class="info-section__main">
      <p class="info-section__p">По указанным номерам медицинские консультации <strong>бесплатно не
          предоставляются</strong>. </p>
      <p class="info-section__p"> <strong>Техническая поддержка:</strong> <a href="tel:+88005556645">8 800 555-66-45</a>
      </p>
      <p class="info-section__p"><strong>E-mail:</strong> support@puzkarapuz.ru </p>
      <p class="info-section__p"> <strong>г. Уфа, ул. Проспект Октября 132/2 офис. 54</strong> </p>
      <p class="info-section__p"><iframe class="info-section__iframe"
          src="https://www.google.com/maps/d/u/0/embed?mid=1T6iE8wRxd0ezgu3SrbRsVtaRwviG9svM" width="320"
          height="480"></iframe></p>
    </div>

  </div>
</section>
@endsection