@extends('layouts.main')
@section('title', 'Products List')
@section('actP', 'class=active')
@section('content')
<table class="table table-bordered">
	<thead>
		<tr>
			<th class="text-center">Id</th>
			<th class="text-center">Title</th>
			<th class="text-center">Description</th>
			<th class="text-center">Value</th>
			<th class="text-center">Category</th>
			<th class="text-center"></th>
		</tr>
	</thead>
	<tbody>
    @foreach($products as $product)
    	<tr>
    		<td>{{ $product->id }}</td>
    		<td>{{ $product->title }}</td>
    		<td>{{ $product->description }}</td>
    		<td>{{ $product->value }}</td>
    		<td>{{ $product->category }}</td>
    		<td>
    			<form method="POST" action="{{route('products.destroy', $product->id)}}">
    				{{ csrf_field() }}
    				<a href="{{route('products.edit', $product->id)}}" class = "btn btn-success btn-xs">Update</a>
    				<input type="hidden" name="_method" value="DELETE">
    				<input type = "submit" name="submit" class = "btn btn-warning btn-xs" value="Delete"></input>
    			</form>
    		</td>
    	</tr>
    @endforeach		
	</tbody>
</table>
<a class="btn btn-lg btn-default" href="{{ url('products/create')}}">Create New</a>
@stop

