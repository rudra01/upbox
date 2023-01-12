@extends('layouts.dashboard')

@section('content')


<div class="container mt-5">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 py-2">Tracker </h1>
    <a class="btn btn-primary py-2" href="{{route('tracking.index')}}">Go Back</a>
    </div>

    <!-- Content Row -->
    <div class="row pb-5 mb-5 px-3 w-100">
        <!-- Begin Page Content -->
        


                
                        @foreach($ships as $ship)

                        @if($track->ShipmentID == $ship->id)

                            <div class="col-md-12 py-2">
                                <label for="trackingstatus" >Tracking Barcode : {{$ship->barcodeno}}</label> <br>
                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                          <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Tacking ID</th>
                                              <th>Shipment Date</th>
                                              <th>Shipment Time</th>
                                              <th>Location</th>
                                              <th>Comments</th>
                                              <th>Current Status</th>
                                            </tr>
                                          </thead>
                                          
                                          <tbody id="Shipmenttable">
                                            @foreach ($hist as $his)
                                            @if ($his->tackerID == $track->id)
                                              <tr>
                                                  <th></th>
                                                  <th>{{$his->barcode}}</th>
                                                  <th>{{$his->ShipmentDate}}</th>
                                                  <th>{{$his->ShipmentTime}}</th>
                                                  <th>{{$his->Location}}</th>
                                                  <th>{{$his->Comments}}</th>
                                                  <th>{{$his->status}}</th>                            
                                              </tr>
                                              @else
                                              <h5>No Data Found!!</h5>
                                          @endif
                                      @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                   
                                <br> <br>
                                <h3>
                                    Latest Status : <br>
                                </h3>
                                {{-- <label for="trackingstatus" >Tracking Status :</label> --}}
                                <form method="POST" action="{{route('tracking.update', [$track->id])}}" class="w-100" >  
                                    @csrf
                                        @method('PUT')
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12 py-2">
                                            <input type="number" name="trackerID" class="form-control " value="{{$track->id}}" hidden>

                                            <label for="ShipmentDate" >Shipment Date:</label>
                                            <input type="date" name="ShipmentDate" class="form-control ">
                                        </div>
                                        <div class="col-md-12 py-2">
                                            <label for="ShipmentTime" >Shipment Time:</label>
                                            <input type="time" name="ShipmentTime" class="form-control ">
                                        </div>
                                        <div class="col-md-12 py-2">
                                            <label for="Location" >Location:</label>
                                            <input type="text" name="Location" class="form-control ">
                                        </div>
                                        <div class="col-md-12 py-2">
                                            <label for="Comments" >Comments:</label>
                                            <input type="text" name="Comments" class="form-control ">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12 py-2">
                                        <label for="trackingstatus" >Tracking Current Status :</label>
                                        <select name="trackingstatus" class="custom-select">
                                            <option value="{{$track->Status}}" selected>{{$track->Status}} </option>
                                            <option value="Shipment information received">Shipment information received</option>
                                            <option value="Shipment received at Hub">Shipment received at Hub</option>
                                            <option value="Shipment left from Hub">Shipment left from Hub</option>
                                            <option value="Intransit">Intransit</option>
                                            <option value="Out for Delivery">Out for Delivery</option>
                                            <option value="Delivery">Delivery</option>
                                            <option value="Hold">Hold</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>    
                                <div class="btnbox text-center">
                                    <button type="submit" class="btn btn-primary my-4">Update Tracker</button>
                                        
                                        </div>    
                                </form>
                            </div>
                        @endif
                        @endforeach
                
                    
                
          
    </div>

</div>

@endsection
