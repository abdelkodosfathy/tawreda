import img from '../../Images/plumbing-tools-and-equipment-overhead-view-KWXK75.jpg'
import img2 from '../../Images/360_F_527262768_QI9H8hnoDij6bSPv1iQHQgcgu43rVTyV.jpg'
import img3 from '../../Images/أدوات السباكة في المنزل.jpg';

import { useRef } from "react";
export default function Slider(){
    const slider = useRef();
    // const timer = setInterval(()=>{
    //     slider.current.scrollLeft += 386;
    // }, 1000);
    return(
    <div className="slider" ref={slider}>
        <img className="slider-img" src={img} alt=""/>
        <img className="slider-img" src={img2} alt=""/>
        <img className="slider-img" src={img} alt=""/>
    </div>
    );
}
