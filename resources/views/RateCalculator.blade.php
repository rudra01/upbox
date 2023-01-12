@extends('layouts.layout')

@section('content')

<div class="container ratecalculator py-5 mt-5">
    <div class="row ">
        <div class="col-md-6">
            <div class="heading pt-5">
                <h2 class="pt-5">
                    Calculate Volumetric Weight Easily
                </h2>
                <p>
                    Enter your package dimensions & know the dimensional weight of your package in a click.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/calculate-banner.png')}}" alt="" width="100%" height="auto">
        </div>
        <div class="col-md-12 bg-light py-5 mt-5 shadow">
            <div class="calbox text-center">
                <h4>
                    Volumetric Weight Calculator
                </h4>
                <div class="form p-5">
                    <form method="POST" id="ratecalculate">
                     @csrf
                        <div class="form-row">
                          <div class="col">
                            <input type="number" class="form-control" id="lenght" placeholder="Length in cm" name="lenght" step=0.01 >
                          </div>
                          <div class="col">
                            <input type="number" class="form-control" id="width" placeholder="Width in cm" name="width" step=0.01>
                          </div>
                          <div class="col">
                            <input type="number" class="form-control" id="height" placeholder="Height in cm" name="height" step=0.01>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Calculate Now</button>
                      </form>
                </div>
                <div class="getresult">
                  <h2>
                    <span id="volresult"></span>kg
                  </h2>
                </div>
            </div>
        </div>
        <div class="col-md-12 py-5 text-center">
          <h2 class="py-3">
            What Is Volumetric Weight?
          </h2>  
          <p>
            Volumetric Weight or Dimensional Weight is a weight-measurement technique used in eCommerce logistics in which the weight of a package is calculated as the product of its length, breadth & height divided by a courier-specific constant. Your courier partner charges you based on the higher weight of the package out of the true weight & the dimensional weight.
          </p>
        </div>
    </div>
</div>
@endsection