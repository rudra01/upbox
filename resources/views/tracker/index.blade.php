@extends('layouts.dashboard')

@section('content')


<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tracking:</h1>
    {{-- <button class="btn btn-primary" data-toggle="modal" data-target="#CreateShipment">New Shipment</button> --}}
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tracking: </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tacking ID</th>
                        <th>Current Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    
                    <tbody id="Shipmenttable">
                        @foreach ($tracks as $track)
                        <tr>
                            <th></th>
                            <th>
                              {{-- {{$track->barcode}} --}}
                            @foreach ($ships as $ship)
                                @if ($track->ShipmentID == $ship->id)
                                    {{$ship->barcodeno}}
                                @endif
                            @endforeach
                            </th>
                            <th>{{$track->Status}}</th>                            
                            <th class="d-flex">
                                <a  href="{{ route('tracking.edit',[$track->id]) }}"><img class="m-1" src="{{asset('assets/images/edit.png')}}" alt="edit" width="35"></a>
                            </th>
                        </tr>

                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
  
          </div>
          <!-- /.container-fluid -->
  
    </div>










            
        </div>
          <!-- /.container-fluid -->
    </div>

</div>


@endsection
