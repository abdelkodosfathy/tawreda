export default function Message({date, children, isAdmain, sendFrom, props}){
    let side = "left";
    if(isAdmain){
        side = "right";
    };
    return(
        <div className={`${side}-message customer`}>
            <img src="https://icon-library.com/images/avatar-icon-images/avatar-icon-images-4.jpg" alt="user avatar" width='60px'/>
            <div className={`${side}-message-text`}>
                <p>
                    {children}
                </p>
            </div>
            <p className={`${side}-message-date`}>
                sent {date}
            </p>
        </div>
    );
}
