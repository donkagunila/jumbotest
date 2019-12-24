@extends('layouts.master')

@section('title', 'Home')

@section('contents')

  ================================================== -->
    <section>
      <div class="flickity-button-white flickity-button-inset" data-flickity='{"imagesLoaded": true, "wrapAround": true, "pageDots": false}'>
        <div class="w-100">
          
          <!-- Image -->
          <img src="{{ asset('assets/img/covers/cover-2.png') }}" class="img-fluid w-100" alt="...">

          <!-- Shape -->
          <div class="shape shape-top shape-fluid-x svg-shim text-white">
            <svg viewBox="0 0 1440 36" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M1440 0H0V18C0 18 289.423 58 705 18C1121.5 -19.5 1440 18 1440 18V0Z" fill="currentColor"/>
            </svg>
          </div>

        </div>
        <div class="w-100">
          
          <!-- Image -->
          <img src="{{ asset('assets/img/covers/cover-2.png') }}" class="img-fluid w-100" alt="...">

          <!-- Shape -->
          <div class="shape shape-top shape-fluid-x svg-shim text-white">
            <svg viewBox="0 0 1440 36" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M1440 0H0V18C0 18 289.423 58 705 18C1121.5 -19.5 1440 18 1440 18V0Z" fill="currentColor"/>
            </svg>
          </div>

        </div>
      </div>
    </section>







    <!-- BLOG
    ================================================== -->
    <section class="py-8 py-md-11 bg-gradient-light border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">Our blog</span>
            </span>

            <!-- Heading -->
            <h1>
              Come up to speed with what has been happening.
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9">
              We share insights on products and services to ensure you find the quality you seek
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 d-flex">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0" href="#!">

              <!-- Image -->
              <img src="assets/img/photos/photo-7.png" alt="..." class="card-img-top">

              <!-- Body -->
              <div class="card-body">

                <!-- Heading -->
                <h3>
                  Products should appeal to a class of Quality
                </h3>

                <!-- Text -->
                <p class="text-muted mb-5">
                  where quality meets deadlines to get a desired product
                </p>
                
                <!-- Meta -->
                <div class="row mt-auto pt-5 border-top">
                  <div class="col">
                    
                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mb-0">
                      Remi Ongala
                    </h6>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0">
                      <time datetime="2018-05-02">Dec 21</time>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
              </div>
            </a>

          </div>
          <div class="col-12 col-md-6 col-lg-4 d-flex">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0" href="#!">

              <!-- Image -->
              <img src="assets/img/photos/photo-7.png" alt="..." class="card-img-top">

              <!-- Body -->
              <div class="card-body">

                <!-- Heading -->
                <h3>
                  Photos should appeal to a sense of adventure
                </h3>

                <!-- Text -->
                <p class="text-muted mb-5">
                  where quality meets deadlines to get a desired product
                </p>
                
                <!-- Meta -->
                <div class="row mt-auto pt-5 border-top">
                  <div class="col">
                    
                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mb-0">
                      Kelvin Kimbiji
                    </h6>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0">
                      <time datetime="2018-05-02">Dec 21</time>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
              </div>
            </a>

          </div>
          <div class="col-12 col-md-6 col-lg-4 d-flex">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0" href="#!">

              <!-- Image -->
              <img src="assets/img/photos/photo-7.png" alt="..." class="card-img-top">

              <!-- Body -->
              <div class="card-body">

                <!-- Heading -->
                <h3>
                  Products should appeal to a class of Quality
                </h3>

                <!-- Text -->
                <p class="text-muted mb-5">
                  where quality meets deadlines to get a desired product
                </p>
                
                <!-- Meta -->
                <div class="row mt-auto pt-5 border-top">
                  <div class="col">
                    
                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mb-0">
                      Remi Ongala
                    </h6>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0">
                      <time datetime="2018-05-02">Dec 21</time>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
              </div>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>






  <!-- CTA
    ================================================== -->
    <section data-jarallax data-speed=".8" class="py-12 py-md-14 overlay overlay-black overlay-80 jarallax no-repeat" style="background-image: url({{ asset('assets/img/covers/cover-8.jpg') }});">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-1- col-lg-8 text-center">
            
            <!-- Heading -->
            <h1 class="text-white">
              Need more information about Jambo ?
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-white-80 mb-6 mb-md-8">
              About our products, Become Our Agents, Join our Team, meet our group? welcome .. It’s our pleasure to hear from you !
            </p>

            <!-- Button -->
            <a href="#!" class="btn btn-pill btn-primary lift">
              Contact Us <i class="fe fe-arrow-right ml-2"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 1440 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 24H1440V0C722.5 52 0 0 0 0V24Z" fill="currentColor"/>
        </svg>

      </div>
    </div>
	

@endsection