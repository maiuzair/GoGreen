@extends('Layouts.mainLayout')
@section('title', 'Cart')
@section('css')
    href={{ URL::asset('css/heroes.css')}}
@endsection

{{-- @section('nav')
    @include('Layouts.navLayout')
    @yield('guestNav')
@endsection --}}

@section('maincontent')

<!--==================================================MAIN-->
<!-- <script src="{{URL::asset('scripts/script.js')}}"></script> -->

<main>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="cart-heading">Your cart</span>
    </h4>
    <ul class="list-group mb-3" id="list">
    </ul>

    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <a href="checkout">
        <a href="checkout" ><button type="button" class="btn btn-success btn-lg px-4 me-sm-3 mt-3 ">Proceed to checkout</button></a>
      </a>
    </div>
    
</main>


<script>

    function incQty(button){
      var name = button.parentNode.getAttribute('data-name');
      for(var i=0; i < cart.length; i++){
        if (cart[i][1] == name){
            cart[i][3] = cart[i][3]+1;
            button.previousElementSibling.value = cart[i][3];
            localStorage.setItem('cart', JSON.stringify(cart));
            console.log(localStorage.getItem('cart'));
            break;
        }
      }
      displayTotal();
      //alert("inc");
    }

    function decQty(button){
      var name = button.parentNode.getAttribute('data-name');
      for(var i=0; i < cart.length; i++){
        if (cart[i][1] == name){

          cart[i][3] = cart[i][3]-1;

          if(cart[i][3] != 0)
          {
            button.nextElementSibling.value = cart[i][3]; 
          }

          else
          {
            button.closest('li').remove();
            cart.splice(i,1);
          }

          localStorage.setItem('cart', JSON.stringify(cart));
          console.log(localStorage.getItem('cart'));
          break;

        }
      }

      displayTotal();
      //alert("dec");
    }

    function calcTotal(){
      total = 0;
        for(var i=0; i < cart.length; i++){
          total += cart[i][2] * cart[i][3];
        }
        return total;
    }

    function displayTotal(){
      if( document.getElementById('total') == null){
        document.getElementById('list').innerHTML +=`
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong id="total">$${ calcTotal(cart) }</strong>
        </li>
        `;
      }
      else{
        document.getElementById('total').innerHTML = `$${ calcTotal(cart) }`;
      }
      
    }

    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.forEach(productInfo => {
        const productName = productInfo[1];
        const productPrice = productInfo[2];
        var productQuantity = productInfo[3];

        document.getElementById('list').innerHTML +=`
            <li class="list-group-item d-flex justify-content-between">
                <span>${productName} </span>
                <div data-name="${productName}">
                  <button class="qty-btn" width="20px" onclick="return decQty(this)">-</button>
                  <input class="qty-txt" id="qty" type="text" value="${productQuantity}">
                  <button class="qty-btn" width="20px" onclick="return incQty(this)">+</button>
                </div>
                <strong>$${productPrice}</strong>
            </li>
         `;
     });

     displayTotal();

</script>
@endsection