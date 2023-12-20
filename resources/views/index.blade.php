<!doctype html>
<html lang="en">

<head>
    <!-- <script src="../assets/js/color-modes.js"></script> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>GoGreen</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    {{-- <link href="styles/styles.css" rel="stylesheet"> <!--for the navbar and footer-->
  <link href="styles/heroes.css" rel="stylesheet"> --}}

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}"> <!--for the navbar and footer-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/heroes.css') }}">

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


    {{-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> --}}

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="cart" viewBox="0 0 16 16">
            <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <!-- <nav class="navbar navbar-expand-md fixed-top border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">GoGreen</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav m-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="travel.html">Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="work.html">Work</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav> -->

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

    <main class="container">

        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="images/plant.png" alt="logo here" width="72" height="57">
            <h1 class="display-5 fw-bold text-body-emphasis">Welcome to GoGreen</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Let's celebrate plants not just for their beauty but for their role in creating a
                    healthier
                    environment. From purifying the air to reducing carbon footprints, these green pals are eco-warriors
                    in
                    disguise. Join us on a journey to make your space more sustainable and stylish. Let's plant the
                    seeds for a
                    greener tomorrow, one leaf at a time!</p>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="images/BeFunky-collage (1).jpg" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Why need plants?</h1>
                    <p class="lead">Not only do indoor plants enhance the overall appearance of a space, but studies
                        show they
                        boost moods, increase creativity, reduce stress, and eliminate air pollutants—making for a
                        healthier,
                        happier you.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="whyplants.html">
                            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Learn more</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold text-body-emphasis">Categories</h1>

            <div id="carouselExampleAutoplaying" class="carousel slide mb-6" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="buy.html#indoor"><img src="images/landing-carousel-1-75.jpg" class="d-block w-100"
                                alt="indoor plants" width="100%" height="100%"></a>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1 class="text-dark">Indoor plants</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="buy.html#outdoor"><img src="images/landing-carousel-2-75.jpg" class="d-block w-100"
                                alt="outdoor plants" width="100%" height="100%"></a>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1 class="text-light">Outdoor plants</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="buy.html#succulents"><img src="images/landing-carousel-3-75.jpg"
                                class="d-block w-100" alt="succulents" width="100%" height="100%"></a>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1 class="text-dark">Succulents</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="buy.html#flowers"><img src="images/landing-carousel-3-75.jpg" class="d-block w-100"
                                alt="flowers" width="100%" height="100%"></a>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1 class="text-dark">Flowers</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

        <div class="b-example-divider mb-0"></div>
    </main>

    <!-- ============footer========== -->

    <footer class="container py-5">
        <div class="row">
            <div class="col-6 col-md">
                <h5>Quick Links</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Policy</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Return and refund policy</a>
                    </li>
                    <li><a class="link-secondary text-decoration-none" href="#">shipping</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Company</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">About us</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Find us</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Contact us</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Facebook</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Instagram</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Gmail</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </footer>


</body>

</html>
