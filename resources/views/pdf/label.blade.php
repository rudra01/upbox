<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <title>Label</title>
</head>
<body>
    
    <div class="container py-5" >

        <div class="labelbox" style="width: 600px;margin:0 auto;">
            <div class="box border">
                <table class="table ">
                    <tr class="border">
                        <td class="text-center" colspan="2"><img src="{{asset('assets/vectors/Upbox_blue.svg')}}" width='auto' height='35'></td>
                    </tr>
                    <tr class="border">
                        @foreach($consignor as $cons)
                            @if($cons->ShipmentID == $ships->id)
                            
                            <td>{{$cons->Name}} <br>
                                From Address: <br>
                                
                                    {{$cons->Address}}
                                    <br>
                                {{$cons->zipcode}}
                            </td>
                            <td class="text-center">
                              <strong>{{$cons->Country}}</strong>  
                            </td>
                            @endif
                            @endforeach
                    </tr>
                    <tr class="border">
                        <td>Ex </td>
                        <td class="text-center">{{$ships->Noofpkgs}}</td>
                    </tr>
                    <tr class="border">
                        @foreach($consignee as $conee)
                        @if($conee->ShipmentID == $ships->id)
                        <td>{{$conee->Name}} <br>
                            To Address: <br>
                            
                                {{$conee->Address}}
                                <br>
                                {{$conee->zipcode}}
                        </td>
                        <td class="text-center">
                          <strong>
                            @if($ships->docornot)  
                                Dox
                            @else
                                NDox
                            @endif
                            </strong>  
                        </td>
                        @endif
                        @endforeach
                    </tr>
                    <tr class="border">
                        <td>
                            Weight - <strong>{{$ships->Totalweight}} KG</strong> 
                        </td>
                        <td class="text-center">
                            Vol. Weight - <strong>{{$ships->volweight}} KG</strong>
                        </td>
                    </tr>
                    <tr class="text-center" >
                        <td style="margin: 0 auto; text-center" colspan="2">
                            <h6>
                                Tracking No: #
                            </h6>
                            @php
                                $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
                            @endphp
                            <img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode('{!!$ships->barcodeno!!}', $generatorPNG::TYPE_CODE_128)) }}" width="200">
                            <h6 style="text-align: center">
                                 {{$ships->barcodeno}}
                            </h6> 
                        </td>
                            
                        
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>