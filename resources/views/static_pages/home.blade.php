@extends('layouts.default')
@section('title', '主页')
<li><a href="{{ route('help') }}">帮助</a></li>
<li><a href="{{ route('about') }}">关于</a></li>
<li><a href="#">登录</a></li>

@section('content')
	<h1>主页</h1>

	<div>
		<a href="{{ route('signup') }}">点击注册</a>
	</div>

@stop
