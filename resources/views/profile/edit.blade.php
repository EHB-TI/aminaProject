<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Lashes By Amina</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logoAL.gif" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ route('home') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('about') }}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('we-do') }}">What We do</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                              </li>

                              
                              @auth 
                              <li class="nav-item">
                              <a class="nav-link" href="{{ route('comments') }}">comments</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                 </a>
                              </li>
                              </li>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                 </form>
                              </li>
                              @else
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('login') }}">Login</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}">Register</a>
                              </li>
                              @endauth
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="container">
    <h1>Profiel Bewerken</h1>
    <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="profile_photo">Profielfoto</label>
            <input type="file" name="profile_photo" class="form-control-file">
        </div>
        
        <div class="form-group">
            <label for="firstname">Voornaam</label>
            <input type="text" name="firstname" class="form-control" value="{{ $user->firstname }}">
        </div>
        
        <div class="form-group">
            <label for="lastname">Achternaam</label>
            <input type="text" name="lastname" class="form-control" value="{{ $user->lastname }}">
        </div>
        
        <div class="form-group">
            <label for="birthdate">Geboortedatum</label>
            <input type="date" name="birthdate" class="form-control" value="{{ $user->birthdate }}">
        </div>
        
        <div class="form-group">
            <label for="sex">Geslacht</label>
            <select name="sex" class="form-control">
                <option value="male" {{ $user->sex == 'male' ? 'selected' : '' }}>Man</option>
                <option value="female" {{ $user->sex == 'female' ? 'selected' : '' }}>Vrouw</option>
                <option value="other" {{ $user->sex == 'other' ? 'selected' : '' }}>Overig</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="biography">Biografie</label>
            <textarea name="biography" class="form-control">{{ $user->biography }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Profiel Bijwerken</button>
    </form>
</div>