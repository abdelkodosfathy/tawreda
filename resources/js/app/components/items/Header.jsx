import { Link } from "react-router-dom";

export default function Header() {
  return (
    <>
    <header>
      <div className="cart">
        <Link to="/products">
          <i className="fa-solid fa-cart-shopping"></i>
        </Link>
      </div>
      <div className="logo">
        <h1>TAWREDA</h1>
      </div>
      <div id="search">
        <i className="fa-solid fa-magnifying-glass"></i>
      </div>
    </header>
    </>
  )
}
