import { useState, useEffect } from 'react';

export default function Profile(){
    const [photos, setPhotos] = useState([]);
    useEffect(() => {
      fetch('https://jsonplaceholder.typicode.com/photos')
        .then((res) => {
          return res.json();
        })
        .then((data) => {
          console.log(data);
          setPhotos(data);
        });
    }, []);
  return(
    <div id="profile">
      {/* <h1>
        profile component
      </h1> */}

            {photos.map((photo, index) => {
        if(index < 10){
            return <img key={photo.id} src={photo.url} alt={photo.title} width={100} />
        }
    })}

    </div>
  )};