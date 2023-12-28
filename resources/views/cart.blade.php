@extends('Layouts.mainLayout')
@section('title', 'Home')
@section('css')
    href={{ URL::asset('css/heroes.css')}}
@endsection

{{-- @section('nav')
    @include('Layouts.navLayout')
    @yield('guestNav')
@endsection --}}

@section('maincontent')

<!--==================================================MAIN-->
<main>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="cart-heading">Your cart</span>
    </h4>
    <ul class="list-group mb-3">

      <li class="list-group-item d-flex justify-content-between">
        <span>Total (USD)</span>
        <strong>$20</strong>
      </li>
    </ul>

    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <a href="checkout">
        <button type="button" class="btn btn-success btn-lg px-4 me-sm-3 mt-3 ">Proceed to checkout</button>
      </a>
    </div>
    
</main>

<script src="{{URL::asset('scripts/script.js')}}"></script>
<script>
    // Retrieve the cart data from local storage
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Display the cart data
    //document.write('<ul>');
    cart.forEach(productId => {
      const listItem = document.createElement('li');
                    listItem.innerHTML = `
                    <div>
                      <h6 class="my-0">{{$product->Name }}</h6>
                    </div>
                    <span class="text-body-secondary">${{$product->Price }}</span>
                    `;
            productsList.appendChild(card);
        // You can retrieve and display additional product information here
    });
    document.write('</ul>');
</script>
@endsection