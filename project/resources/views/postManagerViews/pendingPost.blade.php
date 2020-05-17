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

    <h1 class="text-center m-3">Pending Post</h1>
    @foreach($pendingPosts as $post)
        <div class="post-area">
            <p class="user-name"><a class="text-dark" href="{{route('postManagerHome.profileView', $post->user_id)}}">{{$post->first_name}} {{$post->last_name}}</a></p>
            <p><span class="post-status">{{$post->post_status}}</span> <span class="post-type">{{$post->post_type}}</span> <span class="post-time">{{$post->post_time}}</span></p>
            <p class="post-text">{{$post->post_text}}</p>
            @if($post->post_image != null)
                <div>
                    <img src="/images/{{ $post->post_image }}" alt="">
                </div>
            @endif
            <div>
                <a href="{{route('PostStatus.postApprove', $post->post_id)}}" class="post-control bg-success">approve</a>
                <a href="{{route('PostStatus.posDelete', $post->post_id)}}" class="post-control bg-danger">delete</a>
                <a href="{{route('PostStatus.postWarning', $post->post_id)}}" class="post-control bg-warning">warning</a>
                <a href="{{route('PostStatus.postBlock', $post->post_id)}}" class="post-control bg-info">block</a>
            </div>
        </div>
    @endforeach
@endsection