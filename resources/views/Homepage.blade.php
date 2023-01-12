@extends('layouts.layout')

@section('content')

<div class="container-fluid tophead ">
	<div class="container ">
		<div class="row">
			<!-- <div class="col-md-12"> -->
				<div class="col-md-4 d-flex flex-column align-items-center justify-content-center align-content-center">
					<div class="side_text ">
						<h2 class="mb-3"><b>Your Cross Border<br> Shipping Partner</b></h2>
						<p class="mb-4">Ship Over 200+ Countries</p>
					
							<a href="{{route('Contact')}}"  class="btn btn_green px-3"><i class="fa fa-envelope pr-1"></i>Get Quote</a>
							<a  class="btn btn_blue px-3" href="#" data-toggle="modal" data-target="#trackingmodel"><i class="fa fa-paper-plane-o pr-1"></i>Track</a>
					
						
					</div>
				</div>
				<div class="col-md-8 pt-5">
						<img src="{{asset('assets/vectors/full.svg')}}" style="width: 100%; height: auto;">
				</div>
			<!-- </div>		 -->
		</div>
	</div>
</div>

<div class="background py-4">
<div class="container mt-5">
	<div class="row ">
		<div class="col-md-3">
			<div class="box text-center top40">
					<img src="{{asset('assets/images/icons/truck.png')}}" style="height: 50px; width: auto;" class="pt-2">
				<p class="m-0">Shipments Delivered</p>
				<h2><strong> <span data-toggle="counter-up">10000</span>+</strong></h2>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box text-center top40 wow fadeIn animated">
				<span>
					<img src="{{asset('assets/images/icons/airplane.png')}}" style="height: 50px; width: auto;"  class="pt-2">
				</span>
				<p class="m-0">Carrier Partners</p>
				<h2><strong><span data-toggle="counter-up">10</span> +</strong></h2>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box text-center top40 wow fadeIn animated">
				<span>
					<img src="{{asset('assets/images/icons/rupee.png')}}" style="height: 50px; width: auto;"  class="pt-2">
				</span>
				<p class="m-0">Start Shipping at</p>
				<h2><strong><span data-toggle="counter-up">300</span> </strong></h2>
			</div>
		</div>

        <div class="col-md-3">
			<div class="box text-center top40 wow fadeIn animated">
				<span>
					<img src="{{asset('assets/images/icons/countries.png')}}" style="height: 50px; width: auto;"  class="pt-2">
				</span>
				<p class="m-0">Countries	Coverage</p>
			<h2><strong> <span data-toggle="counter-up">200</span> +</strong></h2>	
			</div>
		</div>
</div>
</div>
</div>

