@extends('app')
@section('title', 'Добавить вопрос')
@section('description', '')
@section('keywords', '')
@section('canonical', 'consultation/create')

@section('content')
@include('parts.sidebar__fullscreen')

@foreach($errors->all() as $error)
{{ $error }} <br />
@endforeach
				
<section class="main__form form">
  <div class="content-block__wrapper">
    <h1 class="content-block__header">Заявка на онлайн консультацию</h1>
    <div class="content-block__subtitle-wrapper">
      <form method="POST" action="{{ route('consult.create') }}" enctype="multipart/form-data">
		@csrf
		<div class="form__input-wrapper">
			<label class="form__label" for="Заголовок вопроса">Заголовок вопроса</label>
			<input class="form__input" type="text" id="username" name="title" value="{{ old('title') }}">
        </div>
		<div class="form__input-wrapper">
			<label class="form__label" for="Возраст пациента">Возраст пациента</label>
			<input class="form__input" type="text" id="age" name="age" value="{{ old('age') }}">
        </div>
		
		<div class="form__input-wrapper">
			<label class="form__label" for="Ваше имя">Как к вам обращаться?</label>
			<input class="form__input" type="text" id="username" name="username" value="{{ old('username') }}">
        </div>
		
		<div class="form__input-wrapper">
			<label class="form__label" for="Ваше имя">Ваш email</label>
			<input class="form__input" type="text" id="email" name="email" value="{{ old('email') }}">
        </div>
		
		<div class="form__input-wrapper">
			<label class="form__label" for="Ваше имя">Ваш город</label>
			<input class="form__input" type="text" id="email" name="city_id" value="5633">
        </div>
		
		<select id="rubric_id" name="rubric_id" class="form__status-select">
			@foreach($categories as $category)
			<option class="" value="{{ $category->id ? $category->id : old('category') }}">{{ $category->short_title }}</option>
			@endforeach
         </select>
					
			<div>
		<textarea name="description" id="description">{{ old('description') }}</textarea>
		</div>
		
		<div>
		
                      <label class="form__label-photo">
                        <img src="/images/dashboard/#.svg" alt="" class="form__input-photo-img">
                        <span class="form__input-photo-text">Загрузить фото</span>
                        <input class="form__input-photo @error('image')input-error @enderror" type="file" name="image">
                      </label>
					  </div>
					  
					  <div class="form__input-wrapper">
			<label class="form__label" for="Ваше имя">Ваш город</label>
			<input class="form__input" type="submit" value="Отправить">
        </div>
	</form>
    </div>
  </div>
</section>
@endsection