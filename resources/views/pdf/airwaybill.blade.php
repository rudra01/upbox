<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <title>Airway Bill</title>
</head>
<body>
    
    <div class="container"  style="font-size:7px">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <img src="{{asset('assets/vectors/Upbox_blue.svg')}}" alt="" width="auto" height="50px">

        </div>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-center " style="font-size:7px">
        
        <div class="barcode text-center" style="font-size:7px">
            <h1 class="h3 mb-0 text-gray-800">Shipments </h1>
            <h6>
                {{$ships->created_at->toDateString()}}
            </h6>
            <h6>
                Tracking No: {{$ships->barcodeno}}
            </h6>
            
            @php
                $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
            @endphp
            <img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode('{!!$ships->barcodeno!!}', $generatorPNG::TYPE_CODE_128)) }}" width="350">
                                
        </div>
        </div>
    
        <!-- Content Row -->
        <div class="row py-5 " style="font-size:7px">
            <div class="col-md-12">
                <div class="box border shadow-none " style="border-color:#41D3EA!important;">
                    <table class="table table-hover ">
                        <tr>
                            <td><strong>Origin: </strong> {{$ships->Origin}}</td>
                            <td><strong>Destination: </strong> {{$ships->Destination}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box border shadow-none" style="border-color:#41D3EA!important;font-size:7px;">
                    <h6 style="font-size:7px; padding: 2px;">
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
    
    
            <div class="col-md-6" style="font-size:7px">
                <div class="box border shadow-none " style="border-color:#41D3EA!important;font-size:7px;">
                    <h6 style="font-size:7px; padding: 2px;">
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
    
            <div class="col-md-12" style="font-size:7px">
                <div class="box border shadow-none" style="border-color:#41D3EA!important;">
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
                </div>
            </div>
              
        </div>
       
    </div>
</body>
</html>