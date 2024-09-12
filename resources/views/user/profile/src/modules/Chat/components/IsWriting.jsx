import { useState, useEffect } from "react";
import socket from "../../../api/socket";

const IsWriting = (props) => {
  console.log('IsWriting')
  const [isNowWriting, setIsNowWriting] = useState('');

  useEffect(() => {

    socket.on('setWritingStatus', (JSONmsg) => {
      console.log(123);
      const msg = JSON.parse(JSONmsg);
      // console.log('msg', msg);
      if (msg.is_writing) {
        setIsNowWriting(msg.name);
      }
      else if (!msg.is_writing) {
        setIsNowWriting('');
      }
    });

    return () => {
      socket.off('setWritingStatus');
    };
  }, [])

  return <>
    {isNowWriting === ''
      ? <div className="chat-list__now-writing"></div>
      : <div className="chat-list__now-writing">{isNowWriting} печатает...</div>}
  </>
}

export default IsWriting;