
@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>

<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
           <th>Number</th>
        <th>Image</th>
        <th>reservationfinish</th>
        <th>description</th>
        <th>action</th>
    </tr>

    @foreach ($revs as $rev)
       <tr>
          <td> {{$rev->name}} </td> 
             <td> {{$rev->number}} </td> 
    
        <td><img style="width:100px" src="\storage\product_images/{{ $rev->product->image }}"></td> 
        <td>{{$rev->reservationfinish}} </td>
        <td> </td>
      
        <td> <a class="btn btn-primary"href="/delete/{{$rev->id}}"> delete  </a> 
        
        <a class="btn btn-primary"href="/deletereservation/{{$rev->id}}"> delete reservation </a>   </td> 
       
        
    </tr> 
    @endforeach
</table>

@endsection