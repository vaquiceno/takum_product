@extends('layouts.main')
@section('title', trans('messages.ncategory'))
@section('actC', 'class=active')
@section('content')


@if(session()->has('msj'))
  @if(session('msj')=='S')
  <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{trans('messages.saved_ok')}}
  </div>
  @elseif(session('msj')=='N')
  <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{trans('messages.not_saved')}}
  </div>
  @endif
@endif
@foreach ($errors->all() as $error)
    <p><span style="color:red;">{{ $error }}</span></p>
@endforeach
<form class="form-horizontal lead" role="form" method="POST" action="{{ url('categories')}}">
  {{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-3">{{trans('messages.title')}}:</label>
    <div class="col-sm-9">
      <input id="title" type="text" class="form-control" placeholder="{{trans('messages.title')}}" name="title" required/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">{{trans('messages.description')}}:</label>
    <div class="col-sm-9">
      <textarea id="description" class="form-control" rows="3" placeholder="{{trans('messages.description')}}" name="description" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-lg btn-default">{{trans('messages.save')}}</button>
    </div>
  </div>
</form>
@stop

