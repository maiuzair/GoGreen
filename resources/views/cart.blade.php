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
<script src="{{URL::asset('scripts/script.js')}}"></script>

<main>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="cart-heading">Your cart</span>
    </h4>
    <ul class="list-group mb-3" id="list">

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


<script>
    // Retrieve the cart data from local storage
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Display the cart data
    //document.write('<ul class="list-group mb-3">');

    cart.forEach(productId => {
        // You may need to fetch product details from the server using AJAX or provide them when adding to the cart
        const productName = ; // Replace with the actual product name
        const productPrice = ; // Replace with the actual product price

        document.write(`
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <h6 class="my-0">${productName}</h6>
                </div>
                <span class="text-body-secondary">$${productPrice}</span>
            </li>
        `);
    });

    document.write(`
        <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$${calculateTotal(cart)}</strong>
        </li>
    `);

    document.write('</ul>');

    // Function to calculate the total based on the product prices
    function calculateTotal(cart) {
        // You may need to fetch actual product prices from the server or provide them when adding to the cart
        const productPrices = {
            // Map product IDs to their respective prices
            'productId1': 20,
            'productId2': 30,
            // Add more products as needed
        };

        return cart.reduce((total, productId) => total + (productPrices[productId] || 0), 0);
    }
</script>
@endsection