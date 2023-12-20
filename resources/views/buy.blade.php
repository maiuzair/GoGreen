<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Shop plants</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/styles.css" rel="stylesheet">
    <link href="styles/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<!-- ===================================================Navbar -->
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

<!-- ===========================================Main -->

<main>

    <!-- --------------------------------------Carousel -->
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/cropped-landing-carousel-1 (1).jpg" width="100%" height="100%" alt="indoor plants">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Indoor plants</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-success" href="#indoor">Browse</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/cropped-landing-carousel-2-75.jpg" width="100%" height="100%" alt="outdoor plants">]
        <div class="container">
          <div class="carousel-caption">
            <h1>Outdoor plants</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-success" href="#outdoor">Browse</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/cropped-succ.jpg" width="100%" height="100%" alt="succulents">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Succulents</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-success" href="#succulents">Browse</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/cropped-pexels-min-an-906156.jpg" width="100%" height="100%" alt="flowers">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Flowers</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-success" href="#flowers">Browse</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- -------------------------------------------Album -->

    <div class="row py-lg-5" id="indoor">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-center" >Indoor Plants</h1>
      </div>
    </div>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="images/jade-plant.jpg" width="200" height="225">
            <div class="card-body">
              <h4>Jade Plant</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View | Add to cart</button>
                </div>
                <small class="text-body-secondary">$$</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="images/snakeplant.jpg" width="200" height="225">
            <div class="card-body">
              <h4>Snake Plant</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">$$</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="images/watermelon-peperomia.jpg" width="200" height="225">
            <div class="card-body">
              <h4>Watermelon Peperomia</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">$$</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row py-lg-5" id="outdoor">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light text-center" >Outdoor Plants</h1>
    </div>
  </div>

<div class="album py-5 bg-body-tertiary">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <img src="images/european-fan-palm.webp" width="200" height="225">
          <div class="card-body">
            <h4>European Fan Palm</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
              </div>
              <small class="text-body-secondary">$$</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img src="images/olive-tree.webp" width="200" height="225">
          <div class="card-body">
            <h4>Olive tree</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
              </div>
              <small class="text-body-secondary">$$</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img src="images/angel.jpeg" width="150" height="225">
          <div class="card-body">
            <h4>Angel Wings</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
              </div>
              <small class="text-body-secondary">$$</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row py-lg-5" id="succulents">
  <div class="col-lg-6 col-md-8 mx-auto">
    <h1 class="fw-light text-center" >Succulents</h1>
  </div>
</div>

<div class="album py-5 bg-body-tertiary">
<div class="container">

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
      <div class="card shadow-sm">
        <img src="images/aeonium.webp" width="400" height="225">
        <div class="card-body">
          <h4>Tree Houseleek</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            </div>
            <small class="text-body-secondary">$$</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
        <img src="images/echeveria.webp" width="400" height="225">
        <div class="card-body">
          <h4>Echeveria</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            </div>
            <small class="text-body-secondary">$$</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
        <img src="images/golden-barrel-cactus.webp" width="200" height="225">
        <div class="card-body">
          <h4>Golden Barrel Cactus</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            </div>
            <small class="text-body-secondary">9 mins</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="row py-lg-5" id="flowers">
  <div class="col-lg-6 col-md-8 mx-auto">
    <h1 class="fw-light text-center">Flowers</h1>
  </div>
</div>

<div class="album py-5 bg-body-tertiary">
<div class="container">

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
      <div class="card shadow-sm">
        <img src="images/african-violet.jpg" width="200" height="225">
        <div class="card-body">
          <h4>African Violet</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            </div>
            <small class="text-body-secondary">$$</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
        <img src="images/peace-lilly.jpg" width="200" height="225">
        <div class="card-body">
          <h4>Peace Lilly</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            </div>
            <small class="text-body-secondary">$$</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
        <img src="images/hydrangea.jpg" width="200" height="225">
        <div class="card-body">
          <h4>Hydrangea</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            </div>
            <small class="text-body-secondary">$$</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  <!-- --------------------------------------------FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
