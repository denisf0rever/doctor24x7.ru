import { useState, useRef, useEffect } from "react";
import socket from "../../../api/socket";

const newMessageForm = (props) => {

  const [msg, setMsg] = useState('');

  const sendMessage = (messageText) => {
    socket.emit('sendMessage', JSON.stringify({
      chat_id: props.currentChatId,
      user_id: +props.userId,
      text: messageText,
      name: 'Имя клиента',
      type: 'client'
    }));
  }

  const isWriting = (isWritingVal) => {
    socket.emit('setWritingStatus', JSON.stringify({
      chat_id: props.currentChatId,
      name: props.name,
      is_writing: isWritingVal
    }))
    if (isWritingVal) {
      console.log('is writin emit true')
    }
    else if (!isWritingVal) {
      console.log('is writin emit false')
    }
  }

  const handleKeyPress = (event) => {
    if (event.key === 'Enter' && msg.length > 0) {
      isWriting(false);
      clearTimeout(timeoutRef.current);
      setTimerActive(false);
      sendMessage(msg);
      setMsg('');
    }
  };

  const sendNewMessage = () => {
    if (msg.length > 0) {
      isWriting(false);
      clearTimeout(timeoutRef.current);
      setTimerActive(false);
      sendMessage(msg);
      setMsg('');
    }
  }

  const handleChange = (e) => {

    setMsg(e.target.value)
    setTimerActive(true);
    startTimeout();
  }

  const [timerActive, setTimerActive] = useState(false); // Состояние для активации таймера
  const timeoutRef = useRef(null);

  const startTimeout = () => {
    clearTimeout(timeoutRef.current);
    timeoutRef.current = setTimeout(() => {
      isWriting(false);
      setTimerActive(false); // Сброс состояния активации после срабатывания таймера
    }, 1500); // 5 секунд
  };

  useEffect(() => {
    if (timerActive) {
      // console.log('emit start');
      isWriting(true);
    }
  }, [timerActive])

  useEffect(() => {
    if (timerActive) {
      startTimeout(); // Запустить таймер при активации
    }

    return () => {
      clearTimeout(timeoutRef.current); // Очистить таймер при размонтировании компонента
    };
  }, [timerActive]);



  return <div className="user-chat__message-input-wrapper">
    <input type="text" value={msg} onChange={(e) => handleChange(e)} onKeyDown={handleKeyPress} className="user-chat__new-message" />
    <img src="" alt="" onClick={sendNewMessage} className="user-chat__send-message" />
  </div>
}

export default newMessageForm;