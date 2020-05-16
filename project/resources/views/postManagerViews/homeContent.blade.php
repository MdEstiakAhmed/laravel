@extends('postManagerViews.home')
@section('content')
    @if(Request()->session()->has('notification'))
        <div class="alert alert-success notification" role="alert">
            {{Request()->session()->get('notification')}}
        </div>
        @php
            Request()->session()->forget('notification');
        @endphp
    @endif
    <h1>welcome {{$user->first_name}} {{$user->last_name}}</h1>
@endsection