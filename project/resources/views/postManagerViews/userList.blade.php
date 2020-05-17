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
    <table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">user id</th>
				<th scope="col">name</th>
				<th scope="col">username</th>
				<th scope="col">email</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		
		@foreach($allUser as $user)
			<tbody>
				<tr>
					<td>{{$user->user_id}}</td>
					<td>{{$user->first_name}} {{$user->last_name}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->email}}</td>
					<td>
						<a href="{{route('postManagerHome.profileView', $user->user_id)}}" class="bg-info m-1">view</a>
						<a href="{{route('postManagerHome.notification', $user->user_id)}}" class="bg-primary m-1">notification</a> 
					</td>
				</tr>
			</tbody>
		@endforeach
	</table>
@endsection