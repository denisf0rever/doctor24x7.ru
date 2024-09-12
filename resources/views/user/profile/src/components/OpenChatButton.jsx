

const OpenChatButton = (props) => {
  return <div className="user-chat__chat-open-button chat-open-button">
    <div className="chat-open-button__wrapper" onClick={() => props.setIsChatOpened(!props.isChatOpened)}>
      <img src="../images/avatar.jpg" alt="" className="chat-open-button__img" />
    </div>
  </div>
}

export default OpenChatButton;