@extends('layouts.app')
@section('content') 

<div class="container-fluid text-center">

<h4> Name : {{$product->name}}</h4> <hr> <br> 
<h4> Description : {{$product->description}}</h4> <br> <hr>
<h4> Price : {{$product->price}}</h4> <br> <hr>
<img   src="\storage\product_images\{{ $product->image }}"> <br><hr>
<h4> Created_at: {{$product->created_at}}</h4> <br><hr>
<h4> Written_by: {{$product->user->name}}</h4> <br><hr>

{{-- style="width:100px" --}}
</div>
@endsection