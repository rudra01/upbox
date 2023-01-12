@extends('layouts.dashboard')

@section('content')


<div class="container mt-5">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 py-2">Shipments </h1>
    <a class="btn btn-primary py-2" href="{{route('viewshipments')}}">Go Back</a>
    </div>

    <!-- Content Row -->
    <div class="row pb-5 mb-5 px-3">
        <!-- Begin Page Content -->
        <form method="POST" action="{{route('shipmentc.update' , $ships->id)}}" >
            @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 py-2">
                            <label for="origin" >Origin:</label>
                            <input type="text" name='origin' class="form-control "  id="origin" value="{{$ships->Origin}}">
                        </div>
                        <div class="col-md-6 py-2">
                            <label for="origin" >Desination:</label>
                            <input type="text" name='desination' class="form-control " id="desination" value="{{$ships->Destination}}" >
                        </div>
                    </div>
                </div>
                <div class="consigneebox bg-light p-2 my-3">
                    <h6>
                        Consignee
                    </h6>
                    @foreach($consignee as $consee)
                    
                    @if($consee->ShipmentID == $ships->id)
                    <div class="form-group">
                        <input type="number" name='conseeid' class="form-control "  id="conseeid" value="{{$consee->id}}" hidden>
                        <div class="row">
                            <div class="col-md-6 py-2">
                                <label for="Name" >Name:</label>
                            
                            <input type="text" name='cName' class="form-control "  id="cName" value="{{$consee->Name}}">
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="cphone" >Phone No:</label>
                            <input type="text" name='cphone' class="form-control "  id="cphone" value="{{$consee->Phoneno}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 py-2">
                                <label for="caddress" >Address:</label>
                                <textarea name="caddress" class="form-control " id="caddress" >{!!$consee->Address!!}</textarea>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 py-2">
                                <label for="ccity" >City:</label>
                            <input type="text" name='ccity' class="form-control "  id="ccity" value="{{$consee->City}}">
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="cCountry" >Country:</label>
                            <input type="text" name='cCountry' class="form-control "  id="cCountry" value="{{$consee->Country}}">
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="czipcode" >Zip/Postal Code:</label>
                            <input type="text" name='czipcode' class="form-control "  id="czipcode" value="{{$consee->zipcode}}">
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>



                <div class="consigneebox bg-light p-2 my-3">
                    <h6>
                        Consignor
                    </h6>
                    @foreach($consignor as $cons)
                    
                    @if($cons->ShipmentID == $ships->id)
                    <div class="form-group">
                        <div class="row">
                            <input type="number" name='consid' class="form-control "  id="consid" value="{{$cons->id}}" hidden>
                            <div class="col-md-6 py-2">
                                <label for="Name" >Name:</label>
                            <input type="text" name='DesName' class="form-control "  id="DesName" value="{{$cons->Name}}">
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="pone" >Phone No:</label>
                            <input type="text" name='Desphone' class="form-control "  id="Desphone" value="{{$cons->Phoneno}}">
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 py-2">
                                <label for="origin" >Address:</label>
                                <textarea name="desaddress" class="form-control " id="desaddress" >{!! $cons->Address !!}
                                </textarea>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 py-2">
                                <label for="Name" >City:</label>
                            <input type="text" name='descity' class="form-control "  id="descity" value="{{$cons->City}}">
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="Name" >Country:</label>
                            <input type="text" name='desCountry' class="form-control "  id="desCountry" value="{{$cons->Country}}">
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="Name" >Zip/Postal Code:</label>
                            <input type="text" name='deszipcode' class="form-control "  id="deszipcode" value="{{$cons->zipcode}}">
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 py-2">
                            <label for="noofpkgs" >No of Packages:</label>
                            <input type="number" name='Noofpkgs' class="form-control "  id="Noofpkgs" value="{{$ships->Noofpkgs}}" >
                        </div>
                        <div class="col-md-6 py-2">
                            <label for="noofpkgs" >Total weights:</label>
                            <input type="number" name='Totalweight' class="form-control "  id="Totalweight"  value="{{$ships->Totalweight}}">
                        </div>
                        
                        
                    </div>
                </div>
                <div class="heading text-center">
                    <h6>
                        DIMENSIONS OF BOX (CM) 
                    </h6>
                </div>
                <div class="row dimention ">
                    <div class="col-md-6 py-2">
                        <label for="Length" >Length (cm):</label>
                        <input type="number" name='Length' class="form-control "  id="Length"  value="{{$ships->Length}}" step=0.01>
                    </div>
                    <div class="col-md-6 py-2">
                        <label for="Weight" >Weight (cm):</label>
                        <input type="number" name='Weight' class="form-control "  id="Weight"  value="{{$ships->width}}" step=0.01>
                    </div>
                    <div class="col-md-6 py-2">
                        <label for="height" >height (cm):</label>
                        <input type="number" name='height' class="form-control "  id="height"  value="{{$ships->height}}" step=0.01>
                    </div>
                    <div class="col-md-6 py-2">
                        <label for="height" >volweight(kg):</label>
                        <input type="number" name='height' class="form-control "  id="height"  value="{{$ships->volweight}}" disabled>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 py-2">
                            <label for="origin" >Description:</label>
                            <textarea name="Description" class="form-control " id="editor" >{!! $ships->DescripOfContents !!}</textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        {{-- @foreach($tracks as $track)
                        @if($track->ShipmentID == $ships->id)
                        <div class="col-md-6 py-2">
                            <input type="number" name='tackid' class="form-control "  id="tackid" value="{{$track->id}}" hidden>
                            <label for="trackingstatus" >Tracking Status :</label>
                            <select name="trackingstatus" class="custom-select">
                                <option value="{{$track->Status}} " selected>{{$track->Status}} </option>
                                <option value="Shipment information received">Shipment information received</option>
                                <option value="Shipment received at Hub">Shipment received at Hub</option>
                                <option value="Shipment left from Hub">Shipment left from Hub</option>
                                <option value="Intransit">Intransit</option>
                                <option value="Out for Delivery">Out for Delivery</option>
                                <option value="Delivery">Delivery</option>
                                <option value="Hold">Hold</option>
                            </select>
                        </div>
                        @endif
                        @endforeach --}}
                        <div class="col-md-6 py-2">
                            <label for="origin" >Payment Mode :</label>
                            {{-- <input type="number" name='paymentmode' class="form-control "  id="paymentmode"> --}}
                            <select name="paymentmode" class="custom-select">
                               
                                @if( $ships->Payment_mode)
                                    <option value="1" selected>Online</option>
                                    <option value="0">Cash</option>
                                @else 
                                    <option value="0" selected>Cash</option>
                                    <option value="1">Online</option>
                                @endif
                               
                                {{-- <option value="0">Cash</option>
                                <option value="1">Online</option> --}}
                            </select>
                        </div>
                        @foreach($bills as $bill)
                            @if($bill->ShipmentID == $ships->id)
                                <div class="col-md-6 py-2">
                                    <input type="number" name='billid' class="form-control "  id="billid" value="{{$bill->id}}" hidden>
                                    <label for="origin" >Amount :</label>
                                    <input type="number" name='Amount' class="form-control "  id="Amount"  value="{{$bill->Amount}}">

                                    <label for="origin" >Final Amount :</label>
                                    <input type="number" name='totalAmount' class="form-control "  id="totalAmount"  value="{{$bill->TotalAmount}}" disabled>
                                </div>
                            @endif
                        @endforeach
                        <div class="col-md-6 py-2">
                            <label for="origin" >Packaging Check
                                One Box :</label>
                                <select name="docornot" class="custom-select">
                                    @if($ships->docornot )
                                        <option  value="1" selected>Documents</option>
                                        <option value="0">Non Documents</option> 
                                    @else
                                        <option value="0" selected>Non Documents</option>
                                        <option  value="1" >Documents</option>     
                                    @endif                               
                                </select>
                        </div>
                    </div>
                </div>    
                <div class="btnbox text-center">
            <button type="submit" class="btn btn-primary my-4">Update Now</button>
                
                </div>    
        </form>
          
    </div>

</div>

@endsection
