@extends('layouts.app')
@section('content')

<br>
<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>

        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>num</th>
        <th>price total</th>
        <th>Actions</th>

    </tr>

    @foreach ($products as $product)
       <tr>
        <td>{{ $product->name}}</td>
        {{-- <td> <a href="/products/{{$product->id)}}">{{ $product->name}}</a></td>   --}}

        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}
        @if($product->price != $product->priceafterdiscount)
        <br>
    <h5>  price after discount </h5>{{ $product->priceafterdiscount}} @endif</td>
        <td><img style="width:100px" src="\storage\product_images/{{ $product->image }}"></td>
        <td>{{ $product->num }}</td>

        <td>{{ $product->pricetotal }}</td>
        <td>
            <a class="btn btn-primary" href="/delete/{{$product->id}}">delete </a>
            <a class="btn btn-primary" href="/products/{{$product->id}}/edit">UPDATE </a>
         </td>

    </tr>
    @endforeach
</table>
<center>
<h1> total bill {{$size}} @if($size1!=$size)
   but total bill after discount on bill{{$size1}}
@endif</h1>;

<a class="btn btn-primary" href="/buy">Buy </a>
<a class="btn btn-primary" href="/pdf">Download </a>
</center>
@endsection
