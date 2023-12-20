<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Cart</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/styles.css" rel="stylesheet"> <!--for the navbar and footer-->
    <link href="styles/heroes.css" rel="stylesheet">

  </head>
  <body>
    <!-- ================================================NAV -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
      </svg>
      
      <nav class="navbar navbar-expand-md sticky-top border-bottom">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="#offcanvas" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="#offcanvas" aria-labelledby="#offcanvasLabel">
            <div class="offcanvas-body">
              <ul class="navbar-nav flex-grow-1 justify-content-between">
                <li class="nav-item"><a class="nav-link" href="landingpage.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="whyplants.html">Why plants?</a></li>
                <li class="nav-item dropdown" id="buy-dropdown">
                  <a class="nav-link dropdown-toggle" href="buy.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Buy plants
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="buy.html#indoor">Indoor</a></li>
                    <li><a class="dropdown-item" href="buy.html#outdoor">Outdoor</a></li>
                    <li><a class="dropdown-item" href="buy.html#succulents">Succulents</a></li>
                    <li><a class="dropdown-item" href="buy.html#succulents">Flowers</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Plant care</a></li>
                <li class="nav-item"><a class="nav-link" href="signup.html">Sign up!</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Become a vendor</a></li>
                  <li><a class="nav-link" href="cart.html"><svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
                </a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

<!--==================================================MAIN-->
<main>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="cart-heading">Your cart</span>
    </h4>
    <ul class="list-group mb-3">
      <li class="list-group-item d-flex justify-content-between lh-sm">
        <div>
          <h6 class="my-0">Product name</h6>
        </div>
        <span class="text-body-secondary">$12</span>
      </li>
      <li class="list-group-item d-flex justify-content-between lh-sm">
        <div>
          <h6 class="my-0">Second product</h6>
        </div>
        <span class="text-body-secondary">$8</span>
      </li>
      <li class="list-group-item d-flex justify-content-between lh-sm">
        <div>
          <h6 class="my-0">Third item</h6>
        </div>
        <span class="text-body-secondary">$5</span>
      </li>
      <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
        <div class="text-success">
          <h6 class="my-0">Promo code</h6>
          <small>EXAMPLECODE</small>
        </div>
        <span class="text-success">−$5</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Total (USD)</span>
        <strong>$20</strong>
      </li>
    </ul>

    <form class="card p-2">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Promo code">
        <button type="submit" class="btn btn-secondary">Redeem</button>
      </div>
    </form>

    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <a href="checkout.html">
        <button type="button" class="btn btn-success btn-lg px-4 me-sm-3 mt-3 ">Proceed to checkout</button>
      </a>
    </div>
    
</main>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>