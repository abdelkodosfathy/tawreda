import { useRef, useState } from "react";

const products=[
    {
        name:'خلاط',
        price:100,
        count:1
    },
    {
        name:'حنفية',
        price:100,
        count:1
    },
    {
        name:'حوض',
        price:100,
        count:1
    },
    {
        name:'كوع',
        price:100,
        count:5
    },
    {
        name:'كوع',
        price:100,
        count:5
    },
    {
        name:'كوع',
        price:100,
        count:5
    },
    {
        name:'كوع',
        price:100,
        count:5
    },
    {
        name:'كوع',
        price:100,
        count:5
    },
    {
        name:'كوع',
        price:100,
        count:5
    },
]
const Product = ({name, price, count, index}) => {
    console.log("i am product num: ", index+1);
    const [amount, setAmount] = useState(count)
    function handleAddClick () {
        setAmount(prev => {
            return prev + 1;
        });
    }
    function handleMinusClick () {
        if(amount > 0){
            setAmount(prev => {
                return prev - 1;
            });
        }
    }
    return (
        <tr key={index}>
            {/* <td>{index + 1}</td> */}
            <td>
            <div className="img-t"></div>
            </td>
            <td>{name}</td>
            <td>
                <button onClick={handleMinusClick}>-</button>
                <p>{amount}</p>
                <button onClick={handleAddClick}>+</button>
            </td>
            <td>{price}</td>
            <td>{price * amount}$</td>
        </tr>
    )
}
export default function Cart ({userLog}){

    return(
        <div className="cart-page">
            <h1>cart one</h1>
            <table>
                <thead>
                    <tr>
                        {/* <th>count</th> */}
                        <th>image</th>
                        <th>name</th>
                        <th>amount</th>
                        <th>price</th>
                        <th>total price</th>
                    </tr>
                </thead>
                <tbody>
                {products.map((e, index)=>{
                    return <Product
                    name={e.name}
                    price={e.price}
                    index={index}
                    count={e.count}
                    key={index}/>
                })}
                </tbody>
            </table>
        </div>
    );
}
