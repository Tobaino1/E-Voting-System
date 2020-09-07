<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon"  href="storage/adplogo.jpg">

        <title> ADP | E-Voting-System </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
     <!-- blade template css -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">  

    </head>
    <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"> Action Democratic Party | E-Voting-System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
    <!-- <li class="nav-link">     
       <a class="nav-link" href="{{ url('/') }}" style="color: white">Home</a>
      </li> -->

      <li class="nav-link">
         <a class="nav-link" href="{{ route('login') }}" style="color: white">Member's Login</a>
      </li> 

       <li class="nav-link">
         <a class="nav-link" href="{{ route('register') }}" style="color: white">Admin</a>
      </li> 
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
    </form>

    </div>
      </nav>
      </div>
    </nav>  

    <br><br>
            <hr/>
            <div align="center">
                <h1 style="color:blue"> Action Democratic Party </h1>          
                <h3 style="color:red">  The credible alternative </h3>
                </div>

                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
        <div class="content">
          <div>
            <div align="center"> <img src="{{ 'storage/adplogo.jpg'}}"/>         
        </div>
        <hr/>
        <br><br><br><br>
 <!-- Footer -->
 @include ('layouts.footer') 
    </body>
</html>
