import { Link } from "react-router-dom";
export default function SignUp () {
  return(
    <section id="Sign-up">
      <h1>Sign up</h1>
      <div className="sign-up-icon">
          <i className="fa-solid fa-user"></i>
      </div>
      <form action="http://127.0.0.1:8000/api/addnew" method="POST">
        <input type="text" name="cust_name" placeholder="Enter your name" required/>
        <input type="text" name="telephone" placeholder="Enter your phone number" required/>
        <input type="text" name="password" placeholder="Enter your password" required/>
        <input type="text" placeholder="Confirm your password" required/>
        <div className="row">
          <Link to="/login">
          <button id="login-btn">Login</button>
          </Link>
          <button type="submit">Sign up</button>
        </div>
      </form>
    </section>
  );
}