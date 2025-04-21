<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Добавить дискуссию</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Добавить дискуссию</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.consultation.discussion.create') }}" method="post" class="form__inner-form"
                enctype="multipart/form-data">
                @csrf

                @foreach($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper">
                          <label class="form__label" for="subrubric_id">ID Подкатегории</label>
                          <input class="form__input @error('subrubric_id')input-error @enderror" type="text" id="subrubric_id"
                            name="subrubric_id" value="{{ old("subrubric_id") }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="comment_id">ID Консультации</label>
                          <input class="form__input @error('comment_id')input-error @enderror" type="text" id="comment_id"
                            name="comment_id" value="{{ old("comment_id") }}">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="title">Заголовок</label>
                          <input class="form__input @error('title')input-error @enderror" type="text" id="title"
                            name="title" value="{{ old("title") }}">
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper"><input class="form__submit red-button" type="submit"></input></div>
              </form>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>