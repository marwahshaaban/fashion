
<table>
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
        <td>{{ $product->price }}</td>  
      
        <td>{{ $product->num }}</td> 
     
        <td>{{ $product->pricetotal }}</td>  
        <td> 
           
         </td>
    </tr> 
    @endforeach
</table>

