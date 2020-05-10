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
                                <a class="nav-link about-link" href="#">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link signup-link" href="/register">SIGNUP</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <!-- navbar section end -->
		@if(session()->has('msg'))
			<script>Notify('{{session()->get('msg')}}')</script>
				{{session()->forget('msg')}}
		@endif
		<!-- login section start -->
        <section class="login">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="login-content">
                            <h1>Log in to your account</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aliquam perspiciatis maxime quibusdam aspernatur suscipit corrupti reprehenderit officiis, eligendi ea placeat dicta ducimus ipsum cum magnam consectetur quo enim eum.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="login-form">
                            <div class="form">
                                <form method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or username" name="identity">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="password">
                                    </div>
                                    <input type="submit" name="submit" value="login" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login section end -->

        <!-- CDN link section start -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- CDN link section end -->
    </body>
</html>