export default function Product() {
  return (
    <>
    <div className="product">
      <div className="img"></div>
      <div className="info">
        <div className="product-text">
          <h2>Hammer Hickory</h2>
          <p>Description 500g</p>
          <h3>1200 EGP</h3>
        </div>
        <div className="icons">
          <button id="cart"><i className="fa-regular fa-heart"></i></button>
          {/* <button id="cart"><i class="fa-solid fa-heart"></i></button> */}
          <button id="star"><i className="fa-solid fa-cart-shopping"></i></button>
        </div>
      </div>
    </div>
    </>
  )
}
