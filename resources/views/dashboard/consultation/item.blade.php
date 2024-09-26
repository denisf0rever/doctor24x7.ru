<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ $consultation->title }}</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Консультация №{{ $consultation->id }}</h1>

          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">{{ $consultation->title }}</h2>
              <div class="pages__inner">
                  <div class="pages__item">
					{{ $consultation->description }}
                  </div>
				  
				  <span class="pages__views-id">{{ $consultation->created_at }}</span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.consultation.edit', $consultation->id)}}" target="_blank">
                          <img src="/images/dashboard/edit.svg" alt="" class="pages__icon-img">
                        </a>
                      </div>
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.consultation.destroy', $consultation->id) }}">
                          <img src="/images/dashboard/del.svg" alt="" class="pages__icon-img">
                        </a>
                      </div>
                    </div>
              </div>
            </div>
          </section> 
		  
		   <br /><br />
		   
		    <section class="main__pages booking">
            <div class="pages__wrapper">
				<div style="display:flex; border-radius: 24px;justify-content: space-between;background-color: #f2f3f5;">
					<div style="box-sizing: border-box;width: 100%;">Чтобы ответить, нажмите взять вопрос</div>
					<div style="max-width: 254px;"><button style="background-color: #ef3124;
    color: hsla(0,0%,100%,.94);align-content: center;
    align-items: center;
    background-color: transparent;
    border: 0;
    border-radius: 8px;
    box-shadow: none;
    box-sizing: border-box;
    cursor: pointer;
    display: inline-flex;
    flex-direction: row;
    flex-wrap: nowrap;
    font-family: system-ui,-apple-system,Segoe UI,Roboto,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 500;
    justify-content: center;
    line-height: 20px;
    margin: 0;
    outline: 0;
    padding: 0 24px;
    position: relative;
    text-align: center;
    text-decoration: none;
    transition: background .2s ease,border .2s ease,color .2s ease,transform .12s ease;
    -webkit-user-select: none;
    user-select: none;
    vertical-align: middle;
    will-change: transform;" type="submit" onclick="makeBooking()"><span class="button__text_1mgd7 button__stretchText_1mgd7">Продолжить</span></button></div></div>
            </div>
          </section>
		    <br /><br />
			
		   <section class="main__pages pages">
            <div class="pages__wrapper">
				<form action="" method="POST">
				
				 @csrf
					<textarea style="width:100%;height:150px"></textarea>
					<input type="submit" value="Отправить">
				</form>
            </div>
          </section>
		  <br /><br />
		  
		   @foreach($comments as $comment)
                <div style="display:flex;margin-bottom: 40px;padding:15px;border-radius: 8px;background:#fff">
                <div> {{ $comment->description }}</div>
                <div> Ответить</div>
                <div> Удалить</div>
                </div>
				@include('dashboard.consultation.childcomment', ['comments' => $comment->children])
            @endforeach
			
			<script>

	const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
	async function makeBooking() {
		
		
	const data = {
            'id': {{ $consultation->id }}
        };
		
        try {
			
		
            const response = await fetch(`{{ route('dashboard.consultation.booking', $consultation->id) }}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: {{ $consultation->id }}
            });

        // Проверка успешности ответа
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }

        // Получение данных из ответа (в формате JSON)
        const data = await response.json();

        // Предполагаем, что мы ожидаем, что объект данных будет содержать поле 'success'
        if (data.success) {
			console.log(data.message);
           
        } else {
            console.log("Запрос выполнен, но не success.");
        }
    } catch (error) {
        console.error("Ошибка при выполнении запрос: ", error);
    }
}
	
</script>
		 
		  
		 
        </div>
      </main>
    </div>
  </div>