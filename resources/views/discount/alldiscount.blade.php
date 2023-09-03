
  

@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<table class="table table-bordered table-hover">
   
        <tr>
                <th>alldiscount</th>
              
                @if(Auth::user()!=null)
                @if(Auth::user()->role=='admin')
                <th>actions</th>
                @endif
                @endif
            </tr>
    @foreach ($discounts as $discount)
       <tr>
            @if($discount->product=="products")
  <td>  <h1> We have a {{$discount->amount}}% discount on {{$discount->type}}</h1></td>
  @if(Auth::user()!=null)
  @if(Auth::user()->role=='admin')
 <td> <a class="btn btn-primary" href="/deletediscount/{{$discount->id}}">delete </a></td>
    @endif
    @endif
    @endif
    @if($discount->bill=="bill")
    <td>  <h1> We have a {{$discount->amount}}% discount on bill</h1></td>
    @if(Auth::user()!=null)
    @if(Auth::user()->role=='admin')
  <td>  <a class="btn btn-primary" href="/deletediscount/{{$discount->id}}">delete </a></td>
      @endif
      @endif
         @endif
   
      
    
     
    </tr> 
    @endforeach
</table>


 
@endsection