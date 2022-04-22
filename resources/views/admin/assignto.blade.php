@extends('layouts.app')

@section('content')
<form action="/assign" method="POST">
    @csrf 
<div class="panel panel-defualt">

    <div class="panel-heading"> 

    <h1> {{$product->name}} </h1>
    </div> 
    <div class="panel-body"> 
        <input name="product_id" value="{{$product->id}}" hidden>
         <select class= "form-control" name="user_id" required>
         <option> </option>
         @foreach ($users as $user )
         <option value="{{$user->id}}"> {{$user->email}} </option>
             
         @endforeach 
         </select>
          <input class="btn btn-success" type="submit" value="ASSIGN" > 
    </div> 
    <br>
    <br>
    <br>
    <div class= "panel-footer">
     All Right Reserved 
    </div> 
</div>



</form>   

@endsection