<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Sign up</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    {{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    {{-- <link href="styles/styles.css" rel="stylesheet"> <!--for the navbar and footer-->
    <link href="styles/heroes.css" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}"> <!--for the navbar and footer-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('heroes/styles.css') }}">

</head>

<body>

    {{-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- ==================================================NAV -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="cart" viewBox="0 0 16 16">
            <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <nav class="navbar navbar-expand-md sticky-top border-bottom">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand " href="#">GoGreen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="#navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0 " tabindex="-1" id="navbarCollapse">

                <ul class="navbar-nav ">

                    <!-- <ul class="navbar-nav flex-grow-1 m-auto mb-2 mb-md-0 ml-md-3 mr-md-3 ml-sm-2 mr-sm-2"> -->
                    <li class="nav-item"><a class="nav-link" href="landingpage.html" aria-current="page">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="whyplants.html">Why plants?</a></li>
                    <li class="nav-item dropdown" id="buy-dropdown">
                        <a class="nav-link dropdown-toggle" href="buy.html" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                    <li class="nav-item"><a class="nav-link" href="signup.blade.php">Sign up!</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.blade.php">Become a vendor</a></li>
                    <li></li>


                </ul>
                <a class="nav-link ps-3" href="cart.html"><svg class="bi" width="16" height="16">
                        <use xlink:href="#cart" />
                    </svg></a>

            </div>

        </div>
    </nav>
    <!--==================================================MAIN-->
    <main>
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Vertically centered hero sign-up form
                    </h1>
                    <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls.
                        Each required form group has a validation state that can be triggered by attempting to submit
                        the form without completing it.</p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                  <div class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                    <form action="login" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="form-floating mb-3">
                          <input type="email" name="email" class="form-control" id="floatingInput"
                              placeholder="name@example.com">
                          <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating mb-3">
                          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                          <label for="floatingPassword">Password</label>
                      </div>
                      <div class="checkbox mb-3">
                          <label>
                              <input type="checkbox" value="remember-me"> Remember me
                          </label>
                      </div>
                      <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                      <hr class="my-4">
                      <button class="w-100 btn btn-lg btn-primary" type="submit"><a href="signup" style="color: white">Sign up</a></button>
                      
                      {{-- <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small> --}}
                  </form>
                  </div>
                    
                </div>
            </div>
        </div>
    </main>

    







    



</body>

</html>
