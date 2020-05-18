<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account Manager - Profile</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/generalCSS/login.css') }}">
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
        </section><hr>
        <!-- navbar section end -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="credential-content">
                            <h1>{{$user->first_name}} {{$user->last_name}}</h1><hr/>
							<form action="/AccountManager/Profile/Post" method="post" enctype="multipart/form-data"> {{csrf_field()}} <br/>Post Something
							<textarea rows="5" cols="50" class="form-control" placeholder="Write something here..." name="postText"></textarea><br/>
							<table>
								<tr>
									<td><input type="file" class="form-control" id="imageInput" name="postImage"></td>
									<td><select class="form-control" id="postType" name="postType">
										<option value="public">Public</option>
										<option value="private">Private</option>
									</select></td>
								</tr>	
                            </table>
							<br/><center><input type="submit" name="share" value=" Share this post " style="width:100%;" class="btn btn-primary"></center></form>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="timeline-div">
                            <table class="account-head-table">
								@if(isset($loginData))
								<td class="account-text"><strong><a href="/AccountManager/Profile">Account Information</a></strong></td>
								<td class="approve-button account-text"><strong><a href="/AccountManager/Timeline">Timeline</a></strong></td>
								@else
								<td class="approve-button account-text"><strong><a href="/AccountManager/Profile">Account Information</a></strong></td>
								<td class="account-text"><strong><a href="/AccountManager/Timeline">Timeline</a></strong></td>
								@endif
							<table class="account-table">
								
							</table>
						</div>
                    </div>
                </div>
    
	
			<div class="form">
				<form method="post">
					{{csrf_field()}}
					<div class="form-group">
						<table><tr><td>First Name : <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user->first_name}}" name="fname"></td>
						<td>Last Name : <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user->last_name}}" name="lname"></td></tr></table>
					</div>
					<div class="form-group">
						<table><tr><td>Email : <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user->email}}" name="email"></td>
						<td>Phone : <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user->phone}}" name="phone"></td></tr></table>
					</div>
					<div class="form-group">
						<table><tr><td>Website : <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user->website}}" name="website"></td>
						<td>Birth Date : <input type="date" class="form-control" id="exampleInputEmail1" name="birthdate" value="{{$user->birthdate}}"></td></tr></table>
					</div>
					<div class="form-group">
						Bio:<input type="text" class="form-control" id="exampleInputEmail1" value="{{$user->bio}}" name="bio">
					</div>
					<div class="form-group">
						Address:<input type="text" class="form-control" id="exampleInputEmail1" value="{{$user->address}}" name="address">
					</div>
					
					<div class="form-group">
						Password:
						<input type="password" class="form-control" id="InputPassword1" value="{{$user->password}}" name="pass1">
						<input type="password" class="form-control" id="InputPassword1" value="{{$user->password}}" name="pass2">
					</div>
					<input type="submit" name="submit" value=" Update Information " class="btn btn-primary">
				</form>
			</div>  
		<!-- CDN link section start -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- CDN link section end -->
    </body>
</html>