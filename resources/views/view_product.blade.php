@extends('layouts.main')
@section('title', trans('messages.vproduct'))
@section('actP', 'class=active')
@section('content')
<table class="table table-bordered">
	<thead>
		<tr>
			<th class="text-center">{{trans('messages.id')}}</th>
			<th class="text-center">{{trans('messages.title')}}</th>
			<th class="text-center">{{trans('messages.description')}}</th>
			<th class="text-center">{{trans('messages.value')}}</th>
			<th class="text-center">{{trans('messages.category')}}</th>
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
    				<a href="{{route('products.edit', $product->id)}}" class = "btn btn-success btn-xs">{{trans('messages.update')}}</a>
    				<input type="hidden" name="_method" value="DELETE">
    				<input type = "submit" name="submit" class = "btn btn-warning btn-xs" value="{{trans('messages.delete')}}"></input>
    			</form>
    		</td>
    	</tr>
    @endforeach		
	</tbody>
</table>
<a class="btn btn-lg btn-default" href="{{ url('products/create')}}">{{trans('messages.create')}}</a>
@stop

