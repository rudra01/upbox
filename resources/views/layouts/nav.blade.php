<header>
	
	<nav class="navbar navbar-expand-lg navbar-light pt-3">
		<div class="container">
		  <a class="navbar-brand text-body" href="{{route('homepage')}}">
			  <img src="{{asset('assets/vectors/Upbox_blue.svg')}}" alt="" width="100%" height="40px">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse " id="navbarsExample07">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link pr-5 text-body" href="{{route('Feature')}}">Features <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle pr-5 text-body" href="#" id="dropdown07" data-toggle="dropdown" aria-expanded="false">Tools</a>
				<div class="dropdown-menu" aria-labelledby="dropdown07">
				  <a class="dropdown-item text-body" href="{{route('RateCalculator')}}"><img src="{{asset('assets/vectors/rupee.svg')}}" alt="" width="35" style="margin-right:5px;"> Rate Calculator</a>
				  {{-- <a class="dropdown-item text-body" href="#">Top 2</a> --}}
				</div>
			  </li>
			  <li class="nav-item">
				<a class="nav-link pr-5 text-body" href="{{route('Contact')}}">Contact</a>
			  </li>
			  <li class="nav-item trackingnavbtn">
				<a class="nav-link text-body button2  pl-3 px-4" href="#" data-toggle="modal" data-target="#trackingmodel"><i class="fa fa-paper-plane-o pr-1"></i>Track</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>




	  
</header>