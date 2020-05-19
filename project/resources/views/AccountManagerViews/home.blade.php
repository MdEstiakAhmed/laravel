<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account Manager - Home</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/generalCSS/login.css') }}">
		<script src="{{asset('js/jquery-3.4.1.js')}}"></script>
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
                                <a class="nav-link about-link" href="#msgModal" data-toggle="modal"> &#128226 ({{count($msgData)}}) </a>
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
                            <small>Welcome, </small><center><h1>{{$user->first_name}} {{$user->last_name}}</h1></center>
                            <br/>
							<table>
								<tr>
									<td><div class="static-data-bar">Number of Total User Posts <p class="static-text">{{$postCount}}</p></div></td>
									<td><div class="static-data-bar">Number of Accounts Registered <p class="static-text">{{$acccCount}}</p></div></td>
								</tr>
								<tr>
									<td><div class="static-data-bar">Number of Accounts Blocked <p class="static-text">{{$blckCount}}</p></div></td>
									<td><div class="static-data-bar">Number of Accounts Deactivated <p class="static-text">{{$accsCount}}</p></div></td>
								</tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="content-div">
							<div class="content-div post-area">
								<input type="text" class="form-control" id="searchTxt" onkeyup="AdvSearch('{{csrf_token()}}')" placeholder="Enter Search Keywords ..." name="search"><br/><br/>
								<div id="containerDiv">
									<table border="1px" width="100%">
										<tr>
											<th class="center-text">User ID</th>
											<th class="name-text">Name</th>
											<th class="center-text">Warnings</th>
											<th class="center-text">Block Status</th>
										</tr>
									@foreach($data as $dt)
										<tr>
											<td class="center-text">{{$dt->user_id}}</td>
											<td class="name-text"><a href="/AccountManager/UserProfile/{{$dt->user_id}}">{{$dt->first_name}} {{$dt->last_name}}</a></td>
											<td class="center-text">
												@if($dt->warning_count==0)
													0
												@else
													{{$dt->warning_count}}
												@endif
											</td>
											<td class="center-text">
												@if($dt->block_status=='Blocked')
													<button onclick="Activation('/Unblock/'+{{$dt->user_id}},'Unblock')" class="deny-button">{{$dt->block_status}}</button>
												@else
													<button onclick="Activation('/Block/'+{{$dt->user_id}},'Block')" class="pending-button">Unblocked</button>
												@endif
											</td>
										</tr>
									@endforeach
									</table>
								</div>
							</div>
						</div>
                    </div>
                </div>
		
		<div id="msgModal" class="modal fade">
		  <div class="modal-dialog">
		   <div class="modal-content">
			<div class="modal-header">
				<h3>Notifications</h3>
				<p class="right-align"><a href="#myModal" data-dismiss="modal">&#10008 </a></p>
			</div>
			<div class="modal-body">
				<div class="post-area">
					@foreach($msgData as $dtt)
						<div class="notif-div">
							<p class="sender-tag">{{$dtt->first_name}} {{$dtt->last_name}} <a class="del-color" href="/deleteMessage/{{$dtt->message_id}}">&#9746 </a><br/>
								<span class="muted-text" style="color:black;">{{$dtt->message_time}}</span></p>
									&nbsp {{$dtt->message_text}}
										</div>
					@endforeach
				</div>
				<form action="/AccountManager/MessagePost" method="Post"> {{csrf_field()}} 
					<div class="form-group">
						<br/>@foreach($errors->all() as $err)
								{{$err}} <br>
							@endforeach
							<input type="text" class="form-control" id="msg" placeholder="Write Your Message Here ..." name="msg">
							</div></form>
				
			</div><!--/ modal-body -->
		   </div><!--/ modal-content -->
		  </div><!--/ modal-dialog -->
		 </div><!--/ modal -->
		<!-- CDN link section start -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- CDN link section end -->
    </body>
</html>