import { Outlet } from "react-router-dom";
import Header from "../items/Header";
import Footer from "../items/Footer";
import { Navigate } from "react-router-dom";
import { useRef, useState } from "react";
import Menu from "../items/Menu";

const useAuth = () => {
  const user =  {loggedIn: true}
  return user && user.loggedIn;
}

export default function Main({}){
  const isAuth = useAuth();
  const [menuShow,setMenuShow] = useState(false);
  function handelMenu(){
    setMenuShow(prev => !prev)
  }
  return( isAuth ?
    <>
    <Header />
      <Outlet/>
      <Menu show={menuShow}/>
    <Footer onMenuClick={handelMenu}/>
    </> : <Navigate to="/login"/>
  );
}
