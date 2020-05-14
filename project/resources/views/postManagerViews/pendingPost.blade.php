@extends('postManagerViews.home')
@section('content')
    <h1>Pending Post</h1>
    @foreach($pendingPosts as $post)
        <div class="post-area">
            <p class="user-name">{{$post->first_name}} {{$post->last_name}}</p>
            <p><span class="post-status">{{$post->post_status}}</span> <span class="post-type">{{$post->post_type}}</span> <span class="post-time">{{$post->post_time}}</span></p>
            <p class="post-text">{{$post->post_text}}</p>
        </div>
    @endforeach
@endsection