import { useState } from "react";
import { Link } from "react-router-dom";
function SearchBar(){
    // const style = `
    // width: 100%;
    // height: 100%;
    // border-radius: 5px;
    // background-color: white;
    // `;
    return (
        <>
        <h1>T</h1>
        <div width="100%" backgroundColor= "white" height="100px">
        t
        </div>
        </>
    );
}
export default function Header() {
    const [search,setSearch] = useState();
    function handleSearch(){
        setSearch(()=> {
            return !search
        });
    }
  return (
    <>
    <header>
      <div className="cart">
        <Link to="/cart">
          <i className="fa-solid fa-cart-shopping"></i>
        </Link>
      </div>

        {search ? <SearchBar /> :
        <div className="logo">
        <h1>TAWREDA</h1>
        </div>}
      <div id="search" onClick={handleSearch}>
        <i className="fa-solid fa-magnifying-glass"></i>
      </div>
    </header>
    </>
  )
}
