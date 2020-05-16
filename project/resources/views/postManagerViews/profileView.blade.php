@extends('postManagerViews.home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @if($userInfo->image != null)
                    <div class="profile-pic">
                        <img src="/images/{{ $userInfo->image }}" alt="">
                    </div>
                @else
                    <div class="profile-pic">
                        <img class="img-fluid" src="/images/empty.png" alt="">
                    </div>
                @endif
            </div>
            <div class="col-9">
                <h1>{{$userInfo->first_name}} {{$userInfo->last_name}}</h1>
                <h5>{{$userInfo->bio}}</h5>
                <h5>{{$userInfo->email}}</h5>
                <h5>{{$userInfo->website}}</h5>
                <h5>{{$userInfo->gender}}</h5>
                <a class="btn btn-primary" href="{{route('profileView.userInfo', $userInfo->user_id)}}">View More</a>
            </div>
        </div>
    </div>

    <div class="container post-section">
        <h1>All Post</h1>
        @foreach($userPost as $post)
            <div class="post-area">
                <p class="user-name">{{$post->first_name}} {{$post->last_name}}</p>
                <p><span class="post-type">{{$post->post_type}}</span> <span class="post-time">{{$post->post_time}}</span></p>
                <p class="post-text">{{$post->post_text}}</p>
                @if($post->post_image != null)
                    <div>
                        <img src="/images/{{ $post->post_image }}" alt="">
                    </div>
                @endif
            </div>
        @endforeach
    </div>
@endsection