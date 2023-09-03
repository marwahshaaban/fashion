@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
      
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
      
        <th>amount</th>
        <th>Actions</th>
        
    </tr>

    @foreach ($products as $product)
       <tr>
        <td>{{ $product->name}}</td>
        {{-- <td> <a href="/products/{{$product->id)}}">{{ $product->name}}</a></td>   --}}
       
        <td>{{ $product->description }}</td>  
        <td>{{ $product->price }}
      
        <br>
   
        <td><img style="width:100px" src="\storage\product_images/{{ $product->image }}"></td> 
      
     
        <td>{{ $product->amount }}</td>  
        <td> 
            <a class="btn btn-primary" href="/deleteproduct/{{$product->id}}">delete </a>
            <a class="btn btn-primary" href="/editproduct/{{$product->id}}">UPDATE </a> 
         </td>
       
    </tr> 
    @endforeach
</table>

@endsection