@extends('layouts.app')
@section('content')



<br>
<br>
<br>

<div class="container-fluid">

        <div class="row align-items-center py-3 px-xl-5 cm-sm-10">

            <div class="col-lg-6 col-6 text-left cm-sm-10">
                <form action="{{ route('web.find') }}" method="GET">
                    @csrf
                    <div class="input-group">
                    <input type="text" class="form-control" name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
                    <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                        <div class="input-group-append">

                            <button type="submit" class="input-group-text bg-transparent text-primary" > <i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
             <br>
             <hr>
             <br>
             @if(isset($products))

               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>Name</th>
                           <th>Description</th>
                           <th>Price</th>
                           <th>Type</th>
                           <th>Image</th>
                       </tr>
                   </thead>
                   <tbody>
                       @if(count($products) > 0)
                           @foreach($products as $product)
                              <tr>
                                  <td>{{ $product->name }}</td>
                                  <td>{{ $product->description}}</td>
                                  <td>{{ $product->price  }}</td>
                                  <td>{{ $product->type }}</td>
                                  <td>{{ $product->image }}</td>
                              </tr>
                           @endforeach
                       @else

                          <tr><td>No result found!</td></tr>
                       @endif
                   </tbody>
               </table>

               <div class="pagination justify-content-center">
                   <?php  ?>
                   {{  $products->appends(request()->input())->links('layouts.paginationlinks') }}
               </div>

             @endif
          </div>
       </div>

</body>
</html>
@endsection
