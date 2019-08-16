@extends('layouts.default')
@section('title', $user->name)

@section('content')
{{ $user->name }}-{{ $user->email }}
<br>
@include('shared._user_info', ['user'=>$user])
@stop
