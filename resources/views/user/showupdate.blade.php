@extends('layouts.app')

@section('content')
<form action="/update" method="POST">
    @csrf 
<div class="panel panel-defualt">
    <div class="panel-heading">
    <h1> UPDATE User information  </h1>
    </div> 
    <div class="panel-body"> 
        <input name="id" value="{{$userinfo->id}}" hidden>
    <h5 class="text-left"> Name : </h5> 
        <input class="form-control" type="text" name=" name" value="{{$userinfo->name}}"  > 
    
          <input class="btn btn-success" type="submit" value="UPDATE" > 
    </div> 
    <br>
    <br>
    <br>
    <div class= "panel-footer">
     All Right Reserved 
    </div> 
</div>



</form>   
{{-- @section('content') 
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
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div> 
      <br>
      <br>
      <br> 
      <form action="/update" method="POST">
        @csrf 
    <div class="panel panel-defualt">
        <div class="panel-heading">
        <h1> UPDATE User information  </h1>
        </div> 
        <div class="panel-body"> 
            <input name="id" value="{{$userinfo->id}}" hidden>
        <h5 class="text-left"> Name : </h5> 
            <input class="form-control" type="text" name=" name" value="{{$userinfo->name}}"  > 
        
              <input class="btn btn-success" type="submit" value="UPDATE" > 
        </div> 
        <br>
        <br>
        <br>
        <div class= "panel-footer">
         All Right Reserved 
        </div> 
    </div>
    
    
    
    </form>   

     
       
</div>
  </section><!-- End Our Team Section -->

</main><!-- End #main -->

@endsection  --}}

@endsection