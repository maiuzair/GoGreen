//localStorage.clear();
function addToCart(event) {
    const card = event.target.closest('.card');
    const pid = card.dataset.id;
    const pName = card.dataset.name;
    const pPrice = card.dataset.price;
    pQuantity = 1;
    const productInfo = [pid, pName, pPrice, pQuantity];
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    for(var i = 0; i < cart.length ; i++){
        if (cart[i][0] == pid){
            pQuantity = pQuantity+1;
            productInfo[3] = pQuantity;
            cart[i] = productInfo;
            localStorage.setItem('cart', JSON.stringify(cart));
            console.log(localStorage.getItem('cart'));
            //alert('Product added to cart');
            return;
        }
    }

    cart.push(productInfo);
    localStorage.setItem('cart', JSON.stringify(cart));
    console.log(localStorage.getItem('cart'));
    //alert('Product added to cart');
    
}

// function incQty(button){
//     var name = button.parentNode.getAttribute('data-name');
//     for(var i=0; i < cart.length; i++){
//       if (cart[i][1] == name){
//           cart[i][3] = cart[i][3]+1;
//           button.previousElementSibling.value = cart[i][3];
//           localStorage.setItem('cart', JSON.stringify(cart));
//           console.log(localStorage.getItem('cart'));
//           break;
//       }
//     }
//     displayTotal();
//     alert("inc");
//   }

// function decQty(button){
//     var name = button.parentNode.getAttribute('data-name');
//     for(var i=0; i < cart.length; i++){
//         if (cart[i][1] == name){

//         cart[i][3] = cart[i][3]-1;

//         if(cart[i][3] != 0)
//         {
//             button.nextElementSibling.value = cart[i][3]; 
//         }

//         else
//         {
//             button.closest('li').remove();
//             cart.splice(i,1);
//         }

//         localStorage.setItem('cart', JSON.stringify(cart));
//         console.log(localStorage.getItem('cart'));
//         break;

//         }
//     }
//     displayTotal();
//     alert("dec");
// }

// function calcTotal(){
// total = 0;
//     for(var i=0; i < cart.length; i++){
//     total += cart[i][2] * cart[i][3];
//     }
//     return total;
// }

// function displayTotal(){
//     if( document.getElementById('total') == null){
//         document.getElementById('list').innerHTML +=`
//         <li class="list-group-item d-flex justify-content-between">
//         <span>Total (USD)</span>
//         <strong id="total">$${ calcTotal(cart) }</strong>
//         </li>
//         `;
//     }
//     else{
//         document.getElementById('total').innerHTML = `$${ calcTotal(cart) }`;
//     }
// }

//   const cart = JSON.parse(localStorage.getItem('cart')) || [];
//   cart.forEach(productInfo => {
//       const productName = productInfo[1];
//       const productPrice = productInfo[2];
//       var productQuantity = productInfo[3];

//       document.getElementById('list').innerHTML +=`
//           <li class="list-group-item d-flex justify-content-between">
//               <span>${productName} </span>
//               <div data-name="${productName}">
//                 <button class="qty-btn" width="20px" onclick="return decQty(this)">-</button>
//                 <input class="qty-txt" id="qty" type="text" value="${productQuantity}">
//                 <button class="qty-btn" width="20px" onclick="return incQty(this)">+</button>
//               </div>
//               <strong>$${productPrice}</strong>
//           </li>
//        `;
//    });

//    displayTotal();