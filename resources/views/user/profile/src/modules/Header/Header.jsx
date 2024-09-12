
const Header = (props) => {
  return <>
    <h2 className="user-chat__header">Онлайн чат</h2>
    <div className="user-chat__expert-info">
      <img src="../../images/avatar.jpg" alt="" className="user-chat__expert-img" />
      <div className="user-chat__expert-name">Гудкова Галина Васильевна</div>
      <div className="user-chat__expert-profession">Юрист</div>
    </div>
  </>
}

export default Header;