// function displayCart(){
//     var cartList = document.getElementById("cartList");
//     var cart = JSON.parse(localStorage.getItem("cart"));

//     cartList.innerHTML = "";

//     cart.forEach((pid) => {
//         const pli = document.createElement("li");
//         pli.textContent = '&{pid}';
//         cartList.appendChild(pli);
//     });
// }

//     window.addEventListener("load", displayCart());

// function addToCart(event){
//     const item = event.target.parentElement;
//     const pid = item.id;

//     const cart = JSON.parse(localStorage.getItem('cart')) || [];

//     if(cart.includes(pid))
//         alert("The product already in cart")
//     else{
//         cart.push(pid);
//         localStorage.setItem('cart', JSON.stringify(cart));
//         alert("Product Added")
//     }

//     // displayCart();
// }

function addToCart(event) {

    const card = event.target.closest('.card');
    const pid = card.dataset.id;
    const pName = card.dataset.name;
    const pPrice = card.dataset.price;

    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    if (cart.includes(pid)) {
        alert('The product is already in the cart');
    }
    else {
            //console.log(data);
            cart.push(pid);
            cart.push(pName);
            cart.push(pPrice);
            localStorage.setItem('cart', JSON.stringify(cart));
            console.log(localStorage.getItem('cart'));
            alert('Product added to cart');
            }
    
}