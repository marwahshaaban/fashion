@extends('layouts.app')
@section('content')  

<table class="table table-bordered table-hover">
    <tr>
        <th>Name </th>
        <th>Email </th>
        <th>Actions</th>
    </tr>
    @foreach ($allusers as $alluser ) 
    <tr>
        <td>{{$alluser->name}} </td>
        <td>{{$alluser->email}}  </td>
        <td><a class="btn btn-danger" href="/deleteuser/{{ $alluser->id}}"> DELETE</a> <a class="btn btn-success" href="/upgraduser/{{$alluser->id}}">UPGARD </a>  <a class="btn btn-primary" href="/showupdate/{{$alluser->id}}">UPDATE </a> </td>
    </tr>
        
    @endforeach
</table>
@endsection