<div class="container mt-5 text-center" style="padding-top: 50px;">
	<div class="row">
		<div class="col-md-12 pb-3">
		  <h2>Why Choose Us?</h2>
		</div>
	</div>
	<div class="row ">
		    <div class="col-md-4">
                     <div class="whybox text-center top40 wow fadeIn animated ">
						<span>
							<i class="fas fa-store pb-3 mt-3" style="color:white; font-size:25px;"></i>
						</span>
						<h6 class="bottom10 pb-2">Expand E-Commerce globally <br>forwarders</h6>
						<p>With shipping coverage of over 200 countries,
							grow yourWe assure global affordable rates.
							freight forwarding companies</p>		
					</div>

					<div class="whybox text-center top40 wow fadeIn animated">
						<span>
							<i class="fas fa-headphones pb-3 mt-3" style="color:white; font-size:25px;"></i>
						</span>
						<h6 class="bottom10 pb-2">Superior Customer Support</h6>
						<p>Our support team works diligently to make sure 
							each package reaches ifs destination safe and sound.</p>		
					</div>
		  </div>
                  
                 <div class="col-md-4">
                   <img src="{{asset('assets/vectors/order.svg')}}" style="height: 100%; width:100%;">
		         </div>

		        <div class="col-md-4">
                   <div class="whybox text-center top40 wow fadeIn animated">
				<span>
					<i class="fas fa-truck pb-3 mt-3" style="color:white; font-size:25px;"></i>
				</span><br><br>
				<h6 class="bottom10 pb-2">businessPartner's with top freight <br>forwarders </h6>
				<p>delivery by partnering with esteemed business
					 all over the globe with </p>	
			</div>
            
            <div class="whybox text-center top40 wow fadeIn animated">
				<span>
					<i class="fas fa-book pb-3 mt-3" style="color:white; font-size:25px;"></i>
				</span><br><br>
				<h6 class="bottom10 pb-2">Simplifying Shipping Process </h6>
				<p>Starf shipping globally in few easy steps. </p>		
			</div>
		  </div>
		  <div class="col-md-12 pt-3">
		  <button type="submit" class="btn whybutton px-4">Sea all features</button>
		</div>
	</div>          
 </div>

 <div class="container-fluid" style=" padding-bottom: 20px; padding-top: 40px;">
	 <div class="row">
		 <div class="col-md-12 text-center pt-5 pb-3">
		 <h2>How <span class="text-primary">It works?</span></h2>
		</div>
		 <div class="col-md-6 sideimg pl-5">
		 	<img src="{{asset('assets/vectors/howitworks.svg')}}" style="height: 350px; width: 100%;">
		 </div>
		 <div class="col-md-6 mt-5">
			<div class="text_box d-flex pb-5">
				<div class="count mr-3">
					<p>1</p>
				</div>
				<div class="content">
					<h6>Book your Shipment</h6>
					<p> Contact our sales and book your shipment.</p>
				</div>
			</div>
			<div class="text_box d-flex pb-5">
				<div class="count mr-3">
					<p>2</p>
				</div>
				<div class="content">
					<h6>Select Carrier/Service</h6>
					<p> Select your preferred carrier and <br>service.</p>
				</div>
			</div>
			<div class="text_box d-flex pb-5">
				<div class="count mr-3">
					<p>3</p>
				</div>
				<div class="content">
					<h6>Pack and Ship</h6>
					<p> Generate Invoice, pack your shipment<br> and schedule your preferred pickup<br> time</p>
				</div>
			</div>
			<div class="text_box d-flex pb-5">
				<div class="count mr-3">
					<p>4</p>
				</div>
				<div class="content">
					<h6>Tracking</h6>
					<p> Start tracking and be informed on each<br> status update.</p>
				</div>
			</div>
		 </div>
	 </div>
 </div>



 <div class="container my-5 Courierbox">
    <div class="row">
	      <div class="col-md-12 text-center pb-4 pb-3">
			<h2 style="padding-bottom:20px;">Our Courier Partners</h2>
		  </div>
		  </div>
		  <div class="row">
        <!-- <div class="col-md-1 hide"></div> -->

        <div class="col-md-2 sidespace">
        	<div class="box2 d-flex justify-content-center align-content-center align-items-center" style="border-bottom: 4px solid orangered ;">
        		<img src="{{asset('assets/images/logos/fedex.png')}}" style="height: 60px; ">
			
        	</div>
        </div>

        <div class="col-md-2 ">
        	<div class="box2 d-flex justify-content-center align-content-center align-items-center" style="border-bottom: 4px solid red ;">
        		<img src="{{asset('assets/images/logos/dpd.png')}}" style="height: 60px; ">
				
        	</div>
        </div>
        <div class="col-md-2 ">
        	<div class="box2 d-flex justify-content-center align-content-center align-items-center" style="border-bottom: 4px solid yellow ;">
				<img src="{{asset('assets/images/logos/ups.png')}}" style="height: 55px; ">    
			     
        	</div>
        </div>
        <div class="col-md-2">
        	<div class="box2 d-flex justify-content-center align-content-center align-items-center" style="border-bottom: 4px solid yellow ;">
				<img src="{{asset('assets/images/logos/dhl.png')}}" style="height: 60px; ">
				
			</div>
		</div>
        
        <div class="col-md-2">
        	<div class="box2 d-flex justify-content-center align-content-center align-items-center" style="border-bottom: 4px solid orangered ;">
        		<img src="{{asset('assets/images/logos/tnt.png')}}" style="height: 60px;">
				
        	</div>
        </div>
        <!-- <div class="col-md-1 hide"></div> -->
	</div>
  </div>

@endsection