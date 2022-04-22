@extends('layouts.app')
@section('content')
<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>

    @foreach ($products as $product)
       <tr>
        <td> <a href="{{route('products.show',$product->id)}}">{{ $product->name}}</a></td>
        {{-- <td> <a href="/products/{{$product->id)}}">{{ $product->name}}</a></td>   --}}
        
        <td>{{ $product->description }}</td>  
        <td>{{ $product->price }}</td>  
        <td><img style="width:100px" src="\storage\product_images\{{ $product->image }}"></td> 
        <td> 
            <form action="{{ route ('products.destroy',$product->id)}}" method="POST"> 
                @csrf
                @method('DELETE')
            <input class="btn btn-danger" type="submit" value="DELETE" > <br>
            </form>
            <a class="btn btn-primary" href="/products/{{$product->id}}/edit">UPDATE </a> 
         </td>
    </tr> 
    @endforeach
</table>
@endsection