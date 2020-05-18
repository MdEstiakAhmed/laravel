<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account Manager - User Account</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/generalCSS/login.css') }}">
		<script src="{{asset('js/myScript.js')}}"></script>
    </head>
    <body>
        <!-- navbar section start -->
        <section class="navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand brand-link" href="/">Express</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">Menu</span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link about-link" href="#"></a>
                            </li>
							<li class="nav-item about-link">
								<select class="form-control select-bar" id="profileBtn" onchange="myFunc()">
									<option value="" disabled="true" selected>{{$user->first_name}} {{$user->last_name}}</option>
									<option value="/AccountManager/Profile">Profile</option>
									<option value="/AccountManager/Timeline">Timeline</option>
									<option value="/logout">Logout</option>
								</select>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <!-- navbar section end -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="credential-content">
                            <h1>{{$user->first_name}} {{$user->last_name}}</h1>
                            <table>
								<tr>
									<td>User ID: {{$user->user_id}}</td>
								</tr>
								<tr>
									<td>UserName: {{$loginData->username}}</td>
								</tr>
								<tr>
									<td>UserType: {{$user->user_type}}</td>
								</tr>
								<tr>
									<td>Email: {{$loginData->email}}</td>
								</tr>
								<tr>
									<td>Contact No: {{$user->phone}}</td>
								</tr>
								<tr>
									<td>Gender: {{$user->gender}}</td>
								</tr>
								<tr>
									<td>Birthdate: {{$user->birthdate}}</td>
								</tr>
								<tr>
									<td>Website: {{$user->website}}</td>
								</tr>
								<tr>
									<td>Address: {{$user->address}}</td>
								</tr>
								<tr>
									<td>Bio: {{$user->bio}}</td>
								</tr>
                            </table><br/>
							@if($user->account_status=='Activated')
								<input type="button" onclick="Activator('Deactivate','{{$user->first_name}} {{$user->last_name}}','/AccountManager/UserProfile/{{$user->user_id}}/Deactivate')" name="inactivate" value=" Account Activated " class="btn btn-primary">
							@else
								<input type="button" onclick="Activator('Activate','{{$user->first_name}} {{$user->last_name}}','/AccountManager/UserProfile/{{$user->user_id}}/Activate')" name="activate" value=" Account Deactivated " class="btn btn-primary deny-button">
							@endif
                        </div>
                    </div>
                    <div class="col-xl-6">
                        
                    </div>
                </div>
				
		<!-- CDN link section start -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- CDN link section end -->
    </body>
</html>