@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Book A Table</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href={{asset("css/bootstrap.css")}}>

	
	<!-- main css -->
	<link rel="stylesheet" href={{asset("css/style3.css")}}>

</head>

<body>

 
	<!--================End Banner Area =================-->

	<!--================Book Table Area =================-->
	<section class="book_table_area section_gap">
		<div class="container">
			<div class="book_table_inner row">
				<div class="col-lg-5">
					<div class="table_img">
						<img style="width:400px" src="\storage\product_images/{{ $prud->image }}">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="table_form">
						<h3>UPDATE Your Order</h3>
						
                        <form action="/reser" method="POST">
                            @csrf 
							<div class="form-group col-md-12">
                                    <input name="id" value="{{$prud->id}}" hidden>
                                <h5 class="text-left">Please enter your name </h5>
                                <input class="form-control" type="text" name="name" >
                            </div>
                            <div class="form-group col-md-12">
                                <h5 class="text-left">Please enter your number </h5>
                                <input class="form-control" type="text" name="number" >
                            </div>
                            <div class="form-group col-md-12">
                                <h5 class="text-left">
                                    Last time for booking</h5>
                                <input class="form-control" type="date" name="date" >
                              
							</div>
							
                                <input class="btn btn-success" type="submit" value="UPDATE" >
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	

</body>

</html>
@endsection


