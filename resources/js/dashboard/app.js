import {
    ClassicEditor,
    Essentials,
    Bold,
    Italic,
    Font,
    Paragraph,
    BlockQuote,
    Link,
} from "ckeditor5";

import { Fancybox } from "@fancyapps/ui";

import "ckeditor5/ckeditor5.css";

window.onload = () => {
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    const tubButtons = document.querySelectorAll(".form__tab-button");
    const tubs = document.querySelectorAll(".form__tab");

    tubButtons.forEach((el, key) => {
        el.onclick = () => {
            tubButtons.forEach((innerEl, innerKey) => {
                if (innerKey === key) {
                    tubButtons[innerKey].classList.add(
                        "form__tab-button-active"
                    );
                    tubs[innerKey].classList.add("form__tab-active");
                } else {
                    tubButtons[innerKey].classList.remove(
                        "form__tab-button-active"
                    );
                    tubs[innerKey].classList.remove("form__tab-active");
                }
            });
        };
    });

    // DROPDAWN SELECT

    const selectWrapper = document.querySelectorAll(".form__select-wrapper");

    if (selectWrapper.length > 0) {
        selectWrapper.forEach((el) => {
            const select = el.querySelector(".form__status-select");
            const selectArrow = el.querySelector(".form__status-arrow");
            const selectOptions = el.querySelectorAll(".form__status-option");
            const selectInput = el.querySelector(".form__status-current");
            const selectInputText = el.querySelector(
                ".form__status-current-text"
            );

            el.onclick = () => {
                selectArrow.classList.toggle("form__rotate-arrow");
                select.classList.toggle("form__status-hide");
            };

            if (selectOptions.length > 0) {
                selectOptions.forEach((el, key) => {
                    if (selectInput.value === el.innerHTML) {
                        el.classList.add("form__status-option-active");
                    }
                });
            }

            if (selectOptions.length > 0) {
                selectOptions.forEach((el, key) => {
                    if (selectInput.value == el.value) {
                        selectInputText.innerHTML = el.innerHTML;
                    }
                });
            }

            if (selectOptions.length > 0) {
                selectOptions.forEach((el, key) => {
                    el.onclick = () => {
                        selectOptions.forEach((innerEl, innerKey) => {
                            if (key === innerKey) {
                                innerEl.classList.add(
                                    "form__status-option-active"
                                );
                                selectInput.setAttribute(
                                    "value",
                                    innerEl.value
                                );
                                selectInputText.innerHTML = innerEl.innerHTML;
                            } else {
                                innerEl.classList.remove(
                                    "form__status-option-active"
                                );
                            }
                        });
                    };
                });
            }
        });
    }

    // DROPDAWN MULTISELECT
    const multiselect = document.querySelectorAll(".custom-multiselect");

    if (multiselect.length > 0) {
        multiselect.forEach((el) => {
            const selectedValues = []; // Для хранения выбранных значений
            const multiselectInput = el.querySelector(
                ".custom-multiselect__input"
            );
            const multiselectOptions = el.querySelectorAll(
                ".custom-multiselect__option"
            );

            if (multiselectOptions.length > 0) {
                multiselectOptions.forEach((option) => {
                    option.onclick = () => {
                        if (
                            option.classList.contains(
                                "custom-multiselect__option-active"
                            )
                        ) {
                            option.classList.remove(
                                "custom-multiselect__option-active"
                            );
                            const index = selectedValues.indexOf(option.value);
                            if (index > -1) {
                                selectedValues.splice(index, 1);
                            }
                        } else {
                            option.classList.add(
                                "custom-multiselect__option-active"
                            );
                            selectedValues.push(option.value);
                        }

                        // Обновляем input значениями
                        multiselectInput.value = selectedValues.join(",");

                        // Формируем структуру для передачи на сервер
                        const formData = new FormData();
                        selectedValues.forEach((value) => {
                            formData.append(
                                "sf_consultation_traiff_filters[rubrics_list][]",
                                value
                            );
                        });
                    };
                });
            }
        });
    }

    // BURGER

    const menuBurger = document.querySelector(".header__menu-button");
    const menuMobile = document.querySelector(".menu-mobile__wrapper");

    if (menuBurger) {
        menuBurger.onclick = (el) => {
            menuMobile.classList.toggle("menu-mobile__hide");
        };
    }

    // ANALYZE TEXT

    const timeToReadInput = document.querySelector("#reading-time");
    const fullText = document.querySelector("#full-text");

    const stripHTML = (html) => {
        let div = document.createElement("div");
        div.innerHTML = html;
        return div.textContent || div.innerText || "";
    };

    const getMinuteDeclension = (minutes) => {
        if (minutes % 10 === 1 && minutes % 100 !== 11) {
            return "минута";
        } else if (
            [2, 3, 4].includes(minutes % 10) &&
            ![12, 13, 14].includes(minutes % 100)
        ) {
            return "минуты";
        } else {
            return "минут";
        }
    };

    const analyzeText = () => {
        const plainText = stripHTML(fullText.value);

        // Подсчитываем количество символов без учета пробелов
        const charCount = plainText.replace(/\s+/g, "").length;

        // Средняя скорость чтения: 200 слов в минуту, 5 символов на слово -> 1000 символов в минуту
        const readingSpeed = 1000; // символов в минуту
        const readingTime = Math.ceil(charCount / readingSpeed);
        timeToReadInput.setAttribute(
            "value",
            `${readingTime} ${getMinuteDeclension(readingTime)}`
        );
    };

    if (fullText) {
        fullText.addEventListener("input", analyzeText);
    }

    /* ТОСТ */

    const toastHtml = (text) => {
        return `
        <div class="toast" id="toast">
          <div class="toast__container">
            <div class="toast__item">
              ${text}
            </div>
          </div>
        </div>
  `;
    };

    const hideToast = () => {
        const toast = document.getElementById("toast");
        if (toast) {
            toast
                .querySelector(".toast__container")
                .classList.remove("toast__show");
            setTimeout(() => {
                toast.remove();
            }, 500);
        }
    };

    const showToast = (toast) => {
        if (toast) {
            // Показываем тост с задержкой
            setTimeout(() => {
                toast
                    .querySelector(".toast__container")
                    .classList.add("toast__show");
            }, 100);

            // Автоматически скрываем тост через 5 секунд
            setTimeout(hideToast, 5000);
        }
    };

    const toast = document.getElementById("toast");

    showToast(toast);

    const addToast = (message) => {
        let toast = document.getElementById("toast");
        if (toast) {
            setTimeout(() => {
                addToast(message);
            }, 1000);
        } else {
            const toastMarkup = toastHtml(message);
            document.body.insertAdjacentHTML("beforeend", toastMarkup);
            toast = document.getElementById("toast");
            showToast(toast);
        }
    };

    /* ТОСТ */

    /* КАСТОМНЫЙ СЕЛЕКТОР */

    const selectWrappers = document.querySelectorAll(".custom-select");

    if (selectWrappers.length > 0) {
        selectWrappers.forEach((selectWrapper) => {
            const select = selectWrapper.querySelector(
                ".custom-select__wrapper"
            );
            const selectArrow = selectWrapper.querySelector(
                ".custom-select__arrow"
            );

            selectWrapper.onclick = (e) => {
                e.stopPropagation(); // предотвращаем всплытие клика
                if (selectArrow) {
                    selectArrow.classList.toggle("custom-select__rotate-arrow");
                }
                select.classList.toggle("custom-select__hide");
            };

            document.addEventListener("click", (e) => {
                if (!selectWrapper.contains(e.target)) {
                    if (selectArrow) {
                        selectArrow.classList.remove(
                            "custom-select__rotate-arrow"
                        );
                    }
                    select.classList.add("custom-select__hide");
                }
            });
        });
    }

    /* КАСТОМНЫЙ СЕЛЕКТОР */

    /* БРОНИРОВАНИЕ КОНСУЛЬТАЦИИ */

    if (
        document.querySelector('meta[name="csrf-token"]') &&
        document.querySelector('meta[name="user-id"]') &&
        document.querySelector('meta[name="booking-url"]')
    ) {
        const csrfToken = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");
        const userId = document
            .querySelector('meta[name="user-id"]')
            .getAttribute("content");
        const bookingUrl = document
            .querySelector('meta[name="booking-url"]')
            .getAttribute("content");

        const url = window.location.href; // Получаем полный URL
        const segments = url.split("/"); // Разбиваем строку URL по символу '/'
        const consultationId = segments[segments.length - 1]; // Получаем последний сегмент (ID)

        const makeBookingBtn = document.querySelector("#makeBooking");

        if (makeBookingBtn) {
            makeBookingBtn.onclick = () => {
                makeBooking(makeBookingBtn);
                makeBookingBtn.style.display = "none";
            };
        }

        async function makeBooking(btn) {
            const answerFullname = document.querySelector("#question-fullname");
            const answerEmail = document.querySelector("#question-email");

            addLoader(btn); // Показать лоадер перед началом запроса

            try {
                const response = await fetch(bookingUrl, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken,
                    },
                    body: JSON.stringify({
                        consultation_id: +consultationId,
                        user_id: +userId,
                        author_name: answerFullname.innerHTML,
                        author_email: answerEmail.innerHTML,
                    }),
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }

                const data = await response.json();

                if (data.message) {
                    document.querySelector(".booking__text").innerHTML =
                        data.message;
                } else {
                    document.querySelector(".booking__text").innerHTML =
                        "Произошла ошибка";
                }

                document.querySelector(".booking__button").style.display =
                    "none";

                if (!data.success) {
                    document
                        .querySelector(".booking__wrapper")
                        .classList.add("booking__is-taken");
                } else {
                    document
                        .querySelector(".booking__wrapper")
                        .classList.add("booking__is-free");
                }
            } catch (error) {
                console.error("Ошибка при выполнении запроса: ", error);
            } finally {
                removeLoader(); // Удалить лоадер после завершения запроса (в любом случае)
            }
        }
    }

    /* БРОНИРОВАНИЕ КОНСУЛЬТАЦИИ */

    /* ПОДТВЕРЖДЕНИЕ УДАЛЕНИЯ */
    const dashboardPopup = document.querySelector(".dashboard-popup");
    const dashboardPopupClose = document.querySelector(
        ".dashboard-popup__close"
    );
    const dashboardItem = document.querySelectorAll(".dashboard-popup__item");
    const deleteLinks = document.querySelectorAll(".delete-link");

    if (deleteLinks.length > 0) {
        deleteLinks.forEach((el) => {
            el.addEventListener("click", (event) => {
                event.preventDefault();

                if (!dashboardPopup) return;

                dashboardPopup.classList.remove("dashboard-popup__hide");

                // Закрытие попапа при клике на кнопку закрытия
                dashboardPopupClose.onclick = () => {
                    dashboardPopup.classList.add("dashboard-popup__hide");
                    removeDocumentClickHandler();
                };

                // Закрытие попапа при клике на элементы списка
                dashboardItem.forEach((itemEL) => {
                    itemEL.onclick = () => {
                        const action = itemEL.getAttribute("popup-action");

                        if (action === "resume") {
                            window.location.href = el.href;
                        }

                        dashboardPopup.classList.add("dashboard-popup__hide");
                        removeDocumentClickHandler();
                    };
                });

                // Отложенное добавление обработчика клика вне попапа
                setTimeout(() => {
                    document.addEventListener("click", documentClickHandler);
                }, 0);

                function documentClickHandler(event) {
                    if (
                        !dashboardPopup.contains(event.target) &&
                        event.target !== el
                    ) {
                        dashboardPopup.classList.add("dashboard-popup__hide");
                        removeDocumentClickHandler();
                    }
                }

                function removeDocumentClickHandler() {
                    document.removeEventListener("click", documentClickHandler);
                }
            });
        });
    }

    /* ПОДТВЕРЖДЕНИЕ УДАЛЕНИЯ */

    /*TEXTAREA EDITOR */

    // if (document.querySelector('.ckeditor')) {
    //   ClassicEditor
    //     .create(document.querySelector('.ckeditor'), {
    //       height: '130px',
    //       plugins: [Essentials, Bold, Italic, Font, Paragraph, BlockQuote, Link],
    //       toolbar: [
    //         'undo', 'redo', '|', 'bold', 'italic', '|',
    //         'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'blockQuote', 'Link'
    //       ]
    //     })
    // }

    /*TEXTAREA EDITOR */

    /*РАСКРЫТИЕ ФОРМЫ ОТВЕТА */

    const toAnswBtn = document.querySelectorAll(".comment__to-answ");
    const answForm = document.querySelector(".comment__migration-form");
    const toAnswerIdInput = document.querySelector("#to_answer_id");
    const toAnswerFullnameInput = document.querySelector("#author_username");
    const toAnswerEmailInput = document.querySelector("#author_email");

    if (toAnswBtn.length > 0) {
        toAnswBtn.forEach((el) => {
            el.onclick = (event) => {
                event.preventDefault();
                answForm.remove();
                el.parentNode.insertBefore(answForm, el);
                answForm.classList.remove("hide");
                let commentId = el
                    .closest(".comment")
                    .getAttribute("answer-id");
                let commentUsername = el
                    .closest(".comment")
                    .getAttribute("answer-author_username");
                let commentEmail = el
                    .closest(".comment")
                    .getAttribute("answer-author_email");
                commentId = commentId.replace(/\D/g, "");
                toAnswerIdInput.value = commentId;
                toAnswerFullnameInput.value = commentUsername;
                toAnswerEmailInput.value = commentEmail;
                toAnswBtn.forEach((btn) => {
                    btn.classList.remove("hide");
                });
                el.classList.add("hide");
            };
        });
    }

    /*РАСКРЫТИЕ ФОРМЫ ОТВЕТА */

    /*РАСКРЫТИЕ НАСТРОЕК В КНОПКЕ ПРОФИЛЯ */

    const headerProfileBtn = document.querySelector(".header__avatar-img");
    const headerSettings = document.querySelector(".header-profile");
    const headerSettingsCloseBtn = document.querySelector(
        ".header-profile__close-btn"
    );

    if (headerProfileBtn) {
        headerProfileBtn.onclick = () => {
            headerSettings.classList.remove("hide");
        };

        headerSettingsCloseBtn.onclick = () => {
            headerSettings.classList.add("hide");
        };

        document.addEventListener("click", (event) => {
            if (
                !headerProfileBtn.contains(event.target) &&
                !headerSettings.contains(event.target)
            ) {
                headerSettings.classList.add("hide");
            }
        });
    }

    /*РАСКРЫТИЕ НАСТРОЕК В КНОПКЕ ПРОФИЛЯ */

    /*РАЗМЕР TEXTAREA */
    const autoGrow = (el) => {
        el.style.height = "auto";
        el.style.height = el.scrollHeight + "px";
    };

    const textareaInput = document.querySelectorAll("textarea.form__input");

    if (textareaInput.length > 0) {
        textareaInput.forEach((el) => {
            autoGrow(el);
            el.addEventListener("input", function () {
                autoGrow(this);
            });
        });
    }

    /*РАЗМЕР TEXTAREA */

    /*КНОПКА "СКОПИРОВАТЬ" */

    const copyToClipboard = (text) => {
        navigator.clipboard
            .writeText(text)
            .then(() => {
                addToast("Текст скопирован");
            })
            .catch((err) => {
                addToast("Произошла ошибка");
            });
    };

    const copyBtns = document.querySelectorAll(".copy-btn");

    if (copyBtns.length > 0) {
        copyBtns.forEach((btn) => {
            btn.onclick = () => {
                const closestForm = btn.closest("form");
                const closestTextarea = closestForm.querySelector("textarea");
                copyToClipboard(closestTextarea.value);
            };
        });
    }

    /*КНОПКА "СКОПИРОВАТЬ" */

    /*ГАЛЕРЕЯ */

    Fancybox.bind("[data-fancybox]", {
        loop: true,
        buttons: ["zoom", "close"],
    });

    /*ГАЛЕРЕЯ */

    /* ДЕЙСТВИЯ КОНСУЛЬТАЦИИ */

    const menuPostAction = (csrfToken, url, body, isReload) => {
        if (csrfToken) {
            fetch(url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken,
                },
                body: JSON.stringify(body),
            })
                .then(async (response) => {
                    if (response.ok) {
                        if (isReload) {
                            window.location.reload();
                        }
                    } else {
                        const errorText = await response.text();
                        console.error("Ошибка при отправке POST-запроса:", {
                            status: response.status,
                            statusText: response.statusText,
                            url,
                            errorText,
                        });
                    }
                })
                .catch((error) => {
                    console.error("Ошибка сети или другая проблема:", {
                        message: error.message,
                        stack: error.stack,
                        url,
                    });
                });
        }
    };

    const requestDoc = document.querySelector(".small-menu__link-doc");

    if (requestDoc) {
        const url = window.location.href;
        const segments = url.split("/");
        const consultationId = segments[segments.length - 1];
        requestDoc.onclick = (e) => {
            e.preventDefault();
            menuPostAction(
                csrfToken,
                requestDoc.href,
                { id: +consultationId },
                true
            );
        };
    }

    /* ДЕЙСТВИЯ КОНСУЛЬТАЦИИ */

    /*ФИЛЬТР */

    const filterInput = document.querySelector(".pages__filter-input");
    const filterItems = document.querySelectorAll(".pages__item");
    const filterClear = document.querySelector(".pages__filter-clear");

    if (filterInput && filterItems.length > 0 && filterClear) {
        filterInput.addEventListener("input", function () {
            const filter = filterInput.value.toLowerCase();

            filterItems.forEach((item) => {
                const text = item.textContent.toLowerCase();
                if (text.includes(filter)) {
                    item.style.display = "";
                } else {
                    item.style.display = "none";
                }
            });
        });
        filterClear.addEventListener("click", function () {
            filterInput.value = "";
            filterItems.forEach((item) => {
                item.style.display = "";
            });
        });
    }

    /*ФИЛЬТР */

    /*ЛОАДЕР */

    const loader = `<span class="loader"></span>`;

    const addLoader = (el) => {
        if (el) {
            el.insertAdjacentHTML("afterend", loader);
        }
    };

    const removeLoader = () => {
        const loaderEl = document.querySelector(".loader");
        if (loaderEl) {
            loaderEl.remove();
        }
    };

    /*ЛОАДЕР */
};
