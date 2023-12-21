@extends('Layouts.mainLayout')
@section('title', 'Why plants | Benefits')


@section('css')
    href={{ URL::asset('css/carousel.css')}}
@endsection
    

@section('maincontent')

<!-- =========================================Main================================================ -->


    <!-- START THE FEATURETTES ---------------- WHAT WE NEED-->

<!-- <main>

  <hr>

    <div class="row featurette align-items-center">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Cultivate psychological well-being with nature.</h2>
        <p class="lead"> Immerse yourself in the psychological sanctuary that plants provide. From reducing stress to boosting mood, discover the myriad ways in which incorporating greenery into your surroundings can positively impact your mental well-being.</p>
        
        <div class="d-flex gap-5 justify-content-center py-5">
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Stress reduction</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Improved sleep</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Feng Shui Benefits</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Aesthetic pleasure</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Emotional upliftment</span>
        </div>

      </div>
      <div class="col-md-5">
        <img src="images/psychological.jpg" width="500px" class="img-fluid" alt="psychological benefits">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette align-items-center">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Green Living, Sustainable Impact.</h2>
        <p class="lead">Join the movement towards a greener, more sustainable future. A simple act of incorporating plants into your life can contribute to a healthier planet.</p>
        
        <div class="d-flex gap-3 justify-content-center py-5">
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">CO2 reduction</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Air purification</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Temperature regulation</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Optimal indoor humidity</span>
        </div>

      </div>
      <div class="col-md-5">
        <img src="images/environment.jpg" width="500px" class="img-fluid">
      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette align-items-center">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Nurturing Health Through Nature.</h2>
        <p class="lead">Elevate your health with the healing touch of nature. Embrace the well-being that a plant-filled environment can bring into your life.</p>
      
        <div class="d-flex gap-4 justify-content-center py-5">
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Better respiratory health</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Reduced headaches</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Reduced Sick Building Syndrome</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Medicinal properties</span>
        </div>

      </div>
      <div class="col-md-5">
        <img src="images/heealth.jpg" width="500px" class="img-fluid">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette align-items-center">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1"> Boost Your Productivity Naturally.</h2>
        <p class="lead">Unleash your full potential by harnessing the productivity benefits of plants. The presence of greenery can really transform your workspace and elevate your productivity.</p>
      
        <div class="d-flex gap-3 justify-content-center py-5">
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Enhanced concentration</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Inspiration and relaxation</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Cognitive restoration</span>
        </div>
      
      </div>
      <div class="col-md-5">
        <img src="images/pexels-pixabay-269323.jpg" width="500px" class="img-fluid">
      </div>

    </div>

    <hr class="featurette-divider">

  </main> -->


  <main class="container">
    <hr>
  
    <div class="row featurette align-items-center">
      <div class="col-lg-7 col-md-12">
        <h2 class="featurette-heading fw-normal lh-1">Cultivate psychological well-being with nature.</h2>
        <p class="lead"> Immerse yourself in the psychological sanctuary that plants provide. From reducing stress to boosting mood, discover the myriad ways in which incorporating greenery into your surroundings can positively impact your mental well-being.</p>
        
        <div class="d-flex flex-wrap gap-5 justify-content-center py-5">
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Stress reduction</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Improved sleep</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Feng Shui Benefits</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Aesthetic pleasure</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Emotional upliftment</span>
        </div>
      </div>
      <div class="col-lg-5 col-md-12">
        <img src="images/psychological.jpg" class="img-fluid" alt="psychological benefits">
      </div>
    </div>
  
    <hr class="featurette-divider">
  
    <div class="row featurette align-items-center flex-lg-row-reverse">
      <div class="col-lg-7 col-md-12">
        <h2 class="featurette-heading fw-normal lh-1">Green Living, Sustainable Impact.</h2>
        <p class="lead">Join the movement towards a greener, more sustainable future. A simple act of incorporating plants into your life can contribute to a healthier planet.</p>
        
        <div class="d-flex flex-wrap gap-3 justify-content-center py-5">
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">CO2 reduction</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Air purification</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Temperature regulation</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Optimal indoor humidity</span>
        </div>
      </div>
      <div class="col-lg-5 col-md-12">
        <img src="images/environment.jpg" class="img-fluid">
      </div>
    </div>
  
    <hr class="featurette-divider">
  
    <div class="row featurette align-items-center">
      <div class="col-lg-7 col-md-12">
        <h2 class="featurette-heading fw-normal lh-1">Nurturing Health Through Nature.</h2>
        <p class="lead">Elevate your health with the healing touch of nature. Embrace the well-being that a plant-filled environment can bring into your life.</p>
      
        <div class="d-flex flex-wrap gap-4 justify-content-center py-5">
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Better respiratory health</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Reduced headaches</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Reduced Sick Building Syndrome</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Medicinal properties</span>
        </div>
      </div>
      <div class="col-lg-5 col-md-12">
        <img src="images/heealth.jpg" class="img-fluid">
      </div>
    </div>
  
    <hr class="featurette-divider">

    <div class="row featurette align-items-center">
      <div class="col-lg-7 col-md-12">
        <h2 class="featurette-heading fw-normal lh-1"> Boost Your Productivity Naturally.</h2>
        <p class="lead">Unleash your full potential by harnessing the productivity benefits of plants. The presence of greenery can really transform your workspace and elevate your productivity.</p>
      
        <div class="d-flex flex-column flex-md-row gap-3 justify-content-center py-5">
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Enhanced concentration</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Inspiration and relaxation</span>
          <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Cognitive restoration</span>
        </div>
      
      </div>
      <div class="col-lg-5 col-md-12">
        <img src="images/pexels-pixabay-269323.jpg" class="img-fluid">
      </div>
    </div>
    
    <hr class="featurette-divider">


  </main>

    

    <!-- /END THE FEATURETTES -->


@endsection