@extends('layouts.main')
@section('title', 'Categories List')
@section('actC', 'class=active')
@section('content')
<table class="table table-bordered">
	<thead>
		<tr>
			<th class="text-center">Id</th>
			<th class="text-center">Title</th>
			<th class="text-center">Description</th>
			<th class="text-center"></th>
		</tr>
	</thead>
	<tbody>
    @foreach($categories as $category)
    	<tr>
    		<td>{{ $category->id }}</td>
    		<td>{{ $category->title }}</td>
    		<td>{{ $category->description }}</td>
    		<td>
    			<form method="POST" action="{{route('categories.destroy', $category->id)}}">
    				{{ csrf_field() }}
    				<a href="{{route('categories.edit', $category->id)}}" class = "btn btn-success btn-xs">Update</a>
    				<input type="hidden" name="_method" value="DELETE">
    				<input type = "submit" name="submit" class = "btn btn-warning btn-xs" value="Delete"></input>
    			</form>
    		</td>
    	</tr>
    @endforeach		
	</tbody>
</table>
<a class="btn btn-lg btn-default" href="{{ url('categories/create')}}">Create New</a>
@stop