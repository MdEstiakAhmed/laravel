@extends('postManagerViews.home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
            <div>
                <img src="/images/{{ $userInfo->image }}" alt="">
            </div>
            </div>
            <div class="col-9">
                <h1>{{$userInfo->first_name}} {{$userInfo->last_name}}</h1>
                <h5>{{$userInfo->bio}}</h5>
                <h5>{{$userInfo->email}}</h5>
                <h5>{{$userInfo->website}}</h5>
                <h5>{{$userInfo->gender}}</h5>
                <a class="btn btn-primary" href="{{route('postManagerHome.profileView', $userInfo->user_id)}}">View More</a>
            </div>
        </div>
    </div>
@endsection