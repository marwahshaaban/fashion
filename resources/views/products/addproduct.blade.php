@extends('layouts.app')
@section('content')
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="panel panel-defualt">
    <div class="panel-heading">
        <h1> Add Product</h1>
    </div>
    <div class="panel-body">
        <h5 class="text-left">Name :</h5>
        <input class="form-control" type="text" name="name" >
        <h5 class="text-left">Description :</h5>
        <input class="form-control" type="text" name="description" ><br>
        <div class="control-group">
        <h5 class="text-left">Type :</h5>
      <select class="form-control" id="product" name="type"  >
                          <option value="jeans">jeans</option>
                          <option value="shirts">shirts</option>
                          <option value="swimwear">swimwear</option>
                          <option value="sleepwear">sleepwear</option>
                          <option value="sportswear">sportswear</option>
                          <option value="jumpsuites">jumpsuites</option>
                          <option value="blazers">blazers</option>
                          <option value="jackets">jackets</option>
                          <option value="shoes">shoes</option>
                          <option value="dresses">dresses</option>
                        </select>
                    </div><br>
                    <h5 class="text-left">Gender :</h5>
                    <select class="form-control"  name="gender"  >
                        <option value="men">men</option>
                        <option value="women">women</option>
                    </select>   
        <h5 class="text-left">Price :</h5>
        <input class="form-control" type="text" name="price" ><br>
        <h5 class="text-left">Amount :</h5>
        <input class="form-control" type="text" name="amount" ><br>
        <h5 class="text-left">Image :</h5>
        <input class="form-control" type="file" name="image" ><br>
        <input class="btn btn-success" type="submit" value="ADD" >
    </div>
    <div class="panel-footer">
        All Rights Reserved
    </div>
</div>
</form>
@endsection
