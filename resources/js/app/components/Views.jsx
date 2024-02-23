import { Routes, Route } from "react-router-dom";

//importing pages
import LogIn from "./Pages/LogIn";
import SignUp from "./Pages/SignUp";

import Main from "./Pages/Main";
import Home from "./Pages/Home";
import Products from "./Pages/Products";
import Profile from "./Pages/Profile";
import Mail from "./Pages/Mail";
import Cart from "./Pages/Cart";

// import ProtectedRoutes from "./ProtectedRoutes";

export default function Views({user}){

    return (
        <Routes>
            <Route index path="/sign-up" element={<SignUp />}/>
            <Route path="/login" element={<LogIn />}/>
            <Route element={<Main />}> {/*header and footer of all pages*/}
                <Route index path="/" element={<Home />}/>
                <Route path="/products" element={<Products userLog={user}/>}/>
                <Route path="/cart" element={<Cart userLog={user}/>}/>
                <Route path="/profile" element={<Profile />}/>
                <Route path="/mail" element={<Mail />}/>
            </Route>
            {/*soon I wil add component to display not found page*/}
            <Route path="*" element={<div>not found</div>}/>
        </Routes>
    );
}
