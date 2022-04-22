@extends('layouts.app')
@section('content') 
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Update</h2>
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
        <h2> Update <strong> Password</strong></h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div> 
      <br>
      <br>
      <br> 
      
<form action="/changepassword" method="POST">
    @csrf 
<div class=" panel panel-defualt">
    <div class="panel-heading">
    <h1> Change your password  </h1>
    </div> 
    <div class="panel-body">
    <h5 class="text-left"> Old Password : <h5> 
        <input class="form-control" type="password" name="OldPassword" required> 
     <h5 class="text-left"> New Password: <h5> <br> 
            <input class="form-control" type="password" name="NewPassword" required > 
            <br>
            <br>
            <br>
          <input class="btn btn-success" type="submit" value="Change" > 
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

@endsection 

 

