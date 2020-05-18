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
									</table>
								</div>
							</div>
						</div>
                    </div>
                </div>
		
		
		<!-- CDN link section start -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- CDN link section end -->
    </body>
</html>