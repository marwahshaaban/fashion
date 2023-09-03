@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Recomendation</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset("css/bootstrap.css")}}>


    <!-- main css -->
    <link rel="stylesheet" href={{asset("css/style3.css")}}>



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css">



</head>

<section class="top_dish_area">


<div class="container-fluid text-center">
<img   src="\storage\product_images\{{ $product->image }}"> <br><hr>
<h4> Name : {{$product->name}}</h4> <hr> <br>
<h4> Description : {{$product->description}}</h4> <br> <hr>
<h4> Price : {{$product->price}}</h4> <br> <hr>

<h4> Created_at: {{$product->created_at}}</h4> <br><hr>

<h4> Rate this item : </h4>

<span title="Likes" id="saveLikeDislike" data-type="sosolike" data-post="{{ $product->id}}" class="mr-2 btn btn-sm btn-outline-primary d-inline font-weight-bold"><i class="bi bi-emoji-heart-eyes"></i> </span>
        <span title="Likes" id="saveLikeDislike" data-type="solike" data-post="{{ $product->id}}" class="mr-2 btn btn-sm btn-outline-success d-inline font-weight-bold"><i class="bi bi-emoji-smile"></i></span>

        <span title="Likes" id="saveLikeDislike" data-type="like" data-post="{{ $product->id}}" class="mr-2 btn btn-sm btn-outline-secondary d-inline font-weight-bold"><i class="bi bi-emoji-neutral"></i> </span>

         <span title="Likes" id="saveLikeDislike" data-type="nolike" data-post="{{ $product->id}}" class="mr-2 btn btn-sm btn-outline-warning d-inline font-weight-bold"><i class="bi bi-emoji-frown"></i> </span>

        <span title="Dislikes" id="saveLikeDislike" data-type="dislike"data-post="{{ $product->id}}" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold"><i class="bi bi-emoji-angry"></i> </span>

        <br>
        <br><hr>
</div>


        <div class="row">
            @foreach (  $content_movies as$content_movie=>$value)
            <div class="single_dish col-lg-4 col-md-6 text-center">
                <div class="thumb">
                    <img style="width:100px" src="\storage\product_images/{{ $value['image']  }}">
                </div>
                <h4>{{$value['name'] }}</h4>


            </div>
            @endforeach
        </div>
    </div>




            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title position-relative">
                    <h1> منتجات قد تعجبك</h1>
                        <hr>
                    </div>
                </div>
                    </div>

            <div class="row">
                @foreach( $product22  as $product)
                <div class="single_dish col-lg-4 col-md-6 text-center">
                    <div class="thumb">
                        <img class="large-product-image" style="width:200px" src="\storage\product_images/{{ $product->image }}" alt="Product Image">
                    </div>
                    <h4>{{ $product->name }}</h4>
                    <p>
                        {{ $product->price }}
                    </p>

                </div>
                @endforeach
            </div>

            @endsection




