import { Link } from "react-router-dom";
export default function LogIn (){
  return(
    <>
    <section id="Login">
      <h1>Log in</h1>
      <div className="profile-icon">
        <i className="fa-solid fa-user"></i>
      </div>
      <form action="#" method="POST">
        <input type="text" placeholder="Enter your phone number" required/>
        <input type="text" placeholder="Enter your password" required/>
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