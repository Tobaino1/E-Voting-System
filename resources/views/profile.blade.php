<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon"  href="storage/loc.png">

        <title>ADP | E-Voting System</title>

        <!-- Fonts && vue-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
     
     <!-- blade template css  && vue --> 
     <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
     

    </head>
    <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ADP | E-Voting System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
    <li class="nav-link">     
       <a class="nav-link" href="{{ url('/') }}" style="color: white">Home</a>
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
      </nav>
      </div>
    </nav>

<div align="center"> 
<hr/>
<h2> Member Area </h2>
<form action="/mbrprofile" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="col-md-2 col-form-label" name="party_reg_no" required="required"  placeholder="Enter Member Party Registration No">
                    <br><br>
                   <div class="form-group">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enter') }}
                                </button>
                            
                                <button type="reset" class="btn btn-danger">
                                    {{ __('Reset') }}
                                </button>
                            </div>
                        </div>
                        
         </form>
</div>
</div>
<hr/>
<div class="container">
    @if(isset($details))
        <p> Dear Member,  <b>  </b>  this is your status :</p>
    <h2>Member Registration Details </h2>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Names</th>
                <th>Phone No</th>
                <th> Date of Birth</th>
                <th>Gender </th>
                <th>Passport </th>
                <th>Email</th>
                <th>Address</th>
                <th>State </th>
                <th> Lga / Lcda </th>
                <th> Party Reg No </th>
                <th> Accreditation </th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $member)
            <tr>
                <td>{{$member->name}}</td>
                <td>{{$member->phone_no}}</td>
                <td>{{$member->dob}}</td>
                <td>{{$member->gender}}</td>
                <td>{{$member->passport}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->address}}</td>
                <td>{{$member->state}}</td>
                <td>{{$member->lgalcda}}</td>
                <td>{{$member->party_reg_no}}</td>
                <td>{{$member->state}}</td>

       <div class="card-body">  
    <!-- <img src="STUDENT_DATA/STUDENT_PHOTO/{{ $member->student_photo }}" class="img-circle" width="90" /> -->
       </div>
            </tr>
            @endforeach
        </tbody>
    </table>
    @elseif(isset($message))
    <p>{{$message}}</p>
    @endif
</div>


 @include ('layouts.footer')
</body>
</html>