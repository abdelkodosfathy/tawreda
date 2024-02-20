import React from 'react';
import ReactDOM from 'react-dom/client';
import { useState } from 'react';
import { BrowserRouter,Routes,Route,Link} from 'react-router-dom';
import Views from './components/Views'
// import '../i18n';

export default function App() {
  const [submit, setSubmit] = useState(false);
  function handleSubmit(){
    setSubmit(true);
  }
    const useAuth = () => {
        const user =  {loggedIn: false}
        return user && user.loggedIn;
    }
  const isAuth = useAuth();

  return (
    <>
    <BrowserRouter>
      <Views user={isAuth}/>
    </BrowserRouter>
    </>
  )
}


const container = document.getElementById('root');
const root = ReactDOM.createRoot(container);
root.render(<App/>);
