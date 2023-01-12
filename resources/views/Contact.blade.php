@extends('layouts.layout')

@section('content')

<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="0.25s" style="visibility: visible;-webkit-animation-duration: 0.5s; -moz-animation-duration: 0.5s; animation-duration: 0.5s;-webkit-animation-delay: 0.25s; -moz-animation-delay: 0.25s; animation-delay: 0.25s;">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.5177998596605!2d77.08669976541215!3d28.64421074030232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d049039cc043f%3A0x860c95d1c1d4fbbb!2sPrithvi%20Park%2C%20Tilak%20Nagar%2C%20New%20Delhi%2C%20Delhi%20110018!5e0!3m2!1sen!2sin!4v1652335635925!5m2!1sen!2sin" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{asset('assets/images/phone-icon.png')}}" alt="">
                          <a href="#">010-020-0340</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{asset('assets/images/email-icon.png')}}" alt="">
                          <a href="#">info@upbox.co.in</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{asset('assets/images/location-icon.png')}}" alt="">
                          <a href="#">Prithavi park, Tilak Nagar,<br> New Delhi-110018</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required="">
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection