<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upbox</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{asset('assets/vonder/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link rel="preload" href="{{asset('assets/fonts/Outfit-Black.woff2')}}" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>
@include("layouts.nav")

@yield('content')
  
<div class="bgcover">
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(44,50,70,0.3)"></use>
    <use xlink:href="#gentle-wave" x="48" y="2" fill="rgba(44,50,70,0.5)"></use>
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(44,50,70,0.7)"></use>
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(44,50,70,1)"></use>
    </g>
    </svg>
</div>
<footer>
  
    <div class="container-fluid text-center pt-5 " >
        <div class="container">
            <div class="row pb-3">
                <div class="col-sm-3 text-white pb-3">
                    <img src="{{asset('assets/images/logos/UPBOX_LOGO_WHITE.png')}}" style="height: 50px; width: 150px;">
                </div><br><br>
                <div class="col-sm-3 text-white pt-3 text-left">
                    <p>We don't deliver packages, We deliver promises</p>
                </div>
                <div class="col-sm-3 text-white  text-left">
                    <h5>Office</h5>
                    <p>Prithavi park, Tilak Nagar,<br> New Delhi-110018</p>
                </div>
                
                <div class="col-sm-3 text-white  text-left">
                    <h5>Contacts</h5>
                    <p>info@upbox.co.in</p>
                </div>
            </div>
        
            <div class="row copyrightcolm">
                <div class="col-md-6 py-3" style=" color: white; ">
                    ©2022. all rights reserved.
                </div>
                <div class="col-md-6 socialmedia py-3">
                    <ul>
                        <li>
                            <i class="fa fa-facebook bottomicons"></i>
                        </li>
                        <li>
                            <i class="fa fa-instagram bottomicons"></i>
                        </li>
                        <li>
                            <i class="fa fa-twitter bottomicons"></i>
                        </li>
                    </ul>
                    
                    
                </div>
            </div>

        </div>
    </div>
</footer>


<!-- ======= Moble Footer ======= -->
<div class="container-fluid mobile-footer-bar d-flex w-100">
	<div class="homebar w-100 d-block py-2">
		<a href="{{route('homepage')}}" class=" d-block w-100 text-center"></i><i class="bi bi-house-fill d-block" style="font-size:24px"></i>
		<span>Home</span>
	  </a> 
	</div>
	<div class="servicebar  w-100 d-block py-2">
	  <a href="{{route('Feature')}}" class=" d-block w-100 text-center"><i class="bi bi-receipt d-block" style="font-size:24px"></i>
		<span>Features</span>
	  </a>
	</div>
	<div class="newsbar  w-100 d-block py-2">
	  <a href="{{route('RateCalculator')}}" class=" d-block w-100 text-center"><i class="bi bi-calculator-fill d-block" style="font-size:24px"></i>
		<span> Rate Calculator</span>
	  </a>
	</div>
	<div class="calender w-100 d-block py-2">
		<a href="#" data-toggle="modal" data-target="#trackingmodel" class=" d-block w-100 text-center"><i class="bi bi-send-fill d-block" style="font-size:24px"></i>
		<span>Track</span>
	  </a>
	</div>
  </div>


  <!-- The Modal -->
<div class="modal fade" id="trackingmodel" style="top:30%!important;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title ">Track Now</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-center">
        <form method="post" action="{{route('Track')}}">
          @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Tracker No... " name="trackingno">
          <div class="input-group-append">

            <button class="btn btn-success" type="submit" style="background-color:#41d3ea;color:white;"><i class='fas fa-search' style='font-size:18px'></i></button>
          </div>
        </div>
      </form>
        {{-- <img src="assets/images/tack.svg" alt="" height="70px">
        <div class="my-3">
            <input type="email" class="form-control" id="trackFormControlInput1" placeholder="Search or Tracking Number">
            <div class="mt-4 text-center">
                <button type="submit" class="btn mb-3" style="background-color:#41d3ea;color:white;">Track Now</button>
            </div>
        </div> --}}


      </div>

      <!-- Modal footer -->
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> --}}

    </div>
  </div>
</div>


  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> --}}
  {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>


  <script>
    $(document).ready(function() {
      $("#testimonial-slider").owlCarousel({
        items: 2,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [990, 2],
        itemsTablet: [768, 1],
        pagination: true,
        navigation: false,
        navigationText: ["", ""],
        slideSpeed: 1000,
        autoPlay: true
      });
    });
  </script>


<script>/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}</script>

<script>
    $(document).ready(function(){
    $('#ratecalculate').on('submit', function(event){
      event.preventDefault();
      $.ajaxSetup({
      headers:{'X-CSRF-Token': '{{csrf_Token()}}'}
    });    
    $.ajax({
     url:"{{ route('getdata') }}",
     method:"POST",
     data:new FormData(this),
     dataType:'JSON',
     contentType: false,
     cache: false,
     processData: false,
     success:function(data)
     {
       $('#ratecalculate')[0].reset();
        console.log(data);
      $('.getresult').css('display', 'block');
      $('#volresult').html(data.cal);
     }
    })
   });

    // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });
  });

</script>
</body>

</html>