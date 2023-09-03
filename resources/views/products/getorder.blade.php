@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">

<div>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href={{asset("css/bootstrap.css")}}>


        <!-- main css -->
        <link rel="stylesheet" href={{asset("css/style3.css")}}>

</div>

<body>


	<!--================End Banner Area =================-->

	<!--================Book Table Area =================-->
	<section class="book_table_area section_gap">
		<div class="container">
			<div class="book_table_inner row">
				<div class="col-lg-5">
					<div class="table_img">
						<img style="width:400px" src="\storage\product_images/{{$can->image }}">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="table_form">
						<h3>please Enter the number of pieces you want of this item : </h3>

						<form action="/bag" method="POST">
							@csrf

							<input name="can_id" value="{{$can->id}}" hidden>

							<h5 class="text-left">num:</h5>
							<br>
							<input class="form-control" type="text" name="size" value="1" >
							<div class="form-group col-md-12">
								<br>
								<br>
								<input class="btn btn-success" type="submit" value="Order" >
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Book Table Area =================-->

	<!--================ start footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->



</body>

</html>
@endsection
