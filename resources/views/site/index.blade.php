@extends('layouts.master')

@section('title', 'Home')

@section('contents')






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