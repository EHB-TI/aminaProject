

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
      <title>milina</title>
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
                                 <a class="nav-link" href="home-Page">Home</a>
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
                                 <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                 </a>
                                 <li class="nav-item">
                                 <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                              </li>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                 </form>
                              </li>
                              @else
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
      <!-- end header inner -->
      <!-- end header -->
     <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>What We Do </h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- what we do  -->
      <!-- what I do  -->
      <div class="we_do slin">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 offset-lg-1 col-md-12">
                  <div class="row">
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="images/cac.png" alt="#"/></i>
                           <h3>natural eyelashes</h3>
                           <p>to get longer lashes  </p>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="images/volumeR.png" alt="#"/></i>
                           <h3>4D volume</h3>
                           <p>4 synthetic lashes glued to 1 natural lash, light Russian volume effect </p>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="images/extraVolume.png" alt="#"/></i>
                           <h3>brazilian volume</h3>
                           <p>a voluminous natural result </p>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="images/lashesUit.png" alt="#"/></i>
                           <h3>eyelash removal</h3>
                           <p>to make sure you don't lose your eyelashes  </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end what we do  -->

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Quai de l'Industrie 170, 1070 Anderlecht</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 0488714235</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> LashesByeAmina@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>Welcome</h3>
                     <p class="variat">you will always be welcome in our beauty salon</p>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>Lashes Salon </h3>
                     <p class="variat" >always present to have a beautiful look</p>
                  </div>
                  <div class="col-md-2 col-sm-6">
                     <h3>Useful Link</h3>
                     <ul class="link_menu">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="{{ route('about') }}"> About</a></li>
                        <li><a href="{{ route('we-do') }}">What we do</a></li>
                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

