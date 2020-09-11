<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OMNI food</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="verdor/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="verdor/css/4cols.css">
    <link rel="stylesheet" href="verdor/css/all.css">
    <link rel="stylesheet" href="recource/css/style.css">
    <link rel="stylesheet" href="recource/css/quries.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/responsive/1.0.5/responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="recource/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ url('shop') }}">OMNI Food</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ url('shop') }}">Home</a></li>
          <li class="active"><a href="{{ url('admin_profile') }}">Admin</a></li>
          <li class="active"><a href="{{ url('clients') }}">Customers Reviews</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{route('user_profile')}}"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a></li>
          <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </nav>
    
      @yield('content')
  

  </body>
</html>
