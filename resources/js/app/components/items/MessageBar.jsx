export default function MessageBar(){
    return(
      <div className="message-bar">
        <div className="message-content">
            <input type="text" />
            <button><i className="fa-solid fa-circle-plus"></i></button>
        </div>
        <button><i className="fa-solid fa-microphone"></i></button>
        <button><i className="fa-solid fa-paper-plane"></i></button>
      </div>
    )
}
