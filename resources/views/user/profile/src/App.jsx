import { useEffect, useState } from "react"
import OpenChatButton from "./components/OpenChatButton";
import Registration from "./modules/Registration/Registration";
import Header from "./modules/Header/Header";
import Chat from "./modules/Chat/Chat";
import ResumeChat from "./modules/ResumeChat/ResumeChat";
import socket from "./api/socket";

const App = () => {

  const [email, setEmail] = useState('');
  const [name, setName] = useState('');

  const [isChatOpened, setIsChatOpened] = useState(false);
  const [isUserRegistered, setIsUserRegistered] = useState(false);
  const [userCookie, setUserCookie] = useState(null);
  const [currentProfileId, setCurrentProfileId] = useState(null)

  useEffect(() => {
    const currentUrl = window.location.href;

    // Создаем объект URL из текущего URL
    const urlObject = new URL(currentUrl);

    // Получаем путь из URL
    const pathname = urlObject.pathname;

    // Разделяем путь на части
    const pathParts = pathname.split('/');
    // Получаем последний элемент массива, который должен быть номером профиля
    const profileNumber = pathParts.pop();

    setCurrentProfileId(profileNumber);
    console.log(profileNumber); // Выводит номер профиля
  }, [])

  const setChatCookie = (mail) => {
    // Получаем CSRF-токен из мета-тега
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Преобразуем данные в формат URL-кодирования
    const formData = new URLSearchParams();
    formData.append('mail', mail);
    formData.append('expertId', currentProfileId);
    formData.append('_token', csrfToken); // Добавляем CSRF-токен

    fetch('/set-cookie', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded' // Устанавливаем заголовок Content-Type
      },
      body: formData.toString() // Преобразуем данные в строку
    })
      .then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
      })
      .then(data => {
        console.log(data.message); // Обрабатываем ответ от сервера
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }

  const getChatCookie = () => {
    fetch('/get-cookie')
      .then(response => {
        // Проверка, успешно ли выполнен запрос
        if (!response.ok) {
          throw new Error('Network response was not ok ' + response.statusText);
        }
        // Преобразование ответа в JSON
        return response.json();
      })
      .then(data => {
        // Работа с полученными данными
        console.log('cookie:', data);

        // const newData = JSON.parse(data);

        // newData.forEach((el) => {
        //   if (el.mail == currentProfileId) {
        //     setUserCookie(el.mail);            
        //   }
        // })

        setUserCookie(data.mail);
      })
      .catch(error => {
        // Обработка ошибок
        console.error('There has been a problem with your fetch operation:', error);
      });
  }

  useEffect(() => {
    getChatCookie();
  }, []);


  return <>
    {isChatOpened
      ?
      <div className="user-chat__wrapper">
        <Header />
        {isUserRegistered
          ? <Chat name={name} email={email} userCookie={userCookie} />
          : userCookie
            ? <ResumeChat userCookie={userCookie} setUserCookie={setUserCookie} setIsUserRegistered={setIsUserRegistered} currentProfileId={currentProfileId} />
            : <Registration name={name} email={email} setEmail={setEmail} setName={setName} setIsUserRegistered={setIsUserRegistered} setChatCookie={setChatCookie} currentProfileId={currentProfileId} />
        }



        {/* // : <Registration name={name} email={email} setEmail={setEmail} setName={setName} setIsUserRegistered={setIsUserRegistered} />} */}
      </div>
      : null}
    <OpenChatButton setIsChatOpened={setIsChatOpened} isChatOpened={isChatOpened} />
  </>

}

export default App
