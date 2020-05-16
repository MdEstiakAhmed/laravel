@extends('postManagerViews.home')
@section('content')
    <h1 class="text-center">all post</h1>

    @foreach($posts as $post)
        <div class="post-area">
            <p class="user-name"> <a class="text-dark" href="{{route('postManagerHome.profileView', $post->user_id)}}">{{$post->first_name}} {{$post->last_name}}</a></p>
            <p><span class="post-type bg-success mr-2">{{$post->post_status}}</span><span class="post-type">{{$post->post_type}}</span> <span class="post-time">{{$post->post_time}}</span></p>
            <p class="post-text">{{$post->post_text}}</p>
            @if($post->post_image != null)
                <div>
                    <img src="/images/{{ $post->post_image }}" alt="">
                </div>
            @endif
        </div>
    @endforeach
@endsection