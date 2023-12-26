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


        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold text-body-emphasis">Categories</h1>

            <div id="carouselExampleAutoplaying" class="carousel slide mb-6" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="buy.html#indoor"><img src="images/landing-carousel-1-75.jpg" class="d-block w-100"
                                alt="indoor plants" width="100%"></a>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1 class="text-dark">Indoor plants</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="buy.html#outdoor"><img src="images/landing-carousel-2-75.jpg" class="d-block w-100"
                                alt="outdoor plants" width="100%"></a>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1 class="text-light">Outdoor plants</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="buy.html#succulents"><img src="images/landing-carousel-3-75.jpg"
                                class="d-block w-100" alt="succulents" width="100%"></a>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1 class="text-dark">Succulents</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="buy.html#flowers"><img src="images/landing-carousel-3-75.jpg" class="d-block w-100"
                                alt="flowers" width="100%"></a>
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

    </main>

@endsection