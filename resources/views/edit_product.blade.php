@extends('layouts.main')
@section('title', 'Edit Product')
@section('actP', 'class=active')
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
@endif
@foreach ($errors->all() as $error)
    <p><span style="color:red;">{{ $error }}</span></p>
@endforeach
@if(isset($product))
<form class="form-horizontal lead" role="form" method="POST" action="{{ route('products.update', $product->id)}}">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label class="control-label col-sm-3">Title:</label>
    <div class="col-sm-9">
      <input id="title" type="text" class="form-control" placeholder="Title" name="title" value="{{$product->title}}" required/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">Description:</label>
    <div class="col-sm-9">
      <textarea id="description" class="form-control" rows="3" placeholder="Description" name="description" required>{{$product->description}}</textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">Value:</label>
    <div class="col-sm-9">
      <input id="value" type="number" class="form-control" placeholder="Value" name="value" min="1" value="{{$product->value}}" required/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">Category:</label>
    <div class="col-sm-9">
      <select class="form-control" name="category">
        @foreach($categories as $category)
         <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }} >{{ $category->title }}</option>
        @endforeach
      </select>   
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-lg btn-default">Update</button>
    </div>
  </div>
</form>
@endif
@stop

