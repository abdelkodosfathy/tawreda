import MessageBar from "../items/MessageBar";
import MessagesList from "../items/MessagesList";


const arr = [
    {
        date: "12.08 pm",
        content: "its the array of messages content messsage one 1",
        isAdmain: true,
    },
    {
        date: "1.09 pm",
        content: "its the array of messages content messsage two 2",
        isAdmain: false,
    },
    {
        date: "1.09 pm",
        content: "its the array of messages content messsage two 2",
        isAdmain: false,
    },
]

export default function Mail(){

    return(
        <div id="Mail">
            <MessagesList messages={arr}/>
            <MessageBar />
        </div>
  );
}
