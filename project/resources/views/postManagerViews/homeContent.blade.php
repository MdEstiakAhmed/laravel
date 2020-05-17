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
    <div class="container">
        <h1 class="text-center mt-5 mb-2 p-5">Wellcome to post manager admin panel</h1>
        <h1 class="text-center mt-2 mb-2 text-primary"><a href="{{route('postManagerHome.profileView', session('user_id'))}}">{{$user->first_name}} {{$user->last_name}}</a></h1>
        <h1 class="text-center mb-2 text-primary"><span>@</span>{{$user->username}}</h1>
        <h1 class="text-center mb-5 text-primary">{{$user->email}}</h1>    
    </div>
@endsection