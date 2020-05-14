<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/postManagerCSS/home.css') }}">
    <title>Post Manager Home</title>
</head>
<body>
    <!-- navbar section start -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary st">
        <a class="navbar-brand  font-size" href="#">Express</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link  font-size" href="/logout">logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar section end -->

    <!-- side menu bar start -->
    <div class="sidenav">
        <a href="{{route('postManagerHome.index')}}">Home</a>
        <a href="#">Profile</a>
        <a href="{{route('postManagerHome.allPost')}}">All Post</a>
        <a href="{{route('postManagerHome.pendingPost')}}">Pending Post</a>
        <a href="/logout">logout</a>
      </div>
    <!-- side menu bar end -->

    <!-- main content start -->
    <div class="main">
        <div>
            @yield('content')
        </div>
    </div>
    <!-- main content end -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>