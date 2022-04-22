@extends('layouts.app')
@section('content') 
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>YourInformation</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Profile</li>
        </ol>
      </div> 

    </div>
  </section><!-- End Breadcrumbs --> 
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2> <strong> Profile</strong></h2>
        <p>Here you can see the information about your personal account, your username and email . Also, press the " UPDATE Info " button to update and change your information.</p>
      </div> 
      <br>
      <br>
      <br>

     
      <center>
       
        <h4> Name : {{$user->name}} </h4> <hr> <br> 
        <h4> Email : {{$user->email}} </h4> 
        </center> 
        <br>
        <br>
        <br>
          <div class="text-center"><a href="/showupdateinfo" >UPDATE Info</a></div>
      </form>
  
       
</div>
  </section><!-- End Our Team Section -->

</main><!-- End #main --> 


@endsection 