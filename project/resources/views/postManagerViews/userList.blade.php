@extends('postManagerViews.home')
@section('content')
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
						<a href="#" class="bg-info">view</a> | 
						<a href="#" class="bg-primary">message</a> 
					</td>
				</tr>
			</tbody>
		@endforeach
	</table>
@endsection