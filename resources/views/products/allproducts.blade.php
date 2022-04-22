@extends('layouts.app')
@section('content') 
<br>
<br>
<br>
<br>
<br>
<br>
<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Written by</th>  
        @if(Auth::user()!=null)
        @if(Auth::user()->role=='admin') 
        <th> Actions </th>
    </tr> 

     @endif
     @endif
    @foreach ($products as $product)
       <tr>
        <td> <a href="{{route('products.show',$product->id)}}">{{ $product->name}}</a></td>
        {{-- <td> <a href="/products/{{$product->id)}}">{{ $product->name}}</a></td>   --}}
        <td>{{ $product->description }}</td>  
        <td>{{ $product->price }}</td>  
        <td><img style="width:100px" src="\storage\product_images\{{ $product->image }}"></td> 
        {{-- <td>{{ $product->user->name }}</td>  --}}
        @if(Auth::user()!=null)
        @if(Auth::user()->role=='admin') 
        <td> <a class="btn btn-primary" href="assignto/ {{$product->id }}">Assign to </a> </td> 
        @endif
        @endif
    </tr> 
     
    @endforeach
</table>
@endsection