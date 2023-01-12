@extends('layouts.layout')
@section('content')
    <div class="headbody bg-light p-5 text-center">
        <h2 class="p-5">
            Track NO :
                        @foreach ($tracks as $track)
                            @if ($track->barcode != '')
                                {{$track->barcode}}
                                @break
                            @endif
                        @endforeach
        </h2>
    </div>
    <div class="tackbox my-5 py-5">
        <div class="container pt-5 bg-light">
            <div class="row">
                <div class="col-md-12 text-center ">

                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Status Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Shipment History</th>
                            <th>Comments(If Any)</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                            @foreach ($tracks as $track)
                            <tr>
                                <td>{{$track->ShipmentDate}}</td>
                                <td>{{$track->ShipmentTime}}</td>
                                <td>{{$track->Location}}</td>
                                <td>{{$track->status}}</td>
                                <td>{{$track->Comments}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    

                </div>
            </div>
        </div>
    </div>
@endsection