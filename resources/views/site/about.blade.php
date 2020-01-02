@extends('layouts.master')

@section('title', 'Home')

@section('contents')

<section data-jarallax data-speed=".8" class="pt-10 pt-md-14 pb-12 pb-md-15 overlay overlay-primary overlay-80 jarallax" style="background-image: url(assets/img/covers/cover-7.jpg);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 text-center">
            
            <!-- Heading -->
            <h1 class="display-1 font-weight-bold text-white mb-6 mt-n3">
              About Us
            </h1>

            <!-- Button -->
            <a href="https://www.youtube.com/watch?v=9I-Y6VQ6tyI" class="btn btn-pill btn-white shadow lift" data-fancybox>
              <i class="fe fe-eye mr-2"></i>
              Get to know us
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>


 <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
        <svg viewBox="0 0 1440 125" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 125L1440 0V125H0Z" fill="currentColor"/>
        </svg>

      </div>
    </div>


    <section class="py-8 py-md-5 borde-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <h2>
            PRODUCT
            INFORMATION
          </h2>

          <p>
            <span>
              Founded in 2011 Jambo Food Product is part of Jambo Group of Companies Ltd. and one of the largest manufacturer of carbonated soft drinks, fresh juices, and processing and bottling of water within East Africa. The company is based in Shinyanga, Tanzania.
            </span>
          </p>

      
        </div>
      </div>
    </section>

    <!-- STATS
    ================================================== -->
  {{--   <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
            <!-- Card -->
            <div class="card-group card-border card-border-lg border-primary shado-light-lg">
              <div class="card">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    <span data-toggle="countup" data-from="0" data-to="15" data-aos data-aos-id="countup:in"></span>M+
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                     Customers
                  </p>
                  
                </div>
              </div>
              <div class="card border-left-md">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    <span data-toggle="countup" data-from="0" data-to="12" data-aos data-aos-id="countup:in"></span>
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                    Food Products
                  </p>
                  
                </div>
              </div>
              <div class="card border-left-md">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    <span data-toggle="countup" data-from="0" data-to="13" data-aos data-aos-id="countup:in"></span>
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                    Drinks
                  </p>
                  
                </div>
              </div>
              <div class="card border-left-md">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    <span data-toggle="countup" data-from="0" data-to="95" data-aos data-aos-id="countup:in"></span>M+
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                    Shops 
                  </p>
                  
                </div>
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section> --}}




    <!-- Products
    ================================================== -->
    <section class="py-8 py-md-11 bg-gradient-light border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">Our Products</span>
            </span>

            <!-- Heading -->
            <h1 class="mb-8">
              Come see what we have to offer
            </h1>


          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3 d-flex mb-3">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0 " href="#!" data-aos="fade-up">

              <!-- Image -->
              <img src="assets/img/photos/ph1.png" alt="..." class="card-img-top">

            </a>

          </div>

            <div class="col-12 col-md-6 col-lg-3 d-flex mb-3">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0" href="#!" data-aos="fade-right">

              <!-- Image -->
              <img src="assets/img/photos/ph2.png" alt="..." class="card-img-top">

            </a>

          </div>


            <div class="col-12 col-md-6 col-lg-3 d-flex mb-3">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0" href="#!" data-aos="fade-left">

              <!-- Image -->
              <img src="assets/img/photos/ph3.png" alt="..." class="card-img-top">

            </a>

          </div>



            <div class="col-12 col-md-6 col-lg-3 d-flex mb-3">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0" href="#!" data-aos="fade-up">

              <!-- Image -->
              <img src="assets/img/photos/ph2.png" alt="..." class="card-img-top">

            </a>

          </div>

         {{--  <div class="justify-content-center mb-md-8">
            <center>
            <button class="center btn btn-primary">
              View All
            </button>
          </center>
          </div> --}}
          
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