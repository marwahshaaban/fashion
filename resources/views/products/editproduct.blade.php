@extends('layouts.app')
@section('content')
<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
@csrf 
@method('PUT')
<div class="panel panel-defualt">
    <div class="panel-heading">
        <h1> EDIT Product</h1>
    </div>
    <div class="panel-body">
        <h5 class="text-left">Name :</h5>
        <input class="form-control" type="text" name="name" value="{{$product->name}}" required>
        <h5 class="text-left">Description :</h5>
        <input class="form-control" type="text" name="description" value="{{$product->description}}" required ><br>
        <h5 class="text-left">Price :</h5>
        <input class="form-control" type="text" name="price" value="{{$product->price}}" required ><br>
        <h5 class="text-left">Image :</h5>
        <input class="form-control" type="file" name="image" ><br>
        <input class="btn btn-success" type="submit" value="UPDATE" > 
    </div>
    <div class="panel-footer">
        All Rights Reserved
    </div>
</div>
</form>
@endsection