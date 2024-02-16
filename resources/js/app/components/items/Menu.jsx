import { forwardRef, useRef, useState } from "react";
const Menu = forwardRef( function Menu({show, props}, ref){
    let state;
    (show ? state = "open" : state = "close")
    return(
        <div className={`menu ${state}`} >
            <ul>
                <li>Home</li>
                <li>store</li>
                <li>language</li>
                <li></li>
            </ul>
        </div>
    );
});
export default Menu;



