import Product from "../items/Product";
import { Navigate } from "react-router-dom";

let arr = [1,true,false];
export default function Products({userLog}) {
    // {user ? <Route path="/products" element={<Products />}/> : <Navigate to="/login"/>}

  return(userLog ? <>
    <section id="Products">
    <div className="products-slider">
      {arr.map((e, index) =>{
        return <Product key={index}/>;
      })}
    </div>
    </section>
    </> : <Navigate to="/login"/>

  );
}
// import { useState, useEffect } from 'react';
// const Fetch = () => {
//   const [photos, setPhotos] = useState([]);
//   useEffect(() => {
//     fetch('https://jsonplaceholder.typicode.com/photos')
//       .then((res) => {
//         return res.json();
//       })
//       .then((data) => {
//         console.log(data);
//         setPhotos(data);
//       });
//   }, []);
//   return (
//     <div>

//       {photos.map((photo) => (
//         <img key={photo.id} src={photo.url} alt={photo.title} width={100} />
//       ))}
//     </div>
//   );
// };
// export default Fetch;
