<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Редактирование текста</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Редактирование текста</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.user.update-category-text', $text->id) }}" method="post" class="form__inner-form">
                @csrf

                @foreach($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
				
				<input class="form__input @error('id')input-error @enderror" type="hidden" id="id" name="id" value="{{ $text->id }}">
							
                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper">
                          <label class="form__label" for="name">ID пользователя</label>
                          <input class="form__input @error('user_id')input-error @enderror" type="text" id="user_id"
                            name="user_id" value="{{ $text->user_id }}">
                        </li>
						
						<li class="form__input-wrapper">
                          <label class="form__label" for="name">ID Категории</label>
                          <input class="form__input @error('category_id')input-error @enderror" type="text" id="category_id"
                            name="category_id" value="{{ $text->category_id }}">
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Описание</div>
                  <textarea name="description" id=""
                    class="form__textarea @error('description')input-error @enderror" value="{{ $text->description }}">{{ $text->description }}</textarea>
                </div>
				
                <div class="form__textarea-wrapper">
                  <input class="form__submit red-button" type="submit" value="Сохранить"></input>
                </div>
              </form>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>