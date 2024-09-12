import checkmarkGrey from '../../../images/check-mark.svg';
import checkmarkGreen from '../../../images/check-mark-green.svg';

const Message = (props) => {
  const formattedTime = props.message.created_at.split(' ')[1].split(':').slice(0, 2).join(':');
  // const formattedTime = '12313';
  const messageTypeClass = (props.message.role === 'operator')
    ? 'chat-list__message chat-list__operator'
    : 'chat-list__message chat-list__user';

  return <li msg-author={props.message.userId} is-read={props.message.isRead} msg-id={props.message.messageId} room-id={props.message.chatId} ref={(el) => (props.messageRefs.current[props.message.messageId] = el)} className={messageTypeClass} >
    <div className="chat-list__message-text">{props.message.text}</div>
    <div className="chat-list__time">{formattedTime}</div>
    {props.message.role !== 'operator'
      ? (props.message.isRead === 1)
        ? <div className="chat-list__is-read">
          <img className="chat-list__checkmark" src={checkmarkGreen} alt="" />
          <img className="chat-list__checkmark" src={checkmarkGreen} alt="" />
        </div>
        : <div className="chat-list__is-read">
          <img className="chat-list__checkmark" src={checkmarkGrey} alt="" />
        </div>
      : <></>}
  </li>
}

export default Message;