import React from 'react';
import ReactDOM from 'react-dom/client';
import { useState } from 'react';
import { BrowserRouter,Routes,Route,Link} from 'react-router-dom';
import Views from './components/Views'


export default function App() {
  const [submit, setSubmit] = useState(false);
  function handleSubmit(){
    setSubmit(true);
  }
  return (
    <>
    <BrowserRouter>
      <Views/>
    </BrowserRouter>
    </>
  )
}


const container = document.getElementById('root');
const root = ReactDOM.createRoot(container);
root.render(<App/>);
