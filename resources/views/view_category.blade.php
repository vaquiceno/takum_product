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
		</tr>
	</thead>
	<tbody>
    @foreach($categories as $category)
    	<tr>
    		<td>{{ $category->id }}</td>
    		<td>{{ $category->title }}</td>
    		<td>{{ $category->description }}</td>
    	</tr>
    @endforeach		
	</tbody>
</table>
<a class="btn btn-lg btn-default" href="{{ url('categories/create')}}">Create New</a>
@stop