<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themashabrand.com/templates/Fluffs/photo_upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 18:08:32 GMT -->
<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload</title>
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />		
		
		<!-- ==============================================
		Favicons
		=============================================== --> 
		<link rel="icon" href="../assets/img/logo.html">
		<link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.html">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.html">
		
	    <!-- ==============================================
		CSS
		=============================================== -->
        <link type="text/css" href="../assets/css/demos/photo.css" rel="stylesheet" />
				
		<!-- ==============================================
		Feauture Detection
		=============================================== -->
		<script src="../assets/js/modernizr-custom.html"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->	
		
  </head>

<body>

     <!-- ==============================================
     Navigation Section
     =============================================== -->  
     <header class="tr-header">
      <nav class="navbar navbar-default">
       <div class="container-fluid">
	    <div class="navbar-header">
		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		 </button>
		 <a class="navbar-brand" href="{{route('userHome.index')}}"><i class="fab fa-instagram"></i> Express</a>
		</div><!-- /.navbar-header -->
		<div class="navbar-left">
		 <div class="collapse navbar-collapse" id="navbar-collapse">
		  <ul class="nav navbar-nav">
		  </ul>
		 </div>
		</div><!-- /.navbar-left -->
		<div class="navbar-right">                          
		 <ul class="nav navbar-nav">
		   <li>
		   <div class="search-dashboard">
               <form>
                    <input placeholder="Search here" type="text">
                    <button type="submit"><i class="fa fa-search"></i></button>
               </form>
          </div>							
		   </li>

		   <li class="dropdown notification-list">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
			 <i class="fa fa-bell noti-icon"></i>
			 <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-lg">
             
			 <div class="dropdown-item noti-title">
			  <h6 class="m-0">
			   <span class="pull-right">
			    <a href="#" class="text-dark"><small>Clear All</small></a> 
			   </span>Notification
			  </h6>
			 </div>

			 <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
			  <div class="slimscroll" style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
			   <div id="Slim">
			    <a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-comment"></i></div>
				 <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-user-plus"></i></div>
				 <p class="notify-details">Grace Flake followed you.<small class="text-muted">5 hours ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-heart"></i></div>
				 <p class="notify-details">Carlos Crouch liked your photo.<small class="text-muted">3 days ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-comment"></i></div>
				 <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-user-plus"></i></div>
				 <p class="notify-details">Maureen Hilda followed you.<small class="text-muted">7 days ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="notify-icon bg-success"><i class="fa fa-heart"></i></div>
				 <p class="notify-details">Carlos Crouch liked your photo.<small class="text-muted">13 days ago</small></p>
				</a><!--/ dropdown-item-->
			   </div><!--/ .Slim-->
			   <div class="slimScrollBar" style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
			   <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
			  </div><!--/ .slimscroll-->
			 </div><!--/ .slimScrollDiv-->
			 <a href="photo_notifications.html" class="dropdown-item text-center notify-all">
			  View all <i class="fa fa-arrow-right"></i>
			 </a><!-- All-->
            </div><!--/ dropdown-menu-->
		   </li>

		   <li class="dropdown notification-list">
			<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
			 <i class="fa fa-envelope noti-icon"></i>
			 <span class="badge badge-success badge-pill noti-icon-badge">6</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-lg dropdown-new">
             <div class="dropdown-item noti-title">
			  <h6 class="m-0">
			   <span class="float-right">
			    <a href="#" class="text-dark"><small>Clear All</small></a> 
			   </span>Chat
			  </h6>
			 </div>

			 <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
			  <div class="slimscroll" style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
			   <div id="Slim2">
				<a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
				 <div class="notify-icon"><img src="../assets/img/users/1.jpg" class="img-responsive img-circle" alt=""> </div>
				 <p class="notify-details">Cristina Pride</p>
				 <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
				 <div class="notify-icon"><img src="../assets/img/users/2.jpg" class="img-responsive img-circle" alt=""> </div>
				 <p class="notify-details">Sam Garret</p>
				 <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
				 <div class="notify-icon"><img src="../assets/img/users/3.jpg" class="img-responsive img-circle" alt=""> </div>
				 <p class="notify-details">Karen Robinson</p>
				 <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
				 <div class="notify-icon"><img src="../assets/img/users/4.jpg" class="img-responsive img-circle" alt=""> </div>
				 <p class="notify-details">Sherry Marshall</p>
				 <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
				 <div class="notify-icon"><img src="../assets/img/users/5.jpg" class="img-responsive img-circle" alt=""> </div>
				 <p class="notify-details">Shawn Millard</p>
				 <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
				</a><!--/ dropdown-item-->
			   </div><!--/ .Slim-->
			   <div class="slimScrollBar" style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
			   <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
			  </div><!--/ slimscroll-->
			 </div> <!--/ slimScrollDiv-->
			 <a href="photo_chat.html" class="dropdown-item text-center notify-all">
			  View all <i class="fa fa-arrow-right"></i>
			 </a>
            </div><!--/ dropdown-menu-->
		   </li>
		  
		 <li class="dropdown mega-avatar">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		   <span class="avatar w-32"><img src="{{Storage::url($user->image)}}" class="img-resonsive img-circle" width="25" height="25" alt="..."></span>
		   <!-- hidden-xs hides the username on small devices so only the image appears. -->
		   <span class="hidden-xs">
			{{$user->first_name}} {{$user->last_name}}
		   </span>
		  </a>
		  <div class="dropdown-menu w dropdown-menu-scale pull-right">
		   <a class="dropdown-item" href="#"><span>New Story</span></a> 
		   <a class="dropdown-item" href="#"><span>Become a Member</span></a> 
		   <div class="dropdown-divider"></div>
		   <a class="dropdown-item" href="/user/{{$login->username}}"><span>Profile</span></a> 
		   <a class="dropdown-item" href="/<%=user.username%>/settings"><span>Settings</span></a> 
		   <a class="dropdown-item" href="#">Need help?</a> 
		   <div class="dropdown-divider"></div>
		   <a class="dropdown-item" href="/logout">Sign out</a>
		  </div>
		 </li><!-- /navbar-item -->	
		 
		 </ul><!-- /.sign-in -->   
		</div><!-- /.nav-right -->
       </div><!-- /.container -->
      </nav><!-- /.navbar -->
     </header><!-- Page Header --> 
  
	 <!-- ==============================================
	 Navbar Second Section
	 =============================================== -->
	<section class="nav-sec">
	  <div class="d-flex justify-content-between">
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="{{route('userHome.index')}}"><em class="fa fa-home"></em>
		<span>Home</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg clean-black">
	   <a class="nav-icon" href="photo_explore.html"><em class="fa fa-crosshairs"></em>
		<span>Explore</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg mint-green">
	   <a class="nav-icon" href="/home/upload"><em class="fab fa-instagram"></em>
		<span>Upload</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg clean-black">
	   <a class="nav-icon" href="photo_stories.html"><em class="fa fa-align-left"></em>
		<span>Stories</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="/user/{{$login->username}}"><em class="fa fa-user"></em>
		<span>Profile</span>
	   </a>
	   </div>
	  </div>
	</section>	
  
	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="upload">
	  <div class="container">
	   <div class="row">
		    <div class="col-lg-12">  
			    <div class="box">
				  	<form action="{{route('upload.post')}}" method="post" enctype="multipart/form-data">
				  		@csrf
				 		<textarea class="form-control no-border" rows="5" name="postText" placeholder="Write something..."></textarea>
				 		<div class="image-preview" id="image-preview" style="display: none;">
				 			<img src="" id="image-preview_image" class="image-preview_image">
				 		</div>
				  		<div class="box-footer clearfix">
					   		<button class="kafe-btn kafe-btn-mint-small pull-right btn-sm" type="submit" style="width: 80px" >Post</button>
					   		<button class="kafe-btn kafe-btn-mint-small pull-right btn-sm" id="reset_btn" type="button" onclick="window.location.href='{{route('upload.index')}}';" style="width: 80px; margin-right: 20px; background: grey; display: none" >Cancel</button>
					   		<div class="pull-right switch_container">
					   			<div class="toggle-switch" onclick="this.classList.toggle('active')">
					   				<div class="switch_inner-circle">
					   					<input type="checkbox" name="privacy" id="" value="private" style="opacity:0%;">
					   				</div>
					   				<i class="privacy_icon pull-right fas fa-lock"></i>
					   			</div>
					   		</div>
					   		<input type="file" id="file" name="image" accept="video/*|image/*" class="nav-link">
							<label for="file" id="file-label">
								<i id="file-icon" class="fa fa-camera text-muted"></i>
							</label>

							<!-- <li class="nav-item"><input type="file" name="video" class="nav-link"><i class="fa fa-video text-muted"></i></li> -->
				  		</div>
				  	</form>
				</div>	 
			</div>
	   </div>
	  
	   <div class="row one-row">
	    <div class="col-lg-12">
	     <a href="https://picturepan2.github.io/instagram.css/" target="_blank"><h4>Instagram Filters from Picture Pan 2</h4></a>
		</div>
	   </div>
	   
	   <div class="row">

        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-image">
              <img src="../assets/img/posts/18.jpg" class="img-responsive" alt="Image"/>
            </div>
            <div class="card-header">
              <span>Normal</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-image filter-1977">
              <img src="../assets/img/posts/18.jpg" class="img-responsive" alt="Image"/>
            </div>
            <div class="card-header">
              <span class="h6">1977</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-image filter-willow">
              <img src="../assets/img/posts/18.jpg" class="img-responsive" alt="Image"/>
            </div>
            <div class="card-header">
              <span class="h6">Willow</span>
            </div>
          </div>
        </div>
		
       </div><!--/ row-->	   
	   
	   <div class="row">

        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-image filter-sutro">
              <img src="../assets/img/posts/18.jpg" class="img-responsive" alt="Image"/>
            </div>
            <div class="card-header">
              <span class="h6">Sutro</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-image filter-reyes">
              <img src="../assets/img/posts/18.jpg" class="img-responsive" alt="Image"/>
            </div>
            <div class="card-header">
              <span class="h6">Reyes</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-image filter-poprocket">
              <img src="../assets/img/posts/18.jpg" class="img-responsive" alt="Image"/>
            </div>
            <div class="card-header">
              <span class="h6">Poprocket</span>
            </div>
          </div>
        </div>
		
       </div><!--/ row-->	
	   
	   <div class="row">

        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-image filter-inkwell">
              <img src="../assets/img/posts/18.jpg" class="img-responsive" alt="Image"/>
            </div>
            <div class="card-header">
              <span class="h6">Inkwell</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-image filter-nashville">
              <img src="../assets/img/posts/18.jpg" class="img-responsive" alt="Image"/>
            </div>
            <div class="card-header">
              <span class="h6">Nashville</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-image filter-moon">
              <img src="../assets/img/posts/18.jpg" class="img-responsive" alt="Image"/>
            </div>
            <div class="card-header">
              <span class="h6">Moon</span>
            </div>
          </div>
        </div>
		
       </div><!--/ row-->	
	  
	   
	  </div><!--/ container -->
	 </section><!--/ newsfeed -->
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	<script src="../assets/js/jquery.min.js"></script>  
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/base.js"></script>
	<script src="../assets/js/custom.js"></script>
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.js"></script>

	<script>

	$('#Slim,#Slim2').slimScroll({
	        height:"auto",
			position: 'right',
			railVisible: true,
			alwaysVisible: true,
			size:"8px",
		});

		 // var inputFile = document.getElementById(file);

   //  	inputFile.addEventListener("change", function(){
	  //   	var file = this.files[0];
	  //   	console.log(file);
   //  	});	
	</script>

  </body>

<!-- Mirrored from themashabrand.com/templates/Fluffs/photo_upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 18:08:32 GMT -->
</html>
