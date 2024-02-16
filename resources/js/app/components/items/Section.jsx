export default function Section({type, children}){
    return(
        <div className={`${type} section`}>
            <span>
                تأسيس
            </span>
            <span className='type-name'>
                {children}
            </span>
            <span>
                تشطيب
            </span>
        </div>
    );
}
