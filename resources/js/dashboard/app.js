window.onload = () => {
  //TUBS
  //123
  const tubButtons = document.querySelectorAll('.form__tab-button');
  const tubs = document.querySelectorAll('.form__tab');

  tubButtons.forEach((el, key) => {
    el.onclick = () => {
      tubButtons.forEach((innerEl, innerKey) => {
        console.log(key, innerKey);
        if (innerKey === key) {
          tubButtons[innerKey].classList.add('form__tab-button-active');
          tubs[innerKey].classList.add('form__tab-active');
        }
        else {
          tubButtons[innerKey].classList.remove('form__tab-button-active');
          tubs[innerKey].classList.remove('form__tab-active');
        }
      })
    }
  })

  // DROPDAWN SELECT

  const selectWrapper = document.querySelector('.form__select-wrapper');
  const select = document.querySelector('.form__status-select');
  const selectArrow = document.querySelector('.form__status-arrow');
  const selectOptions = document.querySelectorAll('.form__status-option');
  const selectInput = document.querySelector('.form__status-current');
  const selectInputText = document.querySelector('.form__status-current-text');

  selectOptions.forEach((el, key) => {
    if (selectInput.value === el.innerHTML) {
      el.classList.add('form__status-option-active');
    }
  })

  selectOptions.forEach((el, key) => {
    console.log(selectInput.value, '--', el.value)
    if (selectInput.value == el.value) {
      selectInputText.innerHTML = el.innerHTML;
    }
  })

  if (selectWrapper) {
    selectWrapper.onclick = () => {
      selectArrow.classList.toggle('form__rotate-arrow');
      select.classList.toggle('form__status-hide');
    }
  }

  if (selectOptions.length > 0) {
    selectOptions.forEach((el, key) => {
      el.onclick = () => {
        selectOptions.forEach((innerEl, innerKey) => {
          if (key === innerKey) {
            innerEl.classList.add('form__status-option-active');
            selectInput.setAttribute("value", innerEl.value);
            selectInputText.innerHTML = innerEl.innerHTML;
          }
          else {
            innerEl.classList.remove('form__status-option-active');
          }
        })
      }
    })
  }

  // BURGER

  const menuBurger = document.querySelector('.header__menu-button');
  const menuMobile = document.querySelector('.menu-mobile__wrapper');

  if (menuBurger) {
    menuBurger.onclick = (el) => {
      menuMobile.classList.toggle('menu-mobile__hide');
    }
  }

  // ANALYZE TEXT

  const timeToReadInput = document.querySelector('#reading-time');
  const fullText = document.querySelector('#full-text');

  const stripHTML = (html) => {
    let div = document.createElement("div");
    div.innerHTML = html;
    return div.textContent || div.innerText || "";
  }

  const getMinuteDeclension = (minutes) => {
    if (minutes % 10 === 1 && minutes % 100 !== 11) {
      return 'минута';
    } else if ([2, 3, 4].includes(minutes % 10) && ![12, 13, 14].includes(minutes % 100)) {
      return 'минуты';
    } else {
      return 'минут';
    }
  }

  const analyzeText = () => {
    const plainText = stripHTML(fullText.value);

    // Подсчитываем количество символов без учета пробелов
    const charCount = plainText.replace(/\s+/g, '').length;

    // Средняя скорость чтения: 200 слов в минуту, 5 символов на слово -> 1000 символов в минуту
    const readingSpeed = 1000; // символов в минуту
    const readingTime = Math.ceil(charCount / readingSpeed);
    timeToReadInput.setAttribute("value", `${readingTime} ${getMinuteDeclension(readingTime)}`);
  }

  if (fullText) {
    fullText.addEventListener("input", analyzeText);

  }

  //TOAST


  const hideToast = () => {
    const toast = document.getElementById('toast');
    if (toast) {
      toast.classList.remove('toast__show');
      setTimeout(() => {
        toast.style.display = 'none';
      }, 500);
    }
  }

  const toast = document.getElementById('toast');

  if (toast) {
    // Показываем тост с задержкой
    setTimeout(() => {
      toast.classList.add('toast__show');
    }, 100);

    // Автоматически скрываем тост через 5 секунд
    setTimeout(hideToast, 5000);
  }

  /* КАСТОМНЫЙ СЕЛЕКТОР */
  const selectWrappers = document.querySelectorAll('.custom-select');

  if (selectWrappers.length > 0) {
    selectWrappers.forEach(selectWrapper => {
      const select = selectWrapper.querySelector('.custom-select__wrapper');
      const selectArrow = selectWrapper.querySelector('.custom-select__arrow');

      selectWrapper.onclick = (e) => {
        e.stopPropagation(); // предотвращаем всплытие клика
        if (selectArrow) {
          selectArrow.classList.toggle('custom-select__rotate-arrow');
        }
        select.classList.toggle('custom-select__hide');
      };

      document.addEventListener('click', (e) => {
        if (!selectWrapper.contains(e.target)) {
          if (selectArrow) {
            selectArrow.classList.remove('custom-select__rotate-arrow');
          }
          select.classList.add('custom-select__hide');
        }
      });
    });
  }

  /* КАСТОМНЫЙ СЕЛЕКТОР */

  /* БРОНИРОВАНИЕ КОНСУЛЬТАЦИИ */

  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  const userId = document.querySelector('meta[name="user-id"]').getAttribute('content');
  const bookingUrl = document.querySelector('meta[name="booking-url"]').getAttribute('content');

  const url = window.location.href; // Получаем полный URL
  const segments = url.split('/'); // Разбиваем строку URL по символу '/'
  const consultationId = segments[segments.length - 1]; // Получаем последний сегмент (ID)

  const makeBookingBtn = document.querySelector('#makeBooking');

  if (makeBookingBtn) {
    makeBookingBtn.onclick = () => {
      makeBooking();
    }
  }

  async function makeBooking() {
    try {
      console.log(bookingUrl);
      const response = await fetch(bookingUrl, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
          'consultation_id': +consultationId,
          'user_id': +userId
        })
      });

      // Проверка успешности ответа
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }

      // Получение данных из ответа (в формате JSON)
      const data = await response.json();

      if (data.message) {
        document.querySelector('.booking__text').innerHTML = data.message;
      } else {
        document.querySelector('.booking__text').innerHTML = 'Произошла ошибка';
      }
      document.querySelector('.booking__button').style.display = 'none';

      if (!data.success) {
        document.querySelector('.booking__wrapper').classList.add('booking__is-taken');
      } else {
        document.querySelector('.booking__wrapper').classList.add('booking__is-free');
      }
    } catch (error) {
      console.error("Ошибка при выполнении запрос: ", error);
    }
  }

  /* БРОНИРОВАНИЕ КОНСУЛЬТАЦИИ */


}