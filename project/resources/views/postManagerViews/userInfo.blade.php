@extends('postManagerViews.home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                @if($userInfo->image != null)
                <div class="profile-pic">
                    <img class="img-fluid w-100" src="/images/{{ $userInfo->image }}" alt="">
                </div>
                @else
                    <div class="profile-pic">
                        <img class="img-fluid w-100" class="img-fluid" src="/images/empty.png" alt="">
                    </div>
                @endif
                <h1 class="text-center">{{$userInfo->first_name}} {{$userInfo->last_name}}</h1>
                <h1 class="text-center"><span>@</span>{{$userInfo->username}}</h1>
                @if(session('user_id') == $userInfo->user_id)
                    <h1 class="text-center"><a href="{{route('profileView.profileEdit', $userInfo->user_id)}}" class="btn btn-primary mb-5">EDIT</a></h1>
                @endif
            </div>
            <div class="col-8">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th class="text-left" scope="row">Email:</th>
                            <td class="text-left">{{$userInfo->email}}</td>
                        </tr>
                        <tr>
                            <th class="text-left" scope="row">phone:</th>
                            <td class="text-left">{{$userInfo->phone}}</td>
                        </tr>
                        <tr>
                            <th class="text-left" scope="row">gender:</th>
                            <td class="text-left">{{$userInfo->gender}}</td>
                        </tr>
                        <tr>
                            <th class="text-left" scope="row">Birthdate:</th>
                            <td class="text-left">{{$userInfo->birthdate}}</td>
                        </tr>
                        <tr>
                            <th class="text-left" scope="row">bio:</th>
                            <td class="text-left">{{$userInfo->bio}}</td>
                        </tr>
                        <tr>
                            <th class="text-left" scope="row">website:</th>
                            <td class="text-left">{{$userInfo->website}}</td>
                        </tr>
                        <tr>
                            <th class="text-left" scope="row">address:</th>
                            <td class="text-left">{{$userInfo->address}}</td>
                        </tr>
                        <tr>
                            <th class="text-left" scope="row">status:</th>
                            <td class="text-left">{{$userInfo->account_status}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @if(Request()->session()->has('notification'))
        <div class="alert alert-success notification" role="alert">
            {{Request()->session()->get('notification')}}
        </div>
        @php
            Request()->session()->forget('notification');
        @endphp
    @endif
    </div>
@endsection