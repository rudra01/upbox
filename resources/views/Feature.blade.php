@extends('layouts.layout')

@section('content')

<div class="container feathead feadeskview py-5">
    <div class="row py-5">
        <div class="col-md-6">
            <img src="{{asset('assets\vectors\features\feature_header.svg')}}" alt="Feature Img" width="100%" height="auto">
        </div>
        <div class="col-md-6 py-4">
            <h2 class="pt-5">
                Gain more insight into how <strong>upbox</strong>  exceeds
            </h2>
            <p>
                We make your shipping experience affordable,seamless and hassle free through innovation and help you elevate your ecommerce business across borders. Our mission is to provide total quality service to our customers. we'll meet all your shipping needs and make shure you're informed at each step of the way.
            </p>
        </div>
    </div>
</div>


<div class="container feathead featmob pt-0 pb-5">
    <div class="row pb-5 pt-0">
        
        <div class="col-md-6 py-4">
            <h2 class="pt-5 text-center">
                Gain more insight into how <strong>upbox</strong>  exceeds
            </h2>
            <p class="text-center">
                We make your shipping experience affordable,seamless and hassle free through innovation and help you elevate your ecommerce business across borders. Our mission is to provide total quality service to our customers. we'll meet all your shipping needs and make shure you're informed at each step of the way.
            </p>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{asset('assets\vectors\features\feature_header.svg')}}" alt="Feature Img" width="100%" height="auto">
        </div>


    </div>
</div>


<div class="container featuresec my-4">
    <div class="row">
        <div class="heading text-center w-100 pb-5 mb-5">
            <h2>
                Features
            </h2>
        </div>
        <div class="col-md-4 p-3">
            <div class="featurebox fb1 py-3">
                <div class="imgbox text-center">
                    <img src="{{asset('assets\vectors\features\calculator.svg')}}" alt="" width="70" height="auto" style="margin: 0 auto">
                </div>
                <div class="content text-center pt-3">
                    <h4>
                        Shipping Calculator
                    </h4>
                    <p>
                        Get Estimate shipping rate with few clicks.
                    </p>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="featurebox fb2 py-3">
                <div class="imgbox text-center">
                    <img src="{{asset('assets\vectors\features\invoice.svg')}}" alt="" width="70" height="auto" style="margin: 0 auto">
                </div>
                <div class="content text-center pt-3">
                    <h4>
                        Invoice Generator
                    </h4>
                    <p>
                        Generate and download your shipping invoice with our invoice generator.
                    </p>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="featurebox fb3 py-3">
                <div class="imgbox text-center">
                    <img src="{{asset('assets\vectors\features\track.svg')}}" alt="" width="70" height="auto" style="margin: 0 auto">
                </div>
                <div class="content text-center pt-3">
                    <h4>
                        Real Time Tracking
                    </h4>
                    <p>
                        Get better visibility of your shipment's wherebouts along with the estimated time of its delivery and get real time tracking updates.
                    </p>
                </div>
                
            </div>
        </div>


        <div class="col-md-4 p-3">
            <div class="featurebox fb4 py-3">
                <div class="imgbox text-center">
                    <img src="{{asset('assets\vectors\features\airplane.svg')}}" alt="" width="70" height="auto" style="margin: 0 auto">
                </div>
                <div class="content text-center pt-3">
                    <h4>
                        Multiple Shipping Carriers
                    </h4>
                    <p>
                        Chooose the right shipping carrier according to your business needs. We are currently partnered with multiple shipping partners.
                    </p>
                </div>
                
            </div>
        </div>

        <div class="col-md-4 p-3">
            <div class="featurebox fb5 py-3">
                <div class="imgbox text-center">
                    <img src="{{asset('assets\vectors\features\rupee2.svg')}}" alt="" width="70" height="auto" style="margin: 0 auto">
                </div>
                <div class="content text-center pt-3">
                    <h4>
                        Affordable Shipping Rates 
                    </h4>
                    <p>
                        Start shipping across globle with rates starting as low as 200. Save on your shipping cost and expand your profits.
                    </p>
                </div>
                
            </div>
        </div>

        <div class="col-md-4 p-3">
            <div class="featurebox fb6 py-3">
                <div class="imgbox text-center">
                    <img src="{{asset('assets\vectors\features\locations.svg')}}" alt="" width="70" height="auto" style="margin: 0 auto">
                </div>
                <div class="content text-center pt-3">
                    <h4>
                        Multiple Pickkup Locations
                    </h4>
                    <p>
                        Make your order fulfillment easier by adding multiple pick up locations.
                    </p>
                </div>
                
            </div>
        </div>

        <div class="col-md-4 p-3">
            <div class="featurebox fb7 py-3">
                <div class="imgbox text-center">
                    <img src="{{asset('assets\vectors\features\payment.svg')}}" alt="" width="70" height="auto" style="margin: 0 auto">
                </div>
                <div class="content text-center pt-3">
                    <h4>
                        Multiple Payment Options
                    </h4>
                    <p>
                        offer both prepaid and COD payment options to your buyers for better conversion rate and credibility.
                    </p>
                </div>
                
            </div>
        </div>

        <div class="col-md-4 p-3">
            <div class="featurebox fb8 py-3">
                <div class="imgbox text-center">
                    <img src="{{asset('assets\vectors\features\pickup.svg')}}" alt="" width="70" height="auto" style="margin: 0 auto">
                </div>
                <div class="content text-center pt-3">
                    <h4>
                        Scheduled Pickups
                    </h4>
                    <p>
                        Schedule pickup timings according to your convenience and ease.
                    </p>
                </div>
                
            </div>
        </div>

        <div class="col-md-4 p-3">
            <div class="featurebox fb9 py-3">
                <div class="imgbox text-center">
                    <img src="{{asset('assets\vectors\features\report.svg')}}" alt="" width="70" height="auto" style="margin: 0 auto">
                </div>
                <div class="content text-center pt-3">
                    <h4>
                        Weekly Business Reports
                    </h4>
                    <p>
                        Get more insights of your business through weekly business reports and analyze your buyer's pattern.
                    </p>
                </div>
                
            </div>
        </div>

    </div>
</div>
@endsection