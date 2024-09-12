import Message from "./components/Message";
import NewMessageForm from "./components/NewMessageForm";
import socket from "../../api/socket";
import { useState, useEffect, useRef } from "react";
import useSound from 'use-sound';
import usePageVisibility from "../../hooks/usePageVisibility";
import newMessageSound from '../../sounds/newMessage.mp3';
import IsWriting from "./components/IsWriting";

const Chat = (props) => {

  const [play] = useSound(newMessageSound);
  const isVisible = usePageVisibility();
  const [currentChatId, setCurrentChatId] = useState(0);
  const [isError, setIsError] = useState(null);
  const [userId, setUserId] = useState(0);
  const [messages, setMessages] = useState([]);
  const messageRefs = useRef({});
  const messageListScroll = useRef({});

  useEffect(() => {

    socket.on('getMessages', (messages) => {
      console.log(messages);
      if (messages.length > 0) {
        const lastMessage = messages[messages.length - 1];
        if (lastMessage.role === 'operator' && !isVisible) {
          console.log('visibility check:', isVisible);
          play();
        }
        setMessages(messages);
      }
    });

    socket.on('getReadedMessages', (messages) => {
      console.log('messages', messages);
      setMessages(messages);
      scrollToBottom();
    });

    socket.on('createChat', (chatInfoJSON) => {
      const chatInfo = JSON.parse(chatInfoJSON);
      console.log('create chat:', chatInfo.chat_id);
      setCurrentChatId(chatInfo.chat_id);
      setUserId(chatInfo.user_id);

    });

    socket.on('resumeChat', (chatInfoJSON) => {
      const chatInfo = JSON.parse(chatInfoJSON);
      console.log('resume chat:', chatInfo.chat_id);
      setCurrentChatId(chatInfo.chat_id);
      setUserId(chatInfo.user_id);
    });

    socket.on('errorMessage', (message) => {
      console.log(message);
      setIsError(message.message);

      const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

      // Преобразуем данные в формат URL-кодирования
      const formData = new URLSearchParams();
      formData.append('mail', props.userCookie);
      formData.append('_token', csrfToken); // Добавляем CSRF-токен

      fetch('/delete-cookie', {
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
    });


    return () => {
      socket.off('errorMessage');
      socket.off('getMessages');
      socket.off('resumeChat');
      socket.off('createChat');
    };
  }, [isVisible, play]);

  useEffect(() => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            if ((entry.target.getAttribute('is-read') == 0) && (entry.target.getAttribute('msg-author') != userId)) {
              socket.emit('changeMessageStatus', JSON.stringify({
                chat_id: +entry.target.getAttribute('room-id'),
                message_id: +entry.target.getAttribute('msg-id')
              }));
              console.log('see:', JSON.stringify({
                chat_id: +entry.target.getAttribute('room-id'),
                message_id: +entry.target.getAttribute('msg-id')
              }));
            }
            // const messageId = entry.target.getAttribute('data-id');
            // socket.emit('messageRead', messageId);
          }
        });
      },
      { threshold: 1.0 }
    );

    Object.values(messageRefs.current).forEach((ref) => {
      if (ref) {
        observer.observe(ref);
      }
    });

    return () => {
      observer.disconnect();
    };
  }, [messages]);

  const scrollToBottom = () => {
    console.log(messageListScroll.current.scrollTop, '-', messageListScroll.current.scrollHeight - messageListScroll.current.clientHeight);
    if (messageListScroll.current.scrollTop > messageListScroll.current.scrollHeight - messageListScroll.current.clientHeight - 400) {
      messageListScroll.current.scrollTop = messageListScroll.current.scrollHeight;
    }
  }

  return <>
    <div className="user-chat__chat-list chat-list" ref={messageListScroll}>
      <div className="chat-list__wrapper">
        <ul className="chat-list__list">
          {
            isError
              ? <div className="">{isError}</div>
              : messages.length > 0
                ?
                messages.map((el, key) => <Message key={key} message={{ text: el.text, role: el.role, created_at: el.created_at, isRead: el.is_read, userId: el.user_id, messageId: el.message_id, chatId: el.chat_id }} messageRefs={messageRefs} />)
                : ''
          }
        </ul>
        <IsWriting />
      </div>
    </div>
    <NewMessageForm name={props.name} currentChatId={currentChatId} userId={userId} />
  </>

}

export default Chat;