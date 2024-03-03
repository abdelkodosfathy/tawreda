import { Link ,useNavigate} from "react-router-dom";
import useAuthContext from "../../../../context/AuthContext";
import { useState } from "react";
 const LogIn =()=>{

const [telephone , setTelephone] =useState("");
const [password , setPassword] =useState("");
const { login , errors }=useAuthContext();

const handleLogin=async(event)=>{
  event.preventDefault();
  login({telephone ,password});
  
};
  return(
    <>
    <section id="Login">
      <h1>Log in</h1>
      <div className="profile-icon">
        <i className="fa-solid fa-user"></i>
      </div>
      <form onSubmit={handleLogin} >
        <input type="text" value={telephone} onChange={(e)=>setTelephone(e.target.value)} placeholder="Enter your phone number" required/>
        <input type="text" value={password} onChange={(e)=>setPassword(e.target.value)} placeholder="Enter your password" required/>
        <div className="row">
          <Link to="/sign-up">
          <button id="signup-btn">Sign up</button>
          </Link>
          <button type="submit" >Login</button>
        </div>
      </form>
    </section>
    </>
  );
}
export default LogIn ;