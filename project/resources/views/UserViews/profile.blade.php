<!DOCTYPE html>
<html lang="en">

<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
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
		   <span class="avatar w-32">
		   	<img src="{{Storage::url($user->image)}}" class="img-resonsive img-circle" width="25" height="25" alt="...">
		   </span>
		   <!-- hidden-xs hides the username on small devices so only the image appears. -->
		   <span class="hidden-xs">
			{{$user->first_name }} {{$user->last_name }}
		   </span>
		  </a>
		  <div class="dropdown-menu w dropdown-menu-scale pull-right">
		   <a class="dropdown-item" href="#"><span>New Story</span></a> 
		   <div class="dropdown-divider"></div>
		   <a class="dropdown-item" href="/user/{{$login->username}}"><span>Profile</span></a> 
		   <a class="dropdown-item" href="/home/settings"><span>Settings</span></a> 
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
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="{{route('upload.index')}}"><em class="fab fa-instagram"></em>
		<span>Upload</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg clean-black">
	   <a class="nav-icon" href="photo_stories.html"><em class="fa fa-align-left"></em>
		<span>Stories</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg mint-green">
	   <a class="nav-icon" href="/user/{{$login->username}}"><em class="fa fa-user"></em>
		<span>Profile</span>
	   </a>
	   </div>
	  </div>
	</section>	
  
	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="profile-two">
	  <div class="container-fluid">
	   <div class="row">

		<div class="col-lg-3">
         <aside id="leftsidebar" class="sidebar">		  
		  <ul class="list">
           <li>
			<div class="user-info">
			 <div class="image">
		      <a href="/user/{{$login->username}}">
			   <img src="{{Storage::url($user->image)}}" class="img-responsive img-circle" alt="User">
			   <span class="online-status online"></span>
			  </a>
			 </div>
		     <div class="detail">
			  <h4>{{$user->first_name }} {{$user->last_name }}</h4>
			  <small>@ {{$login->username}} </small>                        
			 </div>
			 <div class="row">
			  <div class="col-12">
			   <a title="facebook" href="#" class=" waves-effect waves-block"><i class="fab fa-facebook"></i></a>
			   <a title="twitter" href="#" class=" waves-effect waves-block"><i class="fab fa-twitter"></i></a>
			   <a title="instagram" href="#" class=" waves-effect waves-block"><i class="fab fa-instagram"></i></a>
			  </div>                                
			 </div>
			</div>
           </li>
           <li>
            <small class="text-muted"><a href="photo_profile_two.html">{{$post_count}} Posts <em class="fa fa-angle-right pull-right"></em></a> </small><br/>
            <small class="text-muted"><a href="photo_followers.html">2456 Followers <em class="fa fa-angle-right pull-right"></em></a> </small><br/>
            <small class="text-muted"><a href="photo_followers.html">456 Following <em class="fa fa-angle-right pull-right"></em></a> </small>
            <hr>
            <small class="text-muted">Bio: </small>
            <p>{{$user->bio}}</p>
            <hr>
            <small class="text-muted">Website: </small>
            <p>{{$user->website}}</p> 
            <hr>                      
           </li>                    
          </ul>
         </aside>				
		</div><!--/ col-lg-3-->
		
		<div class="col-lg-6" style="background: #fff; margin-top: 20px">
			<table>
	    		<tr>
	    			<td>
	    				
	    			</td>
	    		</tr>

	    		@for($i=0; $i < $post_count; $i++)

	    		<tr>
		 
				 <div class="row">
				 
				  <div class="col-lg-6">
					 <a href="#myModal" data-toggle="modal">
					 <div class="explorebox" 
					   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('{{Storage::url($post[$i]->post_image)}}') no-repeat;
							  background-size: cover;
							  background-position: center center;
							  -webkit-background-size: cover;
							  -moz-background-size: cover;
							  -o-background-size: cover;">
					  <div class="explore-top">
					   <div class="explore-like"><i class="fa fa-heart"></i> <span>312</span></div>
					   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
					  </div>		  
					 </div>
					 </a>
				  </div>
				 
				  <div class="col-lg-6">
					 <a href="#myModal" data-toggle="modal">
					 <div class="explorebox" 
					   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('{{Storage::url($post[$i]->post_image)}}') no-repeat;
							  background-size: cover;
							  background-position: center center;
							  -webkit-background-size: cover;
							  -moz-background-size: cover;
							  -o-background-size: cover;">
					  <div class="explore-top">
					   <div class="explore-like"><i class="fa fa-heart"></i> <span>624</span></div>
					   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
					  </div>		  
					 </div>
					 </a>
				  </div>
				  
				 </div><!--/ row -->
				 </tr>

	    		@endfor

	    	</table>
		
		</div>
		<div class="col-lg-3">
		
         <div class="suggestion-box full-width">
			<div class="suggestions-list">
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="../assets/img/users/1.jpg" alt="">
					<div class="name-box">
						<h4>Vanessa Wells</h4>
						<span>@vannessa</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="../assets/img/users/2.jpg" alt="">
					<div class="name-box">
						<h4>Anthony McCartney</h4>
						<span>@antony</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="../assets/img/users/3.jpg" alt="">
					<div class="name-box">
						<h4>Anna Morgan</h4>
						<span>@anna</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="../assets/img/users/4.jpg" alt="">
					<div class="name-box">
						<h4>Sean Coleman</h4>
						<span>@sean</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="../assets/img/users/5.jpg" alt="">
					<div class="name-box">
						<h4>Grace Karen</h4>
						<span>@grace</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="../assets/img/users/6.jpg" alt="">
					<div class="name-box">
						<h4>Clifford Graham</h4>
						<span>@clifford</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
			</div><!--suggestions-list end-->
		</div>	

        <div class="trending-box">
		 <div class="row">
		  <div class="col-lg-12">
		    <h4>Trending Photos</h4>
		  </div>
		 </div>
        </div>
		
        <div class="trending-box">
		 <div class="row">
		  <div class="col-lg-6">
		   <a href="#"><img src="../assets/img/posts/17.jpg" class="img-responsive" alt="Image"/></a>
		  </div>
		  <div class="col-lg-6">
		   <a href="#"><img src="../assets/img/posts/12.jpg" class="img-responsive" alt="Image"/></a>
		  </div>
		 </div>
		 <div class="row">
		  <div class="col-lg-6">
		   <a href="#"><img src="../assets/img/posts/21.gif" class="img-responsive" alt="Image"/></a>
		  </div>
		  <div class="col-lg-6">
		   <a href="#"><img src="../assets/img/posts/23.gif" class="img-responsive" alt="Image"/></a>
		  </div>
		 </div>
		 <div class="row">
		  <div class="col-lg-6">
		   <a href="#"><img src="../assets/img/posts/11.jpg" class="img-responsive" alt="Image"/></a>
		  </div>
		  <div class="col-lg-6">
		   <a href="#"><img src="../assets/img/posts/20.jpg" class="img-responsive" alt="Image"/></a>
		  </div>
		 </div>
        </div>		
		
		
		</div>
		
       </div><!--/ row-->	
	  </div><!--/ container -->
	 </section><!--/ profile -->
  
	 <!-- ==============================================
	 Modal Section
	 =============================================== -->
     <div id="myModal" class="modal fade">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-body">
		
         <div class="row">
		 
          <div class="col-md-8 modal-image">
           <img class="img-responsive" src="../assets/img/posts/9.jpg" alt="Image"/>
          </div><!--/ col-md-8 -->
          <div class="col-md-4 modal-meta">
           <div class="modal-meta-top">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			 <span aria-hidden="true">×</span><span class="sr-only">Close</span>
			</button><!--/ button -->
            <div class="img-poster clearfix">
             <a href="#"><img class="img-responsive img-circle" src="../assets/img/users/18.jpg" alt="Image"/></a>
             <strong><a href="#">Benjamin</a></strong>
             <span>12 minutes ago</span><br/>
		     <a href="#" class="kafe kafe-btn-mint-small"><i class="fa fa-check-square"></i> Following</a>
            </div><!--/ img-poster -->
			  
            <ul class="img-comment-list">
             <li>
              <div class="comment-img">
               <img src="../assets/img/users/17.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Anthony McCartney</a></strong>
               <p>Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="../assets/img/users/15.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Vanessa Wells</a></strong>
               <p>Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span>on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="../assets/img/users/14.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Sean Coleman</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="../assets/img/users/13.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Anna Morgan</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="../assets/img/users/3.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Allison Fowler</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
            </ul><!--/ comment-list -->
			  
            <div class="modal-meta-bottom">
			 <ul>
			  <li><a class="modal-like" href="#"><i class="fa fa-heart"></i></a><span class="modal-one"> 786,286</span> | 
			      <a class="modal-comment" href="#"><i class="fa fa-comments"></i></a><span> 786,286</span> </li>
			  <li>
			   <span class="thumb-xs">
				<img class="img-responsive img-circle" src="../assets/img/users/13.jpg" alt="Image">
			   </span>
			   <div class="comment-body">
				 <input class="form-control input-sm" type="text" placeholder="Write your comment...">
			   </div><!--/ comment-body -->	
              </li>				
             </ul>				
            </div><!--/ modal-meta-bottom -->
			  
           </div><!--/ modal-meta-top -->
          </div><!--/ col-md-4 -->
		  
         </div><!--/ row -->
        </div><!--/ modal-body -->
		
       </div><!--/ modal-content -->
      </div><!--/ modal-dialog -->
     </div><!--/ modal -->	 
	   
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/base.js"></script>
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.js"></script>
	<script>
	$('#Slim,#Slim2').slimScroll({
	        height:"auto",
			position: 'right',
			railVisible: true,
			alwaysVisible: true,
			size:"8px",
		});		
	</script>

  </body>
</html>
