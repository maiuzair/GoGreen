@extends('Layouts.mainLayout')
@section('title', 'Why plants | Benefits')


@section('css')
    href={{ URL::asset('css/carousel.css') }}
@endsection

@section('maincontent')

    <!-- ===========================================Main -->

    <main class="container">

        <!-- --------------------------------------Carousel -->
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/cropped-landing-carousel-1 (1).jpg" class="d-block w-100" alt="indoor plants">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Indoor plants</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-success" href="#indoor">Browse</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/cropped-landing-carousel-2-75.jpg" class="d-block w-100" alt="outdoor plants">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Outdoor plants</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-success" href="#outdoor">Browse</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/cropped-succ.jpg" class="d-block w-100" alt="succulents">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Succulents</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-success" href="#succulents">Browse</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/cropped-pexels-min-an-906156.jpg" class="d-block w-100" alt="flowers">
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
                <h1 class="fw-light text-center">Indoor Plants</h1>
            </div>
        </div>

        <div class="album py-5 bg-body-tertiary">

            {{-- not zaruri --}}
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/jade-plant.jpg" width="200" height="225">
                            <div class="card-body">
                                <h4>Jade Plant</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View | Add to
                                            cart</button>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
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
                <h1 class="fw-light text-center">Outdoor Plants</h1>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
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
                <h1 class="fw-light text-center">Succulents</h1>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
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

    @endsection
