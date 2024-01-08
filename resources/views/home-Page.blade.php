@extends('layouts.app')
@section('content')
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner1" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="images/lashesOne.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>01/03</span>
                              <h1>Amina Lashes Salon </h1>
                              <p>come and embellish your beautiful eyes </p>
                              <a class="get_btn" href="Javascript:void(0)" role="button">Get Appoinment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="images/lashesOne.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>02/03</span>
                              <h1>Amina Lashes Salon </h1>
                              <p>come and embellish your beautiful eyes </p>
                              <a class="get_btn" href="Javascript:void(0)" role="button">Get Appoinment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="images/lashesOne.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>03/03</span>
                              <h1>Amina Lashes Salon </h1>
                              <p>come and embellish your beautiful eyes </p>
                              <a class="get_btn" href="Javascript:void(0)" role="button">Get Appoinment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- what I do  -->
      <div class="we_do slin">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>What We Do </h2>
                  </div>
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
      <!-- end what I do  -->
      <!-- about -->
      <div class="about slin2">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p>who are we? We are three sisters who share the same hobby. I, Amina, took the responsibility of opening our own eyelash extension salon as a goal...</p>
                     <a class="read_more" href="Javascript:void(0)"> Read More</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img">
                     <figure><img src="images/aboutG.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      
      <!-- experts -->
      <div  class="experts slin2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Meet Our Experts</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 offset-lg-2 col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="images/expertA.png" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>Amina</h3>
                              <p> specializes in giving you a doe-eyed look with Brazilian volume </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="images/expertS.jpg" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>Siham</h3>
                              <p>specializes in eyelash extensions but while remaining natural</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="images/expertH.jpg" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>Hind</h3>
                              <p>specializes in giving you doe eyes in 4D</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end experts -->
      
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Quai de l'Industrie 170, 1070 Anderlecht</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 0488714235</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> LashesByeAmina@hotmail.com</a></li>
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
     
@endsection
