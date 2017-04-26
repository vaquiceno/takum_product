@extends('layouts.main')
@section('title', 'New Category')
@section('content')


@if(session()->has('msj'))
	@if(session('msj')=='S')
	<div class="alert alert-success" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Success!</strong> Data was saved correctly!
	</div>
	@elseif(session('msj')=='N')
	<div class="alert alert-danger" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Error!</strong> Data wasn't saved correctly!
	</div>
	@endif
@else
	<p>nada papi</p>
@endif
<form class="form-horizontal lead" role="form" method="POST" action="{{ url('categories')}}">
  {{ csrf_field() }}
  <div class="form-group">
  	@foreach ($errors->all() as $error)
        <span style="color:red;">{{ $error }}</span>
    @endforeach
    <label class="control-label col-sm-3" for="email">Title:</label>
    <div class="col-sm-9">
      <input id="title" type="text" class="form-control" placeholder="Title" name="title" required/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Description:</label>
    <div class="col-sm-9">
      <textarea id="description" class="form-control" rows="3" placeholder="Description" name="description" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-lg btn-default">Submit</button>
    </div>
  </div>
</form>
@stop

