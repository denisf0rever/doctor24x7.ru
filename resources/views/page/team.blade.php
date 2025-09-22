@extends('appwide')
@section('title', 'Специалисты сервиса')
@section('description', 'Специалисты сервиса')
@section('keywords', 'Специалисты сервиса')
@section('canonical', route('page.team'))

@section('content')
@if ($doctors->isNotEmpty())
<section class="main__doc-list doc-list">
  <div class="doc-list__wrapper container">
    <h1 class="doc-list__title">Специалисты сервиса</h1>
    <div class="doc-list__list">
      @foreach ($doctors as $doctor)
      <a href="{{ route('profile.user.item', $doctor->username) }}" class="doc-list__link">
        <img src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $doctor->avatar }}" alt="" class="doc-list__img">
        <span class="doc-list__fullname">{{ $doctor->first_name }} {{ $doctor->middle_name }}</span>
        <span class="doc-list__specialization">{{ $doctor->icq }}</span>
      </a>
      @endforeach
    </div>
  </div>
</section>
@endif
@endsection