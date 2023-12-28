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
    // Get the parent element of the clicked button, which represents a product card
    const card = event.target.closest('.card');

    // Extract the product ID from the data-id attribute of the card
    const pid = card.dataset.id;

    // Retrieve the current contents of the shopping cart from local storage
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    if (cart.includes(pid)) {
        alert('The product is already in the cart');
    } else {
        cart.push(pid);

        // Update the shopping cart data in local storage
        localStorage.setItem('cart', JSON.stringify(cart));

        alert('Product added to cart');
    }
}
