@extends('layouts.app')
@section('content') 
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Edit product</title>

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
						<img style="width:400px" src="\storage\product_images/{{$product->image }}">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="table_form">
						<h3>UPDATE THIS ITEM</h3>
						
                        <form action="/updatproduct" method="POST">
                            @csrf 
							<div class="form-group col-md-12">
                                    <input name="id" value="{{$product->id}}" hidden>
									<br>
                               <h6> From here , you can adjust the number of pieces and  price of pieces you want  </h6>
                               <br>
                            </div>
                            <div class="form-group col-md-12">
                                <h5 class="text-left"> The number of new pieces :</h5>
                              
							</div>
                            <input class="form-control" type="text" name="amount" value="{{$product->amount}}" > 
                            <br>
                            <div class="form-group col-md-12">
                                <h5 class="text-left"> The price of new pieces :</h5>
                              
							</div>
							<input class="form-control" type="text" name="price" value="{{$product->price}}" > 
							<br>
							<br>
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