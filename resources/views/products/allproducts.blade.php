@extends('layouts.app')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Clothes</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>clothes</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <br>
<center>
  <div class="col-lg-6 col-6 text-left cm-sm-10">
                <form action="{{ route('web.find') }}" method="GET">
                    @csrf
                    <div class="input-group">
                    <input type="text" class="form-control" name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
                    <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                        <div class="input-group-append">

                            <button type="submit" class="input-group-text bg-transparent text-primary" > <i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <br>

</center>

<div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
        @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">

                    <!-- <a href="/recom/{{$product->id}}" class="cat-img position-relative overflow-hidden mb-3"> -->
                        <img class="img-fluid" src="\storage\product_images/{{ $product->image }}" alt="">
                    </a>
                    <center>
                    <h5 class="font-weight-semi-bold m-0">{{ $product->name}}</a></h5>
                    <br>
                    <br>
                   
                   
         @if($product->price != $product->priceafter)
 
 <del>{{ $product->price}}</del></h6>
<h6>{{ $product->priceafter}}</h6><h6 class="text-muted ml-2"> @endif
        @if($product->price == $product->priceafter)
 
        <center> <h6> {{$product->price }}</h6></center> @endif
 
 
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="/recom/{{$product->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="/bagto/{{$product->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                        <!-- <a class="btn btn-outline-dark"  href="/bagto/{{$product->id}}"><i class="bi bi-bag-heart"> Add to my bag </i> </a> -->



                <!-- <form action="/rating/{{$product->id}}" method="POST" > -->
                    <!-- @csrf
        <span title="Likes" id="saveLikeDislike" data-type="sosolike" data-post="{{ $product->id}}" class="mr-2 btn btn-sm btn-outline-primary d-inline font-weight-bold"><i class="bi bi-emoji-heart-eyes"></i> </span>
        <span title="Likes" id="saveLikeDislike" data-type="solike" data-post="{{ $product->id}}" class="mr-2 btn btn-sm btn-outline-success d-inline font-weight-bold"><i class="bi bi-emoji-smile"></i></span>

        <span title="Likes" id="saveLikeDislike" data-type="like" data-post="{{ $product->id}}" class="mr-2 btn btn-sm btn-outline-secondary d-inline font-weight-bold"><i class="bi bi-emoji-neutral"></i> </span>

         <span title="Likes" id="saveLikeDislike" data-type="nolike" data-post="{{ $product->id}}" class="mr-2 btn btn-sm btn-outline-warning d-inline font-weight-bold"><i class="bi bi-emoji-frown"></i> </span>

        <span title="Dislikes" id="saveLikeDislike" data-type="dislike"data-post="{{ $product->id}}" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold"><i class="bi bi-emoji-angry"></i> </span>

        <br>
</p> -->

<center>
</p>
                </div>
            </div>

            @endforeach

</div>
</div>

@endsection
