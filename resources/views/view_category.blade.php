@extends('layouts.main')
@section('title', trans('messages.vcategory'))
@section('actC', 'class=active')
@section('content')
<table class="table table-bordered">
	<thead>
		<tr>
			<th class="text-center">{{trans('messages.id')}}</th>
			<th class="text-center">{{trans('messages.title')}}</th>
			<th class="text-center">{{trans('messages.description')}}</th>
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
    				<a href="{{route('categories.edit', $category->id)}}" class = "btn btn-success btn-xs">{{trans('messages.update')}}</a>
    				<input type="hidden" name="_method" value="DELETE">
    				<input type = "submit" name="submit" class = "btn btn-warning btn-xs" value="{{trans('messages.delete')}}"></input>
    			</form>
    		</td>
    	</tr>
    @endforeach		
	</tbody>
</table>
<a class="btn btn-lg btn-default" href="{{ url('categories/create')}}">{{trans('messages.create')}}</a>
@stop