@extends('layouts.dashboard')

@section('content')


<div class="container mt-5">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    
    <div class="barcode">
        <h1 class="h3 mb-0 text-gray-800">Shipments </h1> <br>
        <h6>
            {{$ships->created_at->toDateString()}}
        </h6>
        <h6>
            Tracking No: {{$ships->barcodeno}}
        </h6>
        
        @php
            $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
        @endphp
        <img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode('{!!$ships->barcodeno!!}', $generatorPNG::TYPE_CODE_128)) }}" width="300">
                            
    </div>
    <a class="btn btn-primary mt-3" href="{{route('viewshipments')}}">Go Back</a>
    </div>

    <!-- Content Row -->
    <div class="row pb-5 mb-5">
        <div class="col-md-12">
            <div class="box border shadow-none p-3 table-responsive" style="border-color:#41D3EA!important;">
                <table class="table table-hover ">
                    <tr>
                        <td><strong>Origin: </strong> {{$ships->Origin}}</td>
                        <td><strong>Destination: </strong> {{$ships->Destination}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box border shadow-none p-3 table-responsive" style="border-color:#41D3EA!important;">
                <h6>
                    CONSIGNOR
                </h6>
                <table class="table table-hover ">
                   @foreach($consignor as $cons)
                        @if($cons->ShipmentID == $ships->id)
                            <tbody>
                            <tr>
                                <td colspan="3"><strong>Name:</strong> {{$cons->Name}}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>Address:</strong> {{$cons->Address}}</td>
                            </tr>
                            <tr>
                                <td><strong>City:</strong> {{$cons->City}}</td>
                                <td><strong>ZipCode:</strong> {{$cons->zipcode}}</td>
                            </tr>
                            <tr>
                                <td><strong>Country:</strong> {{$cons->Country}}</td>
                                <td><strong>Phone No:</strong> {{$cons->Phoneno}}</td>
                            </tr>
                            </tbody>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>


        <div class="col-md-6">
            <div class="box border shadow-none p-3 table-responsive" style="border-color:#41D3EA!important;">
                <h6>
                    CONSIGNEE
                </h6>
                <table class="table table-hover ">
                   @foreach($consignee as $conee)
                        @if($conee->ShipmentID == $ships->id)
                            <tbody>
                            <tr>
                                <td colspan="3"><strong>Name:</strong> {{$conee->Name}}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>Address:</strong> {{$conee->Address}}</td>
                            </tr>
                            <tr>
                                <td><strong>City:</strong> {{$conee->City}}</td>
                                <td><strong>ZipCode:</strong> {{$conee->zipcode}}</td>
                            </tr>
                            <tr>
                                <td><strong>Country:</strong> {{$conee->Country}}</td>
                                <td><strong>Phone No:</strong> {{$conee->Phoneno}}</td>
                            </tr>
                            </tbody>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>

        <div class="col-md-12">
            <div class="box border shadow-none p-3 table-responsive" style="border-color:#41D3EA!important;">
                <table class="table table-hover ">
                    <tbody>
                        <tr>
                            <td ><strong> NO. OF PKGS:</strong> {{$ships->Noofpkgs}}</td>
                            <td ><strong>  TOTALWEIGHT:</strong> {{$ships->Totalweight}}</td>
                            <td ><strong> DIMENSIONS OF BOX(CM):</strong> <br> {{$ships->Length}} x {{$ships->width}} x {{$ships->height}}</td>
                            <td ><strong> VOLUMETRIC WEIGHT:</strong> <br> {{$ships->volweight}} KG</td>
                        
                        </tr>
                        <tr>
                            <td colspan="4"><strong>DESCRIPTION OFCONTENTS:</strong> <br> {!!$ships->DescripOfContents!!}</td>
                        </tr>
                        <tr>
                            <td><strong>PACKAGING CHECK ONE BOX:</strong> <br>

                                @if($ships->docornot)
                                   Documents
                                @else
                                   Non Documents
                                @endif   
                           </td>
                            <td><strong>Payment Mode :</strong> <br> 
                                @if( $ships->Payment_mode)
                                    Online
                                @else 
                                    Cash
                                @endif
                            </td>
                            <td>
                                @foreach($tracks as $track)
                                @if($track->ShipmentID == $ships->id)
                                <strong>Tracking Status:</strong> <br> {{$track->Status}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($bills as $bill)
                                @if($bill->ShipmentID == $ships->id)
                                <strong>Total Amount:</strong> <br> {{$bill->TotalAmount}}
                                @endif
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                 </table>
                 <a href="{{route('fullslip', [$ships->id])}}>" class="btn btn-primary" >Prind Airway</a>
                 <a href="{{route('label', [$ships->id])}}>" class="btn btn-primary" >Prind Label</a>
            </div>
        </div>
          
    </div>
   
</div>

@endsection
