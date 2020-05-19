<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Account Manager - PDF</title>
    </head>
    <body>
		<table>
		<tr><td><h3>System Account Report</h3></td><td></td></tr>
		<tr><td>Downloaded By : </td><td>{{session()->get('mail')}}</td></tr>
		<tr><td>Download Time : </td><td>{{Date("F j, Y, g:i a")}}</td></tr>
		<tr><td>Number of Data : </td><td>{{Count($data)}}</td></tr>
		<tr><td></td><td></td></tr>
		</table>
		<br/>
        <table border="1px" width="100%">
			<tr>
				<th>User ID</th>
				<th>Name</th>@if($reportState == 'Followers')
				<th>Followers</th>@endif
				<th>Warnings</th>
				<th>Account Status</th>
				<th>Block Status</th>
			</tr>
		@foreach($data as $dt)
			<tr style="text-align:center;">
				<td>{{$dt->user_id}}</td>
				<td>{{$dt->first_name}} {{$dt->last_name}}</td>
				@if(isset($followerData))
				<td>
					@php ($count=0)
					@foreach($followerData as $followData)
						@if($dt->user_id == $followData->user_id)
							{{$followData->followers}}
							@php ($count=1)
							@break
						@endif
					@endforeach
					@if($count == 0)
						0
					@endif
				</td>
				@endif
				<td>
					@if($dt->warning_count==0)
						0
					@else
						{{$dt->warning_count}}
					@endif
				</td>
				<td>{{$dt->account_status}}</td>
				<td>
					@php ($count=0)
					@foreach($blockData as $blocks)
						@if($dt->user_id == $blocks->user_id)
							@php ($count=1)
							{{$blocks->block_status}}
						@endif
					@endforeach
					
					@if($count==0)
						Unblocked
					@endif
				</td>
			</tr>
		@endforeach
		</table>
    </body>
</html>