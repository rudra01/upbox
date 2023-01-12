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
        
            {{-- <label for="trackingstatus" >Tracking Status :</label> --}}
            <form method="POST" action="{{route('tracking.store')}}" class="w-100" >  
                @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12 py-2">
                        <label for="barcode" >Tracking No:</label>
                        <select name="barcode" class="custom-select">
                            <option  selected>Select Tracking No</option>
                            @foreach ($ships as $ship)
                                <option value="{{$ship->barcodeno}}">{{$ship->barcodeno}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 py-2">
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
                        <option  selected>Select Status </option>
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
                <button type="submit" class="btn btn-primary my-4">Create Tracker</button>        
            </div>    
            </form>
        
    </div>

</div>

@endsection
