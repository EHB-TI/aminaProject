@extends('layouts.app')
@section('content')
        <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Get In Touch</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3">
            <form id="request" class="main_form" action="{{ route('contact.send') }}" method="POST">
               @csrf
               <div class="row">
                  <div class="col-md-12 ">
                     <input class="contactus" placeholder="Full Name" type="text" name="full_name">
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Email" type="email" name="email">
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Phone Number" type="text" name="phone_number">
                  </div>
                  <div class="col-md-12">
                     <textarea class="textarea" placeholder="Message" name="message">Message</textarea>
                  </div>
                  <div class="col-md-12">
                     <button type="submit" class="send_btn">Send</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
 @endsection   