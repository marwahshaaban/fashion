@if (count ($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{ $error}} </div>
@endforeach
@endif

@if(session('error'))
<div class="alert alert-danger">
    <strong> {{session('error')}} </strong>
</div>
@endif
@if(session('success'))
<div class="alert alert-success">
    <strong> {{session('success')}} </strong>
</div>
@endif
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{session('warning')}}</strong>
</div>
@endif
