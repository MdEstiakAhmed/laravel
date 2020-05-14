@extends('postManagerViews.home')
@section('content')
    <h1>welcome {{$user->first_name}} {{$user->last_name}}</h1>
@endsection