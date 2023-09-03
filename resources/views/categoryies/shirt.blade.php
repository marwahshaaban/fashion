@extends('layouts.app')
@section('content') 


     
 

 
<div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
        @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    
                   <p>
                        <img class="img-fluid" src="\storage\product_images/{{ $product->image }}" alt="">
</p> 
                    <p> <a class="btn btn-primary" href="buy/ {{$product->id }}"> Buy </a> </p> 
                    <p> 
                        
                <form action="/rating/{{$product->id}}" method="POST" >  
                    @csrf
           <input name = "rat" type = "radio" value = "5" />  5 
           <input name = "rat" type = "radio" value = "4" />   4 
            <br>
            <br>
           <input class="btn btn-success" type="submit" value="ADD" >
        </form> 
        <br>
</p>
        
    
</p>
                    <h5 class="font-weight-semi-bold m-0"><a href="{{route('products.show',$product->id)}}">{{ $product->name}}</a></h5>
                </div> 
            </div> 
            @endforeach
             
</div>
</div>
@endsection