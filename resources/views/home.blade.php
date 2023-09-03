@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}} 
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(/img/carousel-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Our Website</span></h2>
              <p>Here are all the modern fashion ... and what a woman needs to be distinguished and show her unique beauty with the latest brands and modern clothes that suit all tastes ...
                You will get everything you want and suitable for your unique taste . </p>
              <div class="text-center"><a href="{{ url('/homee') }}" class="btn-get-started">Shop now </a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(/img/carousel-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Our outfits are to your liking</h2>
              <p>You will also get anything similar to your taste and what you choose...
                Suggestions for your style and what you usually wear...
                It will make it easier for you to find the right pieces for you and what you love and suitable for you.</p>
              {{-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
              <div class="text-center"><a href="{{ url('/about') }}" class="btn-get-started"> about </a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url( /img/bg5.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Your opinion is important to us</h2>
              <p>Your opinion of the products that we display on the site is very important to us ... and your continuous evaluation of our application in the store helps us to continue and display the products that suit you and make you unique always.</p>
              {{-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
              <div class="text-center"><a href="{{ url('/contactus') }}" class="btn-get-started">Contact us</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div> 
    
@endsection
