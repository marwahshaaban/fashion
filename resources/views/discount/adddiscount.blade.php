@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">
</head>
<body>
    <br>
    <center>
<h1> Add New Discount </h1>
</center>

  <div class="container-fluid pt-5">
    <div class="text-center mb-4">
    <a class="btn btn-primary py-2 px-4" href="http://127.0.0.1:8000/nova/dashboards/main" type="submit" id="sendMessageButton"> DashBord
</a>
    </div>
    <br>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">

                <div id="success"></div>
                <form action="/discount" id="contactForm" method="POST" novalidate="novalidate">
                    @csrf
                    <div class="control-group">
                            <select class="form-control" id="discount" name="discount">
                                    <option value="nothing">nothing</option>
                                  <option value="bill">Bill</option>
                                  <option value="products">products</option>
                                </select>

                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <select class="form-control" id="product" name="product"  >
                            <option value="nothing">nothing</option>
                          <option value="jeans">jeans</option>
                          <option value="shirts">shirts</option>
                          <option value="swimwear">swimwear</option>
                          <option value="sleepwear">sleepwear</option>
                          <option value="sportswear">sportswear</option>
                          <option value="jumpsuites">jumpsuites</option>
                          <option value="blazers">blazers</option>
                          <option value="jackets">jackets</option>
                          <option value="shoes">shoes</option>
                        </select>
                    </div>
                    <div class="control-group">

                        <input type="number" class="form-control" name="amount" placeholder="discount amount"
                            required="required"  />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">

                            <input type="number" class="form-control" name="day" placeholder="the number of days"
                                required="required"  />
                            <p class="help-block text-danger"></p>
                        </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Add Discount
                           </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <center>

    <a class="btn btn-primary py-2 px-4" href="/alldiscount" type="submit" id="sendMessageButton"> Show All Discounts
</a>
</center>
</div>
<!-- Contact End -->




</body>


</html>
@endsection








