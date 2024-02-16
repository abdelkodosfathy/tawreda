import Message from "./Message"
export default function MessagesList({messages, props}){
    return (
        <div className="messages-list">
            {messages.map((e, index) => {
                return (<Message key={index} date={e.date} isAdmain={e.isAdmain}  >{e.content}</Message>)
            })}
        </div>
    )
}
