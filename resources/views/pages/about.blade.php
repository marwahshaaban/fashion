@extends('layouts.app')
@section('content')
{{-- <h1 class="text-center">Commercial Application </h1>
<h3 class="text-center">Commercial Application for buying and selling products</h3> --}}
<body>
<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
        
        <header id="header" >
            <h1 class="logo me-auto"><a href="{{ url('/fashion') }}"><span>Welcom to Our Webs</span>ite</a></h1>
</header>
          <br>
        <br>
        <br>

          <h3 class="fst-italic" >Here are all the modern fashion ... and what a woman needs to be distinguished and show her unique beauty with the latest brands and modern clothes that suit all tastes ...
                You will get everything you want and suitable for your unique taste .</h3>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
          <p>
          You will also get anything similar to your taste and what you choose...
                Suggestions for your style and what you usually wear...
                It will make it easier for you to find the right pieces for you and what you love and suitable for you.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Our outfits are to your liking</li>
            <li><i class="ri-check-double-line"></i> Your opinion is important to us</li>
            <li><i class="ri-check-double-line"></i> Your opinion of the products that we display on the site is very important to us ...  </li>
          </ul>
          <p class="fst-italic">
          and your continuous evaluation of our application in the store helps us to continue and display the products that suit you and make you unique always.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->
</body>
@endsection
