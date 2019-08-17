@extends('layouts.default')
@section('title', '注册')

@section('content')
	<h1>注册</h1>
<div>
	Name 	  :    <input type="text" name="name" class="form-control" value="{{ old('name') }}"/><br/>
	email	  :    <input type="email" class="form-control" value="{{ old('email') }}"/><br/>
	password  :	   <input type="password" name="password" class="form-control" value="{{ old('password') }}"/><br/>
	confirmPas:	   <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}"><br/>
	<button type="submit" class="btn btn-primary">sign up</button>
</div>
@stop



