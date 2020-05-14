@extends('postManagerViews.home')
@section('content')
    <h1>all post</h1>
    <!-- {{ $posts }} -->
    @foreach($posts as $post)
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
@endsection