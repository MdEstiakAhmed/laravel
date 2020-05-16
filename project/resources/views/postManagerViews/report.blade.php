@extends('postManagerViews.home')
@section('content')
    <h1 class="text-center">Post Manager Report</h1>
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-4">
                <div class="p-5 bg-white text-dark border border-success rounded mt-5 shadow">
                    <h1 id="todayPost">{{$totalPost}}</h1>
                    <h3>total post</h3>
                </div>
                <a href="{{route('postManagerHome.all')}}" class="btn btn-primary">view more</a>
            </div>
            <div class="col-xl-4 box">
                <div class="p-5 bg-white text-dark border border-success rounded mt-5 shadow">
                    <h1 id="todayPost">{{$approvedPost}}</h1>
                    <h3>approved post</h3>
                </div>
                <a href="{{route('postManagerHome.allPost')}}" class="btn btn-primary">view more</a>
            </div>
            <div class="col-xl-4 box">
                <div class="p-5 bg-white text-dark border border-success rounded mt-5 shadow">
                    <h1 id="todayPost">{{$pendingPost}}</h1>
                    <h3>pending post</h3>
                </div>
                <a href="{{route('postManagerHome.pendingPost')}}" class="btn btn-primary">view more</a>
            </div>
            <div class="col-xl-4">
                <div class="p-5 bg-white text-dark border border-success rounded mt-5 shadow">
                    <h1 id="todayPost">{{$todayTotalPost}}</h1>
                    <h3>today total post</h3>
                </div>
                <a href="{{route('postReport.all')}}" class="btn btn-primary">view more</a>
            </div>
            <div class="col-xl-4 box">
                <div class="p-5 bg-white text-dark border border-success rounded mt-5 shadow">
                    <h1 id="todayPost">{{$todayApprovedPost}}</h1>
                    <h3 style="font-size: 26px">today approved post</h3>
                </div>
                <a href="{{route('postReport.allPost')}}" class="btn btn-primary">view more</a>
            </div>
            <div class="col-xl-4 box">
                <div class="p-5 bg-white text-dark border border-success rounded mt-5 shadow">
                    <h1 id="todayPost">{{$todayPendingPost}}</h1>
                    <h3>today pending post</h3>
                </div>
                <a href="{{route('postReport.pendingPost')}}" class="btn btn-primary">view more</a>
            </div>
        </div>
    </div>
@endsection