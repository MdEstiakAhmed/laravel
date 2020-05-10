<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login-Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/generalCSS/login.css') }}">
        <script src="{{ asset('js/myScript.js') }}"></script>
    </head>
    <body>
        <!-- navbar section start -->
        <section class="navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand brand-link" href="/">Express</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link about-link" href="/">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link signup-link" href="#">About</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <!-- navbar section end -->

        <!-- login section start -->
        <section class="login">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="login-content">
                            <h1>Registration Page</h1>
							@foreach($errors->all() as $err)
										{{$err}} <br>
									@endforeach
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="regi-form">
                            <div class="form">
                                <form method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter First Name" name="fname">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Last Name" name="lname">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address" name="email">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact No" name="phone">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
									<div class="form-group">
                                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="birthdate">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write a Short Bio About Yourself" name="bio">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Website (if any)" name="website">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address" name="address">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
									<div class="form-group">
                                        <select class="form-control" aria-describedby="emailHelp" name="gender">
											<option value="male">Male</option>
											<option value="female">Female</option>
											<option value="other">Other</option>
                                        </select>    
                                    </div>
									<div class="form-group">
                                        <select class="form-control" aria-describedby="emailHelp" name="type">
											<option value="user">User Account</option>
											<option value="account.manager">Account Manager</option>
											<option value="post.manager">Post Manager</option>
                                        </select>
                                    </div>
									
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter New password" name="pass1">
                                    </div>
									<div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm New password" name="pass2">
                                    </div>
                                    <input type="submit" name="submit" value=" Regsiter Account " class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login section end -->
    </body>
</html>