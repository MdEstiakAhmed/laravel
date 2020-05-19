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
							<li class="nav-item">
                                <a class="nav-link about-link" href="/AccountManager/Report/General">Account Report</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link about-link" href="/AccountManager/StatisticalReport/General">Statistical Report</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link about-link" href="/AccountManager/UserPosts/05">User Post</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link about-link" href="/home/AccountManager">Home</a>
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
								@if(isset($loginData))
									<tr>
										<br/>
										<div class="post-area">
											@foreach($postData as $post)
											<strong>{{$loginData->username}}</strong><br/>
												<small class="muted-text">{{$post->post_time}}</small><br/><br/>
													<p class="post-text-data">{{$post->post_text}}</p>
														@if($post->post_image != null) <img src="{{asset('images/'.$post->post_image)}}" style="width:100%;" title="Post Image" /> @endif
															@if($post->post_type=='public')<a class="approve-button">{{$post->post_type}} @else <a class="pending-button">{{$post->post_type}} </a> @endif @if($post->post_status=='Approved')<a class="approve-button">{{$post->post_status}} @else <a class="deny-button">{{$post->post_status}} @endif </a><br/>
												<br/>
											@endforeach
										</div>
									</tr>
								@else
									<tr>
										<td class="account-text">
											<table>
												<tr>
													<td>User ID</td>
													<td>: &nbsp </td>
													<td>ACM-{{$user->user_id}}</td>
												</tr>
												<tr>
													<td>Email</td>
													<td>: &nbsp </td>
													<td>{{$user->email}}</td>
												</tr>
												<tr>
													<td>Username</td>
													<td>: &nbsp </td>
													<td>{{$user->username}}</td>
												</tr>
												<tr>
													<td>Contact No</td>
													<td>: &nbsp </td>
													<td>{{$user->phone}}</td>
												</tr>
												<tr>
													<td>Gender</td>
													<td>: &nbsp </td>
													<td>{{$user->gender}}</td>
												</tr>
												<tr>
													<td>Birthdate</td>
													<td>: &nbsp </td>
													<td>{{$user->birthdate}}</td>
												</tr>
												<tr>
													<td>Website</td>
													<td>: &nbsp </td>
													<td>{{$user->website}}</td>
												</tr>
												<tr>
													<td>Address</td>
													<td>: &nbsp </td>
													<td>{{$user->address}}</td>
												</tr>
												<tr>
													<td>Bio</td>
													<td>: &nbsp </td>
													<td>{{$user->bio}}</td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td><br/><a href="#myModal" data-toggle="modal">Update Information</a></td>
												</tr>
											</table>
										</td>	
									</tr>
								@endif
							</table>
						</div>
                    </div>
                </div>
    
	<div id="myModal" class="modal fade">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
			<h3>Update Profile Information</h3>
			<p style="text-align:right;"><a href="#myModal" data-dismiss="modal"> &#10008 <a></p>
		</div>
        <div class="modal-body">
			<p>
				@foreach($errors->all() as $err)
					{{$err}} <br>
				@endforeach
			</p>
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
        </div><!--/ modal-body -->
		
       </div><!--/ modal-content -->
      </div><!--/ modal-dialog -->
     </div><!--/ modal -->
        
		<!-- CDN link section start -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- CDN link section end -->
    </body>
</html>